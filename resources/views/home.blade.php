@extends('layouts.main')

@section('title', 'Movies')

@section('main-content')
<div class="row">
            @foreach ($movies as $movie)
        <div class="col-md-4">
           @include('partials.film-card')
        </div>
        @endforeach
    </div>
@endsection