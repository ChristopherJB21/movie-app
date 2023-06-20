<?php

namespace App\Services\Impl;

use App\Models\Movie;
use App\Services\MovieService;

class MovieServiceImpl implements MovieService
{
    function getListMovieByTitle (string $title)
    {
        $movies = Movie::where('title','LIKE','%'.$title.'%')->orderBy('title', 'asc')->get();
        
        return $movies;
    }

    function getMovieByID (string $id) : Movie
    {
        $movies = Movie::where('id', $id)->first();

        return $movies;
    }

    function getMovieShowing ()
    {
        $movies = Movie::orderBy('created_at', 'desc')->take(9)->get();

        return $movies;
    }

    function getOneMovie()
    {
        $movies = Movie::orderBy('created_at', 'desc')->take(1)->get();

        return $movies;
    }

    function InsertMovie (string $MovieName, string $MovieSinopsis, string $PathMovie) : bool
    {
        $movies = new Movie;

        $movies->title = $MovieName;
        $movies->sinopsis = $MovieSinopsis;
        $movies->poster = $PathMovie;
        $movies->save();

        return true;
    }

    function UpdateMovie($id, string $MovieName, string $MovieSinopsis, string $PathMovie) : bool
    {
        $movies = Movie::where('id', $id);
 
        $movies->title = $MovieName;
        $movies->sinopsis = $MovieSinopsis;
        $movies->poster = $PathMovie;
        $movies->save();

        return true;
    }
}
