<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Services\MovieService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MovieController extends Controller
{
    private MovieService $movieService;

    public function __construct(MovieService $movieService)
    {
        $this->movieService = $movieService;
    }

    public function movie() : Response
    {
        $movies = $this->movieService->getListMovieByTitle('');
        return response()->view('movie.movieManagement', [
            'movies' => $movies
        ]);
    }

    public function searchMovie(Request $request) : Response
    {
        $output = "";

        $title = $request->input('title');

        $movies = $this->movieService->getListMovieByTitle($title);

        if ($movies)
        {
            foreach ($movies as $key => $movie)
            {
                $output .= "<div class='my-3 container bg-white rounded-4' style='--bs-bg-opacity: .7;'>";
                $output .= "<div class='row'>";
                $output .= "<div class='my-3 col-lg-3 align-items-lg-center'>";
                $output .= "<img src='" . asset( $movie->poster) . "' class='mx-auto img-fluid d-block' alt='Responsive image'>";
                $output .= "</div>";
                $output .= "<div class='my-3 col-lg-6'>";
                $output .= "<h1>" . $movie->title . "</h1>";
                $output .= "<p style='text-align: justify; text-justify: inter-word'>";
                $output .= $movie->sinopsis;
                $output .= "</p>";
                $output .= "</div>";
                $output .= "<div class='my-3 col-lg'>";
                // $output .= "<h4>Tanggal Tayang: </h4>";
                // $output .= "<p>14, Maret 2023</p>";
                // $output .= "<h4>Harga: </h4>";
                // $output .= "<p>Rp. 170.000</p>";
                $output .= "<div class='row justify-content-md-center'>";
                $output .= "<button type='button' class='col-lg-10 btn btn-outline-dark'>Buy</button>";
                $output .= "</div>";
                $output .= "</div>";
            }
        }

        return Response($output);
    }

    public function addmovie() : Response
    {
        return response()->view('movie.addMovie');
    }

    public function insertmovie(MovieRequest $request) : Response
    {
        $validated = $request->validated();
        
        // $validated = $request->safe();

        $txtMovieName = $request->old('txtMovieName');
        $txtMovieSinopsis = $request->old('txtMovieSinopsis');
        $fileMoviePoster = $request->old('fileMoviePoster');

        $MovieName = $request->input('txtMovieName');
        $MovieSinopsis = $request->input('txtMovieSinopsis');
        $MoviePoster = $request->file('fileMoviePoster');
        
        $DirUpload = "images/moviePoster";

        $NameMoviePoster = time() . "_";
        $PathMovie = $DirUpload . "/" . $NameMoviePoster;

        $MoviePoster->move($DirUpload, $NameMoviePoster);

        if ($this->movieService->InsertMovie($MovieName, $MovieSinopsis, $PathMovie))
        {
            $movies = $this->movieService->getListMovieByTitle('');

            return response()->view('movie.movieManagement', [
                'movies' => $movies,
            ]);
        }

        return response()->view('user.login', [
            'error' => 'Insert failed',
        ]);
    }
    public function editMovie() : Response
    {
        return response()->view('movie.editMovie');
    }
    public function deleteMovie() : Response
    {
        return response()->view('movie.deleteMovie');
    }
}
