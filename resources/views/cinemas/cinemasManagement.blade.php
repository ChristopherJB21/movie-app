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
    <!-- <div class="dropdown">
        <div class="mx-3 justify-content-sm-between alert alert-light dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="alert">
            <div class="d-flex justify-content-sm-between">
                <a href="#" class="alert-link">Central Park, CGV</a>
                <span class="ms-5 text-xl-right">Jl. angkasa 1, Blok-C, No. 47b-48a</span>
            </div>
        </div>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </div>
    <div class="d-flex justify-content-sm-between mx-3 alert alert-light" role="alert">
        <a href="#" class="alert-link">Mangga Dua, Cinepolis</a>
        <span class="ms-5 text-xl-right">Jl. angkasa 1, Blok-C, No. 47b-48a</span>
    </div>
    <div class="d-flex justify-content-sm-between mx-3 alert alert-light" role="alert">
        <a href="#" class="alert-link">Jakarta Theathre, XXI</a>
        <span class="ms-5 text-xl-right">Jl. angkasa 1, Blok-C, No. 47b-48a</span>
    </div> -->

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
                <h3>Jakarta Barat</h3>
                <h5>Jl. Ankgasa 1, Blok B, No. 47a-49b</h5>
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
                <h3>Jakarta Pusat</h3>
                <h5>Jl. Ankgasa 1, Blok B, No. 47a-49b</h5>
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
                <h3>Jakarta Pusat</h3>
                <h5>Jl. Ankgasa 1, Blok B, No. 47a-49b</h5>
            </div>
        </div>
    </div>
</div>
@endsection
