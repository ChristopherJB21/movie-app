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
    public function buyMovie() : Response
    {
        return response()->view('movie.buyMovie');
    }
    public function payment() : Response
    {
        return response()->view('movie.payment');
    }
    public function tickets() : Response
    {
        return response()->view('movie.tickets');
    }
}
