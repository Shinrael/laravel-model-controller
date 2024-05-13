@extends('layout.main')

@section('content')

<div class="container text-center">
    <h1>Film in Ordine</h1>
</div>
<div class="container my-5 d-flex flex-wrap ">
    @foreach ($movies as $movie)
        <div class="card mx-2 my-2" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">{{ $movie->title }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Original Title: {{ $movie->original_title }}</h6>
            <p class="card-text">Nationality: {{ $movie->nationality }}</p>
            <p class="card-text">Date: {{ $movie->date }}</p>
            <p class="card-text">Average vote: {{ $movie->vote }}</p>
            <a href="#" class="card-link">Click for the info</a>
            </div>
        </div>
    @endforeach

</div>

@endsection
