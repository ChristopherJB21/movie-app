<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class MovieController extends Controller
{
    public function movie() : Response
    {
        return response()->view('movie.movieManagement');
    }
    public function addMovie() : Response
    {
        return response()->view('movie.addMovie');
    }
    public function editMovie() : Response
    {
        return response()->view('movie.editMovie');
    }
    public function deleteMovie() : Response
    {
        return response()->view('movie.deleteMovie');
    }
}
