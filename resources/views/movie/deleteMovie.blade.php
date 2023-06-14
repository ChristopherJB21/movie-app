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
    <div class="mx-3 alert alert-light" role="alert">
        <div class="row"> 
            <img src={{ asset('/images/movieAssets/Avengers_Endgame_poster.jpg') }} class=" img-fluid d-block"alt="Responsive image" style="width: 10%">
            <div class="my-3 col-lg-6">
                <h1>Avenger Endgame</h1>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate eligendi id eos? Debitis iusto minus
                    in voluptatem, reprehenderit nihil saepe repellendus perspiciatis animi quod magnam ducimus qui, harum
                    cumque quasi?
                </p>
            </div>
        </div>
        <div class="d-flex justify-content-sm-between ">
            <a href="#" class="alert-link">Central Park, CGV</a>
            <a type="button" class="mt-2 col-lg-3 btn btn-danger" style="border-radius: 0">Delete</a>
        </div>
    </div>
    <div class="mx-3 alert alert-light" role="alert">
        <div class="row"> 
            <img src={{ asset('/images/movieAssets/Avengers_Endgame_poster.jpg') }} class=" img-fluid d-block"alt="Responsive image" style="width: 10%">
            <div class="my-3 col-lg-6">
                <h1>Avenger Endgame</h1>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate eligendi id eos? Debitis iusto minus
                    in voluptatem, reprehenderit nihil saepe repellendus perspiciatis animi quod magnam ducimus qui, harum
                    cumque quasi?
                </p>
            </div>
        </div>
        <div class="d-flex justify-content-sm-between ">
            <a href="#" class="alert-link">Central Park, CGV</a>
            <a type="button" class="mt-2 col-lg-3 btn btn-danger" style="border-radius: 0">Delete</a>
        </div>
    </div>
@endsection
