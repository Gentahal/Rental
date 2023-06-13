@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/customer.css') }}">
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            @if($customer)
            @foreach ($customer as $item)
            <div class="text-center">
              <img src="{{ asset('storage/images/ktp/'.$item->foto_ktp) }}" alt="Foto KTP" class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
            </div>
            <h3 class="card-title text-center mt-4">Bio Data Diri</h3>
            <div class="text-center mt-3">
              <img src="{{ asset('storage/images/sim/'.$item->foto_sim) }}" alt="Foto SIM" class="img-fluid rounded" style="max-width: 400px;">
            </div>
            <div class="mt-4">
              <h5 class="text-center">Nama: {{ $item->user->name }}</h5>
              <h5 class="text-center">Nomor Tlp: {{ $item->no_tlp }}</h5>
              <h5 class="text-center">Alamat: {{ $item->alamat }}</h5>
            </div>
            @endforeach
            @else
            <div class="text-center">
                <h5 class="card-title">Hallo, <span class="font-weight-bold">{{ Auth::user()->name }}</span> </h5>
                <h6 class="card-subtitle mb-2 text-muted">Anda belum mengisi data diri</h6>
            </div>
            <div class="text-center">
                <a href="{{ route('customer.create') }}" class="btn btn-primary">Buat Profile</a>
            </div> 
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  


@endsection
