<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.ico')}}" type="img/ico">
    <title>{{ env('APP_NAME')}} | @yield('title')</title>
   
    {{-- Import Vite  --}}
    @vite('resources\js\app.js')

    <!-- CDNS -->
    @yield('cdns')
</head>
<body>
    <div class="container">

        <div class="row">
            @foreach ($movies as $movie)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">{{ $movie->original_title }}</p>
                    <p class="card-text">{{ $movie->nationality }}</p>
                    <p class="card-text"><strong>Date:</strong> {{ $movie->date }}</p>
                    <p class="card-text"><strong></strong>Vote:</strong> {{ $movie->vote }}</p>

                    

                </div>
            </div>
        </div>
        @endforeach
    </div>
    
</div>
</body>
</html>