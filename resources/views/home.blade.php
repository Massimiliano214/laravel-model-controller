@extends('layouts.app')

@section('title', 'Film List')

@section('content')
<div class="container my-3">
    <h1>Films List</h1>
    <div class="row">

        <div class="wrapper d-flex flex-wrap justify-content-between">

            @foreach ($movies as $movie)
                    
                <div class="card col-3 my-4" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title">Title: {{$movie->title}}</h4>
                        <h5 class="card-text">Original Title: {{$movie->original_title}}</h5>
                        <p class="card-text">Score: {{$movie->vote}}</p>
                        <p class="card-text">Nationality: {{$movie->nationality}}</p>
                        <p class="card-text">Release Date: {{$movie->date}}</p>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
</div>
@endsection