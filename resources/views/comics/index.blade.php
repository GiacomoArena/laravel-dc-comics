@extends('layout.main')

@section('content')
    <div>
        <h1 class="my-3">Comics</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Title</th>
                    <th scope="col">series</th>
                    <th scope="col">price</th>
                    <th scope="col">description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->series }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
@endsection
