<?php

namespace App\Services;

use App\Models\Movie;

interface MovieService
{
    function getListMovieByTitle (string $title);
    function InsertMovie (string $MovieName, string $MovieSinopsis, string $PathMovie);
}
