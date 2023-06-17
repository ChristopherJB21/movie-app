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
<div class="container-md">
    <div id="accordion">
        <div class="card mx-3 my-3">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Central Park, CGV
                </button>
            </h5>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <h4>Central Park Jakarta Barat Lantai 4</h4>
                Jl. Ankgasa 1, Blok B, No. 47a-49b <br>
                (021)123-3213-23
                <hr class="border border-dark">
                <div>
                    <h4>Playing at Central Park: </h4>
                    <div class="row">
                        <div class="my-1 col-lg-3">
                            <img src={{ asset('/images/movieAssets/Avengers_Endgame_poster.jpg') }} class="me-2 img-fluid d-flex" alt="Responsive image">
                            Avengers: Endgame <br>
                            120 Menit
                        </div>
                        <div class="col-lg-4">
                            <h5>Senin</h5>
                            <div class="">
                                <button type="button" class="m-1 btn btn-outline-secondary">11.20</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">14.20</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">17.10</button>
                            </div>
                            <hr class="border border-dark">
                            <h5>Selasa</h5>
                            <div class="">
                                <button type="button" class="m-1 btn btn-outline-secondary">07.40</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">10.20</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">13.20</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">18.10</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">18.10</button>
                            </div>
                            <hr class="border border-dark">
                        </div>
                    </div>
                    <div class="row">
                        <div class="my-1 col-lg-3">
                            <img src={{ asset('/images/movieAssets/Avengers_Endgame_poster.jpg') }} class="me-2 img-fluid d-flex" alt="Responsive image">
                            Avengers: Endgame <br>
                            120 Menit
                        </div>
                        <div class="col-lg-4">
                            <h5>Senin</h5>
                            <div class="">
                                <button type="button" class="m-1 btn btn-outline-secondary">11.20</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">14.20</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">17.10</button>
                            </div>
                            <hr class="border border-dark">
                            <h5>Selasa</h5>
                            <div class="">
                                <button type="button" class="m-1 btn btn-outline-secondary">07.40</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">10.20</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">13.20</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">18.10</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">18.10</button>
                            </div>
                            <hr class="border border-dark">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="card mx-3 my-3">
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                    Mangga Dua, Cinepolis
                </button>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                <h4>Mangga Dua Jakarta Utara Lantai 3</h4>
                Jl. Ankgasa 1, Blok B, No. 47a-49b <br>
                (021)123-3213-23
                <hr class="border border-dark">
                <div>
                    <h4>Playing at Mangga Dua: </h4>
                    <div class="row">
                        <div class="my-1 col-lg-3">
                            <img src={{ asset('/images/movieAssets/Avengers_Endgame_poster.jpg') }} class="me-2 img-fluid d-flex" alt="Responsive image">
                            Avengers: Endgame <br>
                            120 Menit
                        </div>
                        <div class="col-lg-4">
                            <h5>Senin</h5>
                            <div class="">
                                <button type="button" class="m-1 btn btn-outline-secondary">11.20</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">14.20</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">17.10</button>
                            </div>
                            <hr class="border border-dark">
                            <h5>Selasa</h5>
                            <div class="">
                                <button type="button" class="m-1 btn btn-outline-secondary">07.40</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">10.20</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">13.20</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">18.10</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">18.10</button>
                            </div>
                            <hr class="border border-dark">
                        </div>
                    </div>
                    <div class="row">
                        <div class="my-1 col-lg-3">
                            <img src={{ asset('/images/movieAssets/Avengers_Endgame_poster.jpg') }} class="me-2 img-fluid d-flex" alt="Responsive image">
                            Avengers: Endgame <br>
                            120 Menit
                        </div>
                        <div class="col-lg-4">
                            <h5>Senin</h5>
                            <div class="">
                                <button type="button" class="m-1 btn btn-outline-secondary">11.20</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">14.20</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">17.10</button>
                            </div>
                            <hr class="border border-dark">
                            <h5>Selasa</h5>
                            <div class="">
                                <button type="button" class="m-1 btn btn-outline-secondary">07.40</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">10.20</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">13.20</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">18.10</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">18.10</button>
                            </div>
                            <hr class="border border-dark">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mx-3 my-3">
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
                            <div class="">
                                <button type="button" class="m-1 btn btn-outline-secondary">11.20</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">14.20</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">17.10</button>
                            </div>
                            <hr class="border border-dark">
                            <h5>Selasa</h5>
                            <div class="">
                                <button type="button" class="m-1 btn btn-outline-secondary">07.40</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">10.20</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">13.20</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">18.10</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">18.10</button>
                            </div>
                            <hr class="border border-dark">
                        </div>
                    </div>
                    <div class="row">
                        <div class="my-1 col-lg-3">
                            <img src={{ asset('/images/movieAssets/Avengers_Endgame_poster.jpg') }} class="me-2 img-fluid d-flex" alt="Responsive image">
                            Avengers: Endgame <br>
                            120 Menit
                        </div>
                        <div class="col-lg-4">
                            <h5>Senin</h5>
                            <div class="">
                                <button type="button" class="m-1 btn btn-outline-secondary">11.20</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">14.20</button>
                                <button type="button" class="m-1 btn btn-outline-secondary">17.10</button>
                            </div>
                            <hr class="border border-dark">
                            <h5>Selasa</h5>
                            <div class="">
                                <button type="button" class="btn btn btn-outline-secondary m-1">07.40</button>
                                <button type="button" class="btn btn btn-outline-secondary m-1">10.20</button>
                                <button type="button" class="btn btn btn-outline-secondary m-1">13.20</button>
                                <button type="button" class="btn btn btn-outline-secondary m-1">18.10</button>
                                <button type="button" class="btn btn btn-outline-secondary m-1">18.10</button>
                            </div>
                            <hr class="border border-dark">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
