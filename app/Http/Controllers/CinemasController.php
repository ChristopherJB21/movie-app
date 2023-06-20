<?php

namespace App\Http\Controllers;

use App\Services\CinemaService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CinemasController extends Controller
{
    private CinemaService $cinemaService;
    private UserService $userService;

    public function __construct(CinemaService $cinemaService, UserService $userService)
    {
        $this->cinemaService = $cinemaService;
        $this->userService = $userService;
    }

    public function cinemas() : Response
    {
        $cinemas = $this->cinemaService->getListCinemaByName('');

        return response()->view('cinemas.cinemasManagement', [
            'cinemas' => $cinemas,
        ]);
    }

    public function searchCinema(Request $request) : Response
    {
        $output = "";
        $role = $this->userService->getUserRole();

        $name = $request->input('name');

        if (!isset($name))
        {
            $name = '';
        }

        $cinemas = $this->cinemaService->getListCinemaByName($name);

        if ($cinemas)
        {
            foreach ($cinemas as $key => $cinema)
            {
                $output .= "<div class='card mx-3 my-3'>";
                $output .= "<div class='card-header'>";
                $output .= "<h5 class='mb-0'>";
                $output .= "<button class='btn collapsed' data-bs-toggle='collapse' data-bs-target=";
                $output .= '#collapse' . $cinema->id . ">";
                $output .= strtoupper($cinema->name);
                $output .= "</button></h5></div>";
                $output .= "<div id=collapse" . $cinema->id . " class='collapse'>";
                $output .= "<div class='card-body'>";
                $output .= "<h4>" . strtoupper($cinema->name) . "</h4>";
                $output .= "<h6>" . $cinema->address . "</h6>";
                $output .= "<h6>" . $cinema->telp . "</h6>";
                $output .= "<hr>";
                $output .= "<div class='row text-center'>";
                $output .= "<a href=''><button type='button' class='col-lg-10 btn btn-outline-dark'>Buy ticket in here</button></a>";
                $output .= "</div></div></div></div>";
            }
        }

        return Response($output);
    }
}
