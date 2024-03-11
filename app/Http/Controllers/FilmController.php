<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function __invoke($id)
    {
        $movie = Movie::findOrFail($id);
        return view('film.show', compact('movie'));
    }
}
