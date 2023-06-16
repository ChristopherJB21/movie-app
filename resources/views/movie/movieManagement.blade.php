@extends('layouts.app')
@section('content')
    <div class="p-3 m-3 rounded-4 bg-dark text-white" style="--bs-bg-opacity: .7;">
        <div class="input-group rounded">
            <svg class="me-3 my-1" xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                class="bi bi-search" viewBox="0 0 16 16">
                <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                aria-describedby="search-addon" />
        </div>
    </div>

    <div class="mx-4 my-2 row justify-content-md-center">
        <a href={{ url('/movie/tickets') }} type="button" class="btn btn-secondary {{ request()->segment(2) == 'movie' ? 'active' : '' }}">My Tickets</a>
    </div>

    <div class="mx-4 my-2 row justify-content-md-center">
        <a href={{ url('/movie/addMovie') }} type="button" class="btn btn-purple {{ request()->segment(2) == 'movie' ? 'active' : '' }}">Add Movie</a>
    </div>
    
    <div class="my-3 container bg-white rounded-4" style="--bs-bg-opacity: .7;">
        <div class="row">
            <div class="my-3 col-lg-3 align-items-lg-center">
                <img src={{ asset('/images/movieAssets/Avengers_Endgame_poster.jpg') }} class="mx-auto img-fluid d-block"
                    alt="Responsive image">
            </div>
            <div class="my-3 col-lg-6">
                <h1>Avenger Endgame</h1>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate eligendi id eos? Debitis iusto minus
                    in voluptatem, reprehenderit nihil saepe repellendus perspiciatis animi quod magnam ducimus qui, harum
                    cumque quasi?
                </p>
            </div>
            <div class="my-3 col-lg ">
                <h4>Tanggal Tayang: </h4>
                <p>14, Maret 2023</p>
                <h4>Harga: </h4>
                <p>Rp. 170.000</p>
                <div class="row justify-content-md-center">
                    <a href={{ url('/movie/buyMovie') }} type="button" class="col-lg-10 btn btn-outline-dark {{ request()->segment(2) == 'movie' ? 'active' : '' }}">Buy</a>
                    <a href={{ url('/movie/editMovie') }} type="button" class="mt-2 col-lg-5 btn btn-primary {{ request()->segment(2) == 'movie' ? 'active' : '' }}" style="border-radius: 0">Edit</a>
                    <a href={{ url('/movie/deleteMovie') }} type="button" class="mt-2 col-lg-5 btn btn-danger {{ request()->segment(2) == 'movie' ? 'active' : '' }}" style="border-radius: 0">Delete</a>
                </div> 
            </div>
        </div>
    </div>
    
    <div class="my-3 container bg-white rounded-4" style="--bs-bg-opacity: .7;">
        <div class="row">
            <div class="my-3 col-lg-3">
                <img src={{ asset('/images/movieAssets/Avengers_Endgame_poster.jpg') }} class="mx-auto img-fluid d-block"
                    alt="Responsive image">
            </div>
            <div class="my-3 col-lg-6">
                <h1>Avenger Endgame</h1>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate eligendi id eos? Debitis iusto minus
                    in voluptatem, reprehenderit nihil saepe repellendus perspiciatis animi quod magnam ducimus qui, harum
                    cumque quasi?
                </p>
            </div>
            <div class="mt-3 col-lg-3">
                <h4>Tanggal Tayang: </h4>
                <p>14, Maret 2023</p>
                <h4>Harga: </h4>
                <p>Rp. 170.000</p>
                <div class="row justify-content-md-center">
                    <a href={{ url('/movie/buyMovie') }} type="button" class="col-lg-10 btn btn-outline-dark {{ request()->segment(2) == 'movie' ? 'active' : '' }}">Buy</a>
                    <a href={{ url('/movie/editMovie') }} type="button" class="mt-2 col-lg-5 btn btn-primary {{ request()->segment(2) == 'movie' ? 'active' : '' }}" style="border-radius: 0">Edit</a>
                    <a href={{ url('/movie/deleteMovie') }} type="button" class="mt-2 col-lg-5 btn btn-danger {{ request()->segment(2) == 'movie' ? 'active' : '' }}" style="border-radius: 0">Delete</a>
                </div>
            </div>
        </div>
    </div>
    @endsection
