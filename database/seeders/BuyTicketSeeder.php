<?php

namespace Database\Seeders;

use App\Models\BuyTicket;
use App\Services\CinemaService;
use App\Services\MovieService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuyTicketSeeder extends Seeder
{
    private MovieService $movieService;
    private CinemaService $cinemaService;

    public function __construct(MovieService $movieService, CinemaService $cinemaService)
    {
        $this->movieService = $movieService;
        $this->cinemaService = $cinemaService;
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cinemas = $this->cinemaService->getListCinemaByName('');
        $movies = $this->movieService->getListMovieByTitle('');

        foreach ($cinemas as $cinema)
        {
            foreach ($movies as $movie)
            {
                BuyTicket::create([
                    'movie_id' => $movie->id,
                    'cinema_id' => $cinema->id,
                    'date' => fake()->dateTimeInInterval('+0 days', '+5 days'),
                    'time' => date('H:i:s', rand(60*60*60*9,60*60*60*21)),
                    'price' => fake()->numberBetween(30000, 80000),
                ]);
            }
        }
    }
}
