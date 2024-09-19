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
                    <th scope="col">Titolo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Data di uscita</th>
                    <th scope="col">Show more</th>
                    <th scope="col">Modifica</th>
                    <th scope="col">Elimina</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td class="icon">
                            <a href="{{ route('dc_comics.show', $comic) }}"><i class="fa-solid fa-eye"></i></a>
                        </td>
                        <td class="icon">
                            <a href="{{ route('dc_comics.edit', $comic) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>

                        <td class="icon">
                            <form action="{{ route('dc_comics.destroy', $comic) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
