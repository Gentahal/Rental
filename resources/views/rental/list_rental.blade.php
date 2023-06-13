@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row">
        @foreach ($rental as $item)
        <div class="col-lg-6 offset-lg-3 mt-5">
            <div class="card rental-confirmation">
                <div class="card-body">
                    @if($rental)
                    <h3 class="card-title font-weight-bold">Konfirmasi Pemesanan</h3>
                    <div class="confirmation-details">
                        <p class="mb-2">Terima kasih, <span class="font-weight-bold">{{ Auth::user()->name }}!</span>
                        </p>
                        <p>Anda telah <span class="text-info">Berhasil</span> memesan mobil berikut:</p>
                        <div class="car-details">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ asset('storage/images/kendaraan/'.$item->kendaraan->foto)}}"
                                        alt="Car Image" class="img-fluid">
                                </div>
                                <div class="col-md-6">
                                    <h5 class="car-name"> {{ $item->kendaraan->nama_kendaraan }}</h5>
                                    <p class="car-description">{{ $item->kendaraan->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4">Detail Pemesanan:</p>
                        <ul class="reservation-details horizontal">
                            <li><span>Tanggal Sewa:</span> {{ $item->tgl_sewa }}</li>
                            <li><span>Tanggal Kembali:</span> {{ $item->tgl_kembali }}</li>
                            <li><span>Catatan:</span> {{ $item->keterangan }}.</li>
                            <li>Status: 
                                @if($item->status == 'diproses')
                                <span class="font-weight-bold text-info">{{ $item->status }}</span>.
                                @elseif($item->status == 'diterima')
                                <span class="font-weight-bold text-primary">{{ $item->status }}</span>.
                                @else
                                <span class="font-weight-bold text-danger">{{ $item->status }}</span>.
                                @endif
                            </li>
                        </ul>
                    </div>
                    <p class="mt-4">Silakan menunggu response dari admin yang akan dikirimkan.</p>
                    <p class="mt-1">*ditolak atau diterimanya Pemesanan dilihat dari status keterangan</p>
                    @else
                    <h3 class="text-center">Waduh!!</h3>
                    <h3 class="text-center">Kamu Belum Punya Pesanan</h3>
                    <div class="text-center">
                        <a href="{{ route('kendaraan.index') }}" class="btn btn-primary text-center">Pilih Mobil</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div> --}}

<div class="container">
    <div class="row d-flex">
        @foreach ($rental as $item)
        <div class="col-lg-6 mt-5">
            <div class="card rental-confirmation">
                <div class="card-body">
                    @if($rental)
                    <h3 class="card-title font-weight-bold">Konfirmasi Pemesanan</h3>
                    <div class="confirmation-details">
                        <p class="mb-2">Terima kasih, <span class="font-weight-bold">{{ Auth::user()->name }}!</span>
                        </p>
                        <p>Anda telah <span class="text-info">Berhasil</span> memesan mobil berikut:</p>
                        <div class="car-details">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ asset('storage/images/kendaraan/'.$item->kendaraan->foto)}}"
                                        alt="Car Image" class="img-fluid">
                                </div>
                                <div class="col-md-6">
                                    <h5 class="car-name"> {{ $item->kendaraan->nama_kendaraan }}</h5>
                                    <p class="car-description">{{ $item->kendaraan->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4">Detail Pemesanan:</p>
                        <ul class="reservation-details horizontal">
                            <li><span>Tanggal Sewa:</span> {{ $item->tgl_sewa }}</li>
                            <li><span>Tanggal Kembali:</span> {{ $item->tgl_kembali }}</li>
                            <li><span>Catatan:</span> {{ $item->keterangan }}.</li>
                            <li>Status: 
                                @if($item->status == 'diproses')
                                <span class="font-weight-bold text-info">{{ $item->status }}</span>.
                                @elseif($item->status == 'diterima')
                                <span class="font-weight-bold text-primary">{{ $item->status }}</span>.
                                @else
                                <span class="font-weight-bold text-danger">{{ $item->status }}</span>.
                                @endif
                            </li>
                        </ul>
                    </div>
                    <p class="mt-4">Silakan menunggu response dari admin yang akan dikirimkan.</p>
                    <p class="mt-1">*ditolak atau diterimanya Pemesanan dilihat dari status keterangan</p>
                    @else
                    <h3 class="text-center">Waduh!!</h3>
                    <h3 class="text-center">Kamu Belum Punya Pesanan</h3>
                    <div class="text-center">
                        <a href="{{ route('kendaraan.index') }}" class="btn btn-primary text-center">Pilih Mobil</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection
