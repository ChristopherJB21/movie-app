@extends('layouts.app')
@section('content')
    @foreach ($tickets as $ticket)
        <div class="my-3 container bg-white rounded-4" style="--bs-bg-opacity: .7;">
            <div class="row">
                <div class="my-auto col-lg-3 align-items-lg-center">
                    <img src={{ asset($ticket->movie->poster) }} class="mx-auto img-fluid d-block"
                        alt="Responsive image">
                </div>
                <div class="my-3 col-lg-6">
                    <h1>{{ $ticket->movie->title }}</h1>
                    <h6 class="d-flex justify-content-start"># {{ $ticket->id }}</h6>
                    <img src={{ asset('/images/paymentAssets/dummyQR.jpg') }} class="mx-auto img-fluid d-block w-50"
                        alt="Responsive image">
                </div>
                <div class="my-3 col-lg ">
                    <h4>Tempat Tayang: </h4>
                    <p>{{ $ticket->cinema->name }}</p>
                    <h4>Tanggal Tayang: </h4>
                    <p>{{ date("l, d F Y", strtotime($ticket->detail->date)) }}</p>
                    <h4>Waktu Tayang: </h4>
                    <p>{{ date("H:i", strtotime($ticket->detail->time)) }}</p>
                    <h4>Status </h4>
                    <p>{{ $ticket->Status }}</p>
                </div>
            </div>
        </div>
    @endforeach
@endsection
