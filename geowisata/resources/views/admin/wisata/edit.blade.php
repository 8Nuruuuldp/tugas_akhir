@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/dashboard">Dasbor</a></li>
                <li class="breadcrumb-item"><a href="/wisata">Data Wisata</a></li>
                <li class="breadcrumb-item active">Edit Data</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
        <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Wisata</h3>
                    </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/wisata/{{$wisata->id}}/update" method="POST">
                    {{csrf_field()}}

                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_tempat">Nama Wisata</label>
                            <input type="text" class="form-control" id="nama_tempat" name="nama_tempat" value="{{$wisata->nama_tempat}}">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{$wisata->alamat}}">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{$wisata->deskripsi}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="gambar">
                                <label class="custom-file-label" for="gambar">Pilih Foto</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="latitude">Latitude</label>
                            <input type="text" class="form-control" id="latitude" name="latitude" value="{{$wisata->latitude}}">
                        </div>
                        <div class="form-group">
                            <label for="longitude">Longitude</label>
                            <input type="text" class="form-control" id="longitude" name="longitude" value="{{$wisata->longitude}}">
                        </div>

                    </div>
                    <!-- /.card-body -->

                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                </form>
                </div>
                <!-- /.card -->
            </div>
    <!-- /.content --> 
        </div> 
    </div>  
    </section>

</div>

@endsection