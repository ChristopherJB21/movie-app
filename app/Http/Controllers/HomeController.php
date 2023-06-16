<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function dashboard() : Response
    {
        return response()->view('home.dashboard');
    }

    public function contactUs() : Response
    {
        return response()->view('home.contactUs');
    }
    
    public function aboutUs() : Response
    {
        return response()->view('home.aboutUs');
    }
    public function movie() : Response
    {
        return response()->view('cinemas.cinemasManager');
    }

    public function profile(Request $request) : Response
    {
        $user = $this->getUser();
        $request->session()->put("success", "Sukses!");
        return response()->view('home.profile', compact('user'));
    }

    public function doUpdateProfile(ProfileRequest $request) : Response
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
            return response()->view('home.profile', [
                'success' => 'Update Success',
            ]);
        }

        $user = $this->getUser();
        return response()->view('home.profile', compact('user'));
    }

    private function getUser() : User
    {
        $user = $this->userService->getUserProfile();
        return $user;
    }
}
