
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mustaqil ish</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

<div class="wrapper">
    <!-- header start -->
    <div class="container">
        <div class="header-logo">
            <img src="./img/logo.svg" alt="Logo" class="logo">
            <span class="span-row">Book</span>
        </div>
        <ul class="header-link">
            <li><a href="./about Us.html">Biz haqimizda</a></li>
            <li>
                <a href="./books.html">Kitoblar</a>
                <img src="./img/header.html/tugma.svg" alt="">
                <ul class="dropdown">
                    <li><a href="#">Badiiy adabiyot</a></li>
                    <li><a href="#">Ilmiy adabiyot</a></li>
                    <li><a href="#">Bolalar adabiyoti</a></li>
                </ul>
            </li>
            <li><a href="./book dowland.html">Kitob yuklash</a></li>
            <li><a href="./contact.html">Aloqa</a></li>
        </ul>
        <div class="header-icons">
            <img src="./img/header.html/internet.svg" alt="globe-02">
            <img src="./img/header.html/aloqa.svg" alt="user-circle">
            <a href="./index1.html" class="register-button">Ro'yxatdan o'tish</a>
        </div>
    </div>
    <!-- header and  -->

    <!--  Main satrt -->
    <!-- home section start -->
    <section class="home-content container">
        <div class="hero-body-content">
            <div class="hero-img-content">
                <img src="./img/orqafon.svg" alt="" width="100%">
            </div>
            <div class="hero-section">
                <div class="hero-content">
                    <h1>Lorem Ipsum is simply dummy text of the</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and <br>
                        typesetting industry. Lorem Ipsum has been the <br>
                        industry's standard dummy text ever </p>

                    <div class="search-box">
                        <input type="text" placeholder=" Qidirish...">
                        <button><img src="./img/search1.svg" alt=""></button>
                    </div>

                    <div class="stats">
                        <div><img src="./img/main img/book.svg" alt="">4290 kitoblar</div>
                        <div><img src="./img/main img/audio.svg" alt="">2058 Audiokitoblar</div>
                        <div><img src="./img/main img/hour.svg" alt="">54 jarayonda</div>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="./img/main img/kitob.svg" alt="Books Image">
                </div>
            </div>
        </div>
    </section>
    <!-- home section end -->
    <!--  main and  -->

    <!-- baby book start  -->
    <section class="top-book">
        <div class="container">
            <div class="books">
                <div class="logo-title">
                    <img src="./img/logo2.svg" alt="logo">
                </div>
                <div class="book-title">
                    <h1 class="yozuv">Respublika bolalar kutubxonasi tavsiya etadigan<br>adabiyotlar.</h1>
                    <p class="kichik-yozuv">O’qish uchun tavsiya etiladigan adabiyotlar.</p>
                </div>
            </div>
        </div>


        <div class="container" id="container1">
            <div class="gallery">
                <div class="col-md-3 py-3 py-md-0">
                    <a href="./book dowland.html?book_id=7">
                        <div class="card">
                            <div class="img-logo">
                                <img src="./img/gallery img/kitob1.svg" alt="book image">
                            </div>
                            <div class="card-body">
                                <div class="star text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="teg-title">
                                    <h2>Bola tarbiyasi</h2>
                                    <h2>Xudayberdi To’xtaboyev</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/gallery img/kitob2.svg" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="teg-title">
                                <h2>Bola tarbiyasi</h2>
                                <h2>Xudayberdi To’xtaboyev</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/gallery img/kitob3.svg" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="teg-title">
                                <h2>Bola tarbiyasi</h2>
                                <h2>Xudayberdi To’xtaboyev</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/gallery img/kitob6.svg" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="teg-title">
                                <h2>Bola tarbiyasi</h2>
                                <h2>Xudayberdi To’xtaboyev</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/gallery img/kitob5.svg" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="teg-title">
                                <h2>Bola tarbiyasi</h2>
                                <h2>Xudayberdi To’xtaboyev</h2>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="container" id="container2" style="padding-top: 100px; ">
            <div class="gallery">
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/gallery img/kitob6.svg" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="teg-title">
                                <h2>Bola tarbiyasi</h2>
                                <h2>Xudayberdi To’xtaboyev</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/gallery img/kitob7.svg" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="teg-title">
                                <h2>Bola tarbiyasi</h2>
                                <h2>Xudayberdi To’xtaboyev</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/gallery img/kitob3.svg" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="teg-title">
                                <h2>Bola tarbiyasi</h2>
                                <h2>Xudayberdi To’xtaboyev</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/gallery img/kitob.png " alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="teg-title">
                                <h2>Bola tarbiyasi</h2>
                                <h2>Xudayberdi To’xtaboyev</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <div class="img-baby">
                            <img src="./img/gallery img/kitob10.svg" alt="">
                        </div>
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h2>Bola tarbiyasi</h2>
                            <h2>Xudayberdi To’xtaboyev</h2>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="container" style="border-bottom: 1px solid #ddd;">
            <a href="#" class="link-with-arrow">
                <span>Barchasini ko’rish</span>
                <span class="arrow"><i class="fa-solid fa-arrow-right"></i></span>
            </a>
        </div>

        <!--  badiiy book start -->
        <div class="container">
            <div class="books">
                <div class="logo-title">
                    <img src="./img/badiiy img/logo.svg" alt="logo">
                </div>
                <div class="book-title">
                    <h1 class="yozuv">Badiiy adabiyotlar.</h1>
                    <p class="kichik-yozuv">O'zbek va jahon adabiyotining eng sara asarlari.</p>
                </div>
            </div>
        </div>
        <div class="container" id="container2">
            <div class="gallery">
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/badiiy img/badiy1.svg" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="teg-title">
                                <h2>Bola tarbiyasi</h2>
                                <h2>Xudayberdi To’xtaboyev</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/badiiy img/badiy2.png" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="teg-title">
                                <h2>Bola tarbiyasi</h2>
                                <h2>Xudayberdi To’xtaboyev</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/badiiy img/badiy3.png" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="teg-title">
                                <h2>Bola tarbiyasi</h2>
                                <h2>Xudayberdi To’xtaboyev</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/badiiy img/badiy4.png" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="teg-title">
                                <h2>Bola tarbiyasi</h2>
                                <h2>Xudayberdi To’xtaboyev</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <div class="img-baby">
                            <img src="./img/badiiy img/badiy5.png" alt="">
                        </div>
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h2>Bola tarbiyasi</h2>
                            <h2>Xudayberdi To’xtaboyev</h2>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="container" style="margin-top: 5%;" id="container2">
            <div class="gallery">
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/badiiy img/badiy6.png" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="teg-title">
                                <h2>Bola tarbiyasi</h2>
                                <h2>Xudayberdi To’xtaboyev</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/badiiy img/badiy7.png" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="teg-title">
                                <h2>Bola tarbiyasi</h2>
                                <h2>Xudayberdi To’xtaboyev</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/badiiy img/badiy8.png" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="teg-title">
                                <h2>Bola tarbiyasi</h2>
                                <h2>Xudayberdi To’xtaboyev</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/badiiy img/badiy9.png" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="teg-title">
                                <h2>Bola tarbiyasi</h2>
                                <h2>Xudayberdi To’xtaboyev</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <div class="img-baby">
                            <img src="./img/badiiy img/badiy10.png" alt="">
                        </div>
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h2>Bola tarbiyasi</h2>
                            <h2>Xudayberdi To’xtaboyev</h2>
                        </div>
                    </div>

                </div>

            </div>
        </div>


        <div class="container" style="border-bottom: 1px solid #ddd; margin-top: 30px;">
            <a href="#" class="link-with-arrow">
                <span>Barchasini ko’rish</span>
                <span class="arrow"><i class="fa-solid fa-arrow-right"></i></span>
            </a>
        </div>
        <!--  badiiy and  -->


        <!-- audio start  -->

        <div class="container">
            <div class="books">
                <div class="logo-title">
                    <img src="./img/audio img/logo.svg" alt="logo">
                </div>
                <div class="book-title">
                    <h1 class="writing">Audioresurslar</h1>
                    <p class="kichik-yozuv">Tinglash uchun audioadabiyotlar</p>
                </div>
            </div>
        </div>
        <div class="container" id="container2">
            <div class="gallery">
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/audio img/audio1.png" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="teg-title">
                                <h2>Bola tarbiyasi</h2>
                                <h2>Xudayberdi To’xtaboyev</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/audio img/audio2.png" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="teg-title">
                                <h2>Bola tarbiyasi</h2>
                                <h2>Xudayberdi To’xtaboyev</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/audio img/audio3.png" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="teg-title">
                                <h2>Bola tarbiyasi</h2>
                                <h2>Xudayberdi To’xtaboyev</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/audio img/audio4.png" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="teg-title">
                                <h2>Bola tarbiyasi</h2>
                                <h2>Xudayberdi To’xtaboyev</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <div class="img-baby">
                            <img src="./img/audio img/audio5.png" alt="">
                        </div>
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h2>Bola tarbiyasi</h2>
                            <h2>Xudayberdi To’xtaboyev</h2>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="container" style="margin-top: 5%;" id="container2">
            <div class="gallery">
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/audio img/audio6.png" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="teg-title">
                                <h2>Bola tarbiyasi</h2>
                                <h2>Xudayberdi To’xtaboyev</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/audio img/audio7.png" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="teg-title">
                                <h2>Bola tarbiyasi</h2>
                                <h2>Xudayberdi To’xtaboyev</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/audio img/audio8.png" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="teg-title">
                                <h2>Bola tarbiyasi</h2>
                                <h2>Xudayberdi To’xtaboyev</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/audio img/audio9.png" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="teg-title">
                                <h2>Bola tarbiyasi</h2>
                                <h2>Xudayberdi To’xtaboyev</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <div class="img-baby">
                            <img src="./img/audio img/audio10.png" alt="">
                        </div>
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h2>Bola tarbiyasi</h2>
                            <h2>Xudayberdi To’xtaboyev</h2>
                        </div>
                    </div>

                </div>

            </div>
        </div>


        <div class="container">
            <a href="#" class="link-with-arrow">
                <span>Barchasini ko’rish</span>
                <span class="arrow"><i class="fa-solid fa-arrow-right"></i></span>
            </a>
        </div>
        <!-- audio and -->





    </section>


    <!-- aloqa start -->
    <div class="container" style="margin-top: 30px;">
        <div class="item-row">
            <div class="section-title">
                <h2 style="font-family: Poppins; line-height: 45px; color: #ffff;">Kurslarimizga yozilishni xohlaysizmi? Unda<br> biz  bilan bog’laning!</h2>
                <div class="contact-item">
                    <div class="contact">
                        <div class="icon-circle">
                            <img src="./img/phone.svg" alt="">
                        </div>
                        <div class="span">
                            <span>+998-99-123-4567</span>
                        </div>
                    </div>
                    <div class="contact">
                        <div class="icon-circle">
                            <img src="./img/phone.svg" alt="">
                        </div>
                        <div class="span">
                            <span>Bilton@gmail.com</span>
                        </div>
                    </div>
                    <div class="contact">
                        <div class="icon-circle">
                            <img src="./img/phone.svg" alt="">
                        </div>
                        <div class="span">
                            <span>Urganch shahar IT park</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-row">
                <div class="section-img">
                    <img src="./img/books.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- aloqa and  -->

    <!--  footer start  -->
    <footer style="background: #06042E; margin-top: 60px;">
        <div class="container" style="background: #06042E;">
            <div class="footer-link">
                <div class="footer-title">
                    <div class="footer-logo">
                        <div class="footer-img">
                            <img src="./img/logo.svg" alt="">
                        </div>
                        <div class="footer-book">
                            <h1>Book</h1>
                        </div>
                    </div>
                    <div class="footer-row">
                        <p class="p-title">Lorem Ipsum is simply dummy text of the<br> printing and typesetting industry. Lorem<br> Ipsum has</p>
                    </div>
                </div>

                <div class="footer-right">
                    <div class="row-section" style="margin-top: 30px  ;">
                        <h3 style="padding-top: 9px;">Biz haqimizda </h3>
                        <h3 style="padding-top: 15px;">Kitoblar</h3>
                        <h3 style="padding-top: 15px;">Kitob yuklash</h3>
                        <h3 style="padding-top: 15px;">Aloqa</h3>
                    </div>
                </div>

                <div class="footer-left" style="margin-top: 30px;">
                    <div class="row-title">
                        <h3 style="padding-top: 9px;">Biz bilan bog’lanish</h3>
                        <div class="footer-logo">
                            <div class="footer-phone">
                                <img src="./img/footer img/footer1.svg" alt="">
                            </div>
                            <div class="footer-text">
                                <span>+998-99-123-4567</span>
                            </div>
                        </div>

                        <div class="footer-logo">
                            <div class="footer-phone">
                                <img src="./img/footer img/footer2.svg" alt="">
                            </div>
                            <div class="footer-text">
                                <span>Bilton@gmail.com</span>
                            </div>
                        </div>

                        <div class="footer-logo">
                            <div class="footer-phone">
                                <img src="./img/footer img/footer3.svg" alt="">
                            </div>
                            <div class="footer-text">
                                <span>Urganch shahar IT park</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="pow-title">
            <div class="pow-left">
                <h3 class="pow-right">Barcha materiallar www.kitob.uz saytiga tegishli bolib O‘zbekiston Respublikasi "Mualliflik huquqlari va turdosh huquqlari" qonuni bilan himoyalangan</h3>
                <h2 class="pow-right">
                    <i class="fa-solid fa-copyright"></i> Kitob.uz 2024</h2>
            </div>
        </div>
    </footer>




    <!--  footer and  -->
    <!--  baby book and  -->
</div>


</body>
</html>