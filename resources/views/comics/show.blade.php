{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
    <div class="container my-5 d-flex justify-content-center">
        <div class="card" style="width: 30rem;">
            <img src="{{ $comics->img }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title">{{ $comics->title }}</h4>
                <h5 class="card-text">{{ $comics->type }}</h5>
                <p class="card-text">{{ $comics->description }}</p>
                <p class="card-text">{{ $comics->series }}</p>
                <p class="card-text">{{ $comics->sale_data }}</p>
                <p class="card-text">{{ $comics->price }} €</p>
                <a href="{{ route('dc_comics.index', $comics) }}" class="btn btn-primary">Indietro</a>
            </div>
        </div>
    </div>
@endsection

@section('titlePage')
    {{ $comics->title }}
@endsection
