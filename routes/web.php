<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CinemasController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'dashboard');
    Route::get('/about/contactUs', 'contactUs');
    Route::get('/about/aboutUs', 'aboutUs');
    Route::get('/profile', 'profile');
    Route::put('/profile', 'doUpdateProfile');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/login', 'login');
    Route::post('/login', 'doLogin');
    Route::get('/register', 'register');
    Route::post('/register', 'doRegister');
    Route::get('/logout', 'doLogout');
});

Route::controller(MovieController::class)->group(function(){
    Route::get('/movie', 'movie');
    Route::post('/movie/search', 'searchMovie');
    Route::get('/movie/addMovie', 'addmovie');
    Route::post('/movie/addMovie', 'insertmovie');
    Route::get('/movie/editMovie/{id}', 'editmovie');
    Route::post('/movie/editMovie/{id}', 'updatemovie');
    Route::get('/movie/deleteMovie', 'deletemovie');
    Route::get('/movie/buyMovie', 'buymovie');
    Route::get('/movie/tickets', 'tickets');
    Route::get('/movie/buyMovie/payment', 'payment');
    Route::get('/movie/buyticket', 'Buyticket');
});

Route::controller(CinemasController::class)->group(function(){
    Route::get('/cinemas', 'cinemas'); 
});
