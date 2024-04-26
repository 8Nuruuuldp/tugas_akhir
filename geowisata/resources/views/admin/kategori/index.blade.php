@extends('layouts.admin')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Data Kategori Wisata</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dasbor</a></li>
                        <li class="breadcrumb-item active">Data Kategori</li>
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
                                <h3 class="card-title pt-1">Data Kategori Wisata Kota Bandung</h3>
                            </div>
                            <div class="text-right">
                                <a href="/kategori/create" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>&nbsp; Tambah Kategori</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($table_kategori as $kategori)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$kategori->nama_kategori}}</td>
                                        <td>
                                            <a href="/kategori/{{$kategori->id}}/delete" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori {{$kategori->nama_kategori}}?')"><i class="fas fa-trash-alt"></i></a>
                                            <a href="/kategori/{{$kategori->id_kategori}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
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
