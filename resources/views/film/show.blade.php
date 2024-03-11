@extends('layouts.main')

@section('title', $movie->title)

@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text"><strong>Original Title:</strong> {{ $movie->original_title }}</p>
                    <p class="card-text"><strong>Nationality:</strong> {{ $movie->nationality }}</p>
                    <p class="card-text"><strong>Date:</strong> {{ $movie->date }}</p>
                    <p class="card-text"><strong>Vote:</strong> {{ $movie->vote }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
