@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pesan.css') }}">
@endsection

@section('content')

<div class="container mt-3">
  <div class="card shadow mt-5">
    <div class="card-body">
      <h2 class="card-title mt-4 text-center">Isi Form Data Diri Dibawah Ini</h2>
      <form action="{{ route('customer.store') }}" class="mt-4" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input type="text" name="id_user" value="{{ Auth::user()->id }}" hidden>
              <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="telepon">Nomor Telepon</label>
              <input type="text" class="form-control" id="telepon" name="no_tlp" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="foto_ktp">Foto KTP</label>
              <input type="file" class="form-control" id="foto_ktp" name="foto_ktp" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="foto_sim">Foto SIM</label>
              <input type="file" class="form-control" id="foto_sim" name="foto_sim" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection