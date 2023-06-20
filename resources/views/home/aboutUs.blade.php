@extends('layouts.app')
@section('content')
    <div class="p-3 m-5 rounded-3 bg-dark-purple text-white" style="--bs-bg-opacity: .7;">
        <div class="container-fluid text-center">
            <div class="row justify-content-center">
                <a href={{ url('/') }}><img src={{ asset('/images/Logo.svg') }}></a>
            </div>

            <main>
                <section class="about">
                    <div class="container">
                        <h1 class="my-3">About Us</h1>
                        <div style="text-align: justify;">
                            <p> Welcome to our movie app! We are passionate about movies and providing you with an
                                exceptional movie-watching experience. Our app is designed to help you discover, explore,
                                and enjoy a wide range of movies from various genres.
                                Whether you're a fan of action, romance, comedy, or thrillers, our app has something for
                                everyone. We strive to bring you the latest and greatest movies, along with classics that
                                never go out of style.
                                With our user-friendly interface, you can easily search for movies, read detailed
                                descriptions, watch trailers, and get information about showtimes and theaters near you. We
                                aim to make your movie-watching journey convenient and enjoyable.</p>
                            <p> Join our community of movie enthusiasts and stay updated with the latest releases, exclusive
                                promotions, and special events. We value your feedback and continuously work to enhance your
                                movie app experience.
                                hank you for choosing our movie app. Sit back, relax, and let the magic of movies transport
                                you to incredible worlds and unforgettable stories.</p>
                            <p> Welcome to our movie app! We are passionate about movies and providing you with an
                                exceptional movie-watching experience. Our app is designed to help you discover, explore,
                                and enjoy a wide range of movies from various genres.
                                Whether you're a fan of action, romance, comedy, or thrillers, our app has something for
                                everyone. We strive to bring you the latest and greatest movies, along with classics that
                                never go out of style.
                                With our user-friendly interface, you can easily search for movies, read detailed
                                descriptions, watch trailers, and get information about showtimes and theaters near you. We
                                aim to make your movie-watching journey convenient and enjoyable.</p>
                            <p> Join our community of movie enthusiasts and stay updated with the latest releases, exclusive
                                promotions, and special events. We value your feedback and continuously work to enhance your
                                movie app experience.
                                Thank you for choosing our movie app. Sit back, relax, and let the magic of movies transport
                                you
                                to incredible worlds and unforgettable stories.</p>
                        </div>
                </section>
            </main>
        @endsection
