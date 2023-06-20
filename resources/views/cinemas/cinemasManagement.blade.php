@extends('layouts.app')
@section('content')
    <div class="p-3 my-3 container rounded-4 bg-dark text-white" style="--bs-bg-opacity: .7;">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <div class="input-group rounded">
            <svg class="me-3 my-1" xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
                class="bi bi-search" viewBox="0 0 16 16">
                <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                aria-describedby="search-addon" name="txtSearch" id="txtSearch" />
        </div>
    </div>
    <div class="container" id="listCinema">
        @foreach ($cinemas as $cinema)
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

                        <hr>

                        <div class="row text-center">
                            <a href=""><button type="button" class="col-lg-10 btn btn-outline-dark">Buy ticket in
                                    here</button></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <script type="text/javascript" src="{{ asset('js/searchCinema.js') }}"></script>
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
