@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('comics.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" required placeholder="Inserisci il titolo">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <input type="text" class="form-control" id="description" name="description" required placeholder="Inserisci la descrizione">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">URL Immagine</label>
                    <input type="url" class="form-control" id="thumb" name="thumb" placeholder="Inserisci il titolo">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" required placeholder="Inserisci il prezzo">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" required placeholder="Inserisci la serie">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di rilascio</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" required placeholder="Inserisci la data di rilascio">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo di fumetto</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo di fumetto">
                </div>
                <button type="submit" class="btn btn-success">Invia</button>
            </form>
        </div>
    </div>
@endsection