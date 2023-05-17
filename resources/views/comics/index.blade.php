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
                        <td class="d-flex">
                            <a class="btn btn-primary me-3" href="{{route('comics.show', ['comic' => $comic->id])}}">Dettagli</a>
                            <a class="btn btn-secondary me-3" href="{{route('comics.edit', ['comic' => $comic->id])}}">Modifica</a>
                            <form action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <!--onclick="return confirm('Are you sure?')"-->
                                <button type="submit" class="btn btn-danger delete">Elimina</button>
                            </form>
                        </td>
                    </tr>
        
                @endforeach
            </tbody>
        </table>

    </div>
@endsection