@extends('layouts.app')
@section('content')
    <div class="d-flex mt-3 justify-content-sm-center">
        <h1>Add Movie</h1>
    </div>
    <form class="m-3">
        <div class="row">
            <div class="col-lg-6">
                <label for="inputEmail4">Movie Name</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Movie Name...">
            </div>
            <div class="col-lg-6">
                <label for="inputEmail4">Price</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Rp. 90.000,00">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Movie Sinoppsis</label>
            <textarea  type="text" class="form-control" id="inputAddress" placeholder="Sinopsis"></textarea>
        </div>
        <div class="row">
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
        </div>
        <div class="mt-3">
            <label for="exampleFormControlFile1">Thumbnail Picture</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button type="submit" class="mt-3 btn btn-purple">Add Movie</button>
    </form>
@endsection