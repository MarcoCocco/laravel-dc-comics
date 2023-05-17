@extends('layouts/main')

@section('jumbo')
    <div class="jumbo">
    </div>
@endsection

@section('content')
    <div class="background">
        <div class='image-detail container'>
            <img src="{{ $comic->thumb }}" alt="">
            
        </div>
    </div>
    <div class="info-container">
        <div class="comic-info container">
            <h2>{{ $comic->title }} <a href="{{ route('comics.edit', $comic->id) }}"><i class="fa-solid fa-pencil"></i></a></h2>
            <div class="available">
                <p>U.S. Price: <strong>{{ $comic->price }}</strong></p>
                <p>Available</p>
            </div>
            <p>{{ $comic->description }}</p>
        </div>
        <div class="more-details container">
            <div class="left">
                <div class="artists">
                    <p>Art by:</p>
                    <p>//</p>
                </div>
                <div class="writers">
                    <p>Written by:</p>
                    <p>//</p>
                </div>
            </div>
            <div class="right">
                <div class="spec">
                    <div class="series">
                        <p>Series:</p>
                        <p>{{ $comic->series }}</p>
                    </div>
                    <div class="price">
                        <p>U.S. Price:</p>
                        <p>{{ $comic->price }}</p>
                    </div>
                    <div class="sale-date">
                        <p>On Sale Date:</p>
                        <p>{{ $comic->sale_date }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="home container">
            <p><a href="{{ route('home') }}">Torna alla Homepage</a></p>
        </div>
    </div>
@endsection