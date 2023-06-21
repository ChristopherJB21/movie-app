<?php

namespace App\Services;

interface CinemaService
{
    function getListCinemaByName (string $name);
    function getCinemaByID(string $id);
}
