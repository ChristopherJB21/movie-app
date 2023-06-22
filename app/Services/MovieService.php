<?php

namespace App\Services;

use App\Models\Movie;

interface MovieService
{
    function getListMovieByTitle (string $title);
    function getMovieByID (string $id);
    function getMovieShowing ();
    function getOneMovie ();
    function InsertMovie (string $MovieName, string $MovieSinopsis, string $PathMovie) : bool;
    function UpdateMovie($id, string $MovieName, string $MovieSinopsis, string $PathMovie) : bool;
    function DeleteMovie($id) : bool;
}
