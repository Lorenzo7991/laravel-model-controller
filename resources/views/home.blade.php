@extends('layouts.main')

@section('title', 'Movies')

@section('main-content')
<div class="row">
            @foreach ($movies as $movie)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">{{ $movie->original_title }}</p>
                    <p class="card-text">{{ $movie->nationality }}</p>
                    <p class="card-text"><strong>Date:</strong> {{ $movie->date }}</p>
                    <p class="card-text"><strong>Vote:</strong> {{ $movie->vote }}</p>

                    

                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection