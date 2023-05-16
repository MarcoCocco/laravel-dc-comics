@extends('layouts/main')

@section('jumbo')
    <div class="jumbo">
    </div>
@endsection

@section('detailsContent')
    <div class="background">
        <div class='image-detail container'>
            <img src="{{ $comics[$index]['thumb'] }}" alt="">
        </div>
    </div>
    <div class="info-container">
        <div class="comic-info container">
            <h2>{{ $comics[$index]['title'] }}</h2>
            <div class="available">
                <p>U.S. Price: <strong>{{ $comics[$index]['price'] }}</strong></p>
                <p>Available</p>
            </div>
            <p>{{ $comics[$index]['description'] }}</p>
        </div>
        <div class="more-details container">
            <div class="left">
                <div class="artists">
                    <p>Art by:</p>
                    <p>{{ implode(', ', $comics[$index]['artists']) }}</p>
                </div>
                <div class="writers">
                    <p>Written by:</p>
                    <p>{{ implode(', ', $comics[$index]['writers']) }}</p>
                </div>
            </div>
            <div class="right">
                <div class="spec">
                    <div class="series">
                        <p>Series:</p>
                        <p>{{ $comics[$index]['series'] }}</p>
                    </div>
                    <div class="price">
                        <p>U.S. Price:</p>
                        <p>{{ $comics[$index]['price'] }}</p>
                    </div>
                    <div class="sale-date">
                        <p>On Sale Date:</p>
                        <p>{{ $comics[$index]['sale_date'] }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="home container">
            <p><a href="{{ route('home') }}">Torna alla Homepage</a></p>
        </div>
    </div>
@endsection
