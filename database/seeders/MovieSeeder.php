<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ms_movies')->insert([
            'id' => fake()->uuid(),
            'title' => 'FAST X',
            'sinopsis' => 'Musuh dari masa lalu kini menghampiri Dom (Vin Diesel) dan keluarganya. Dante (Jason Momoa) putra gembong narkoba Hernan Reyes (Joaquim de Almeida) yang dihancurkan Dom dan kelompoknya di seri kelima kini datang dan berusaha balas dendam atas kematian sang ayah.',
            'poster' => 'https://asset.tix.id/wp-content/uploads/2023/05/6ba9a236-37e6-43d5-b967-faf01afe7855.jpeg',
        ]);

        DB::table('ms_movies')->insert([
            'id' => fake()->uuid(),
            'title' => 'TRANSFORMERS: RISE OF THE BEASTS',
            'sinopsis' => 'Berlatar tahun 1994, Noah Diaz (Anthony Ramos) dan Elena Wallace (Dominique Fishback) memulai petualangan menjelajahi dunia bersama para Autobots dan Transformers lainnya. Mereka bersama-sama berusaha menyelamatkan bumi dari ancaman besar Unicron.',
            'poster' => 'https://asset.tix.id/wp-content/uploads/2023/06/027a2d64-58c8-4861-8164-87cdd63518d2.jpeg',
        ]);

        DB::table('ms_movies')->insert([
            'id' => fake()->uuid(),
            'title' => 'GANJIL GENAP',
            'sinopsis' => 'Sembuh dari patah hati tak pernah mudah. Gala (Clara Bernadeth) yang sudah pacaran delapan tahun dengan Bara (Baskara Mahendra),
                            ingin segera dinikahi. Tetapi tiba-tiba Bara malah minta putus. Gala hancur, berjuang keras menyembuhkan hatinya.
                            Untunglah hadir Aiman (Oka Antara) menemani Gala, membantu Gala untuk sembuh. Gala bahkan mulai jatuh hati.
                            Tetapi Gala perlahan sadar, Aiman sama saja dengan Bara. Aiman bukan obat patah hatinya.
                            Akankah patah hati Gala sembuh? Atau justru semakin patah?',
            'poster' => 'https://asset.tix.id/wp-content/uploads/2023/06/2cbce22f-345f-46b0-a526-7066cee81941-600x885.jpeg',
        ]);
    }
}
