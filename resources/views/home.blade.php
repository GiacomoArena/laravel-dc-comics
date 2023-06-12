@php
    $comics = config('comics')
@endphp
@extends('layout.main')

@section('content')

<main>

    <div class="main-container">
        <span>
            <h4>current series</h4>
        </span>
        <div class="container">
        @foreach ($comics as $comic)

            <div class="props-container">
                <a href="{{route('comic', ['id' => $comic['id']])}}">
                    <img src="{{$comic["thumb"]}}" alt="">
                </a>
                <h6 class="comics_font">{{$comic["series"]}}</h6>
            </div>

        @endforeach
        </div>
        <span>
            <h5>load more</h5>
        </span>
    </div>

    @include('partials.info')

</main>
@endsection
