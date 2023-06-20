<?php

namespace App\Http\Controllers;

use App\Services\BuyTicketService;
use App\Services\CinemaService;
use App\Services\MovieService;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BuyTicketController extends Controller
{
    private MovieService $movieService;
    private CinemaService $cinemaService;
    private UserService $userService;
    private BuyTicketService $ticketService;

    public function __construct(MovieService $movieService, CinemaService $cinemaService, UserService $userService, BuyTicketService $ticketService)
    {
        $this->movieService = $movieService;
        $this->cinemaService = $cinemaService;
        $this->userService = $userService;
        $this->ticketService = $ticketService;
    }

    public function ticketsMovie($idMovie): Response|RedirectResponse
    {
        $role = $this->userService->getUserRole();

        if ($role == 'Guest') {
            return redirect('/login');
        }

        $cinemas = $this->cinemaService->getListCinemaByName('');
        $movies = $this->movieService->getMovieByID($idMovie);
        
        foreach ($cinemas as $idxI => $cinema)
        {
            $cinemas[$idxI]->movies = $this->movieService->getMovieByID($idMovie);

            foreach($movies as $idxJ => $movie)
            {
                $cinemas[$idxI]->movies[$idxJ]->tickets = $this->ticketService->getTicketByIDMovieAndIDCinema($movie->id, $cinema->id);
            }
        }

        return response()->view('buyticket.ticketManagement', [
            'cinemas' => $cinemas
        ]);
    }
}
