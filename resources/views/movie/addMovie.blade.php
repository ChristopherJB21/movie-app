@extends('layouts.app')
@section('content')
    <div class="m-3 d-flex justify-content-sm-center bg-light rounded-4" style="--bs-bg-opacity: .7;">
        <h3 class="mb-0 py-1">Add Movie</h3>
    </div>
    @if (isset($isEdit))
        <form action={{url('/movie/editMovie/' . $movie->id)}} method="post" enctype="multipart/form-data" class="m-3 bg-white p-4">
    @else
        <form action="movie/addMovie" method="post" enctype="multipart/form-data" class="m-3 bg-white p-4">
    @endif
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <label for="txtMovieName">Movie Name</label>
                <input type="text" class="form-control @error('txtMovieName') is-invalid @enderror" id="txtMovieName"
                    name="txtMovieName" placeholder="Movie Name..." value="{{ old('txtMovieName', $movie->title) }}">

                <div class="invalid-feedback">
                    @error('txtMovieName')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            {{-- <div class="col-lg-6">
                <label for="inputEmail4">Price</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Rp. 90.000,00">
            </div> --}}
        </div>
        <div class="form-group">
            <label for="txtMovieSinopsis">Movie Sinopsis</label>
            <textarea type="text" class="form-control @error('txtMovieSinopsis') is-invalid @enderror" id="txtMovieSinopsis"
                name="txtMovieSinopsis" placeholder="Sinopsis">{{ old('txtMovieSinopsis', $movie->sinopsis) }}</textarea>

            <div class="invalid-feedback">
                @error('txtMovieSinopsis')
                    {{ $message }}
                @enderror
            </div>
        </div>
        {{-- <div class="row">
            <div class="form-group col-md-4">
                <label for="inputCity">Time</label>
                <input type="text" class="form-control" id="inputCity" placeholder="00:00 - 23.59">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Duration</label>
                <input type="text" class="form-control" id="inputCity" placeholder="90 Minutes">
            </div>
            <div class="form-group col-md-4">
                <label for="inputZip">Location</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>Central Park</option>
                    <option>Mangga Dua</option>
                    <option>Jakarta Theatre</option>
                </select>
            </div>
        </div> --}}
        <div class="mt-3">
            <label for="filemovieposter">Movie poster</label>
            <input type="file" class="form-control-file @error('filemovieposter') is-invalid @enderror"
                name="filemovieposter" id="filemovieposter">

            <div class="invalid-feedback">
                @error('fileMoviePoster')
                    {{ $message }}
                @enderror
            </div>
        </div>
        @if (isset($isEdit))
            <button type="submit" class="mt-3 btn btn-purple">Edit Movie</button>
        @else
            <button type="submit" class="mt-3 btn btn-purple">Add Movie</button>
        @endif
        <a href={{ url('/movie/deleteMovie') }} type="button"
            class="mt-3 btn btn-danger {{ request()->segment(2) == 'movie' ? 'active' : '' }}">Delete Movie</a>
        <a href={{ url('/movie') }} type="button"
            class="mt-3 btn btn-primary {{ request()->segment(1) == 'movie' ? 'active' : '' }}">View Movie</a>
    </form>
@endsection
