@extends('layouts.template')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title font-weight-bold">Data Pesanan</h3>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Pemesanan</th>
                                <th>Kendaraan</th>
                                <th>Total Harga</th>
                                <th>Gambar</th>
                                <th>Status</th>
                                <th>Tanggapan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rental as $item)
                            <tr>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->kendaraan->nama_kendaraan }}</td>
                                <td>{{ $item->kendaraan->tarif }}</td>
                                <td>
                                    <img src="{{ asset('storage/images/kendaraan/'.$item->kendaraan->foto)}}"
                                        alt="Car Image" class="img-fluid" style="width: 80px">
                                </td>
                                <td> @if($item->status == 'diproses')
                                    <span class="badge-info">{{ $item->status }}</span></td>
                                @elseif($item->status == 'diterima')
                                <span class="badge-primary">{{ $item->status }}</span></td>
                                @endif
                                <td>
                                    <div class="d-flex">
                                        <form class="mr-2" action="{{ route('rental.update', $item->id) }}" method="POST">
                                            {{ method_field('PUT')  }}
                                            @csrf
                                            <input type="text" name="status" hidden value="diterima">
                                            <button class="btn-primary btn">Terima</button>
                                        </form>
                                        <form action="{{ route('rental.update', $item->id) }}" method="POST">
                                            {{ method_field('PUT') }}
                                            @csrf
                                            <input type="text" hidden name="status" value="dibalikan">
                                            <button class="btn-danger btn">Tolak</button>
                                        </form>
                                    </div> 
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
