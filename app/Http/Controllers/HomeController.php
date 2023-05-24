<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(Request $request)
    {
        if ($request->session()->has('user'))
        {
            return response()->view('member.dashboard');
        } 
        else
        {
            return response()->view('guest.dashboard');
        }
    }
}
