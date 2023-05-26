@extends('layouts.app')
@section('content')
<div class=" d-flex justify-content-center align-items-center" style="height: 88vh; overflow: hidden">
    <div class="row justify-content-around border border-3 border-danger m-0 py-3 px-0" style="width: 80%; ">
        <div class="col-4">
        <p> Contact Movie App Cinemas<br><br> Call Center <br> +628912345678 <br><br> Email <br> movieapp@gmail.com <br><br> Call Center Operating Hours <br> Senin - Jumat 10.00 - 19.00 <br><br> Movie App Cinemas HQ Office <br>Bina Nusantara UNIVERSITY Lantai 5 <br> Jl. Kebon Jeruk Raya No. 27, Kebon Jeruk
Jakarta Barat 11530, Indonesia</p>
        </div>

        <div class="col-4">
            <form>
                 <div class="mb-3">
                    <label for="nama" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nama" aria-describedby="name" />
                  </div>
                 <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                 </div>
                 <div class="mb-3">
                 <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>

                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
      </div>

</div>
@endsection