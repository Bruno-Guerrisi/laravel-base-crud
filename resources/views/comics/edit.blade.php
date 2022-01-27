@extends('layouts.main')

@section('main-content')

<section class="mb-4 text-center container">
    <h1>Edit your comic</h1>
    
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" id="title" name="title" class="form-control" 
                    value="{{ $comic->title }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea id="description" name="description" class="form-control">{{ $comic->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Copertina</label>
            <input type="text" id="thumb" name="thumb" class="form-control" 
                    value="{{ $comic->thumb }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" id="price" name="price" class="form-control" 
                    value="{{ $comic->price }}">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" id="series" name="series" class="form-control" 
                    value="{{ $comic->series }}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita</label>
            <input type="text" id="sale_date" name="sale_date" class="form-control" value="{{ $comic->sale_date }}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo di fumetto</label>
            <input type="text" id="type" name="type" class="form-control" 
                    value="{{ $comic->type }}">
        </div>

        <button type="submit" class="btn btn-primary">Invia dati</button>

    </form>
</section>

@endsection