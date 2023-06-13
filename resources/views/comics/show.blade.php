@extends('layout.main')

@section('content')
    <div>
        <h1 class="my-3 text-center">{{ $comic->title }} <a href="#" class="btn

        <div class="row row-cols-3 text-center">
            <div class="col p-2">
                <img class="img-fluid border border-1" src="{{ $comic->thumb }}" alt="">
            </div>

        <p>
            <span class="text-danger">
                Description:
            </span>
            {{ $comic->description }}
        </p>
        <p>
            <span class="text-danger">
                Price:
            </span> {{ $comic->price }} | <span class="text-danger">
                Series:
            </span> {{ $comic->series }} | <span class="text-danger">
                Type:
            </span> {{ $comic->type }} | {{ $comic->sale_date }}
        </p>
        <p>
            <span class="text-danger">Written by:</span>  {{ $comic->writers }}
            <br>
            <span class="text-danger">Artist:</span> {{ $comic->artists }}
        </p>
    </div>
@endsection
