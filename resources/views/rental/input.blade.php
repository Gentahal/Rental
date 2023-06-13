@extends('layouts.app')

@section('content')
<section class="rental-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 mt-5">
                <div class="card rental-form">
                    <div class="card-body">
                        <h3 class="card-title font-weight-bold">Form Rental Mobil</h3>
                        <form action="{{ route('rental.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" name="id_user" value="{{ Auth::user()->id }}" hidden>
                                <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly required>
                                <input type="text" name="id_kendaraan" value="{{ $kendaraan->id }}" hidden>
                            </div>
                            <div class="form-group">
                                <label for="tgl_sewa">Tanggal Sewa</label>
                                <input type="date" class="form-control" id="tgl_sewa" name="tgl_sewa" required>
                            </div>
                            <div class="form-group">
                                <label for="tgl_kembali">Tanggal Kembali</label>
                                <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" required>
                            </div>
                            <div class="form-group">
                                <label for="catatan">Catatan</label>
                                <textarea class="form-control" id="catatan" name="keterangan"></textarea>
                            </div>
                            @if($profile)
                            <button type="submit" class="btn btn-primary">Submit</button>
                            @else
                            <a class="btn btn-primary" href="/customer/create">Submit</a>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

@endsection