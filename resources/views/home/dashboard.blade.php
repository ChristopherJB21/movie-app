@extends('layouts.app')
@section('content')
    <style>
        .row {
            --bs-gutter-x: 0;
        }
    </style>
    <div class="pt-4">
        <div class="row">
            @if (isset($movies))
                @foreach ($movies as $movie)
                    <div class="col-lg-4 text-center my-3">
                        <a href={{ $UserRole == 'Customer' || $UserRole == 'Guest' ? url('/tickets/movie/' . $movie->id) : "#"}}>
                            <img src={{$movie->poster}} style="height: 450px;">
                        </a>
                        <div class="clearfix "> </div>
                        <div class="title text-center mt-2">
                            <b>{{$movie->title}}</b>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
