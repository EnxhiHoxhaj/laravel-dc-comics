{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')
    <div>HOME</div>
@endsection

@section('content')
<div class="container my-5">
    <h1>Titolo</h1>
    <img src="{{ Vite::asset('resources/img/colibri.jpg') }}" alt="" class="img-fluid">
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque impedit dolor recusandae nobis nulla vero, culpa odit blanditiis autem numquam laudantium consectetur dolorum illo quam nisi cumque eius. Iusto, nulla.
    </p>
</div>

@endsection


@section('titlePage')
    Home
@endsection
