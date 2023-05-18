<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function login() : Response
    {
        return response()->view('user.login');
    }

    public function doLogin(LoginRequest $request) : Response|RedirectResponse
    {
        $validated = $request->validated();

        $txtEmailAddress = $request->old('txtEmailAddress');

        $email = $request->input('txtEmailAddress');
        $password = $request->input('txtPassword');

        if ($this->userService->login($email, $password)) {
            $request->session()->put('email', $email);
            return redirect('/login');
        }

        return response()->view('user.login', [
            'error' => 'Email or Password is wrong'
        ]);
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
        $confirmPassword = $request->input('txtConfirmPassword');

        if ($this->userService->register($email, $password, $firstName, $lastName, $phoneNumber)) {
            return response()->view('user.register', [
                'success' => 'Register Success',
            ]);
        }

        return response()->view('user.register', [
            'error' => 'Register failed',
        ]);
    }
}
