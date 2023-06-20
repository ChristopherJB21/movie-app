<?php

namespace App\Services\Impl;

use App\Models\BuyTicket;
use App\Models\Cinemas;
use App\Services\BuyTicketService;

class BuyTicketServiceImpl implements BuyTicketService
{
    function getTicketByIDMovieAndIDCinema (string $IDMovie, string $IDCinema)
    {
        $ticket = BuyTicket::where('movie_id', $IDMovie)->where('cinema_id', $IDCinema)->get();

        return $ticket;
    }
}
