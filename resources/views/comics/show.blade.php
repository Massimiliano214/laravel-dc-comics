@extends('layouts.app')

@section('title', 'Descrizione Comic')

@section('content')

    <div class="container py-5">

        <img src="{{$comic->src}}" class="img-fluid" alt="{{$comic->title}}">

        <h2>Titolo: {{$comic->title}}</h2>
        <p>Descrizione: {{$comic->description}}</p>
        <p>Prezzo: {{$comic->price}}</p>
        <p>Serie : {{$comic->series}}</p>
        <p>Data di Sconto: {{$comic->sale_date}}</p>
        <p>Tipologia: {{$comic->type}}</p>
    </div>
@endsection