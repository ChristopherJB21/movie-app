<?php

namespace App\Services;
use App\Models\User;

interface UserService
{
    function login (string $email, string $password) : bool;
    function register (string $email, string $password, string $firstName, string $lastName, string $phoneNumber) : bool;
    public function updateProfile ($id, string $email, string $firstName, string $lastName, string $phoneNumber) : bool;
    function getIDUserByEmail (string $email) : string;
    function getUserRole () : string;
    function getUserProfile() : User;
}
