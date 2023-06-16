@extends('layouts.app')
@section('content')
<div class="row ">
    <div class="col-sm-9">
        <div class="mt-2 d-flex justify-content-sm-center bg-light" style="--bs-bg-opacity: .7;">
            <h3 class="mb-0 py-1">Select Seats</h3>
        </div>
        <div class="d-flex justify-content-center btn-group-toggle" data-toggle="buttons">
            <label class="m-2 btn btn-secondary active">
                <input type="checkbox"> A1
            </label>
            <label class="m-2 btn btn-secondary active">
                <input type="checkbox"> A2
            </label>
            <label class="m-2 btn btn-secondary active">
                <input type="checkbox"> A3
            </label>
            <label class="m-2 btn btn-secondary active">
                <input type="checkbox"> A4
            </label>
        </div>
        <div class="d-flex justify-content-center btn-group-toggle" data-toggle="buttons">
            <label class="m-2 btn btn-secondary active">
                <input type="checkbox"> B1
            </label>
            <label class="m-2 btn btn-secondary active">
                <input type="checkbox"> B2
            </label>
            <label class="m-2 btn btn-secondary active">
                <input type="checkbox"> B3
            </label>
            <label class="m-2 btn btn-secondary active">
                <input type="checkbox"> B4
            </label>
        </div>
        <div class="d-flex justify-content-center btn-group-toggle" data-toggle="buttons">
            <label class="m-2 btn btn-secondary active">
                <input type="checkbox"> C1
            </label>
            <label class="m-2 btn btn-secondary active">
                <input type="checkbox"> C2
            </label>
            <label class="m-2 btn btn-secondary active">
                <input type="checkbox"> C3
            </label>
            <label class="m-2 btn btn-secondary active">
                <input type="checkbox"> C4
            </label>
        </div>
        <div class="d-flex justify-content-center btn-group-toggle" data-toggle="buttons">
            <label class="m-2 btn btn-secondary active">
                <input type="checkbox"> D1
            </label>
            <label class="m-2 btn btn-secondary active">
                <input type="checkbox"> D2
            </label>
            <label class="m-2 btn btn-secondary active">
                <input type="checkbox"> D3
            </label>
            <label class="m-2 btn btn-secondary active">
                <input type="checkbox"> D4
            </label>
        </div>

        <div class="mt-2 d-flex justify-content-center bg-light" style="--bs-bg-opacity: .7;">
            <h3 class="mb-0 py-1">Foods</h3>
        </div>

        <div class="container text-center">
            <div class="row justify-content-sm-center">
                <div class="mx-5 my-2 d-flex justify-content-center card col-sm-3" style="width: 18rem;">
                    <img src={{ asset('/images/FnBAssets/fried-shrimp-prawn-cake-white-plate.jpg') }} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="mx-5 my-2 d-flex justify-content-center card col-sm-3" style="width: 18rem;">
                    <img src={{ asset('/images/FnBAssets/hawaiian-pizza.jpg') }} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="mx-5 my-2 d-flex justify-content-center card col-sm-3" style="width: 18rem;">
                    <img src={{ asset('/images/FnBAssets/tagliatelle-pasta-with-tomatoes-chicken.jpg') }} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-2 d-flex justify-content-center bg-light" style="--bs-bg-opacity: .7;">
            <h3 class="mb-0 py-1">Drinks</h3>
        </div>

        <div class="container text-center">
            <div class="row justify-content-sm-center">
                <div class="mx-5 my-3 d-flex justify-content-center card col-sm-2" style="width: 18rem;">
                    <img src={{ asset('/images/FnBAssets/fried-shrimp-prawn-cake-white-plate.jpg') }} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="mx-5 my-3 d-flex justify-content-center card col-sm-2" style="width: 18rem;">
                    <img src={{ asset('/images/FnBAssets/hawaiian-pizza.jpg') }} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="mx-5 my-3 d-flex justify-content-center card col-sm-2" style="width: 18rem;">
                    <img src={{ asset('/images/FnBAssets/tagliatelle-pasta-with-tomatoes-chicken.jpg') }} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="col-sm-3">
        <div class="sticky-top">
            <div class="bg bg-light">
                <h4 class="pt-2 d-flex justify-content-center">Cart</h4>
                <hr class="border border-dark">
                <div class="m-2">
                    <div>
                        Tanggal Pemesanan: 12-03-2023 <br>
                        Lokasi Cinema: Central Park
                    </div>
                    <hr class="border border-dark">
                    <div class="d-flex justify-content-between">
                        <div>
                            Bangku pesanan:
                        </div>
                        <div>
                            B1, B2
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            Harga
                        </div>
                        <div>
                            Rp. 40.000 x2
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        Rp. 80.000
                    </div>
                    <hr class="border border-dark">
                    Pesanan makanan
                    <ul>
                        <div class="d-flex justify-content-between">
                            <li>Nugget</li>
                            Rp. 12.000
                        </div>
                        <div class="d-flex justify-content-between">
                            <li>Kentang Goreng</li>
                            Rp. 10.000
                        </div>
                        <div class="d-flex justify-content-between">
                            <li>Carbonara Pasta</li>
                            Rp. 21.000
                        </div>
                    </ul>
                    <hr class="border border-dark">
                    <div class="d-flex justify-content-between">
                        <div>
                            Total: 
                        </div>
                        <div>
                            Rp. 123.000 
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            Pajak 20%: 
                        </div>
                        <div>
                            Rp. 24.600 
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            Layanan 10%: 
                        </div>
                        <div>
                            Rp. 12.300
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            Total Price: 
                        </div>
                        <div>
                            Rp. 159.900
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href={{ url('/movie/buyMovie/payment') }} type="submit" class="m-2 btn btn-purple {{ request()->segment(3) == 'movie' ? 'active' : '' }}">Buy Movie</a>
                <a href={{ url('/movie/deleteMovie') }} type="button" class="m-2 btn btn-danger {{ request()->segment(2) == 'movie' ? 'active' : '' }}">Delete Movie</a>
                <a href={{ url('/movie') }} type="button" class="m-2 btn btn-primary {{ request()->segment(1) == 'movie' ? 'active' : '' }}">View Movie</a>
            </div>
        </div>
    </div>
</div>
@endsection