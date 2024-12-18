@extends('welcome')
@section('title', 'PatunganYuk! - Berbagi Layanan Streaming dan Hemat')
@section('description', 'PatunganYuk! adalah platform online yang membantu Anda berbagi biaya layanan streaming seperti
Netflix, Spotify, Disney+, dan banyak lagi. Hemat uang sambil menikmati akses premium bersama teman atau pengguna
lain.')
@section('content')

<div id="slider" class="slider-element min-vh-0">

    <div class="container">
        <div class="row justify-content-between align-items-center align-items-xl-end">

            <div class="col-lg-6 col-xxl-5 py-5 py-lg-6 my-lg-5 text-center text-lg-start">
                <h1 class="display-4 fw-bolder ls-n-1" data-i18n="headline">Tonton Apa Saja yang Anda Mau, Kapan Saja –
                    Bersama!
                </h1>
                <p id="intro" class="lead fw-normal mb-5" data-i18n="intro">
                    Kenapa harus bayar penuh kalau Anda bisa berbagi pengalaman? Dengan PatunganYuk!, Anda bisa
                    menikmati
                    semua keuntungan Netflix dengan berbagi biaya bersama teman atau pengguna lainnya.
                </p>
                <a href="https://app.patunganyuk.com/user/register?utm_medium=landing-page&utm_source=website&utm_campaign=promotion&utm_term=getstarted-patunganyuk&utm_content=register"
                    id="signUpGetStarted" class="button button-large px-lg-5 py-lg-3 rounded-pill m-0 mb-4"><i
                        class="fa-solid fa-star"></i>Get
                    Started</a>
                <script type="text/javascript">
                    var button = document.getElementById('signUpGetStarted');
                                button.addEventListener(
                                  'click',
                                  function() {
                                    fbq('track', 'Lead', {
                                      content_name: 'User Sign Up',
                                    });
                                  },
                                  false
                                );
                </script>
                <a href="https://wa.me/6285195922910?utm_medium=social&utm_source=website&utm_campaign=patunganyuk-contact-us&utm_term=contact-patunganyuk"
                    class="button button-large px-lg-5 py-lg-3 button-dark button-border button-black border-contrast-500 rounded-pill ms-1 mb-4"><i
                        class="fa-solid fa-headset"></i>Contact Us</a>
            </div>

            <div class="col-lg-6 col-xxl-7">
                <img class=""
                    src="https://res.cloudinary.com/boxity-id/image/upload/q_65/v1723971213/patunganyuk-suppliers/hero_sakmrd.png"
                    title="Featured Image in Patungan" alt="Featured Image in Patungan">
            </div>

        </div>
    </div>

</div>
<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap py-0">

        <div class="border-bottom py-4">
            <div class="container">
                <div class="row align-items-center gy-3">
                    <div class="col-lg-4 d-none d-lg-block">
                        <p class="fw-medium mb-0" id="services_intro"></p>
                    </div>

                    <div class="col-lg-8">
                        <div class="row g-4 align-items-center justify-content-center">
                            <div class="col-md-2 col-4 flex-fill text-center op-08"><img class=""
                                    src="demos/saas-2/images/clients/netflix.svg" title="Service PatunganYuk - Netflix"
                                    alt="Service Patunganyuk - Netflix"></div>
                            <div class="col-md-2 col-4 flex-fill text-center op-08"><img class=""
                                    src="demos/saas-2/images/clients/spotify.webp" title="Service PatunganYuk - Spotify"
                                    alt="Service Patunganyuk - Spotify"></div>
                            <div class="col-md-2 col-4 flex-fill text-center op-08"><img class=""
                                    src="demos/saas-2/images/clients/HBOGO.png" title="Service PatunganYuk - HBO GO"
                                    alt="Service Patunganyuk - HBO GO"></div>
                            <div class="col-md-2 col-4 flex-fill text-center op-08"><img class=""
                                    src="demos/saas-2/images/clients/youtube.webp" title="Service PatunganYuk - Youtube"
                                    alt="Service Patunganyuk - Youtube"></div>
                            <div class="col-md-2 col-4 flex-fill text-center op-08"><img class=""
                                    src="demos/saas-2/images/clients/microsoft.png"
                                    title="Service PatunganYuk - Microsoft" alt="Service Patunganyuk - Microsoft"></div>
                            <div class="col-md-2 col-4 flex-fill text-center op-08"><img class=""
                                    src="demos/saas-2/images/clients/canva.webp" title="Service PatunganYuk - Canva"
                                    alt="Service Patunganyuk - Canva"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="section-services" class="page-section py-5 py-lg-6">

            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-5">
                        <ul class="swiper-links-container list-unstyled">
                            <li class="swiper-tab-link active">
                                <h3 class="swiper-tab-title" data-i18n="steps_title_1">Isi Data Pribadi Anda</h3>
                                <p class="swiper-tab-content" data-i18n="steps_content_1">Mulai dengan mendaftar di
                                    PatunganYuk!
                                    dengan mengisi data pribadi Anda. Masukkan nama, email, dan informasi lainnya yang
                                    diperlukan
                                    untuk membuat akun Anda. Prosesnya cepat dan mudah, memastikan Anda siap untuk
                                    berbagi layanan
                                    streaming favorit Anda dalam waktu singkat.</p>
                                <div class="swiper-pagination-progress">
                                    <span class="swiper-pagination-bar"></span>
                                    <span class="swiper-pagination-bar-active"></span>
                                </div>
                            </li>
                            <li class="swiper-tab-link">
                                <h3 class="swiper-tab-title" data-i18n="steps_title_2">Pilih Produk</h3>
                                <p class="swiper-tab-content" data-i18n="steps_content_2">Setelah akun Anda siap, pilih
                                    layanan
                                    streaming yang ingin Anda bagikan. Baik itu Netflix, Spotify, Disney+, atau layanan
                                    lain, Anda
                                    dapat memilih dan menemukan mitra berbagi yang sesuai dengan preferensi Anda. Kami
                                    menawarkan
                                    berbagai opsi untuk memastikan Anda mendapatkan manfaat terbaik dari setiap layanan.
                                </p>
                                <div class="swiper-pagination-progress">
                                    <span class="swiper-pagination-bar"></span>
                                    <span class="swiper-pagination-bar-active"></span>
                                </div>
                            </li>
                            <li class="swiper-tab-link">
                                <h3 class="swiper-tab-title" data-i18n="steps_title_3">Bayar dan Nikmati Platform</h3>
                                <p class="swiper-tab-content" data-i18n="steps_content_3">Selesaikan proses dengan
                                    melakukan
                                    pembayaran. Setelah pembayaran selesai, Anda dapat segera mulai menikmati layanan
                                    streaming yang
                                    telah Anda pilih, bersama mitra berbagi Anda. Semudah itu!</p>
                                <div class="swiper-pagination-progress">
                                    <span class="swiper-pagination-bar"></span>
                                    <span class="swiper-pagination-bar-active"></span>
                                </div>
                            </li>
                        </ul>
                        <!-- <div class="swiper-pagination swiper-tab-pagination"></div> -->
                    </div>
                    <div class="col-md-6">
                        <div id="swiper-tab" class="swiper_wrapper h-auto">
                            <div class="swiper swiper-tab-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- <img
                          src="https://res.cloudinary.com/boxity-id/image/upload/q_65/v1723971535/patunganyuk-suppliers/app_rbmy5j.svg"
                          alt="How to order in Patungan Yuk" title="How to order in Patungan Yuk"
                          class="w-100 rounded-xxl "> -->
                                        <dotlottie-player src="json/filling_out.json" background="transparent" speed="1"
                                            style="width: 800px;" loop autoplay>
                                        </dotlottie-player>
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- <img
                          src="https://res.cloudinary.com/boxity-id/image/upload/q_65/v1723971534/patunganyuk-suppliers/features_sg80uz.svg"
                          alt="How to order in Patungan Yuk" title="How to order in Patungan Yuk"
                          class="w-100 rounded-xxl bg-success bg-opacity-10 "> -->
                                        <dotlottie-player src="json/choosing_career.json" background="transparent"
                                            speed="1" style="width: 800px;" loop autoplay>
                                        </dotlottie-player>
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- <img
                          src="https://res.cloudinary.com/boxity-id/image/upload/q_65/v1723971536/patunganyuk-suppliers/pay_emejwp.jpg"
                          alt="How to order in Patungan Yuk" title="How to order in Patungan Yuk"
                          class="w-100 rounded-xxl "> -->
                                        <dotlottie-player src="json/pay_qr.json" background="transparent" speed="1"
                                            style="width: 600px;" loop autoplay>
                                        </dotlottie-player>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="row justify-content-center mt-lg-6 mt-5" id="services-product">
                    <div class="col-lg-8 text-center">
                        <h3 class="display-4 fw-bolder mb-3 ls-n-2" data-i18n="best_product_title">Produk Terbaik Kami
                        </h3>
                        <p class="lead mb-5 mb-lg-6" data-i18n="best_product_content">Nikmati layanan streaming premium
                            seperti
                            Netflix dan Spotify dengan harga yang lebih terjangkau. Dengan PatunganYuk!, bagikan
                            langganan dengan
                            mudah, kelola akun dengan aman, dan dapatkan nilai terbaik untuk uang Anda. Bergabunglah
                            dengan kami
                            dan nikmati hiburan tanpa batas bersama.</p>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-lg-12">
                        <!-- Section Featured Boxes
								============================================= -->
                        <div class="row align-items-stretch g-4">
                            <div class="col-xl-7">
                                <div class="d-flex p-5 position-relative bg-contrast-200 flex-column h-100 overflow-hidden"
                                    style="border-radius: 20px;">
                                    <div class="row">
                                        <div class="col-xl-7 col-md-8">
                                            <span
                                                class="badge rounded-pill text-bg-light px-3 py-2 mb-2 fw-normal">Netflix</span>
                                            <h3 class="fs-2 mb-3 fw-bolder" data-i18n="netflix_title">
                                                Hiburan Tak Terbatas, Semua dalam Satu Tempat, Dibagikan dengan Teman
                                            </h3>
                                            <div>
                                                <a href="https://app.patunganyuk.com/user/register?utm_medium=landing-page&utm_source=website&utm_campaign=discover-netflix&utm_term=getstarted-patunganyuk&utm_content=register"
                                                    class="button button-large button-border button-dark button-black rounded-pill m-0"
                                                    id="userDiscoverNetflix">Discover
                                                    Netflix</a>
                                                <script type="text/javascript">
                                                    var button = document.getElementById('userDiscoverNetflix');
                                                                    button.addEventListener(
                                                                      'click',
                                                                      function() {
                                                                        fbq('track', 'Lead', {
                                                                          content_name: 'User Discover Netflix',
                                                                        });
                                                                      },
                                                                      false
                                                                    );
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                    <svg class="d-none d-md-block" viewBox="0 0 300 300" width="380" height="380"
                                        style="position: absolute; right: -38px; bottom: -40px; rotate: 180deg;  z-index: auto;">
                                        <path fill="#564d4d"
                                            d="M272.9 27.1c0 135.76-110.04 245.8-245.8 245.8V27.1h245.8z"></path>
                                        <path fill="#000"
                                            d="M232.75 27.1c0 113.59-92.06 205.65-205.65 205.65V27.1h205.65z"></path>
                                        <path fill="#db0000"
                                            d="M188.88 27.1c0 89.36-72.43 161.78-161.78 161.78V27.1h161.78z"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="col-xl-5">
                                <div class="d-flex p-5 position-relative bg-contrast-200 flex-column h-100 overflow-hidden"
                                    style="border-radius: 20px;">
                                    <div>
                                        <span
                                            class="badge rounded-pill text-bg-light px-3 py-2 mb-2 fw-normal">Spotify</span>
                                    </div>
                                    <h3 class="fs-2 mb-3 fw-bolder" data-i18n="spotify_title">Temukan, Streaming, dan
                                        Bagikan – dengan
                                        Biaya yang Lebih Terjangkau</h3>
                                    <div>
                                        <a href="https://app.patunganyuk.com/user/register?utm_medium=landing-page&utm_source=website&utm_campaign=discover-spotify&utm_term=getstarted-patunganyuk&utm_content=register"
                                            id="userDiscoverSpotify"
                                            class="button button-large button-border button-dark button-black rounded-pill m-0">Discover
                                            Spotify</a>
                                        <script type="text/javascript">
                                            var button = document.getElementById('userDiscoverSpotify');
                                                                button.addEventListener(
                                                                  'click',
                                                                  function() {
                                                                    fbq('track', 'Lead', {
                                                                      content_name: 'User Discover Spotify',
                                                                    });
                                                                  },
                                                                  false
                                                                );
                                        </script>
                                    </div>
                                    <svg viewBox="0 0 300 300" width="280" height="280"
                                        style="position: absolute; right: -50px; bottom: -30px; rotate: 180deg;  z-index: auto;">
                                        <path fill="#1db954"
                                            d="M39.63 250.49a5.021 5.021 0 01-4.2-2.27c-.87-.97-3.87-4-6.38-6.48a4.996 4.996 0 01.04-7.16c1.25-1.2 1.85-1.27 5.74-1.69 5.56-.6 9.64-1.09 12.64-1.49-4-4.13-9.48-9.72-14.58-14.91a5.038 5.038 0 01-1.44-3.56c.01-1.33.56-2.6 1.51-3.53 1.6-1.56 2.77-1.48 6.24-1.26 6.72.44 11.73.74 15.46.93-2.61-2.46-5.58-5.17-8.13-7.5-16.92-15.45-19.48-18.31-19.53-21.89-.02-1.52.56-2.92 1.63-3.96a5.01 5.01 0 015.68-.89c7.02 3.45 14.38 6.98 21.13 10.15l-.49-.46c-23.38-22.05-23.47-25.59-23.54-28.18-.04-1.69.58-3.25 1.75-4.38 2.74-2.64 5.93-.94 7.85.08 1.21.64 2.91 1.6 5.19 2.92 4.22 2.43 9.96 5.84 16.04 9.45 3.53 2.1 7.74 4.59 12.03 7.11-13.33-13.73-30.68-31.31-43.52-44.22a4.997 4.997 0 01-.21-6.83 5.001 5.001 0 016.8-.67c11.74 9 24.14 18.2 35.38 26.24-32.52-30.67-39.25-39.9-39.32-45.14-.02-1.76.63-3.37 1.84-4.54 3.01-2.9 6-.81 8.64 1.04 1.46 1.02 3.57 2.52 6.16 4.37 5.15 3.68 12.24 8.78 20.05 14.4 2.28 1.64 4.68 3.37 7.17 5.15-39.64-38.93-44.33-45.64-44.33-49.78 0-1.52.59-2.92 1.65-3.95 3.17-3.06 6.58-.64 9.33 1.3 1.74 1.23 4.2 3.06 7.52 5.59 6.17 4.71 14.7 11.38 23.73 18.43 9.9 7.74 22.88 17.89 34.51 26.76-16.97-17.33-39.44-39.18-53.23-52.59-7.36-7.16-13.72-13.34-18.28-17.85-8.08-7.99-8.74-8.65-8.74-11.14 0-1.35.56-2.67 1.53-3.61 5.19-5 13.45.26 28.9 13.17 11.66 9.74 26.47 23.41 40.79 36.63 10.79 9.96 23.75 21.93 34.28 31-1.36-1.37-2.84-2.85-4.46-4.43-11.26-11.03-25.41-23.86-39.09-36.26-36.15-32.77-42.06-38.9-42.13-43.68-.02-1.57.57-3.03 1.68-4.1a5.005 5.005 0 016.55-.35l44.46 34.67c-.12-.12-.23-.24-.35-.35-28.56-28.93-28.56-31.5-28.55-34.23 0-1.5.58-2.89 1.64-3.91a4.991 4.991 0 016.45-.42l44.19 32.69C105 34.54 103.87 32.16 103.88 29.37c0-1.43.57-2.76 1.59-3.74 3.3-3.19 7.35-.62 11.27 1.87 2.84 1.8 6.73 4.47 11.9 8.15 9.02 6.43 20.34 14.83 31.41 23.06-5.9-5.62-11.38-10.75-14.99-14.12q-13.44-12.57-13.46-15.05c-.01-1.37.54-2.7 1.53-3.65a5.001 5.001 0 016.23-.58c12.54 8.29 25.86 16.95 37.28 24.24-.84-.82-1.63-1.61-2.38-2.34q-13.62-13.4-13.61-15.82c0-1.35.56-2.65 1.53-3.58 3.32-3.21 7.52-1.66 20.23 5.34 2.62 1.45 5.43 3.04 8.32 4.71-6.25-6.76-6.26-8.14-6.27-9.79 0-1.47.56-2.83 1.6-3.83 2.72-2.62 6.4-1.82 13.63.96 3.31 1.28 7.52 3.07 12.57 5.36-1.56-1.84-1.88-2.88-1.89-4.3-.01-1.4.56-2.77 1.56-3.73 2.43-2.34 4.69-1.93 19.39.78 5.57 1.03 13.97 2.58 15.84 2.48-.01 0-1.26.08-2.42 1.21l2.7 2.86c2.12-2 1.91-5.17.38-6.86.22.25 1.27 1.31 1.96 2.01 2.74 2.78 3.48 3.52 3.45 5.66-.02 1.33-.57 2.6-1.53 3.53-2.5 2.42-4.86 2.15-22.17-1.04a4.57 4.57 0 01-.36-.07c10.43 9.75 11.94 11.39 11.97 14.29.01 1.41-.56 2.78-1.57 3.76a5.003 5.003 0 01-5.72.87c-9.56-4.82-20.2-9.9-28.65-13.64 4.32 4.3 10.29 10.09 18.56 17.89 3.07 2.9 3.71 3.5 3.72 5.66 0 1.36-.55 2.67-1.53 3.62-2.95 2.85-5.9 1.16-11.25-1.91-3.16-1.81-7.35-4.31-12.2-7.21-3.29-1.96-7.4-4.42-11.68-6.93 19.08 18.94 19.07 19.81 19.06 22.4 0 1.4-.56 2.7-1.56 3.67-3.32 3.21-6.58 1.23-17.4-5.3-3.44-2.08-7.65-4.69-12.57-7.79 17.3 16.99 21.07 22.46 21.1 26.16.01 1.6-.59 3.07-1.71 4.15-3.12 3.02-6.66.7-9.5-1.17-1.89-1.24-4.54-3.09-8.09-5.65-6.55-4.72-15.27-11.2-24.49-18.06-3.77-2.8-7.96-5.92-12.25-9.09 4.41 4.36 8.7 8.57 12.38 12.19q25.12 24.67 25.11 27.53c0 1.35-.57 2.67-1.54 3.61a4.991 4.991 0 01-6.45.42l-59.22-43.82c15.07 15.12 31.89 31.46 41.15 40.46 4.62 4.49 8.5 8.26 11.23 10.94 5.35 5.26 5.79 5.69 5.79 7.95 0 1.35-.55 2.65-1.53 3.59a5.005 5.005 0 01-6.55.35l-39.43-30.75c29.26 27.38 35.27 35.53 35.36 41.21.03 1.9-.67 3.65-1.97 4.9-4.83 4.66-12.03.06-26.37-12.02-4.43-3.73-9.33-8.05-14.56-12.75 25.49 26.09 25.49 28.81 25.48 31.43 0 1.52-.59 2.93-1.66 3.96-3.56 3.44-8.06.44-13.28-3.04-3.83-2.55-9.04-6.31-15.95-11.48-10.19-7.64-22.52-17.21-34.26-26.38 11.6 11.5 23.54 23.06 31.24 30.51 5.64 5.46 10.51 10.18 13.97 13.58 6.32 6.21 6.98 6.86 6.98 9.25 0 1.35-.56 2.67-1.53 3.61-2.93 2.83-6.18.75-7.74-.25-1-.63-2.37-1.56-4.21-2.82-3.25-2.23-7.79-5.41-13.89-9.74-10.86-7.71-24.53-17.54-36.73-26.32.54.53 1.09 1.07 1.65 1.63 12.67 12.42 27.38 25.87 37.11 34.77q12.02 11 12.05 13.39c.02 1.38-.54 2.71-1.53 3.67-3.72 3.59-9.17 1.2-19.98-5.5-3.79-2.35-8.32-5.33-13.54-8.9 22.56 23.15 22.56 23.83 22.54 26.23a5.046 5.046 0 01-1.54 3.58c-3.32 3.21-6.7 1.29-19.25-5.85-7.31-4.15-16.66-9.7-25-14.64 7.67 7.4 17.02 15.94 25.8 23.59 1.06.92 1.68 2.24 1.71 3.64s-.52 2.75-1.52 3.73c-3.35 3.24-8.32 1.04-28.6-8.43 13.89 12.72 15.71 14.88 15.75 18.05.02 1.46-.56 2.88-1.6 3.88-1.69 1.63-2.16 2.08-20.09 1.01l1.29 1.32q11.86 12.16 11.83 14.49a5.044 5.044 0 01-1.53 3.54c-1.35 1.31-2.11 2.04-17.48 3.85 1.24 1.52 1.37 2.25 1.36 3.51 0 1.35-.56 2.64-1.53 3.58s-2.22 1.41-3.47 1.41zm-4.84-3.73c.08.33.2.64.35.94-.15-.3-.26-.62-.35-.94z">
                                        </path>
                                    </svg>
                                </div>
                            </div>

                            <div class="col-xl-5">
                                <div class="d-flex p-5 position-relative bg-contrast-200 flex-column h-100 overflow-hidden"
                                    style="border-radius: 20px;">
                                    <div class="position-relative z-1">
                                        <div>
                                            <span
                                                class="badge rounded-pill text-bg-light px-3 py-2 mb-2 fw-normal">Youtube</span>
                                        </div>
                                        <h3 class="fs-2 mb-3 fw-bolder" data-i18n="youtube_title">Jelajahi Dunia Video,
                                            Bagikan
                                            Pengalaman</h3>
                                        <div>
                                            <a href="https://app.patunganyuk.com/user/register?utm_medium=landing-page&utm_source=website&utm_campaign=discover-youtube&utm_term=getstarted-patunganyuk&utm_content=register"
                                                id="userDiscoverYoutube"
                                                class="button button-large button-border button-dark button-black rounded-pill m-0">Discover
                                                Youtube</a>
                                            <script type="text/javascript">
                                                var button = document.getElementById('userDiscoverYoutube');
                                                                        button.addEventListener(
                                                                          'click',
                                                                          function() {
                                                                            fbq('track', 'Lead', {
                                                                              content_name: 'User Discover Youtube',
                                                                            });
                                                                          },
                                                                          false
                                                                        );
                                            </script>
                                        </div>
                                    </div>
                                    <svg viewBox="0 0 300 300" width="200" height="200"
                                        style="position: absolute; right: -50px; bottom: -50px; z-index: auto;">
                                        <path fill="#cc181e"
                                            d="M181.82 128.93c16.55-10.49 31.67-23.06 45.08-37.39 1-1.06.76-2.32 0-3.2.99-.92 1.97-1.85 2.94-2.78 2.09-2 .22-5.43-2.1-4.88 1.38-1.48 2.76-2.97 4.11-4.48 2.19-2.44-1.44-5.43-3.83-3.66-1.04-.96-2.84-1.27-4.1.05-1.92 2-3.84 4-5.77 6 .93-1.36 1.86-2.71 2.78-4.08 1.91-2.83-2.2-6.13-4.24-3.3-2.03 2.83-4.07 5.66-6.1 8.48 1.33-2.66 2.63-5.33 3.91-8.02 1.08-2.29-2.1-5.06-4.07-3.2-.75.7-1.47 1.42-2.19 2.14.78-1.91 1.54-3.82 2.28-5.75 1.07-2.77-2.7-5.2-4.59-2.7-3.76 4.96-7.12 10.16-10.2 15.52 1.98-6.56 3.54-13.2 3.63-20.14.03-2.96-4.04-2.84-5.14-.75a177.7 177.7 0 00-1.85 3.64c.46-1.63.91-3.26 1.37-4.88.65-2.31-1.6-4.06-3.32-3.72-.42-1.76-1.36-3.26-3.2-4.23-1.22-.64-3.08.13-3.52 1.42-.38 1.1-.74 2.2-1.11 3.31.03-3.03-4.79-3.58-5.35-.33-.05.31-.11.62-.16.93-.11-3.33-.27-6.67-.52-10-.22-2.99-5.14-3.17-5.32-.09l-.9 15.09c-.56-4.24-1.22-8.48-1.97-12.7-.34-1.92-2.6-2.76-4.07-2.08-1.48-1.44-4.51-1.26-4.56 1.32 0 .23 0 .46-.01.69-.47 25.84.91 51.66 4.25 77.29.23 1.75 1.86 2.6 3.32 2.25-.01.22-.03.44-.05.66a521.81 521.81 0 01-4.13 5.19c-1.85 2.29 1.44 5.89 3.72 3.8.31-.28.62-.57.93-.85.91.91 2.32 1.3 3.31.69.73.27 1.61.23 2.5-.28 1.62-.94 3.23-1.9 4.83-2.87.89.25 1.87.02 2.59-.99.27-.38.54-.75.81-1.13zm2.03-61.18c-.23 1.81-.48 3.62-.73 5.43-1.88 6.59-3.74 13.19-5.59 19.79-.07.24-.14.48-.2.72 1.83-9.51 4.1-18.92 6.79-28.22l-.27 2.29z">
                                        </path>
                                        <path fill="#666666"
                                            d="M212.19 242.21c-.06-6.07-.25-12.13-.54-18.18 1.48.06 3.11-.98 3.03-2.9-.11-2.69-.25-5.38-.41-8.07-.59-11.69-1.19-23.38-1.78-35.07a838.61 838.61 0 015.24 46.64c.29 3.47 5.53 2.83 5.34-.6-.45-8-.9-16.01-1.36-24.01 1.23 9.03 2.45 18.05 3.68 27.08.47 3.46 5.5 2.83 5.34-.6-.17-3.62-.37-7.25-.57-10.87 1.43 1.66 4.84.71 4.74-2.08-.44-12.11-1.45-24.18-3.02-36.17 1.6 8.26 3.21 16.51 4.81 24.77.65 3.35 5.8 2.87 5.34-.6l-.7-5.2c1.65 1.12 4.38.21 4.19-2.41-.41-5.56-.92-11.12-1.54-16.66 1.45 0 2.91-1.03 2.68-2.89l-.36-2.92c.44-.48.67-1.16.55-2.02-1.46-9.62-2.91-19.24-4.37-28.86-.29-1.88-2.01-2.55-3.43-2.2-1.08-3.62-2.24-7.21-3.5-10.77-.53-1.5-2.17-1.89-3.48-1.47-.18-.92-.37-1.85-.55-2.77-.51-2.59-3.71-2.89-4.91-1.28l-1.35-6.96c-.65-3.35-5.68-2.89-5.34.6.2 2.08.41 4.16.61 6.23-.27-.96-.53-1.91-.81-2.87-.85-2.93-5.64-1.71-5.17 1.27.48 3.08.95 6.17 1.4 9.26-1.58-.38-3.53.67-3.41 2.82.33 5.88.66 11.76 1 17.64-1.06-6.07-2.18-12.13-3.38-18.17-.67-3.38-5.51-2.88-5.34.6l.72 14.23c-.85-4.12-1.75-8.24-2.72-12.34-.77-3.28-5.64-2.94-5.34.6l.15 1.76c-1.68-.61-3.79.32-3.51 2.67 1.09 9.1 2.03 18.21 2.82 27.33-1.6-8.75-3.41-17.46-5.44-26.12-.77-3.28-5.68-2.94-5.34.6 1.2 12.49 2.2 25 2.99 37.52-1.84-11.05-4.05-22.04-6.85-32.93-.77-3-5.48-1.67-5.17 1.27 1.12 10.51 1.99 21.03 2.63 31.58-1.39-9.32-3.12-18.6-5.33-27.79-.8-3.32-5.46-2.93-5.34.6.16 4.57.31 9.14.44 13.71-.4-1.7-.82-3.4-1.27-5.1-.83-3.13-5.24-1.55-5.17 1.27.16 6.22.33 12.45.49 18.67-.98-5.48-2.07-10.94-3.25-16.38-.66-3.06-4.7-2.95-5.27-.24-1.31-2.22-5.02-1.43-4.96 1.62.11 5.72.17 11.44.19 17.16-1.18-8.68-2.62-17.32-4.35-25.92a3.4 3.4 0 00-.26-.78c1.56.78 3.94.18 4-1.9.87-28.7-1.56-57.39-7.37-85.52-.39-1.91-2.77-2.79-4.21-2.04-1.54-1.05-4.34 0-4.36 2.5-.06 7.98-.24 15.96-.52 23.94-.6-3.23-1.23-6.45-1.89-9.66-.07-4.53-.13-9.07-.14-13.6 0-3.02-5.23-3.14-5.32-.09l-.03 1.02c-.78.1-1.49.58-1.84 1.6-2.39 6.82-4.31 13.77-5.79 20.81-.17-7.64-.46-15.27-.88-22.9-.2-3.53-5.29-2.75-5.34.6-.01.79-.02 1.57-.02 2.36-.64.23-1.21.69-1.52 1.39-.22.48-.42.96-.63 1.44a2.76 2.76 0 00-1.26 2.39v.55c-.41.97-.8 1.94-1.19 2.91 0-1.09 0-2.18-.02-3.27-.05-3.02-5.18-3.14-5.32-.09-.31 6.7-.43 13.4-.36 20.1-.36 1.28-.71 2.56-1.05 3.84l-.17-13.54c0-.79-.32-1.36-.79-1.74-.02-1.32-.03-2.64-.06-3.97-.06-3.14-4.33-2.89-5.19-.33-1.52-.92-4.1-.35-4.23 1.81-.33 5.38-.49 10.77-.5 16.15-.58 1.47-1.14 2.96-1.68 4.45-.02-3.25-.06-6.5-.13-9.75-.07-3.02-5.18-3.14-5.32-.09-.16 3.41-.27 6.82-.31 10.23-.36-5.57-.62-11.15-.77-16.74-.09-3.49-5.35-2.8-5.34.6.02 4.31-.03 8.61-.14 12.92-1.1-.19-2.23.22-2.64 1.58-1.9 6.25-3.35 12.61-4.33 19.03-.71-2.38-1.49-4.75-2.36-7.09-.76-2.05-3.29-2.12-4.62-.68-4.6 5.01-5.95 12.1-3.89 18.51.21 2.88.4 5.75.57 8.63-.57.48-.96 1.24-.96 2.27-.02 12.87.56 25.72 1.74 38.53.18 2.02 2.57 2.77 4.09 2.05.52 5.78 1.09 11.55 1.71 17.32.19 1.77 1.58 2.47 2.89 2.28l.24 7.23c.1 3.01 5.17 3.14 5.32.09.27-5.47.35-10.94.26-16.4.33 6.32.72 12.63 1.17 18.94.25 3.5 5.39 2.8 5.34-.6-.15-9.68-.7-19.33-1.64-28.95-.35-8.43-.59-16.87-.72-25.31 2.76 16.66 4.28 33.53 4.53 50.41-.01 4.27-.03 8.55-.04 12.82 0 2.69 4.18 3.08 5.13.97.07 7.15.18 14.3.33 21.44.07 3.06 5 3.09 5.32.09.39-3.6.7-7.2.95-10.8 1.06 2.25 4.88 2.48 5.04-.52.49-9 .66-18.01.5-27.01l.79-42.89c2.42 16.41 3.61 32.98 3.6 49.56-.3 9.67-.72 19.34-1.26 29.01-.19 3.4 5.01 4.25 5.31.78.88-10.01 1.3-20.04 1.3-30.08.44-14.22.61-28.44.54-42.66 1.12 10 1.79 20.04 2.01 30.09l-1.59 40.67c-.13 3.38 4.96 4.28 5.31.78 1.4-13.87 1.94-27.8 1.63-41.71.4-10.34.81-20.68 1.21-31.02.2 1.66.39 3.31.56 4.97-.5 23.28-1.01 46.56-1.51 69.84-.07 3.35 4.79 4.3 5.31.78 3.48-23.57 4-47.53 1.54-71.2.06-2.9.13-5.8.19-8.7 2.08 14.98 3.46 30.06 4.12 45.17l.25 34.47c.02 3.02 5.24 3.14 5.32.09.32-11.41.24-22.82-.24-34.21-.11-14.41-.21-28.82-.32-43.23 2.25 22.89 3.1 45.91 2.48 68.91-.08 2.92 3.79 3.95 4.97 2 .11 3.07.22 6.15.35 9.22.12 3.03 5.06 3.12 5.32.09.71-8.14 1.15-16.29 1.33-24.45.28 7.42.36 14.84.25 22.27-.05 3.02 5.16 3.13 5.32.09.65-11.93 1.1-23.87 1.36-35.82.27 5.59.39 11.19.37 16.79-.12 5.38-.27 10.77-.48 16.15-.13 3.41 5.12 4.25 5.31.78.31-5.64.48-11.29.5-16.93.19-8.85.25-17.71.19-26.57 2.35 17.17 3.76 34.47 4.18 51.82.09 3.46 5.42 2.83 5.34-.6v-.19c1.09 2.02 5.04 1.14 5.06-1.8.02-2.88.03-5.77.03-8.65.05-18.02-.1-36.05-.47-54.07 2.61 19.72 3.87 39.63 5.11 59.47.19 2.99 5.21 3.16 5.32.09.67-18.04.65-36.09-.08-54.12 2.37 16.68 4.02 33.47 5.67 50.21.35 3.51 5.37 2.78 5.34-.6-.16-17.43-.71-34.84-1.65-52.24 2.56 18.04 4.24 36.21 5 54.44.15 3.51 5.32 2.78 5.34-.6.02-5.83-.02-11.66-.12-17.5l1.51 17.35c.31 3.51 5.37 2.79 5.34-.6zm-68.65-88.19c-.54-3.28-1.12-6.56-1.75-9.82-.12-.6-.37-1.08-.69-1.44.03-8.6-.02-17.19-.17-25.78.03-3.72.08-7.44.14-11.16 1.49 15.88 2.6 31.79 3.3 47.73.01.27.07.52.15.75-.31-.16-.64-.25-.98-.27zm-20.8-54.77c-.66 6.52-1.5 13.02-2.5 19.5.35-7.48 1.22-14.92 2.63-22.26-.04.92-.09 1.84-.13 2.76zm-14.42-4.66c-.18 5.81-.48 11.61-.89 17.41-.18-3.34-.31-6.68-.38-10.03.05-1.21.09-2.42.12-3.63.37-1.25.75-2.5 1.15-3.75zm-41.4 42.54c-.25.22-.47.49-.62.82-.2-.78-.39-1.55-.59-2.33-.26-.98-.88-1.49-1.6-1.66l-1.02-6.19c-.09-.52-.28-.95-.54-1.29.09-1.33.38-2.64.86-3.89 1.5 4.76 2.67 9.61 3.51 14.54zm26.17 43.3c.12 1.34.25 2.68.35 4.02-.12-1.12-.23-2.25-.36-3.37v-.65zm-5.22-56.86c.43-1.76.89-3.51 1.38-5.25-.28 3.76-.62 7.52-1.01 11.27-.14-2-.27-4.01-.37-6.01zm-7.54 18.88c.13.1.27.18.41.26.19 1.3.37 2.61.57 3.91.27 1.74 2.08 2.57 3.52 2.25l.18 1.26c-1.15.23-2.16 1.21-2.16 2.84v2.48c-.76-4.34-1.59-8.67-2.51-12.98zm13.43 3.77c-.2-1.05-.99-1.78-1.91-2.11.22-1.54.43-3.08.64-4.63.1.71.2 1.41.31 2.12.23 1.51 1.63 2.33 2.93 2.32-.08 4.14-.15 8.28-.23 12.43-.53-3.38-1.11-6.76-1.74-10.12zm7.88-6.74c1.12.05 2.22-.54 2.54-1.87.19 5.71.35 11.41.46 17.12-.88-5.1-1.88-10.19-3-15.25zm8.69-1.72c.46-3.7.87-7.41 1.24-11.11.27 4.43.55 8.86.82 13.29.08 1.3 1.07 2.06 2.17 2.27-.06.22-.11.45-.12.72l-.57 14.5c-.99-6.59-2.17-13.15-3.55-19.67zm17.66 12.35c.22-.19.4-.42.53-.7l.03 4.15c-.19-1.15-.37-2.31-.56-3.46zm42.56 91.4l-1.05-40.29c.92 12.34 1.08 24.77 1.07 37.15 0 1.05 0 2.1-.01 3.14z">
                                        </path>
                                        <path fill="#212B50"
                                            d="M236.9 211.85c16.78-28.74 16.33-65.02.03-93.86a87.575 87.575 0 00-5.7-8.8c-.03-1.88-2.26-3.72-4.3-2.29l-39.5 27.67c-6.44 4.51-12.87 9.02-19.31 13.53-3.22 2.25-6.44 4.51-9.66 6.76-2.02 1.41-4.06 3.09-6.33 4.14l-1.29-93.57c2.79-.92 2.07-5.62-1.16-5.21-35.55 4.49-69.71 22.59-87.64 54.51-8.02 14.28-12.14 30.62-11.24 47.01.51 9.23 2.5 18.33 5.08 27.19 2.72 9.32 5.94 18.63 10.44 27.25 4.42 8.46 10.13 16.2 17.7 22.1 7 5.45 15.15 9.36 23.4 12.52 15.11 5.77 31.25 8.87 47.44 8.59 16.28-.28 32.42-4.32 46.62-12.37 14.66-8.31 26.93-20.63 35.42-35.16zm-71.18 41.37c-14.95 1.9-30.24.42-44.74-3.59-16.04-4.44-32.68-11.61-43.1-25.11-5.69-7.37-9.59-15.9-12.77-24.6-3.05-8.34-5.68-16.92-7.34-25.65-3.06-16.05-1.91-32.15 4.3-47.33 12.92-31.56 42.88-52.06 75.5-59.23a134.8 134.8 0 017.93-1.48c.44 31.54.87 63.09 1.31 94.63-.76.95-.7 2.46.05 3.46v.1c.02 1.29.78 2.02 1.72 2.23 1.84 2.13 5.16.04 4.65-2.32 1.79-.71 3.46-1.73 5.09-2.84 3.34-2.28 6.62-4.63 9.93-6.95l20.63-14.45c12.85-9 25.7-18 38.55-27.01 17.51 24.64 21.74 57.91 9.92 85.91-12.42 29.43-40.02 50.21-71.64 54.23z">
                                        </path>
                                        <path fill="#212B50"
                                            d="M162.92 143.33a915.313 915.313 0 0176-58.46c2.85-1.96-.36-6.26-3.21-4.31a915.38 915.38 0 00-69 52.53c-1.93-28.8-2.51-57.69-1.68-86.54 4.54-.61 9.43 2.19 13.38 3.97 6.16 2.78 12.23 5.75 18.2 8.92 12.03 6.39 23.6 13.59 34.7 21.49 2.8 2 6.13-2.23 3.3-4.24a323.196 323.196 0 00-37.65-23.11c-6.43-3.36-12.97-6.5-19.62-9.41-5.22-2.28-11.09-4.46-16.63-1.97-1.88.85-1.94 2.98-1.01 4.25-.82 29.42-.27 58.87 1.74 88.24.06.93.5 1.56 1.09 1.93-.94.8-1.88 1.59-2.82 2.4-2.61 2.24.58 6.56 3.21 4.31z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="d-flex p-5 position-relative bg-contrast-200 flex-column h-100 overflow-hidden"
                                    style="border-radius: 20px;">
                                    <div class="position-relative z-1">
                                        <div>
                                            <span
                                                class="badge rounded-pill text-bg-light px-3 py-2 mb-2 fw-normal">Canva</span>
                                        </div>
                                        <h3 class="fs-2 mb-3 fw-bolder" data-i18n="canva_title">Desain Apa Saja, Bagikan
                                            dengan Indah
                                        </h3>
                                        <div>
                                            <a href="https://app.patunganyuk.com/user/register?utm_medium=landing-page&utm_source=website&utm_campaign=discover-canva&utm_term=getstarted-patunganyuk&utm_content=register"
                                                id="userDiscoverCanva"
                                                class="button button-large button-border button-dark button-black rounded-pill m-0">Discover
                                                Canva</a>
                                            <script type="text/javascript">
                                                var button = document.getElementById('userDiscoverCanva');
                                                                            button.addEventListener(
                                                                              'click',
                                                                              function() {
                                                                                fbq('track', 'Lead', {
                                                                                  content_name: 'User Discover Canva',
                                                                                });
                                                                              },
                                                                              false
                                                                            );
                                            </script>
                                        </div>
                                    </div>
                                    <svg class="d-none d-md-block" viewBox="0 0 300 300" width="280" height="280"
                                        style="position: absolute; right: -38px; bottom: -40px; rotate: 180deg;  z-index: auto;">
                                        <path fill="#564d4d"
                                            d="M272.9 27.1c0 135.76-110.04 245.8-245.8 245.8V27.1h245.8z"></path>
                                        <path fill="#000"
                                            d="M232.75 27.1c0 113.59-92.06 205.65-205.65 205.65V27.1h205.65z"></path>
                                        <path fill="#7df9ff"
                                            d="M188.88 27.1c0 89.36-72.43 161.78-161.78 161.78V27.1h161.78z"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="card rounded-xxl bg-contrast-200 border-0">
                                    <div class="card-body p-5">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <div>
                                                    <span
                                                        class="badge rounded-pill text-bg-light px-3 py-2 mb-3 fw-normal">365
                                                        Solutions</span>
                                                </div>
                                                <h3 class="display-5 fw-bolder ls-n-2" data-i18n="microsoft365_title">
                                                    ekerja dan
                                                    Berkolaborasi Secara Efisien, Dimana Saja</h3>
                                                <p data-i18n="microsoft365_subtitle">
                                                    Dengan PatunganYuk!, bagikan biaya Microsoft 365 dan akses alat
                                                    penting seperti Word,
                                                    Excel, dan PowerPoint. Nikmati penyimpanan cloud dan kolaborasi
                                                    tanpa harga mahal. Mulai
                                                    berbagi hari ini dan tingkatkan produktivitas dengan biaya
                                                    terjangkau.
                                                </p>
                                                <a href="https://app.patunganyuk.com/user/register?utm_medium=landing-page&utm_source=website&utm_campaign=discover-365&utm_term=getstarted-patunganyuk&utm_content=register"
                                                    id="userDiscover365"
                                                    class="button button-large button-border h-bg-black button-dark button-black rounded-pill m-0">Discover
                                                    Microsoft 365</a>
                                                <script type="text/javascript">
                                                    var button = document.getElementById('userDiscover365');
                                                                                    button.addEventListener(
                                                                                      'click',
                                                                                      function() {
                                                                                        fbq('track', 'Lead', {
                                                                                          content_name: 'User Discover 365',
                                                                                        });
                                                                                      },
                                                                                      false
                                                                                    );
                                                </script>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- <img class="" src="demos/saas-2/images/svg/group.svg" title="Microsoft help PatunganYuk"
                              alt="Microsoft help PatunganYuk"> -->
                                                <dotlottie-player src="json/employee_presenting_data.json"
                                                    background="transparent" speed="1" style="width: 500px;" loop
                                                    autoplay>
                                                </dotlottie-player>
                                            </div>
                                        </div>
                                        <div class="line border-black border-width-2"></div>
                                        <div class="row gy-5">
                                            <div class="col-lg-3">
                                                <h3 class="fw-bold ls-n-1 fs-1 lh-sm" data-i18n="core_features">Our Core
                                                    Features</h3>
                                            </div>

                                            <div class="col-lg-3">
                                                <img class="" src="demos/saas-2/images/svg/analysis.svg"
                                                    alt="Features in PatunganYuk" title="Features in PatunganYuk"
                                                    height="52">
                                                <h4 class="mt-4 mb-2 fs-5 fw-bold" data-i18n="coreFeat_title_1">
                                                    Manajemen Akun</h4>
                                                <p class="mb-0" data-i18n="coreFeat_content_1">
                                                    Mudah ngatur akun bareng, pembayaran, dan akses anggota lewat
                                                    platform kami yang gampang
                                                    dipakai.
                                                </p>
                                            </div>
                                            <div class="col-lg-3">
                                                <img class="" src="demos/saas-2/images/svg/paybill.svg"
                                                    alt="Features in PatunganYuk" title="Features in PatunganYuk"
                                                    height="52">
                                                <h4 class="mt-4 mb-2 fs-5 fw-bold" data-i18n="coreFeat_title_2">Berbagi
                                                    Langganan</h4>
                                                <p class="mb-0" data-i18n="coreFeat_content_2">Bagikan biaya layanan
                                                    streaming dan langganan
                                                    lainnya dengan teman-teman secara efisien.</p>
                                            </div>

                                            <div class="col-lg-3">
                                                <img class="" src="demos/saas-2/images/svg/install.svg"
                                                    alt="Features in PatunganYuk" title="Features in PatunganYuk"
                                                    height="52">
                                                <h4 class="mt-4 mb-2 fs-5 fw-bold" data-i18n="coreFeat_title_3">
                                                    Kolaborasi Tanpa Ribet</h4>
                                                <p class="mb-0" data-i18n="coreFeat_content_3">Terhubung dengan teman,
                                                    bagikan langganan,
                                                    dan nikmati layanan favorit bersama dengan mudah.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div id="section-pricing" class="page-section py-5 py-lg-6">
            <div class="container">
                <div class="text-center">
                    <h3 class="display-4 fw-bolder ls-n-3 mb-3 position-relative" data-i18n="pricingText">
                        Streaming Terjangkau: Bayar Lebih Sedikit, Nikmati Lebih Banyak
                    </h3>
                    <p class="lead mb-5 mb-lg-6" data-i18n="pricingDescription">
                        Nikmati akses ke platform streaming top seperti Netflix, Spotify, dan lainnya dengan rencana
                        harga kami
                        yang fleksibel dan ramah di kantong. Dapatkan nilai terbaik tanpa merusak anggaran.
                    </p>
                </div>

                <div class="pricing-tenure-switcher font-primary row align-items-center justify-content-center mb-4"
                    data-container="#pricing-switch">
                    <div class="col-auto">
                        <div class="btn-group rounded-pill position-relative" role="group"
                            aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="switch-toggle-radio" id="switch-toggle-monthly"
                                checked value="monthly">
                            <label class="btn mb-0" for="switch-toggle-monthly"><span>Monthly</span></label>

                            <input type="radio" class="btn-check" name="switch-toggle-radio" id="switch-toggle-annually"
                                value="annually">
                            <label class="btn mb-0" for="switch-toggle-annually"><span>3 Months</span></label>
                        </div>
                    </div>
                </div>

                <div id="pricing-switch" class="row justify-content-center pricing gx-lg-5">

                    <div class="col-xl-5 col-md-6">
                        <span
                            class="badge px-3 py-2 mt-2 me-1 bg-white border border-default text-dark rounded-pill fw-normal position-absolute z-9"
                            style="left: 50px; top: -23px;">Most Popular</span>
                        <div
                            class="pricing-box position-relative rounded-xxl p-5 h-100 d-flex flex-column bg-contrast-0">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <h3 class="fw-bolder fs-1 ls-n-1 mb-1">Netflix Duo</h3>
                                    <p class="mb-0 small lh-base text-contrast-700">Best plan for TV & mobile phone.</p>
                                </div>

                                <div class="col-lg-6">
                                    <div class="pricing-price fw-bolder text-lg-end pt-lg-0 pb-0">
                                        <div class="pts-content pts-content-monthly">{!!
                                            number_format($products[0]['harga_jual'] / 1000, 1) . 'K' !!}<span
                                                class="d-block fs-6 fw-semibold op-05 mb-0 mt-2">per month</span>
                                        </div>
                                        <div class="pts-content pts-content-annually">{!!
                                            number_format(($products[0]['harga_jual'] * 3) / 1000, 1) . 'K' !!}<span
                                                class="d-block fs-6 fw-semibold op-05 mb-0 mt-2">per 3 months</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="pricing-features bg-transparent border-bottom-0 border-width-2 border-black mt-5 pt-5 pb-3">
                                <p class="lead fw-bold mb-3">Included:</p>
                                <ul class="iconlist">
                                    <li class="my-1"><i class="bi-patch-check-fill"></i> <span><strong>1</strong>
                                            Profile
                                            Semi-Private</span></li>
                                    <li class="my-1"><i class="bi-patch-check-fill"></i> <span><strong>4K Ultra HD +
                                                HDR</strong></span></li>
                                    <li class="my-1"><i class="bi-patch-check-fill"></i> <span><strong>Spatial
                                                Audio</strong>
                                            (Immersive Sound)</span></li>
                                    <li class="my-1"><i class="bi-patch-check-fill"></i> <span><strong>2</strong>
                                            Supported Devices
                                            (TV, Computer, Mobile Phone, & Tablet)</span></li>
                                    <li class="my-1"><i class="bi-patch-check-fill"></i> <span><strong>3</strong>
                                            Downloaded
                                            Devices</span></li>
                                </ul>

                            </div>
                            <div class="pricing-action p-0 mt-auto">
                                <a href="https://app.patunganyuk.com/user/register?utm_medium=landing-page&utm_source=website&utm_campaign=discover-pricing-netflix&utm_term=getstarted-patunganyuk&utm_content=register"
                                    id="userDiscoverByPricingNetflix"
                                    class="button fw-semibold w-100 py-3 px-4 d-flex justify-content-between rounded-pill mx-0">Get
                                    Started <i class="bi-arrow-right"></i></a>
                                <script type="text/javascript">
                                    var button = document.getElementById('userDiscoverByPricingNetflix');
                                                                        button.addEventListener(
                                                                          'click',
                                                                          function() {
                                                                            fbq('track', 'Lead', {
                                                                              content_name: 'User Discover By Pricing Netflix',
                                                                            });
                                                                          },
                                                                          false
                                                                        );
                                </script>
                            </div>
                            <img src="demos/saas-2/images/svg/pricing-bg.svg" title="Pricing Patungan"
                                alt="Pricing Patungan" class="pricing-bg ">
                        </div>

                    </div>

                    <div class="col-xl-5 col-md-6">
                        <div
                            class="pricing-box rounded-xxl p-5 h-100 d-flex flex-column border-0 bg-color bg-opacity-10">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <h3 class="fw-bolder fs-1 ls-n-1 mb-1">Spotify Premium</h3>
                                    <p class="mb-0 small lh-base text-contrast-700">Your Music, Your Way – With Friends
                                    </p>
                                </div>

                                <div class="col-lg-6">
                                    <div class="pricing-price fw-bolder text-lg-end pt-lg-0 pb-0">
                                        <div class="pts-content pts-content-monthly">{!!
                                            number_format($products[2]['harga_jual'] / 1000, 1) . 'K' !!}<span
                                                class="d-block fs-6 fw-semibold op-05 mb-0 mt-2">per month</span></div>
                                        <div class="pts-content pts-content-annually">{!!
                                            number_format(($products[2]['harga_jual'] * 3) / 1000, 1) . 'K' !!}<span
                                                class="d-block fs-6 fw-semibold op-05 mb-0 mt-2">per 3 months</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="pricing-features bg-transparent border-bottom-0 border-width-2 border-dark mt-5 pt-5 pb-3">
                                <p class="lead fw-bold mb-3">Included:</p>
                                <ul class="iconlist">
                                    <li class="my-1"><i class="bi-patch-check-fill"></i> <span><strong>Login</strong>
                                            with your
                                            personal account, not someone else's</span></li>
                                    <li class="my-1"><i class="bi-patch-check-fill"></i> <span><strong>Invitation
                                                link</strong> to
                                            join the premium group will be sent via registered WhatsApp</span></li>
                                </ul>

                            </div>
                            <div class="pricing-action p-0 m-0 mt-auto">
                                <a href="https://app.patunganyuk.com/user/register?utm_medium=landing-page&utm_source=website&utm_campaign=discover-pricing-spotify&utm_term=getstarted-patunganyuk&utm_content=register"
                                    id="userDiscoverByPricingSpotify"
                                    class="button fw-semibold w-100 py-3 px-4 d-flex justify-content-between rounded-pill mx-0">Get
                                    Started <i class="bi-arrow-right"></i></a>
                                <script type="text/javascript">
                                    var button = document.getElementById('userDiscoverByPricingSpotify');
                                                                            button.addEventListener(
                                                                              'click',
                                                                              function() {
                                                                                fbq('track', 'Lead', {
                                                                                  content_name: 'User Discover By Pricing Spotify',
                                                                                });
                                                                              },
                                                                              false
                                                                            );
                                </script>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div id="section-faqs" class="page-section my-5">
            <div class="container">
                <div class="row justify-content-between position-relative">
                    <div class="col-lg-5">
                        <h3 class="display-3 ls-n-3 fw-bolder mb-3" data-i18n="faq_title">Pertanyaan yang Sering
                            Diajukan</h3>
                        <p class="lead op-08 mb-5" data-i18n="faq_description">Temukan jawaban cepat untuk pertanyaan
                            umum Anda
                            dan lihat bagaimana PatunganYuk! dapat meningkatkan pengalaman streaming Anda. Tim dukungan
                            kami siap
                            membantu jika diperlukan.</p>
                        <!-- <img class="" src="demos/saas-2/images/svg/faqs.svg" title="FAQs PatunganYuk" alt="FAQs PatunganYuk"> -->
                        <dotlottie-player src="json/faq.json" background="transparent" speed="1" style="height: 500px;"
                            loop autoplay>
                        </dotlottie-player>
                    </div>
                    <div class="col-lg-6 bg-contrast-0 p-5 rounded-xxl">
                        <div class="toggle">
                            <div class="toggle-header">
                                <div class="toggle-title" data-i18n="faq_howItWorks_title">
                                </div>
                                <div class="toggle-icon">
                                    <i class="toggle-closed fa-solid fa-plus"></i>
                                </div>
                            </div>
                            <div class="toggle-content" data-i18n="faq_howItWorks_content">
                            </div>
                        </div>
                        <div class="line border-contrast-300 my-4"></div>
                        <div class="toggle">
                            <div class="toggle-header">
                                <div class="toggle-title" data-i18n="faq_joinGroup_title">
                                </div>
                                <div class="toggle-icon">
                                    <i class="toggle-closed fa-solid fa-plus"></i>
                                </div>
                            </div>
                            <div class="toggle-content" data-i18n="faq_joinGroup_content">
                            </div>
                        </div>

                        <div class="line border-contrast-300 my-4"></div>

                        <div class="toggle">
                            <div class="toggle-header">
                                <div class="toggle-title" data-i18n="faq_paymentMethods_title">
                                </div>
                                <div class="toggle-icon">
                                    <i class="toggle-closed fa-solid fa-plus"></i>
                                </div>
                            </div>
                            <div class="toggle-content" data-i18n="faq_paymentMethods_content">
                            </div>

                            <div class="line border-contrast-300 my-4"></div>

                            <div class="toggle">
                                <div class="toggle-header">
                                    <div class="toggle-title" data-i18n="faq_accountSecurity_title">
                                    </div>
                                    <div class="toggle-icon">
                                        <i class="toggle-closed fa-solid fa-plus"></i>
                                    </div>
                                </div>
                                <div class="toggle-content" data-i18n="faq_accountSecurity_content">
                                </div>

                                <div class="line border-contrast-300 my-4"></div>

                                <div class="toggle">
                                    <div class="toggle-header">
                                        <div class="toggle-title" data-i18n="faq_cancelGroup_title">
                                        </div>
                                        <div class="toggle-icon">
                                            <i class="toggle-closed fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                    <div class="toggle-content" data-i18n="faq_cancelGroup_content">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="section-blog" class="page-section pb-5"
                        style="background: linear-gradient(to bottom, transparent 40%, rgba(var(--bs-primary-rgb), .1) 40%);">
                        <div class="container py-5">
                            <div class="row justify-content-center text-center p-lg-6 p-5 rounded-xxl gx-0 dark mt-5 mt-lg-6"
                                style="background: url('demos/saas-2/images/new/footer-promo.svg'); background-position: center center; background-size: cover;">
                                <div class="col-lg-8 text-center">
                                    <div class="position-relative z-1">
                                        <h3 class="display-4 fw-bolder text-white mb-3 ls-n-1">{{ $callToActionId }}
                                        </h3>
                                        <p class="lead">
                                            {{ $callToActionDescriptionId }}
                                        </p>

                                        <a href="https://app.patunganyuk.com/user/register?utm_medium=landing-page&utm_source=website&utm_campaign=cta-patungan&utm_term=getstarted-patunganyuk"
                                            class="button button-xlarge bg-white text-dark rounded-pill h-op-09 m-0 px-5 py-3">Get
                                            Started <i class="fa-solid fa-arrow-right ms-1"></i></a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
</section><!-- #content end -->
@endsection
