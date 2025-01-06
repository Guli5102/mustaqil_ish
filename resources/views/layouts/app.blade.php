@php use Illuminate\Support\Facades\URL; @endphp
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mustaqil ish</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="header-logo">
            <img src="./img/logo.svg" alt="Logo" class="logo">
            <a href="{{\url('/')}}" >
            <span class="span-row">
                Book
            </span>
            </a>

        </div>
        <ul class="header-link">
            <li><a href="<?= route('about')?>">Biz haqimizda</a></li>
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
            <li><a href="{{\url('contact')}}">Aloqa</a></li>
        </ul>
        <div class="header-icons">
            <img src="./img/header.html/internet.svg" alt="globe-02">
            <img src="./img/header.html/aloqa.svg" alt="user-circle">
            <a href="./index1.html" class="register-button">Ro'yxatdan o'tish</a>
        </div>
    </div>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        {{-- @include('layouts.navigation') --}}

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot}}
        </main>
    </div>

    <div class="container" style="background: #06042E;">
        <div class="footer-link">
            <div class="footer-title">
                <div class="footer-logo">
                    <div class="footer-img">
                        <img src="../../public/img/logo.svg" alt="">
                    </div>
                    <div class="footer-book">
                        <h1>Book</h1>
                    </div>
                </div>
                <div class="footer-row">
                    <p class="p-title">Lorem Ipsum&nbsp;is simply dummy text of the<br> printing and typesetting
                        industry. Lorem<br> Ipsum has</p>
                </div>
            </div>

            <div class="footer-right">
                <div class="row-section" style="margin-top: 30px  ;">
                    <h3 class="pt-2">
                        <a href="{{ url('/about') }}" class="text-decoration-none">Biz haqimizda</a>
                    </h3>
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
                            <img src="../../public/img/footer img/footer1.svg" alt="">
                        </div>
                        <div class="footer-text">
                            <span>+998-99-123-4567</span>
                        </div>
                    </div>

                    <div class="footer-logo">
                        <div class="footer-phone">
                            <img src="../../public/img/footer img/footer2.svg" alt="">
                        </div>
                        <div class="footer-text">
                            <span>Bilton@gmail.com</span>
                        </div>
                    </div>

                    <div class="footer-logo">
                        <div class="footer-phone">
                            <img src="../../public/img/footer img/footer3.svg" alt="">
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
            <h3 class="pow-right">Barcha materiallar www.kitob.uz saytiga tegishli bolib O‘zbekiston Respublikasi
                "Mualliflik huquqlari va turdosh huquqlari" qonuni bilan himoyalangan</h3>
            <h2 class="pow-right">
                <i class="fa-solid fa-copyright"></i> Kitob.uz 2024</h2>
        </div>
    </div>
</div>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>

<!-- Optional: DataTables dependencies for additional features -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
@stack('scripts')
</body>

</html>
