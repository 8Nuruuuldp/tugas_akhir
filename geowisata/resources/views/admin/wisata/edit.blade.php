@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Edit Data Wisata</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dasbor</a></li>
                        <li class="breadcrumb-item"><a href="/wisata">Data Wisata</a></li>
                        <li class="breadcrumb-item active">Edit Data Wisata</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Edit Data</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="/wisata/{{$wisata->id}}/update">
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_tempat">Nama Tempat Wisata</label>
                            <input type="text" class="form-control" id="nama_tempat"
                                placeholder="Masukan nama tempat wisata" name="nama_tempat" value="{{$wisata->nama_tempat}}">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat"
                                placeholder="Masukan alamat tempat wisata" name="alamat">{{$wisata->alamat}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi"
                                placeholder="Masukan deskripsi tempat wisata" name="deskripsi">{{$wisata->deskripsi}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="latitude">Latitude</label>
                            <input type="decimal" class="form-control" id="latitude"
                                placeholder="Masukan latitude tempat wisata" name="latitude" value="{{$wisata->latitude}}">
                        </div>
                        <div class="form-group">
                            <label for="longitude">Longitude</label>
                            <input type="decimal" class="form-control" id="longitude"
                                placeholder="Masukan longitude tempat wisata" name="longitude" value="{{$wisata->longitude}}">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection