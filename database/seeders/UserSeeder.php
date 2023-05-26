<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ms_users')->insert([
            'id' => fake()->uuid(),
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone_number' => fake()->phoneNumber(),
            'role_id' => 1,
            'password' => Hash::make("password"), // password
            'remember_token' => Str::random(10),
        ]);

        User::factory(10)->create();
    }
}
