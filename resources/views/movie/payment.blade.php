@extends('layouts.app')
@section('content')
<div class="m-3 bg bg-light rounded-4">
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

<div class="m-3 bg bg-light">
    <h4 class="p-2 d-flex justify-content-center">Payment</h4>
</div>

<div class="m-2 d-flex row justify-content-evenly">
    <div class="mx-2 mb-4 col-sm-4 bg bg-light rounded-4">
        <h4 class="pt-2 d-flex justify-content-center">Virtual Wallet</h4>
        
        <div id="accordion">
            <div class="card mx-3 my-3">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            OVO
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
                            Gojek
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
                        <button class="btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                            Dana
                        </button>
                    </h5>
                </div>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <h3>Jakarta Barat</h3>
                        <h5>Jl. Ankgasa 1, Blok B, No. 47a-49b</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-2 mb-4 col-sm-4 bg bg-light rounded-4">
        <h4 class="pt-2 d-flex justify-content-center">Virtual Bank</h4>

        <div id="accordion">
            <div class="card m-3">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                            BCA
                        </button>
                    </h5>
                </div>
            
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        <h3>Jakarta Barat</h3>
                        <h5>Jl. Ankgasa 1, Blok B, No. 47a-49b</h5>
                    </div>
                </div>
            </div>

            <div class="card m-3">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                        <button class="btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseOne">
                            Mandiri
                        </button>
                    </h5>
                </div>

                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        <h3>Jakarta Barat</h3>
                        <h5>Jl. Ankgasa 1, Blok B, No. 47a-49b</h5>
                    </div>
                </div>
            </div>
            <div class="card m-3">
                <div class="card-header" id="headingSix">
                    <h5 class="mb-0">
                        <button class="btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseOne">
                            Jago
                        </button>
                    </h5>
                </div>

                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                    <div class="card-body">
                        <h3>Jakarta Barat</h3>
                        <h5>Jl. Ankgasa 1, Blok B, No. 47a-49b</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-2 mb-4 col-sm-3 bg bg-light rounded-4">
        <h4 class="pt-2 d-flex justify-content-center">QRIS</h4>
        <img src={{ asset('/images/paymentAssets/dummyQR.jpg') }} alt="" class="mx-auto img-fluid d-block">
    </div>
</div>

<div class="m-3 d-flex justify-content-center bg bg-success bg-opacity-75">
    <h4 class="mt-2 p-2 d-flex justify-content-center">Waiting for Payment</h4>
    <div class="m-3 spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

<div class="m-3 bg bg-light rounded-4">
    <h4 class="pt-2 d-flex justify-content-center">Cart</h4>
    <h6 class="d-flex justify-content-center">#12d235f3</h6>
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
        <hr class="border border-dark">
        <div class="d-flex justify-content-center">
            <div>
                Waktu:
            </div>
            <div class="ms-2">
                14.42.50
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div>
                Metode Pembayaran:
            </div>
            <div class="ms-2">
                Gojek
            </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center bg bg-success bg-opacity-75">
    <h4 class="mt-2 p-2 d-flex justify-content-center">Payment Success</h4>
</div>
@endsection