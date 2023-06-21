<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\MovieService;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    private UserService $userService;
    private MovieService $movieService;

    public function __construct(UserService $userService, MovieService $movieService)
    {
        $this->userService = $userService;
        $this->movieService = $movieService;
    }

    public function login() : Response
    {
        $movies = $this->movieService->getOneMovie();

        return response()->view('user.login', [
            'movies' => $movies,
        ]);
    }

    public function doLogin(LoginRequest $request) : Response|RedirectResponse
    {
        $validated = $request->validated();

        $txtEmailAddress = $request->old('txtEmailAddress');

        $email = $request->input('txtEmailAddress');
        $password = $request->input('txtPassword');

        if ($this->userService->login($email, $password)) {
            $idUser = $this->userService->getIDUserByEmail($email);
            $request->session()->put('user', $idUser);
            return redirect('/');
        }

        return redirect('/login');
    }

    public function register() : Response
    {
        return response()->view('user.register');
    }

    public function doRegister(RegisterRequest $request) : Response|RedirectResponse
    {
        $validated = $request->validated();
        
        $validated = $request->safe()->except(['txtPassword', 'txtConfirmPassword']);

        $txtFirstName = $request->old('txtFirstName');
        $txtLastName = $request->old('txtLastName');
        $txtEmailAddress = $request->old('txtEmailAddress');
        $txtPhoneNumber = $request->old('txtPhoneNumber');

        $firstName = $request->input('txtFirstName');
        $lastName = $request->input('txtLastName');
        $email = $request->input('txtEmailAddress');
        $phoneNumber = $request->input('txtPhoneNumber');
        $password = $request->input('txtPassword');

        if ($this->userService->register($email, $password, $firstName, $lastName, $phoneNumber)) {
            return redirect('/');
        }

        return response()->view('user.register', [
            'error' => 'Register failed',
        ]);
    }

    public function doLogout (Request $request) : RedirectResponse
    {
        $request->session()->invalidate();
        $request->session()->regenerate();
        
        return redirect('/');
    }
}
