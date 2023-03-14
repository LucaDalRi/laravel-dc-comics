@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">
                    {{ $comic->title }}
                </h1>
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