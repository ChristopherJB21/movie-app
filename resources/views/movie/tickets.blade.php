@extends('layouts.app')
@section('content')
<div class="m-3 d-flex justify-content-sm-center bg-light rounded-4" style="--bs-bg-opacity: .7;">
        <h3 class="mb-0 py-1">My Tickets</h3>
</div>

<div class="my-3 container bg-white rounded-4" style="--bs-bg-opacity: .7;">
    <div class="row">
        <div class="my-auto col-lg-3 align-items-lg-center">
            <img src={{ asset('/images/movieAssets/Avengers_Endgame_poster.jpg') }} class="mx-auto img-fluid d-block"
                alt="Responsive image">
        </div>
        <div class="my-3 col-lg-6">
            <h1>Avenger Endgame</h1>
            <h6 class="d-flex justify-content-start">#12d235f3</h6>
            <img src={{ asset('/images/paymentAssets/dummyQR.jpg') }} class="mx-auto img-fluid d-block w-50"
                alt="Responsive image">
        </div>
        <div class="my-3 col-lg ">
            <h4>Tanggal Tayang: </h4>
            <p>14, Maret 2023</p>
            <h4>Waktu Tayang: </h4>
            <p>15.20</p>
            <h4>Status </h4>
            <p>Payed</p>
        </div>
    </div>
</div>

<div class="my-3 container bg-white rounded-4" style="--bs-bg-opacity: .7;">
    <div class="row">
        <div class="my-auto col-lg-3 align-items-lg-center">
            <img src={{ asset('/images/movieAssets/Avengers_Endgame_poster.jpg') }} class="mx-auto img-fluid d-block"
                alt="Responsive image">
        </div>
        <div class="my-3 col-lg-6">
            <h1>Avenger Endgame</h1>
            <h6 class="d-flex justify-content-start">#12d235f3</h6>
            <img src={{ asset('/images/paymentAssets/dummyQR.jpg') }} class="mx-auto img-fluid d-block w-50"
                alt="Responsive image">
        </div>
        <div class="my-3 col-lg ">
            <h4>Tanggal Tayang: </h4>
            <p>14, Maret 2023</p>
            <h4>Waktu Tayang: </h4>
            <p>15.20</p>
            <h4>Status </h4>
            <p>Payed</p>
        </div>
    </div>
</div>
@endsection