{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('titlePage')
    Lista comics
@endsection

@section('content')
    <div class="container my-5">
        <h1>Inserimento nuovi prodotti</h1>
        <form action="{{ route('dc_comics.store') }}" method="POST" class="row g-3 needs-validation" novalidate>
            @csrf
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Copertina</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="http://..." required>
            </div>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="Batman & Robin" required>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Serie</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Le avventure di Batman"
                    required>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="comics" required>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Data di uscita</label>
                <input type="date" class="form-control" id="validationCustom02" required>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="validationCustom02" value="9.99" required>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>
@endsection
