@extends('layouts.app')
@section('content')

<div>
    <div class="d-flex justify-content-center my-10 pt-3" style="font-family: verdana">
        <p class="fs-1 fw-bold text-nowrap">Payment</p>
    </div>
    <div class="d-flex justify-content-center flex-column">
        <div class="d-flex justify-content-center " style="font-family: 'Montserrat', sans-serif">
            <p class="fs-3 text-nowrap mb-0">How do you want to pay?</p>
        </div>
        <div class="d-flex justify-content-center align-items-center flex-column mt-3" style="font-family: 'Montserrat', sans-serif">
            <p class="fs-3 text-nowrap mb-0">Total payment :</p>
            <p class="fs-3 text-nowrap mb-0">Rp. 205.000,00</p>
        </div>
        <div class="d-flex justify-content-center align-items-center flex-column">
           <!-- content bawah -->
            <div class="d-flex justify-content-around align-items-center w-75 my-5">
                 <!-- shopee pay -->
                <div class="w-20 d-flex justify-content-around align-items-center border p-2 rounded bg-borderPayment">
                    <div class="d-flex justify-content-around">
                        <div class="form-check d-flex justify-content-center align-items-center pe-3">
                            <input class="form-check-input" type="radio" name="paymentType" id="shopeePay" value="shopeePay">
                        </div>
                        <div class="line"></div>
                    </div>
                    <div>
                        <div>
                            <label class="form-check-label" for="shopeePay">
                                ShopeePay
                            </label>
                        </div>
                        <div>
                            083147284728
                        </div>
                    </div>
                </div>
            
                <!-- ovo -->
                <div class="w-20 d-flex justify-content-around align-items-center border p-2 rounded bg-borderPayment">
                    <div class="d-flex justify-content-around">
                        <div class="form-check d-flex justify-content-center align-items-center pe-3">
                            <input class="form-check-input" type="radio" name="paymentType" id="ovo" value="ovo">
                        
                        </div>
                        <div class="line"></div>
                    </div>
                    <div>
                        <div>
                            <label class="form-check-label " for="ovo">
                                OVO
                            </label>
                        </div>
                        <div>
                            083147284728
                        </div>
                    </div>
                </div>
                <!-- gopay -->
                <div class="w-20 d-flex justify-content-around align-items-center border p-2 rounded bg-borderPayment">
                    <div class="d-flex justify-content-around">
                        <div class="form-check d-flex justify-content-center align-items-center pe-3">
                            <input class="form-check-input" type="radio" name="paymentType" id="gopay" value="gopay">
                        
                        </div>
                        <div class="line"></div>
                    </div>
                    <div>
                        <div>
                            <label class="form-check-label " for="gopay">
                                GoPay
                            </label>
                        </div>
                        <div>
                            083147284728
                        </div>
                    </div>
                </div>
           </div>
           <!-- content bawah -->
           <div class="d-flex justify-content-around align-items-center w-75 ">
                 <!-- dana -->
                <div class="w-20 d-flex justify-content-around align-items-center border p-2 rounded bg-borderPayment">
                    <div class="d-flex justify-content-around">
                        <div class="form-check d-flex justify-content-center align-items-center pe-3">
                            <input class="form-check-input" type="radio" name="paymentType" id="dana" value="dana">
                        
                        </div>
                        <div class="line"></div>
                    </div>
                    <div>
                        <div>
                            <label class="form-check-label " for="dana">
                                Dana
                            </label>
                        </div>
                        <div>
                            083147284728
                        </div>
                    </div>
                </div>
            
                <!-- VA BCA -->
                <div class="w-20 d-flex justify-content-around align-items-center border p-2 rounded bg-borderPayment">
                    <div class="d-flex justify-content-around">
                        <div class="form-check d-flex justify-content-center align-items-center pe-3">
                            <input class="form-check-input" type="radio" name="paymentType" id="va_bca" value="va_bca">
                        
                        </div>
                        <div class="line"></div>
                    </div>
                    <div>
                        <div>
                            <label class="form-check-label " for="va_bca">
                                VA BCA
                            </label>
                        </div>
                        <div>
                            083147284728
                        </div>
                    </div>
                </div>
                <!-- Transfer BCA -->
                <div class="w-20 d-flex justify-content-around align-items-center border p-2 rounded bg-borderPayment">
                    <div class="d-flex justify-content-around">
                        <div class="form-check d-flex justify-content-center align-items-center pe-3">
                            <input class="form-check-input" type="radio" name="paymentType" id="transfer" value="transfer">
                        
                        </div>
                        <div class="line"></div>
                    </div>
                    <div>
                        <div>
                            <label class="form-check-label " for="transfer">
                                Transfer BCA
                            </label>
                        </div>
                        <div>
                            083147284728
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <div class="d-flex justify-content-center align-items-center my-5">
            <button type="button" class="btn btn-primary btn-lg me-5" data-bs-toggle="modal" data-bs-target="#exampleModal">Pay</button>
            <a type="button" class="btn btn-secondary btn-lg" href={{ url('/movie/buyticket') }}>Cancel</a>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Payment Confirmation</h5>
                        </div>
                        <div class="modal-body">
                                <p class="fs-4 fw-bold mb-0">Avengers: Endgame</p>
                                Total Payment: Rp. 205.000,00
                                <br>
                                Payment Method: OVO
                                <br>
                                <br>
                                Thankyou &#128516
                        </div>
                        <div class="modal-footer">
                            <a type="button" class="btn btn-success" href={{ url('/') }}>Back</a>
                        </div>
                    </div>
                </div>
            </div>

</div>

@endsection