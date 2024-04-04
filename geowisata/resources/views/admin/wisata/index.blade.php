@extends('layouts.admin')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Wisata</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                        <li class="breadcrumb-item active">Data Wisata</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Objek Wisata Kota Bandung</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Wisata</th>
                                        <th>Alamat</th>
                                        <th>Gambar</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($table_wisata as $wisata)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$wisata->nama_tempat}}</td>
                                        <td>{{$wisata->alamat}}</td>
                                        <td>{{$wisata->gambar}}</td>
                                        <td>{{$wisata->latitude}}</td>
                                        <td>{{$wisata->longitude}}</td>
                                        <td>
                                            <a href="/wisata/{{$wisata->id}}/delete" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data {{$wisata->nama_tempat}}?')">Hapus</a>
                                            <a href="/wisata/{{$wisata->id}}/edit" class="btn btn-warning">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection