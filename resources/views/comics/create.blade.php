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
            <form action="{{ route('comics.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" required maxlength="100" minlength="3" placeholder="Inserisci il titolo">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <input type="text" class="form-control" id="description" name="description" required min="5" placeholder="Inserisci la descrizione">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">URL Immagine</label>
                    <input type="url" class="form-control" id="thumb" name="thumb" placeholder="Inserisci il titolo">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" class="form-control" id="price" name="price" required min="1" placeholder="Inserisci il prezzo">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" maxlength="50" minlength="3" required placeholder="Inserisci la serie">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di rilascio</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" required placeholder="Inserisci la data di rilascio">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo di fumetto</label>
                    <input type="text" class="form-control" id="type" name="type" maxlength="100" minlength="3" placeholder="Inserisci il tipo di fumetto">
                </div>
                <button type="submit" class="btn btn-success">Invia</button>
            </form>
        </div>
    </div>
@endsection