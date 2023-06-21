<?php

namespace App\Services\Impl;

use App\Models\BuyTicket;
use App\Models\MyTicket;
use App\Models\User;
use App\Services\BuyTicketService;
use Illuminate\Support\Facades\Crypt;

class BuyTicketServiceImpl implements BuyTicketService
{
    function getTicketByIDMovieAndIDCinema (string $IDMovie, string $IDCinema)
    {
        $ticket = BuyTicket::where('movie_id', $IDMovie)->where('cinema_id', $IDCinema)->orderBy('date')->orderBy('time')->get();

        return $ticket;
    }

    function getTicketByIDTicket (string $IDTicket)
    {
        $ticket = BuyTicket::where('id', $IDTicket)->first();

        return $ticket;
    }

    function buyTicket (string $quantity, string $IDUser, string $IDTicket)
    {
        $newTicket = new MyTicket;
        $newTicket->user_id = $IDUser;
        $newTicket->ticket_id = $IDTicket;
        $newTicket->quantity = $quantity;
        $newTicket->Status = "Paid";
        $newTicket->save();

        return true;
    }

    function myTicket ()
    {
        $userId = session()->get('user','');

        $userId = Crypt::decryptString($userId);
        $user = User::where('id', $userId)->first();

        $ticket = MyTicket::where('user_id', $user->id)->orderBy('created_at')->get();

        return $ticket;
    }
}
