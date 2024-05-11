@extends('layouts.admin')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Data Ulasan Objek Wisata</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dasbor</a></li>
                        <li class="breadcrumb-item active">Data Ulasan</li>
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
                            <h3 class="card-title pt-1">Data Ulasan Objek Wisata Kota Bandung</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Objek Wisata</th>
                                        <th>Rating</th>
                                        <th>Ulasan</th>
                                        <th>Nama Pengulas</th>
                                        <th>Email Pengulas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($ulasan as $ulasan)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$ulasan->wisata->nama_tempat}}</td>
                                        <td>{{$ulasan->rating}}/5</td>
                                        <td>{{$ulasan->ulasan}}</td>
                                        <td>{{$ulasan->nama_pengulas}}</td>
                                        <td>{{$ulasan->email_pengulas}}</td>
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
