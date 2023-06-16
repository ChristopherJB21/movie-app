<?php

namespace App\Services\Impl;

use App\Models\Movie;
use App\Services\MovieService;

class MovieServiceImpl implements MovieService
{
    function getListMovieByTitle (string $title)
    {
        $movies = Movie::where('title','LIKE','%'.$title.'%')->get();

        return $movies;
    }

    function InsertMovie (string $MovieName, string $MovieSinopsis, string $PathMovie)
    {
        $movies = new Movie;

        $movies->title = $MovieName;
        $movies->sinopsis = $MovieSinopsis;
        $movies->poster = $PathMovie;
        $movies->save();

        return true;
    }
}
