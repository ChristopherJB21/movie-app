<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class MovieController extends Controller
{
    public function movie() : Response
    {
        return response()->view('movie.movieManagement');
    }
}
