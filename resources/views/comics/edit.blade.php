{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('titlePage')
    Modifica Prodotto
@endsection

@section('content')
    <div class="container my-5">
        <h1 class="edit_title">Modifica prodotto: "{{ $edit_comic->title }}"</h1>
        <form action="{{ route('dc_comics.update', $edit_comic) }}" method="POST" class="row g-3 needs-validation" novalidate>
            @csrf
            @method('PUT')
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Copertina</label>
                <input type="text" class="form-control" id="validationCustom02" name="img" placeholder="http://..."
                    required value="{{ $edit_comic->img }}">
            </div>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="Batman & Robin" required
                    name="title" value="{{ $edit_comic->title }}">
            </div>

            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Serie</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Le avventure di Batman"
                    required name="series" value="{{ $edit_comic->series }}">
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="comics" required
                    name="type" value="{{ $edit_comic->type }}">
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Data di uscita</label>
                <input type="date" class="form-control" id="validationCustom02" required name="sale_date"
                    value="{{ $edit_comic->sale_date }}">
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="9.99" required
                    name="price" value="{{ $edit_comic->price }}">
            </div>
            <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="validationCustom02" cols="30" rows="10"
                    placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit..." name="description">
                    {{ $edit_comic->description }}
                </textarea>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>
@endsection
