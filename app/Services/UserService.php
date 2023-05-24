<?php

namespace App\Services;

interface UserService
{
    function login (string $email, string $password) : bool;
    function register (string $email, string $password, string $firstName, string $lastName, string $phoneNumber) : bool;
    function getIDUserByEmail (string $email) : string;
}
