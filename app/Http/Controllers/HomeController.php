<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function dashboard() : Response
    {
        return response()->view('home.dashboard');
    }

    public function contactUs() : Response
    {
        return response()->view('home.contactUs');
    }
    
    public function aboutUs() : Response
    {
        return response()->view('home.aboutUs');
    }
}
