@php
    $comics = config('comics');

    $info_menu = config('menu_links.InfoMenu')
@endphp

@extends('layout.main')

@section('content')
    <section class="comic">
        <div class="dividingline mb-5">
            <img class="comic-img " src="{{ $comic['thumb'] }}" alt="">
        </div>
        <div class="container d-flex">

            <div class="contaner description-side">
                <h2 class="mb-3">{{ $comic['title'] }}</h2>

                <div class="price-bar d-flex mb-3">
                    <span class="d-flex">
                        US. Price: <h6>{{ $comic['price'] }}</h6>
                    </span>
                    <span class="avalaible">
                        AVAILABLE
                    </span>
                    <span>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Check Availability</option>
                            <option value="1">AVAILABLE</option>
                        </select>
                    </span>
                </div>
                <span class="my-3 description">
                    <p>{{ $comic['description'] }}</p>
                </span>
            </div>

            <div class="advertisment">
                <h4>ADVERTISMENT</h4>
                <img src="/img/advs.jpg" alt="">
            </div>

        </div>

    </section>

    <section class="description-comic">
        <div class="container d-flex py-5 pb-5">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">Talent</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Art by:</td>
                        <td class="blue">{{ implode(',', $comic['artists'] )}}</td>
                    </tr>
                    <tr>
                        <td >Written by:</td>
                        <td class="blue">{{ implode(',', $comic['writers'] ) }}</td>
                    </tr>
                </tbody>
            </table>
            <table class="table ms-3">
                <thead>
                    <tr>
                        <th scope="col">Specs</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Series</td>
                        <td class="blue text-uppercase">{{ $comic['series'] }}</td>
                    </tr>
                    <tr>
                        <td>U.S. Price: </td>
                        <td>{{ $comic['price'] }}</td>
                    </tr>
                    <tr>
                        <td>On Sale Date:</td>
                        <td>{{ $comic['sale_date'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="container">
            <div class="d-flex">
                @foreach ($info_menu as $info)
                <span class="d-flex link-menu">
                    <p>{{$info['menu']}}</p>
                    <a href="#"><img src="{{$info['src']}}" alt="{{$info['menu']}}"></a>
                </span>
                @endforeach
            </div>
        </div>
    </section>
@endsection
