<?php

namespace App\Services;

interface BuyTicketService
{
    function getTicketByIDMovieAndIDCinema (string $IDMovie, string $IDCinema);

    function getTicketByIDTicket (string $IDTicket);

    function buyTicket (string $quantity, string $IDUser, string $IDTicket);

    function myTicket ();
}
