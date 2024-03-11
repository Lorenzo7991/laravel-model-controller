<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $movies = Movie::all();
        return view('movies', compact('movies'));
    }
}