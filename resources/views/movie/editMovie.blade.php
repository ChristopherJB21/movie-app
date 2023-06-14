@extends('layouts.app')
@section('content')
    <div class="m-3 d-flex justify-content-sm-center bg-light rounded-4" style="--bs-bg-opacity: .7;">
        <h3 class="mb-0 py-1">Edit Movie</h3>
    </div>
    <form class="m-3">
        <div class="row">
            <div class="col-lg-6">
                <label for="inputEmail4">Movie Name</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Sesuai ama movie yang mau di edit (Avengers: Infinity War)">
            </div>
            <div class="col-lg-6">
                <label for="inputEmail4">Price</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Sesuai ama movie yang mau di edit (Rp.30.000)">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Movie Sinoppsis</label>
            <textarea  type="text" class="form-control" id="inputAddress" placeholder="Sesuai ama movie yang mau di edit"></textarea>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="inputCity">Time</label>
                <input type="text" class="form-control" id="inputCity" placeholder="Sesuai ama movie yang mau di edit (00.00 - 23.00)">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Duration</label>
                <input type="text" class="form-control" id="inputCity" placeholder="Sesuai ama movie yang mau di edit (90 menit)">
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
        </div>
        <div class="mt-3">
            <label for="exampleFormControlFile1">Thumbnail Picture</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
            <div class="my-3 col-lg-3 align-items-lg-center">
                <img src={{ asset('/images/movieAssets/Avengers_Endgame_poster.jpg') }} class="mx-auto img-fluid d-block"
                    alt="Responsive image">
            </div>
        </div>
        <button type="submit" class="mt-3 btn btn-purple">Update</button>
        <a href={{ url('/movie') }} type="button" class="mt-3 btn btn-primary {{ request()->segment(1) == 'movie' ? 'active' : '' }}">View Movie</a>
    </form>
@endsection