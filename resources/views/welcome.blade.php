@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col text-center">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo">
                        <a href="{{ route('comics.index') }}" class="btn btn-primary">Entra nel catalogo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
