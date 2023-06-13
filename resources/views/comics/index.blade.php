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
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
@endsection
