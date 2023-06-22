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

    public function tickets() : Response|RedirectResponse
    {
        $role = $this->userService->getUserRole();

        if ($role == 'Guest') {
            return redirect('/login');
        }

        $cinemas = $this->cinemaService->getListCinemaByName('');
        $movies = $this->movieService->getListMovieByTitle('');
        
        foreach ($cinemas as $idxI => $cinema)
        {
            $cinemas[$idxI]->movies = $this->movieService->getListMovieByTitle('');

            foreach($movies as $idxJ => $movie)
            {
                $cinemas[$idxI]->movies[$idxJ]->tickets = $this->ticketService->getTicketByIDMovieAndIDCinema($movie->id, $cinema->id);
            }
        }

        return response()->view('buyticket.ticketManagement', [
            'cinemas' => $cinemas
        ]);
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

    public function ticketsCinema($idCinema): Response|RedirectResponse
    {
        $role = $this->userService->getUserRole();

        if ($role == 'Guest') {
            return redirect('/login');
        }

        $cinemas = $this->cinemaService->getCinemaByID($idCinema);
        $movies = $this->movieService->getListMovieByTitle('');
        
        foreach ($cinemas as $idxI => $cinema)
        {
            $cinemas[$idxI]->movies = $this->movieService->getListMovieByTitle('');

            foreach($movies as $idxJ => $movie)
            {
                $cinemas[$idxI]->movies[$idxJ]->tickets = $this->ticketService->getTicketByIDMovieAndIDCinema($movie->id, $cinema->id);
            }
        }

        return response()->view('buyticket.ticketManagement', [
            'cinemas' => $cinemas
        ]);
    }

    public function buyTicket($idTicket) : Response|RedirectResponse
    {
        $role = $this->userService->getUserRole();

        if ($role == 'Guest') {
            return redirect('/login');
        }

        $ticket = $this->ticketService->getTicketByIDTicket($idTicket);
        $cinema = $this->cinemaService->getCinemaByID($ticket->cinema_id);
        $movie = $this->movieService->getMovieByID($ticket->movie_id);

        $cinema = $cinema[0];
        $movie = $movie[0];

        return response()->view('buyticket.buyticket', [
            'ticket' => $ticket,
            'cinema' => $cinema,
            'movie' => $movie,
        ]);
    }

    public function buy(Request $request) : Response|RedirectResponse
    {
        $quantity = $request->input('txtQuantity');
        $IDUser = $request->input('IDUser');
        $IDTicket = $request->input('IDTicket');

        if ($this->ticketService->buyTicket($quantity, $IDUser, $IDTicket))
        {
            return redirect('/');
        }
    }

    public function myTicket()
    {
        $role = $this->userService->getUserRole();

        if ($role == 'Guest') {
            return redirect('/login');
        }

        $tickets = $this->ticketService->myTicket();

        foreach ($tickets as $idx => $ticket)
        {
            $tickets[$idx]->detail = $this->ticketService->getTicketByIDTicket($ticket->ticket_id);
            $tickets[$idx]->movie = $this->movieService->getMovieByID($tickets[$idx]->detail->movie_id);
            $tickets[$idx]->cinema = $this->cinemaService->getCinemaByID($tickets[$idx]->detail->cinema_id);

            $tickets[$idx]->movie = $tickets[$idx]->movie[0];
            $tickets[$idx]->cinema = $tickets[$idx]->cinema[0];
        }

        return response()->view('buyticket.mytickets', [
            'tickets' => $tickets,
        ]);
    }
}
