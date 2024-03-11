<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;


    public function __invoke()
    {
        $films = Movie::all();
        return view('movies', compact('films'));
    }
}
