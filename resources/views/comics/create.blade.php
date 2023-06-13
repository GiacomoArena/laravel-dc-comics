@extends('layout.main')

@section('content')
    <div class="container col-7">
        <h1>Create a new Comic</h1>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>
        @endif

        <form action="{{route('comics.store')}}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description') }}">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old('thumb') }}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ old('series') }}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale_date</label>
                <input type="text" class="form-control  @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control  @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type') }}">
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <input type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" value="{{ old('artists') }}">
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" value="{{ old('writers') }}">
            </div>

            <button type="submit" class="btn btn-success my-5">Submit</button>
        </form>

    </div>
@endsection
