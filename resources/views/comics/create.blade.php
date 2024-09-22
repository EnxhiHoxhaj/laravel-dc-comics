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
                <input type="text" class="form-control" id="validationCustom02" name="img" placeholder="http://..."
                    required value="{{ old('img') }}">
            </div>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="Batman & Robin" required
                    name="title" value="{{ old('title') }}">
            </div>

            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Serie</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Le avventure di Batman"
                    required name="series" value="{{ old('series') }}">
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="comics" required
                    name="type" value="{{ old('type') }}">
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Data di uscita</label>
                <input type="date" class="form-control" id="validationCustom02" required name="sale_date"
                    value="{{ old('date') }}">
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="9.99" required
                    name="price" value="{{ old('price') }}">
            </div>
            <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="validationCustom02" cols="30" rows="10"
                    placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit..." name="description"
                    value="{{ old('description') }}">
                </textarea>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>
@endsection
