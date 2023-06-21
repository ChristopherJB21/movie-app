<?php

namespace App\Services\Impl;
use App\Models\UserRole;
use App\Services\UserService;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserServiceImpl implements UserService
{
	public function login (string $email, string $password) : bool
    {
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
    
	public function register (string $email, string $password, string $firstName, string $lastName, string $phoneNumber) : bool
    {
        $newUser = new User;
        $newUser->email = $email;
        $newUser->first_name = $firstName;
        $newUser->last_name = $lastName;
        $newUser->password = Hash::make($password);
        $newUser->phone_number = $phoneNumber;
        $newUser->remember_token = Str::random(10);
        $newUser->save();

        return true;
	}

    public function updateProfile ($id, string $email, string $firstName, string $lastName, string $phoneNumber) : bool
    {
        $newUser = User::where('id', $id)->first();

        $newUser->email = $email;
        $newUser->first_name = $firstName;
        $newUser->last_name = $lastName;
        $newUser->phone_number = $phoneNumber;
        
        $newUser->save();

        return true;
	}

    public function getIDUserByEmail (string $email) : string
    {
        $user = User::where('email', $email)->first();

        $encryptedIDUser = Crypt::encryptString($user->id);

        return $encryptedIDUser;
    }

    public function getUserRole() : string
    {
        $userId = session()->get('user','');

        if ($userId != ''){
            $userId = Crypt::decryptString($userId);
            $user = User::where('id', $userId)->first();
            $roleId = $user->role_id;
            $role = UserRole::where('id', $roleId)->first();

            return $role->role;
        }

        return 'Guest';
    }

    public function getUserProfile() : User
    {
        $user = new User;
        $userId = session()->get('user','');

        if ($userId != ''){
            $userId = Crypt::decryptString($userId);
            $user = User::where('id', $userId)->first();
        }

        return $user;
    }
}
