<?php

namespace App\Services\Impl;
use App\Services\UserService;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
}
