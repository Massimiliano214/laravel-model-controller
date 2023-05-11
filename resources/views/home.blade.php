@extends('layouts.app')

@section('title', 'Film List')

@section('content')
    <h1>Elenco Films</h1>
    <ul>
        @foreach ($movies as $movie)
            
            <li>{{$movie->title}}</li>

        @endforeach
    </ul>
@endsection