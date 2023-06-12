<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CinemasController extends Controller
{
    public function cinemas() : Response
    {
        return response()->view('cinemas.cinemasManagement');
    }
}
