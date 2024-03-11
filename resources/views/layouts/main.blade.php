<!DOCTYPE html>
<html lang="en" >
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
    @include('includes.header')
    <div class="container">

    @yield('main-content')
     
    
</div>
</body>
</html>