@extends('layouts.app')

@section('title', 'Aggiunta Comics')

@section('content')

    <div class="container py-5">

        <form method="POST" action="{{route('comics.update', ['comic' => $comic->id])}}">
            @csrf

            @method('PUT')
    
            <div class="mb-3">
                <label for="title" class="form-label">Titolo:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description">{{$comic->description}}</textarea></textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumbnail dell'immagine:</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
            </div>
    
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo:</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie:</label>
                <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
            </div>
            
            <div class="mb-3">
                <label for="sale_date" class="form-label">Periodo Sconto:</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipologia Comic:</label>
                <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
            </div>
    
            <button type="submit" class="btn btn-primary">Aggiorna</button>
        </form>
    </div>
@endsection