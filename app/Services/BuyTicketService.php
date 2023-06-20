<?php

namespace App\Services;

interface BuyTicketService
{
    function getTicketByIDMovieAndIDCinema (string $IDMovie, string $IDCinema);
}
