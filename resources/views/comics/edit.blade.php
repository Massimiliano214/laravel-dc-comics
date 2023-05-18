@extends('layouts.app')

@section('title', 'Aggiunta Comics')

@section('content')

    <div class="container py-5">

        <form method="POST" action="{{route('comics.update', ['comic' => $comic->id])}}">
            @csrf

            @method('PUT')
    
            <div class="mb-3">
                <label for="title" class="form-label">Titolo:</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title', $comic->title)}}">

                @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('title') is-invalid @enderror" id="description" name="description">{{old('description', $comic->description)}}</textarea></textarea>

                @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumbnail dell'immagine:</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="thumb" name="thumb" value="{{old('thumb', $comic->thumb)}}">

                @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo:</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="price" name="price" value="{{old('price', $comic->price)}}">

                @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie:</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="series" name="series" value="{{old('series', $comic->series)}}">

                @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="sale_date" class="form-label">Periodo Sconto:</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="sale_date" name="sale_date" value="{{old('sale_date', $comic->sale_date)}}">

                @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipologia Comic:</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="type" name="type" value="{{old('type', $comic->type)}}">

                @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
    
            <button type="submit" class="btn btn-primary">Aggiorna</button>
        </form>
    </div>
@endsection