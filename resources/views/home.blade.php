@extends('layouts.app')

@section('content')
<section class="banner">
    <h2>Selamat Datang di Rental Mobil</h2>
    <p>Nikmati perjalanan Anda dengan mobil yang nyaman dan terawat</p>
    <a href="{{ route('kendaraan.index') }}" class="button">Lihat Mobil</a>
</section>

<section class="car-list" id="car-list">
    <h3>Kategori Mobil</h3>
    <div class="car-list-container">
        <div class="car-item">
            <img src="{{ asset('image/sedan.jpg') }}" alt="Car Image">
            <div class="car-info">
                <h4>Mobil Sedan</h4>
                <p>Deskripsi mobil dan informasi lainnya.</p>
                <a href="{{ route('sedan.index') }}" class="button">Sewa</a>
            </div>
        </div>
        <div class="car-item">
            <img src="{{ asset('image/suv.jpg') }}" alt="Car Image">
            <div class="car-info">
                <h4>Mobil SUV</h4>
                <p>Deskripsi mobil dan informasi lainnya.</p>
                <a href="{{ route('suv.index') }}" class="button">Sewa</a>
            </div>
        </div>
        <div class="car-item">
            <img src="{{ asset('image/sports.jpg') }}" alt="Car Image">
            <div class="car-info">
                <h4>Mobil Sport</h4>
                <p>Deskripsi mobil dan informasi lainnya.</p>
                <a href="{{ route('sports.index') }}" class="button">Sewa</a>
            </div>
        </div>
        <!-- Tambahkan item mobil lainnya di sini -->
    </div>
</section>
@endsection
