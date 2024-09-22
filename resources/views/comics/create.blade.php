{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('titlePage')
    Lista comics
@endsection

@section('content')
    <div class="container my-5">

        <h1>Inserimento nuovi prodotti</h1>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>
            </div>
        @endif

        <form action="{{ route('dc_comics.store') }}" method="POST" class="row g-3 needs-validation" novalidate>

            @csrf

            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Copertina</label>
                <input type="text" class="form-control @error('img') is-invalid @enderror" id="validationCustom02"
                    name="img" placeholder="http://..." required value="{{ old('img') }}">
                @error('title')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="validationCustom01"
                    placeholder="Batman & Robin" required name="title" value="{{ old('title') }}">
                @error('title')
                    <p class="text-danger">{{ $message }} </p>
                @enderror

            </div>

            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="validationCustom02"
                    placeholder="Le avventure di Batman" required name="series" value="{{ old('series') }}">
                @error('series')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Tipo</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="validationCustom02"
                    placeholder="comics" required name="type" value="{{ old('type') }}">
                @error('type')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Data di uscita</label>
                <input type="date" class="form-control @error('date') is-invalid @enderror" id="validationCustom02"
                    required name="sale_date" value="{{ old('date') }}">
                @error('date')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Prezzo</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="validationCustom02"
                    placeholder="9.99" required name="price" value="{{ old('price') }}">
                @error('price')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="validationCustom02"
                    cols="30" rows="10" placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit..."
                    name="description" value="{{ old('description') }}">
                </textarea>
                @error('description')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>

        </form>
    </div>
@endsection
