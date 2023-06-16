<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CinemasController extends Controller
{
    public function cinema() : Response
    {
        return response()->view('cinemas.cinemasManager');
    }
}
