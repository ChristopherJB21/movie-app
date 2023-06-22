@extends('layouts.app')
@section('content')
    <div class="mt-5 flex-container min-vh-75 d-flex justify-content-center align-items-center">
        <div class="w-80 d-flex justify-content-around align-items-center">
            <div>
                <img src={{ asset($movie->poster) }} class="ms-2 me-5 img-fluid" alt="Responsive image" width="400">
            </div>

            <div>
                <div class="d-flex justify-content-center my-10 pt-3" style="font-family: verdana">
                    <p class="fs-1 fw-bold text-nowrap">{{ $movie->title }}</p>
                </div>

                <div style="font-family: 'Montserrat', sans-serif">
                    <div class="w-100 d-flex justify-content-center my-10 align-items-center">
                        <form action={{url('/ticket/buyticket')}} method="post">
                            @csrf
                            <input type="hidden" name="IDUser" id="IDUser" value={{ $User->id }}>
                            <input type="hidden" name="IDTicket" id="IDTicket" value={{ $ticket->id }}>
                            <input type="hidden" name="Price" id="Price" value={{ $ticket->price }}>
                            <table class="table-light fs-5 w-100 text-nowrap">
                                <tr class="mt-5">
                                    <td colspan="2" class="w-50 table-light">Jumlah Ticket</td>
                                    <td class="table-light">:
                                        <input type="number" name="txtQuantity" id="txtQuantity" value="1">
                                    </td>
                                </tr>
                                <tr class="mt-5">
                                    <td colspan="2" class="w-50 table-light">Cinema</td>
                                    <td class="table-light">: {{ $cinema->name }}</td>
                                </tr>
                                <tr class="mt-5">
                                    <td colspan="2" class="w-50 table-light">Date</td>
                                    <td class="table-light">:
                                        {{ date('l, d F Y', strtotime($ticket->date)) . ' ' . date('H:i', strtotime($ticket->time)) }}
                                    </td>
                                </tr>
                                <tr class="mt-5">
                                    <td colspan="2" class="w-50 table-light">Price</td>
                                    <td class="table-light">: Rp. {{ $ticket->price }},00</td>
                                </tr>
                                <tr class="mt-5" id="fieldTotalPayment" name="fieldTotalPayment">
                                    <td colspan="2" class="w-50 table-light">Total Payment</td>
                                    <td class="table-light">: Rp. {{ $ticket->price }},00</td>
                                </tr>
                            </table>
                            <div class="d-flex justify-content-center mt-5">
                                <button type="submit" class="btn btn-success btn-lg me-3">Confirm Order</button>
                                <a type="button" class="btn btn-danger btn-lg ms-3" href={{ url('/movie') }}>Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('js/buyTicket.js') }}"></script>
    </div>
@endsection
