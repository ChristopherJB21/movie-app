<?php

namespace App\Services\Impl;

use App\Models\Cinemas;
use App\Services\CinemaService;

class CinemaServiceImpl implements CinemaService
{
    function getListCinemaByName (string $name)
    {
        $cinemas = Cinemas::where('name','LIKE','%'.$name.'%')->get();
        
        return $cinemas;
    }
}
