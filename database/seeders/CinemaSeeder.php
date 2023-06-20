<?php

namespace Database\Seeders;

use App\Models\Cinemas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cinemas::create([
            'name' => 'MALL TAMAN ANGGREK Lantai 3',
            'address' => 'Jl. Letjen S. Parman, Kav. 21, Jakarta Barat',
            'telp' => '(021) 563 9403'
        ]);
        
        Cinemas::create([
            'name' => 'Blok M Square Lt. 5',
            'address' => 'Jln. Melawai Jakarta Selatan',
            'telp' => '021) 7280 2021'
        ]);
        
        Cinemas::create([
            'name' => 'PLAZA SENAYAN P 5 ',
            'address' => 'Jl. Asia Afrika, Jakarta Pusat',
            'telp' => '(021) 572 5535'
        ]);
        
        Cinemas::create([
            'name' => 'Kota Kasablanka Mall Lantai 2',
            'address' => 'Jl. Casablanka Kav 88 Jakarta, Jakarta Selatan',
            'telp' => '(021) 2946 5221'
        ]);
        
        Cinemas::create([
            'name' => 'PONDOK INDAH MALL 2 Lantai 3',
            'address' => 'Jl. Metro Pondok Indah, Jakarta Selatan',
            'telp' => '(021) 75920781'
        ]);
    }
}
