@extends('layouts.main')


@section('content')
    <main>
        <form action="{{ route('comics.store') }}" method="POST" class="row g-3 p-5 text-center text-white">
            @csrf

            <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror"
                    value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback text-red">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback text-red">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="thumb" class="form-label">Image Link</label>
                <input type="text" id="thumb" name="thumb"
                    class="form-control @error('thumb') is-invalid @enderror" value="{{ old('thumb') }}">
                @error('thumb')
                    <div class="invalid-feedback text-red">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="price" class="form-label">U.S Price</label>
                <input type="text" id="price" name="price"
                    class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
                @error('price')
                    <div class="invalid-feedback text-red">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="series" class="form-label">Series</label>
                <input type="text" id="series" name="series"
                    class="form-control @error('series') is-invalid @enderror" value="{{ old('series') }}">
                @error('series')
                    <div class="invalid-feedback text-red">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="sale_date" class="form-label">On Sale Date</label>
                <input type="date" id="sale_date" name="sale_date"
                    class="form-control @error('sale_date') is-invalid @enderror" value="{{ old('sale_date') }}">
                @error('sale_date')
                    <div class="invalid-feedback text-red">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="type" class="form-label">Type</label>
                <input type="text" id="type" name="type" class="form-control @error('type') is-invalid @enderror"
                    value="{{ old('type') }}">
                @error('type')
                    <div class="invalid-feedback text-red">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Aggiungi</button>
            </div>

        </form>
    </main>
@endsection
