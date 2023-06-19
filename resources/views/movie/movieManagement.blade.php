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

    <div class="border-top border-dark container">
        <div class="row">
            <div class="my-3 col-lg-3">
                <img src={{ asset('/images/movieAssets/Avengers_Endgame_poster.jpg') }} class="ms-2 img-fluid"
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
                <p>14, Maret 2023</p>
                <p>Rp. 170.000</p>
                <div class="row justify-content-md-center">
                <a type="button" class="col-lg-6 btn btn-outline-dark {{ request()->segment(2) == 'movie' ? 'active' : '' }}" href={{ url('/movie/buyticket') }}>Buy</a>
                </div>
            </div>
        </div>
    </div>
    <div class="border-top border-dark container">
        <div class="row">
            <div class="my-3 col-lg-3">
                <img src={{ asset('/images/movieAssets/Avengers_Endgame_poster.jpg') }} class="ms-2 img-fluid"
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
                <p>14, Maret 2023</p>
                <p>Rp. 170.000</p>
                <div class="row justify-content-md-center" >
                    <a type="button" class="col-lg-6 btn btn-outline-dark {{ request()->segment(2) == 'movie' ? 'active' : '' }}" href={{ url('/movie/buyticket') }}>Buy</a>
                </div>
            </div>
        </div>
    </div>
@endsection
