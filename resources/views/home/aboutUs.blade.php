@extends('layouts.app')
@section('content')

    <!-- CODING DI SINI -->
    <div class="d-flex justify-content-center my-4">

        <div id="carouselExampleControlsNoTouching" class="carousel slide w-80" data-bs-touch="false" data-bs-interval="false">
            <div class="carousel-inner   ">
                <div class="carousel-item active ">
                    <img src="https://t-2.tstatic.net/medan/foto/bank/images/Bioskop-Cinema-XXI-The-Manhattan.jpg"
                        class="d-block w-full " alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://t-2.tstatic.net/medan/foto/bank/images/Bioskop-Cinema-XXI-The-Manhattan.jpg"
                        class="d-block w-full" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://t-2.tstatic.net/medan/foto/bank/images/Bioskop-Cinema-XXI-The-Manhattan.jpg"
                        class="d-block w-full" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="row justify-content-center m-0 p-0">
        <p class=" col-8  text-justify" style="text-align: justify; text-justify: inter-word;">
            Selamat datang di Movie App, destinasi online terbaik untuk pembelian tiket aplikasi. Kami adalah platform
            inovatif yang didedikasikan untuk memudahkan Anda dalam membeli tiket untuk berbagai acara dan hiburan di
            seluruh dunia.
            <br>
            <br>
            Visi kami adalah menghadirkan pengalaman yang luar biasa bagi pengguna kami. Kami percaya bahwa setiap momen
            berharga dalam hidup Anda layak diisi dengan kegembiraan dan kesenangan. Oleh karena itu, kami telah berkomitmen
            untuk menyediakan akses mudah, cepat, dan aman ke berbagai tiket acara langsung, konser, festival musik,
            pertandingan olahraga, teater, bioskop, dan banyak lagi.
            <br>
            <br>
            Apa yang membedakan kami adalah kemudahan penggunaan platform kami. Kami telah merancang situs web dan aplikasi
            kami dengan antarmuka yang intuitif dan ramah pengguna, sehingga Anda dapat dengan mudah menavigasi, mencari,
            dan membeli tiket yang Anda inginkan. Kami juga menawarkan berbagai opsi pembayaran yang aman dan fleksibel,
            sehingga Anda dapat menyesuaikan dengan preferensi Anda sendiri.
            <br>
            <br>
            Kami bermitra dengan penyelenggara acara terkemuka dan agen tiket yang terpercaya untuk memastikan bahwa Anda
            selalu mendapatkan tiket asli dan resmi dengan harga yang kompetitif. Dalam upaya kami untuk memberikan layanan
            terbaik kepada pelanggan, kami menyediakan informasi terkini tentang acara, jadwal pertunjukan, pembaruan artis,
            dan ulasan pengguna, sehingga Anda dapat membuat keputusan yang terinformasi sebelum membeli tiket.
            <br>
            <br>
            Kami sangat menghargai umpan balik dan masukan dari pelanggan kami. Tim dukungan pelanggan kami tersedia untuk
            membantu menjawab pertanyaan Anda, menyelesaikan masalah, atau memberikan saran sepanjang waktu. Kepuasan Anda
            adalah prioritas kami, dan kami berusaha untuk terus meningkatkan layanan kami.
            <br>
            <br>
            Terima kasih telah memilih Movie App sebagai mitra pembelian tiket Anda. Kami berharap Anda menemukan pengalaman
            yang menyenangkan dan tak terlupakan di acara yang Anda pilih. Jika Anda memiliki pertanyaan lebih lanjut atau
            membutuhkan bantuan, jangan ragu untuk menghubungi kami.
        </p>

    </div>
@endsection
<div class="p-3 m-5 rounded-3 bg-dark text-white" style="--bs-bg-opacity: .7; height: 90vh;">
    <div class="container-fluid text-center">
        <div class="row justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" <path
                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
            </svg>
            <a href={{ url('/') }}><img src="images/Logo.svg"></a>
        </div>
        <p></p>
        <p></p>

        <main>
            <section class="about">
                <div class="container">
                    <h1 style="margin-bottom: 70px;">About Us</h1>
                    <div style="text-align: justify;">
                        <p>Welcome to our movie app! We are passionate about movies and providing you with an
                            exceptional movie-watching experience. Our app is designed to help you discover, explore,
                            and enjoy a wide range of movies from various genres.
                            Whether you're a fan of action, romance, comedy, or thrillers, our app has something for
                            everyone. We strive to bring you the latest and greatest movies, along with classics that
                            never go out of style.
                            With our user-friendly interface, you can easily search for movies, read detailed
                            descriptions, watch trailers, and get information about showtimes and theaters near you. We
                            aim to make your movie-watching journey convenient and enjoyable.</p>
                        <p>Join our community of movie enthusiasts and stay updated with the latest releases, exclusive
                            promotions, and special events. We value your feedback and continuously work to enhance your
                            movie app experience.
                            hank you for choosing our movie app. Sit back, relax, and let the magic of movies transport
                            you to incredible worlds and unforgettable stories.</p>

                        <p>Welcome to our movie app! We are passionate about movies and providing you with an
                            exceptional movie-watching experience. Our app is designed to help you discover, explore,
                            and enjoy a wide range of movies from various genres.
                            Whether you're a fan of action, romance, comedy, or thrillers, our app has something for
                            everyone. We strive to bring you the latest and greatest movies, along with classics that
                            never go out of style.
                            With our user-friendly interface, you can easily search for movies, read detailed
                            descriptions, watch trailers, and get information about showtimes and theaters near you. We
                            aim to make your movie-watching journey convenient and enjoyable.</p>
                        Join our community of movie enthusiasts and stay updated with the latest releases, exclusive
                        promotions, and special events. We value your feedback and continuously work to enhance your
                        movie app experience.
                        hank you for choosing our movie app. Sit back, relax, and let the magic of movies transport you
                        to incredible worlds and unforgettable stories


                    </div>
            </section>
        </main>
    @endsection
