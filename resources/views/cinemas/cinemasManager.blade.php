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
    <div class="container text-center">
    <div class="row">
    <div class="col">
      Create
    </div>
    <div class="col">
      Update
    </div>
    <div class="col">
              Delete
            </div>
        </div>
    </div>
    <p></p>
    <div class="border-top border-dark container">
        <div class="row">
            <div class="my-3 col-lg-1">
                
            </div>
            <div class="my-1 col-lg-5">
                <h1>EPICENTRUM XXI</h1>
                <p>
                    Epicentrum Walk Ground Floor 
                    Jl. H.R. Rasuna Said
                    Jakarta Selatan
                </p>
            </div>
            <div class="mt-2 col-lg-6">
                <p>(021) 2994 1300</p>
                <p></p>
                <div class="row justify-content-md-center">

                <a href={{ url('/movie') }} button type="button" class="col-lg-4 btn btn-outline-dark">Watch Here</a>
                
                </div>
            </div>
        </div>
    </div>
    <div class="border-top border-dark container">
        <div class="row">
            <div class="my-3 col-lg-1">
                
            </div>
            <div class="my-1 col-lg-5">
                <h1>GANDARIA CITY XXI</h1>
                <p>
                    Gandaria City Level 2
                    Jl Sultan Iskandar Muda, Kebayoran Lama
                    Jakarta Selatan
                </p>
            </div>
            <div class="mt-2 col-lg-6">
                <p>(021) 29053218</p>
                <p></p>
                <div class="row justify-content-md-center">
                    
                    <a href={{ url('/movie') }} button type="button" class="col-lg-4 btn btn-outline-dark">Watch Here</a>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="border-top border-dark container">
        <div class="row">
            <div class="my-3 col-lg-1">
                
            </div>
            <div class="my-1 col-lg-5">
                <h1>TAMAN ANGGREK XXI</h1>
                <p>
                    Epicentrum Walk Ground Floor 
                    Jl. H.R. Rasuna Said
                    Jakarta Selatan
                </p>
            </div>
            <div class="mt-2 col-lg-6">
                <p>(021) 2994 1300</p>
                <p></p>
                <div class="row justify-content-md-center">

                <a href={{ url('/movie') }} button type="button" class="col-lg-4 btn btn-outline-dark">Watch Here</a>
                
                </div>
            </div>
        </div>
    </div>
    <div class="border-top border-dark container">
        <div class="row">
            <div class="my-3 col-lg-1">
                
            </div>
            <div class="my-1 col-lg-5">
                <h1>ST. MORITZ XXI</h1>
                <p>
                    Gandaria City Level 2
                    Jl Sultan Iskandar Muda, Kebayoran Lama
                    Jakarta Selatan
                </p>
            </div>
            <div class="mt-2 col-lg-6">
                <p>(021) 29053218</p>
                <p></p>
                <div class="row justify-content-md-center">
                    
                    <a href={{ url('/movie') }} button type="button" class="col-lg-4 btn btn-outline-dark">Watch Here</a>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="border-top border-dark container">
        <div class="row">
            <div class="my-3 col-lg-1">
                
            </div>
            <div class="my-1 col-lg-5">
                <h1>SENAYAN CITY XXI</h1>
                <p>
                    Epicentrum Walk Ground Floor 
                    Jl. H.R. Rasuna Said
                    Jakarta Selatan
                </p>
            </div>
            <div class="mt-2 col-lg-6">
                <p>(021) 2994 1300</p>
                <p></p>
                <div class="row justify-content-md-center">

                <a href={{ url('/movie') }} button type="button" class="col-lg-4 btn btn-outline-dark">Watch Here</a>
                
                </div>
            </div>
        </div>
    </div>
    <div class="border-top border-dark container">
        <div class="row">
            <div class="my-3 col-lg-1">
                
            </div>
            <div class="my-1 col-lg-5">
                <h1>PONDOK INDAH 2 XXI</h1>
                <p>
                    Gandaria City Level 2
                    Jl Sultan Iskandar Muda, Kebayoran Lama
                    Jakarta Selatan
                </p>
            </div>
            <div class="mt-2 col-lg-6">
                <p>(021) 29053218</p>
                <p></p>
                <div class="row justify-content-md-center">
                    
                    <a href={{ url('/movie') }} button type="button" class="col-lg-4 btn btn-outline-dark">Watch Here</a>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="border-top border-dark container">
        <div class="row">
            <div class="my-3 col-lg-1">
                
            </div>
            <div class="my-1 col-lg-5">
                <h1>PLAZA SENAYAN XXI</h1>
                <p>
                    Epicentrum Walk Ground Floor 
                    Jl. H.R. Rasuna Said
                    Jakarta Selatan
                </p>
            </div>
            <div class="mt-2 col-lg-6">
                <p>(021) 2994 1300</p>
                <p></p>
                <div class="row justify-content-md-center">

                <a href={{ url('/movie') }} button type="button" class="col-lg-4 btn btn-outline-dark">Watch Here</a>
                
                </div>
            </div>
        </div>
    </div>
    <div class="border-top border-dark container">
        <div class="row">
            <div class="my-3 col-lg-1">
                
            </div>
            <div class="my-1 col-lg-5">
                <h1>PLAZA INDONESIA XXI</h1>
                <p>
                    Gandaria City Level 2
                    Jl Sultan Iskandar Muda, Kebayoran Lama
                    Jakarta Selatan
                </p>
            </div>
            <div class="mt-2 col-lg-6">
                <p>(021) 29053218</p>
                <p></p>
                <div class="row justify-content-md-center">
                    
                    <a href={{ url('/movie') }} button type="button" class="col-lg-4 btn btn-outline-dark">Watch Here</a>
                    
                </div>
            </div>
        </div>
    </div>

@endsection