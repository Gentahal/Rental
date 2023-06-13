@extends('layouts.app')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mau Rental</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @yield('css')

</head>
<body>
    @section('content')
    <section class="banner">
        <h2>Selamat Datang di Rental Mobil</h2>
        <p>Nikmati perjalanan Anda dengan mobil yang nyaman dan terawat</p>
        <a href="{{ route('kendaraan.index') }}" class="button">Lihat Mobil</a>
    </section>

    <section class="car-list" id="car-list">
        <h3>Kategori Mobil</h3>
        <div class="car-item">
            <img src="{{ asset('image/sedan.jpg') }}" alt="Car Image">
            <div class="car-info">
                <h4>Sewa Mobil Sedan</h4>
                <p>Deskripsi mobil dan informasi lainnya.</p>
                <a href="{{ route('sedan.index') }}" class="button">Sewa</a>
            </div>
        </div>
        <div class="car-item">
            <img src="{{ asset('image/suv.jpg') }}" alt="Car Image">
            <div class="car-info">
                <h4>Sewa Mobil SUV</h4>
                <p>Deskripsi mobil dan informasi lainnya.</p>
                <a href="{{ route('suv.index') }}" class="button">Sewa</a>
            </div>
        </div>
        <div class="car-item">
            <img src="{{ asset('image/sports.jpg') }}" alt="Car Image">
            <div class="car-info">
                <h4>Sewa Mobil Sport</h4>
                <p>Deskripsi mobil dan informasi lainnya.</p>
                <a href="{{ route('sports.index') }}" class="button">Sewa</a>
            </div>
        </div>
        <!-- Tambahkan item mobil lainnya di sini -->
    </section>

    @endsection

    {{-- <footer>
        <p>&copy; 2023 Rental Mobil. All rights reserved.</p>
    </footer> --}}

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('template/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('template/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('template/js/demo/chart-pie-demo.js') }}"></script>
</body>

</html>
