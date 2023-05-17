@extends('layouts.app')

@section('title', 'Lista Comics')

@section('content')

    <div class="container py-5">

        <a href="{{route('comics.create')}}" class="btn btn-secondary">Aggiungi Comic alla lista</a>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Tipo</th>
                <th scope="col">Azioni</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    
                    <tr>
                        <td scope="row">{{$comic->id}}</td>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->type}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('comics.show', ['comic' => $comic->id])}}">Dettagli</a>
                            <a class="btn btn-secondary" href="{{route('comics.edit', ['comic' => $comic->id])}}">Modifica</a>
                        </td>
                    </tr>
        
                @endforeach
            </tbody>
        </table>

    </div>
@endsection