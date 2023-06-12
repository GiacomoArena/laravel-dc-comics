@extends('layout.main')

@section('content')
    <div>
        <h1 class="my-3">{{ $comic->title }} <a href="#" class="btn

        <div class="row row-cols-3 text-center">
            <div class="col p-2">
                <img class="img-fluid border border-1" src="{{ $comic->thumb }}" alt="">
            </div>

        <p>
            {{ $comic->description }}
        </p>
    </div>
@endsection
