@extends('layouts.main')


@section('content')
    <main>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST" class="row g-3 p-5 text-center text-white">
            @csrf
            @method('PUT')

            <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ $comic->title }}">
            </div>

            <div class="col-md-6">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control">{{ $comic->description }}</textarea>
            </div>

            <div class="col-md-6">
                <label for="thumb" class="form-label">Image Link</label>
                <input type="text" id="thumb" name="thumb" class="form-control" value="{{ $comic->thumb }}">
            </div>

            <div class="col-md-6">
                <label for="price" class="form-label">U.S Price</label>
                <input type="text" id="price" name="price" class="form-control" value="{{ $comic->price }}">
            </div>

            <div class="col-md-6">
                <label for="series" class="form-label">Series</label>
                <input type="text" id="series" name="series" class="form-control" value="{{ $comic->series }}">
            </div>

            <div class="col-md-6">
                <label for="sale_date" class="form-label">On Sale Date</label>
                <input type="date" id="sale_date" name="sale_date" class="form-control" value="{{ $comic->sale_date }}">
            </div>

            <div class="col-md-6">
                <label for="type" class="form-label">Type</label>
                <input type="text" id="type" name="type" class="form-control" value="{{ $comic->type}}">
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Salva la modifica</button>
            </div>

        </form>
    </main>
@endsection