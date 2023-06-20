<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\User;
use App\Services\HomeService;
use App\Services\MovieService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    private UserService $userService;
    private HomeService $homeService;
    private MovieService $movieService;

    public function __construct(HomeService $homeService, UserService $userService, MovieService $movieService)
    {
        $this->homeService = $homeService;
        $this->userService = $userService;
        $this->movieService = $movieService;
    }

    public function dashboard() : Response
    {
        $movies = $this->movieService->getMovieShowing();
        return response()->view('home.dashboard', [
            'movies' => $movies
        ]);
    }

    public function contactUs() : Response
    {
        return response()->view('home.contactUs');
    }
    
    public function aboutUs() : Response
    {
        return response()->view('home.aboutUs');
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
