@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">
                    {{ $comic->title }}
                </h1>
                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Modifica</a>
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Elimina
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">ARE YOU SURE ABOUT THAT?</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Sei sicuro di voler eliminare il fumetto?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                          <button type="submit" class="btn btn-danger">Elimina</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="my-4">
                            <img src="https://picsum.photos/200/300" alt="">
                        </div>
                        <h3 class="card-title">
                            {{ $comic->description }}
                        </h3>
                        <h3>Prezzo: {{ $comic->price }} $</h3>
                        <h4>Serie: {{ $comic->series }}</h4>
                        <h4>Data di rilascio: {{ $comic->sale_date }}</h4>
                        <h4>Tipo di fumetto: {{ $comic->type }}</h4>
                        <a href="{{ route('comics.index') }}" class="btn btn-primary mt-4">Torna indietro</a>
                    </div> 
                </div>
            </div>   
        </div>
    </div>
@endsection