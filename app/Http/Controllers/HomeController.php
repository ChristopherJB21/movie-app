<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\User;
use App\Services\HomeService;
use App\Services\MovieService;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;

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

    public function doUpdateProfile($id, Request $request) : Response|RedirectResponse
    {
        $validated = $request->validate([
            'txtFirstName' => 'required|max:255',
            'txtLastName' => 'required|max:255',
            'txtPhoneNumber' => 'required',
            'txtEmailAddress' => [
                'required',
                'max:255',
                Rule::unique('ms_users', 'email')->ignore($id),
            ]
        ]);

        $txtFirstName = $request->old('txtFirstName');
        $txtLastName = $request->old('txtLastName');
        $txtEmailAddress = $request->old('txtEmailAddress');
        $txtPhoneNumber = $request->old('txtPhoneNumber');

        $firstName = $request->input('txtFirstName');
        $lastName = $request->input('txtLastName');
        $email = $request->input('txtEmailAddress');
        $phoneNumber = $request->input('txtPhoneNumber');

        if ($this->userService->updateProfile($id, $email, $firstName, $lastName, $phoneNumber)) {
            return redirect('/');
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
