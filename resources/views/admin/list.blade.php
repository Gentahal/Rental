@extends('layouts.template')

@section('content')
<div class="container-fluid">
    <div class="card ">
        <div class="card-body table-responsive">
            <h5 class="card-title text-primary">Data Kendaraan</h5>
            
            <!-- Table with stripped rows -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Kendaraan</th>
                        <th scope="col">Warna</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kendaraan as $row)
                    <tr>
                        <th scope="row">{{ $row->nama_kendaraan }}</th>
                        <td>{{ $row->warna }}</td>
                        <td>{{ $row->jenis }}</td>
                        <td class="w-25">
                            <img src="{{ asset('storage/images/kendaraan/'.$row->foto) }}" class="img-thumbnail" style="width: 80px" alt="">
                        </td>
                        <td>
                            <a href="{{ route('admin.edit', $row->id) }}" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- End Table with stripped rows -->

        </div>
    </div>
</div>
@endsection