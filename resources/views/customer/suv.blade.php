@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/kendaraan.css') }}">
@endsection

@section('content')
<div class="container">
    <h3 class="text-center mt-5">Mobil SUV</h3>
    <div class="row mt-5">
      @foreach ($suv as $item)
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100">
            <img src="{{ asset('storage/images/kendaraan/'.$item->foto) }}" class="card-img-top" alt="Mobil 1">
            <div class="card-body">
              <h5 class="card-title">{{ $item->nama_kendaraan }}</h5>
              <p class="card-text">{{ $item->deskripsi }}</p>
            </div>
            <div class="card-footer">
              <a href="{{ route('rental.show', $item->id) }}" class="btn btn-primary btn-block">Pesan Sekarang</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection