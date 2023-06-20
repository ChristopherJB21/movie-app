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

    @if ($UserRole == 'Super Admin')
    <div class="px-3 my-3 container rounded-4">
        <div class="row">
            <a href={{ url('/movie/addMovie') }} type="button"
                class="btn btn-purple {{ request()->segment(2) == 'movie' ? 'active' : '' }}">Add Movie</a>
        </div>
    </div>
    @endif
    
    <div id="listMovie">
        @if (isset($movies[0]))
            @foreach ($movies as $movie)
                <div class="my-3 container bg-white rounded-4" style="--bs-bg-opacity: .7;">
                    <div class="row">
                        <div class="my-3 col-lg-3 align-items-lg-center">
                            <img src={{ asset($movie->poster) }} class="mx-auto img-fluid d-block" alt="Responsive image">
                        </div>
                        <div class="my-3 col-lg-6">
                            <h1>{{ $movie->title }}</h1>
                            <p style="text-align: justify; text-justify: inter-word">
                                {{ $movie->sinopsis }}
                            </p>
                        </div>
                        <div class="my-3 col-lg ">
                            @if ($UserRole == 'Super Admin')
                                <div class="row justify-content-md-center">
                                    <a href={{ url('/movie/editMovie/' . $movie->id) }} type="button"
                                        class="mx-2 col-lg-4 btn btn-primary">Edit</a>
                                    <a href={{ url('/movie/deleteMovie') }} type="button"
                                        class="mx-2 col-lg-4 btn btn-danger">Delete</a>
                                </div>
                            @else
                                <div class="row justify-content-md-center">
                                    <button type="button" class="col-lg-10 btn btn-outline-dark">Buy</button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        <script type="text/javascript" src="{{ asset('js/searchMovie.js') }}"></script>
    </div>
@endsection
