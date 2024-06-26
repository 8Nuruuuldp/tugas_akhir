@extends('layouts.admin')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Data Wisata</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
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
                            <div class="text-left">
                                <h3 class="card-title pt-1">Data Objek Wisata Kota Bandung</h3>
                            </div>
                            <div class="text-right">
                                <a href="/wisata/create" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>&nbsp; Tambah Wisata</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th style="width: 100px">Nama Wisata</th>
                                        <th>Kategori</th>
                                        <th>Alamat</th>
                                        <th>Gambar</th>
                                        <th>Sumber</th>
                                        <th>Deskripsi</th>
                                        <th>Waktu Operasional</th>
                                        <th>Web Objek Wisata</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th style="width: 70px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        use Illuminate\Support\Str;
                                        $no = 1;
                                    @endphp
                                    @foreach ($wisata as $wisata)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$wisata->nama_tempat}}</td>
                                        <td>{{$wisata->kategori->nama_kategori}}</td>
                                        <td>{{illuminate\Support\Str::limit($wisata->alamat, 100)}}</td>
                                        <td><img src="/img/{{$wisata->gambar}}" width="100" height="100"></td>
                                        <td>{{$wisata->sumber}}</td>
                                        <td>{{illuminate\Support\Str::limit($wisata->deskripsi, 250)}}</td>
                                        <td>{{$wisata->waktu_operasional}}</td>
                                        <td>{{$wisata->link_pendukung}}</td>
                                        <td>{{$wisata->latitude}}</td>
                                        <td>{{$wisata->longitude}}</td>
                                        <td>
                                            <a href="/wisata/{{$wisata->id}}/delete" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data {{$wisata->nama_tempat}}?')"><i class="fas fa-trash-alt"></i></a>
                                            <a href="/wisata/{{$wisata->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
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
