@extends('layouts.main')

@section('main-content')

<section class="mb-4 text-center container">
    <h1>Create a new comics</h1>
    
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" id="title" name="title" placeholder="Inserire titolo" class="form-control">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" id="description" name="description" placeholder="Inserire descrizione" class="form-control">
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Copertina</label>
            <input type="text" id="thumb" name="thumb" placeholder="Inserire copertina" class="form-control">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" id="price" name="price" placeholder="Inserire prezzo" class="form-control">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" id="series" name="series" placeholder="Inserire Serie fumetto" class="form-control">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita</label>
            <input type="text" id="sale_date" name="sale_date" placeholder="Inserire la data di uscita" class="form-control">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo di fumetto</label>
            <input type="text" id="type" name="type" placeholder="Inserire la tipologia di fumetto" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Invia dati</button>

    </form>
</section>

@endsection