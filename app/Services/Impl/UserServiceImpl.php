<?php

namespace App\Services\Impl;
use App\Services\UserService;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserServiceImpl implements UserService
{

	public function login (string $email, string $password): bool {

        $user = User::where('email', $email)->first();

        if (isset($user) and Hash::check($password, $user->password)){
            if (Hash::needsRehash($user->password)){
                $user->password = Hash::make($password);
                $user->save();
            }
            return true;
        }

        return false;
	}
	public function register (string $email, string $password, string $firstName, string $lastName, string $phoneNumber) : bool {

        $newUser = new User;
        $newUser->email = $email;
        $newUser->name = $firstName + " " + $lastName;
        $newUser->password = Hash::make($password);
        $newUser->remember_token = Str::random(10);
        $newUser->save();
        // $newUser->email = $phoneNumber;

        return true;
	}
}
