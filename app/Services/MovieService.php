<?php

namespace App\Services;

use App\Models\Movie;

interface MovieService
{
    function getListMovieByTitle (string $title);
}
