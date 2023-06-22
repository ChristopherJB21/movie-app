@extends('layouts.app')
@section('content')
    <div class="container" id="listCinema">
        @foreach ($cinemas as $idxI => $cinema)
            <div class="card mx-3 my-3">
                <div class="card-header">
                    <h5 class="mb-0">
                        <button class="btn collapsed" data-bs-toggle="collapse"
                            data-bs-target={{ '#collapse' . $cinema->id }}>
                            {{ strtoupper($cinema->name) }}
                        </button>
                    </h5>
                </div>
                <div id={{ 'collapse' . $cinema->id }} class="collapse">
                    <div class="card-body">
                        <h4>{{ strtoupper($cinema->name) }}</h4>
                        <h6>{{ $cinema->address }}</h6>
                        <h6>{{ $cinema->telp }}</h6>

                        @foreach ($cinemas[$idxI]->movies as $idxJ => $movie)
                            <hr class="border border-dark">
                            <div class="my-1 col-lg-12">
                                <h3><b>{{ $cinemas[$idxI]->movies[$idxJ]->title }}</b></h3>
                            </div>
                            <div class="row">
                                <div class="my-1 col-lg-3 text-center">
                                    <img src={{ asset($cinemas[$idxI]->movies[$idxJ]->poster) }} class="mx-auto img-fluid d-block"
                                        alt="Responsive image">
                                </div>
                                <div class="row col-lg-9">
                                    @foreach ($cinemas[$idxI]->movies[$idxJ]->tickets as $idxK => $ticket)
                                        <div class="d-flex col-lg-2 justify-content-lg-between align-items-center">
                                            <a href={{ url('/ticket/buyticket/' . $ticket->id ) }}><button type="button" class="btn btn-primary">
                                                <div class="">
                                                    {{date("d F Y", strtotime($ticket->date))}}
                                                </div>
                                                <div class="">
                                                    {{date("H:i", strtotime($ticket->time))}}
                                                </div>
                                                <div class="">
                                                    Rp. {{$ticket->price}},00
                                                </div>
                                            </button></a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

{{-- <div class="card mx-3 my-3">
        <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Jakarta Theathre, XXI
                </button>
            </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                <h4>Djakarta Theatre Jakarta Pusat Lantai 2</h4>
                Jl. Ankgasa 1, Blok B, No. 47a-49b <br>
                (021)123-3213-23
                <hr class="border border-dark">
                <div>
                    <h4>Playing at Djakarta Theatre: </h4>
                    <div class="row">
                        <div class="my-1 col-lg-3">
                            <img src={{ asset('/images/movieAssets/Avengers_Endgame_poster.jpg') }} class="me-2 img-fluid d-flex" alt="Responsive image">
                            Avengers: Endgame <br>
                            120 Menit
                        </div>
                        <div class="col-lg-4">
                            <h5>Senin</h5>
                            <button type="button" class="my-1 btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                11.20
                            </button>
                            <button type="button" class="my-1 btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                14.20
                            </button>
                            <button type="button" class="my-1 btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                17.10
                            </button>
                            <h5>Selasa</h5>
                            <button type="button" class="my-1 btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                11.20
                            </button>
                            <button type="button" class="my-1 btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                14.20
                            </button>
                            <button type="button" class="my-1 btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                17.10
                            </button>
                            <button type="button" class="my-1 btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                17.10
                            </button>
                        </div>
                    </div>
                    <hr class="border border-dark">
                    <div class="row">
                        <div class="my-1 col-lg-3">
                            <img src={{ asset('/images/movieAssets/Avengers_Endgame_poster.jpg') }} class="me-2 img-fluid d-flex" alt="Responsive image">
                            Avengers: Endgame <br>
                            120 Menit
                        </div>
                        <div class="col-lg-4">
                            <h5>Senin</h5>
                            <button type="button" class="my-1 btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                11.20
                            </button>
                            <button type="button" class="my-1 btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                14.20
                            </button>
                            <button type="button" class="my-1 btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                17.10
                            </button>
                            <h5>Selasa</h5>
                            <button type="button" class="my-1 btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                11.20
                            </button>
                            <button type="button" class="my-1 btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                14.20
                            </button>
                            <button type="button" class="my-1 btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                17.10
                            </button>
                            <button type="button" class="my-1 btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                17.10
                            </button>
                        </div>
                    </div>
                    <hr class="border border-dark">
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Buy ticket</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Avengers: Endgame
                    <div class="m-2 dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tiket
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">1</a></li>
                            <li><a class="dropdown-item" href="#">2</a></li>
                            <li><a class="dropdown-item" href="#">3</a></li>
                            <li><a class="dropdown-item" href="#">4</a></li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Buy</button>
                </div>
            </div>
        </div>
    </div> --}}
