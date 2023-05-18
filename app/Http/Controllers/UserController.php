<?php

namespace App\Http\Controllers;

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

    public function doLogin(Request $request) : Response|RedirectResponse
    {
        $email = $request->input('txtEmail');
        $password = $request->input('txtPassword');

        if (empty($email) || empty($password)) {
            return response()->view('user.login', [
                'error' => 'Email and Password are required',
            ]);
        }

        if ($this->userService->login($email, $password)) {
            $request->session()->put('email', $email);
            return redirect('/login');
        }

        return response()->view('user.login', [
            'error' => 'Email or Password is wrong',
        ]);
    }

    public function register() : Response
    {
        return response()->view('user.register');
    }

    public function doRegister(Request $request) : Response|RedirectResponse
    {
        $email = $request->input('txtEmail');
        $password = $request->input('txtPassword');
        $firstName = $request->input('txtFirstName');
        $lastName = $request->input('txtLastName');
        $phoneNumber = $request->input('txtPhoneNumber');
        $confirmPassword = $request->input('txtConfirmPassword');

        if (empty($email) || empty($password) || empty($firstName) || empty($lastName) || empty($phoneNumber) || empty($confirmPassword)) {
            return response()->view('user.register', [
                'error' => 'Email and Password are required',
            ]);
        } else if ($confirmPassword != $password){
            return response()->view('user.register', [
                'error' => 'Password and confirm password must same',
            ]);
        }

        if ($this->userService->register($email, $password, $firstName, $lastName, $phoneNumber)) {
            return response()->view('user.register', [
                'success' => 'Login Success',
            ]);
        }

        return response()->view('user.register', [
            'error' => 'Register failed',
        ]);
    }
}
