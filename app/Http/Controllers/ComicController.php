<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        /*
        $request->validate([
            'title' => 'required|max:30',
            'description' => 'nullable|max:50000',
            'thumb' => 'required|url|max:255',
            'price' => 'required|max:8',
            'series' => 'required|max:80',
            'sale_date' => 'nullable',
            'type' => 'required|max:50',
        ]);

        $form_data = $request->all();
        */

        $form_data = $request->validated();

        $newComic = new Comic();
        $newComic->title = $form_data['title'];
        $newComic->description = $form_data['description'];
        $newComic->thumb = $form_data['thumb'];
        $newComic->price = $form_data['price'];
        $newComic->series = $form_data['series'];
        $newComic->sale_date = $form_data['sale_date'];
        $newComic->type = $form_data['type'];

        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {   
       /* 
        $request->validate([
            'title' => 'required|max:60',
            'description' => 'nullable|max:50000',
            'thumb' => 'required|url|max:255',
            'price' => 'required|max:8',
            'series' => 'required|max:80',
            'sale_date' => 'nullable',
            'type' => 'required|max:50',
        ]);

 $comic = Comic::findOrFail($id);
         
         $form_data = $request->all();
        */

        
        $form_data = $request->validated();
        
       
        $comic->update($form_data);
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
