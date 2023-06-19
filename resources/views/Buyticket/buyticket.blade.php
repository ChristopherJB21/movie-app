@extends('layouts.app')
@section('content')

<div class="flex-container">
    <div>
        <div class="d-flex justify-content-center my-10 pt-3" style="font-family: verdana">
            <p class="fs-1 fw-bold">Avengers: Endgame</p>
        </div>

        <div style="font-family: 'Montserrat', sans-serif">
            <div class="d-flex justify-content-center my-10 align-items-center">
                <p class="fs-3">
                    Jumlah Ticket: 1
                    <br>
                    Cinema: Nama Cinema
                    <br>
                    Studio: 2
                    <br>
                    Date: 20 January 2023, 12:30 WIB
                    <br>
                    Total Payment: Rp. 200.000,00
                </p>
            </div>

            <div class="d-flex justify-content-center">
                <p class="fs-2 mb-1">Choose Your Seat</p>
            </div>

            <div class="d-flex justify-content-center">
                <div class="d-flex justify-content-center w-50">
                    <div class="input-group w-25 me-2">
                    <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                        <option selected>Seat</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                    </select>
                    </div>

                    <div class="input-group w-25 ms-2">
                    <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                        <option selected>Seat Num</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-5">
                    <a type="button" class="btn btn-success btn-lg me-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Confirm Order</a>
                    <a type="button" class="btn btn-danger btn-lg ms-3" href={{ url('/movie') }}>Cancel</a>
            </div>
        </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Order Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <p class="fs-4 fw-bold mb-0">Avengers: Endgame</p>
                    Jumlah Ticket: 1
                    <br>
                    Cinema: Nama Cinema
                    <br>
                    Studio: 2
                    <br>
                    Seat: A1
                    <br>
                    Date: 20 January 2023, 12:30 WIB
                    <br>
                    <br>
                    Administration Fee: Rp. 5.000,00
                    <br>
                    Total Payment: Rp. 205.000,00
            </div>
            <div class="modal-footer">
                <a type="button" class="btn btn-success" href={{ url('/') }}>Buy Ticket</a>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection