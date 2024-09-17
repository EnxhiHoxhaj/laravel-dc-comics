{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('titlePage')
    Lista comics
@endsection

@section('content')
    <div class="container my-5">
        <h1>Dc Comics</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Copertina</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Data di uscita</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Show more</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>
                            <img src="{{ $comic->img }}" alt="">
                        </td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->type }}</td>
                        <td class="des">{{ $comic->description }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td class="pri">{{ $comic->price }} €</td>
                        <td class="icon"><a href="{{ route('dc_comics.show', $comic) }}"><i
                                    class="fa-solid fa-eye"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
