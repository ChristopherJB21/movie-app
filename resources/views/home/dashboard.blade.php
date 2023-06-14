@extends('layouts.app')
@section('content')
        <div class="container">
            <div class="row">
                <div>
                    <a href="LinkPromo">
                        <img src="images/movieAssets/PROMO 1.png" class="img-fluid" alt="Responsive image">
                    </a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="flex-column container">
                <div class="row">
                    <div class="my-3">
                        <h1>New Arrival</h1>
                        <div class="container">
                            <div class="row">
                              <div class="col-sm">
                                <a href="">
                                    <img src="images/movieAssets/anime-poster-K86JWC.jpg" class="img-fluid" alt="Responsive image">
                                </a>
                              </div>
                              <div class="col-sm">
                                <a href="">
                                    <img src="images/movieAssets/anime-poster-K86JWC.jpg" class="img-fluid" alt="Responsive image">
                                </a>
                              </div>
                              <div class="col-sm">
                                <a href="">
                                    <img src="images/movieAssets/anime-poster-K86JWC.jpg" class="img-fluid" alt="Responsive image">
                                </a>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="heading-twenty bottom-margin-sm">
                    <div class="select-twenty dark-twenty">
                        <select class="custom-select" id="cityChanged" onchange="window.location=this.options[this.selectedIndex].value">
                            <option data-id="1" value="">AMBON</option>
                            <option data-id="2" value="">BALIKPAPAN</option>
                            <option data-id="3" value="">BANDUNG</option>
                            <option data-id="4" value="">BANJARMASIN</option>
                            <option data-id="5" value="">BATAM</option>
                            <option data-id="6" value="">BEKASI</option>
                            <option data-id="7" value="">BENGKULU</option>
                            <option data-id="8" value="">BOGOR</option>
                            <option data-id="9" value="">CIANJUR</option>
                        </select>
                    </div>
                    <input type="text" name="cinema-search" id="cinemaSearch" placeholder="Search...">
                </div>
            </div>
        </div>
@endsection
