@extends('layouts.template')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Input Mobil</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card bg-primary shadow h-100 py-2">
                <div class="card-body ">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title text-primary">Input Kendaraan</h3>
                                    <form action="{{ route('admin.store') }}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">Nama Kendaraan</label>
                                            <div class="col-sm-10">
                                                <input class="form-control @error('nama_kendaraan') is-invalid @enderror"
                                                    name="nama_kendaraan" type="text" id="formFile" required>
                                                @error('nama_kendaraan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">Warna</label>
                                            <div class="col-sm-10">
                                                <input class="form-control @error('warna') is-invalid @enderror"
                                                    name="warna" type="text" id="formFile" required>
                                                @error('warna')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">Deskripsi</label>
                                            <div class="col-sm-10">
                                                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="formFile" cols="10" rows="5" required>@error('deskripsi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror</textarea>
                                                
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">Tahun Kendaraan</label>
                                            <div class="col-sm-10">
                                                <input class="form-control @error('tahun') is-invalid @enderror"
                                                    name="tahun" type="number" id="formFile" required>
                                                @error('tahun')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">Foto</label>
                                            <div class="col-sm-10">
                                                <input class="form-control @error('foto') is-invalid @enderror"
                                                    name="foto" type="file" id="formFile" required>
                                                @error('foto')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">Tarif</label>
                                            <div class="col-sm-10">
                                                <input class="form-control @error('tarif') is-invalid @enderror"
                                                    name="tarif" type="text" id="formFile" required>
                                                @error('tarif')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">Jenis Kendaraan</label>
                                            <div class="col-sm-10">
                                                <select name="jenis" aria-label="Default select example" required id="">
                                                    <option selected disabled>Pilih Jenis Mobil</option>
                                                    <option value="sedan">Sedan</option>
                                                    <option value="sport">Sport</option>
                                                    <option value="suv">SUV</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Simpan & Tambahkan</label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
