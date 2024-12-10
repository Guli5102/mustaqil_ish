<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Mustaqil ish</title>
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="wrapper">
            <div class="container">
                <div class="header-logo">
                    <img src="./img/logo.svg" alt="Logo" class="logo">
                    <span class="span-row">Book</span>
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
                    <li><a href="./contact.html">Aloqa</a></li>
                </ul>
                <div class="header-icons">
                    <img src="./img/header.html/internet.svg" alt="globe-02">
                    <img src="./img/header.html/aloqa.svg" alt="user-circle">
                    <a href="./index1.html" class="register-button">Ro'yxatdan o'tish</a>
                </div>
            </div>
        </div>
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

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
                @yield('content')
            </main>
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
