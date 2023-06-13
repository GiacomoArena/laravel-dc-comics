@extends('layout.main')

@section('content')
    <div class="container">
        <h1 class="my-3">Comics</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Title</th>
                    <th scope="col">series</th>
                    <th scope="col">price</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>
                            <a href="{{ route('comics.show', $comic) }}" class="btn btn-success">Go</a>
                            <a href="{{ route('comics.edit', $comic) }}" class="btn btn-primary" title="Edit"><i
                                    class="fa-solid fa-pencil"></i></a>

                            <form class="d-inline" action="{{ route('comics.destroy', $comic) }}"
                                method="POST"
                                onsubmit="return confirm('Confermi l\'eliminazione del prodotto:  {{ $comic->title }} ?')">

                                @csrf

                                @method('DELETE')

                                <button type="submit" class="btn btn-danger"><i
                                class="fa-solid fa-eraser"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
@endsection
