<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Models\Movie;
use App\Services\MovieService;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MovieController extends Controller
{
    private MovieService $movieService;
    private UserService $userService;

    public function __construct(MovieService $movieService, UserService $userService)
    {
        $this->movieService = $movieService;
        $this->userService = $userService;
    }

    public function movie(): Response
    {
        $movies = $this->movieService->getListMovieByTitle('');
        return response()->view('movie.movieManagement', [
            'movies' => $movies,
        ]);
    }

    public function searchMovie(Request $request): Response
    {
        $output = '';
        $role = $this->userService->getUserRole();

        $title = $request->input('title');

        if (!isset($title)) {
            $title = '';
        }

        $movies = $this->movieService->getListMovieByTitle($title);

        if ($movies) {
            foreach ($movies as $key => $movie) {
                $output .= "<div class='my-3 container bg-white rounded-4' style='--bs-bg-opacity: .7;'>";
                $output .= "<div class='row'>";
                $output .= "<div class='my-3 col-lg-3 align-items-lg-center'>";
                $output .= "<img src='" . asset($movie->poster) . "' class='mx-auto img-fluid d-block' alt='Responsive image'>";
                $output .= '</div>';
                $output .= "<div class='my-3 col-lg-6'>";
                $output .= '<h1>' . $movie->title . '</h1>';
                $output .= "<p style='text-align: justify; text-justify: inter-word'>";
                $output .= $movie->sinopsis;
                $output .= '</p>';
                $output .= '</div>';
                $output .= "<div class='my-3 col-lg'>";
                $output .= "<div class='row justify-content-md-center'>";
                if ($role == 'Super Admin') {
                    $output .= '<a href=';
                    $output .= url('/movie/editMovie/' . $movie->id);
                    $output .= " type='button' class='mx-2 col-lg-4 btn btn-primary'>Edit</a>";
                    $output .= '<a href=';
                    $output .= url('/movie/deleteMovie' . $movie->id);
                    $output .= " type='button' class='mx-2 col-lg-4 btn btn-danger'>Delete</a>";
                } else {
                    $output .= "<button type='button' class='col-lg-10 btn btn-outline-dark'>Buy</button>";
                }
                $output .= '</div>';
                $output .= '</div>';
            }
        }

        return Response($output);
    }

    public function addmovie(): Response
    {
        $movie = new Movie();
        return response()->view('movie.addMovie', [
            'movie' => $movie,
        ]);
    }

    public function insertmovie(MovieRequest $request): Response
    {
        $validated = $request->validated();

        $validated = $request->safe();

        $txtMovieName = $request->old('txtMovieName');
        $txtMovieSinopsis = $request->old('txtMovieSinopsis');
        // $fileMoviePoster = $request->old('file');

        $MovieName = $request->input('txtMovieName');
        $MovieSinopsis = $request->input('txtMovieSinopsis');
        $MoviePoster = $request->file('filemovieposter');

        $DirUpload = 'images/moviePoster';

        $NameMoviePoster = time() . '_' . $MovieName;
        $PathMovie = $DirUpload . '/' . $NameMoviePoster;

        $MoviePoster->move($DirUpload, $NameMoviePoster);

        if ($this->movieService->InsertMovie($MovieName, $MovieSinopsis, $PathMovie)) {
            $movies = $this->movieService->getListMovieByTitle('');

            return response()->view('movie.movieManagement', [
                'movies' => $movies,
            ]);
        }

        return response()->view('movie.addMovie', [
            'error' => 'Insert failed',
        ]);
    }
    public function editMovie($id): Response
    {
        $movie = $this->movieService->getMovieByID($id);
        $movie = $movie[0];
        return response()->view('movie.addMovie', [
            'movie' => $movie,
            'isEdit' => 1,
        ]);
    }
    public function updateMovie($id, MovieRequest $request): Response
    {
        $validated = $request->validated();

        $validated = $request->safe();

        $txtMovieName = $request->old('txtMovieName');
        $txtMovieSinopsis = $request->old('txtMovieSinopsis');

        $MovieName = $request->input('txtMovieName');
        $MovieSinopsis = $request->input('txtMovieSinopsis');
        $MoviePoster = $request->file('filemovieposter');

        $oldMovie = $this->movieService->getMovieByID($id);
        $oldMovie = $oldMovie[0];

        if ($MoviePoster != null) {
            $DirUpload = 'images/moviePoster';

            $NameMoviePoster = time() . '_' . $MovieName;
            $PathMovie = $DirUpload . '/' . $NameMoviePoster;

            $MoviePoster->move($DirUpload, $NameMoviePoster);
        } else {
            $PathMovie = $oldMovie->poster;
        }

        $this->movieService->UpdateMovie($id, $MovieName, $MovieSinopsis, $PathMovie);

        $movies = $this->movieService->getListMovieByTitle('');
        return response()->view('movie.movieManagement', [
            'movies' => $movies,
        ]);
    }
    public function deleteMovie($id): RedirectResponse
    {
        $this->movieService->DeleteMovie($id);
        return redirect('/movie');
    }
    public function buyMovie(): Response
    {
        return response()->view('movie.buyMovie');
    }
    public function payment(): Response
    {
        return response()->view('movie.payment');
    }
    public function tickets(): Response
    {
        return response()->view('movie.tickets');
    }

    public function buyticket(): Response
    {
        return response()->view('Buyticket.buyticket');
    }
}
