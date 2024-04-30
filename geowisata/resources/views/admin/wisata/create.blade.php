@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Tambah Data Wisata</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dasbor</a></li>
                        <li class="breadcrumb-item"><a href="/wisata">Data Wisata</a></li>
                        <li class="breadcrumb-item active">Tambah Data Wisata</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- End Content Header (Page header) -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Wisata</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('store.wisata') }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_tempat">Nama Tempat Wisata</label>
                                    <input type="text" class="form-control" id="nama_tempat"
                                        placeholder="Masukan nama tempat wisata" name="nama_tempat">
                                </div>
                                <div class="form-group">
                                    <label for="nama_tempat">Kategori Wisata</label>
                                    <select class="form-control select2" name="kategori_id" id="kategori_id">
                                        <option disable value>Pilih Jabatan</option>
                                        @foreach ($kategori as $item)
                                        <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat"
                                        placeholder="Masukan alamat tempat wisata" name="alamat"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi"
                                        placeholder="Masukan deskripsi tempat wisata" name="deskripsi"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="latitude">Latitude</label>
                                    <input type="decimal" class="form-control" id="latitude"
                                        placeholder="Masukan latitude tempat wisata" name="latitude">
                                </div>
                                <div class="form-group">
                                    <label for="longitude">Longitude</label>
                                    <input type="decimal" class="form-control" id="longitude"
                                        placeholder="Masukan longitude tempat wisata" name="longitude">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
        </div>
    </section>
</div>
@endsection