@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col">
                <h2>
                    Modifica il fumetto
                </h2>
                <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna indietro</a>
            </div>
            <form action="{{ route('comics.update', ['comic' => $comic->id ]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" required placeholder="Inserisci il titolo" value="{{ $comic->title }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <input type="text" class="form-control" id="description" name="description" required placeholder="Inserisci la descrizione" value="{{ $comic->description }}">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">URL Immagine</label>
                    <input type="url" class="form-control" id="thumb" name="thumb" placeholder="Inserisci il titolo" value="{{ $comic->thumb }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" required placeholder="Inserisci il prezzo" value="{{ $comic->price }}">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" required placeholder="Inserisci la serie" value="{{ $comic->series }}">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di rilascio</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" required placeholder="Inserisci la data di rilascio" value="{{ $comic->sale_date }}">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo di fumetto</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo di fumetto" value="{{ $comic->type }}">
                </div>
                <button type="submit" class="btn btn-warning">Aggiorna</button>
            </form>
        </div>
    </div>
@endsection