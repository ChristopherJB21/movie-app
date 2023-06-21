<?php

use App\Http\Controllers\BuyTicketController;
use App\Http\Controllers\CinemasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
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
    Route::post('/profile/{id}', 'doUpdateProfile');
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
    Route::get('/movie/deleteMovie/{id}', 'deletemovie');
});

Route::controller(CinemasController::class)->group(function(){
    Route::get('/cinemas', 'cinemas'); 
    Route::post('/cinema/search', 'searchCinema');
});

Route::controller(BuyTicketController::class)->group(function(){
    Route::get('/tickets/movie/', 'tickets');
    Route::get('/tickets/movie/{idMovie}', 'ticketsMovie');
    Route::get('/tickets/cinema/{idCinema}', 'ticketsCinema');
    Route::get('/ticket/buyticket/{idTicket}', 'buyTicket');
    Route::post('/ticket/buyticket', 'buy');
    Route::get('/tickets/myticket', 'myTicket');
});
