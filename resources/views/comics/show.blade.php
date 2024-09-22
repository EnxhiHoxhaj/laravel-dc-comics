{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
    <div class="container my-5 d-flex justify-content-center">
        <div class="card" style="width: 30rem;">
            <img src="{{ $comics->img }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title">{{ $comics->title }}</h4>
                <h5 class="card-text">{{ $comics->series }}</h5>
                <p class="card-text">{{ $comics->description }}</p>
                <p class="card-text"><i class="fa-solid fa-arrow-right"></i> {{ $comics->type }}</p>
                <p class="card-text"><i class="fa-solid fa-arrow-right"></i> {{ $comics->sale_date }}</p>
                <h5 class="card-text">{{ $comics->price }} €</h5>
                <a href="{{ route('dc_comics.index', $comics) }}" class="btn btn-primary">Torna al catalogo</a>
                <a class="edit" href="{{ route('dc_comics.edit', $comics) }}"><i
                        class="fa-solid fa-pen-to-square"></i></a>

            </div>
        </div>
    </div>
@endsection

@section('titlePage')
    {{ $comics->title }}
@endsection
