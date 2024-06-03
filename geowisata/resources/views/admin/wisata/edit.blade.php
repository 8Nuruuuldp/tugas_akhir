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
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
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
                <form method="POST" action="/wisata/{{$wisata->id}}/update" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_tempat">Nama Tempat Wisata</label>
                            <input type="text" class="form-control" id="nama_tempat"
                                placeholder="Masukan nama tempat wisata" name="nama_tempat"
                                value="{{$wisata->nama_tempat}}">
                        </div>
                        <div class="form-group">
                            <label for="nama_tempat">Kategori Wisata</label>
                            <select class="form-control select2" name="kategori_id" id="kategori_id">
                                <option value="{{$wisata->kategori_id}}">{{$wisata->kategori->nama_kategori}}</option>
                                @foreach ($kategori as $item)
                                <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" placeholder="Masukan alamat tempat wisata"
                                name="alamat">{{$wisata->alamat}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <div class="custom-file">
                                <input type="file" class="form-control" id="gambar" name="gambar">
                            </div>
                        </div>
                        <div class="form-group">
                            <img src="/img/{{$wisata->gambar}}" width="200" height="200">
                        </div>
                        <div class="form-group">
                            <label for="sumber">Sumber Gambar</label>
                            <input type="link" class="form-control" id="sumber" placeholder="contoh: www.google.com"
                                name="sumber" value="{{$wisata->sumber}}">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" placeholder="Masukan deskripsi tempat wisata"
                                name="deskripsi">{{$wisata->deskripsi}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="waktu_operasional">Waktu Operasional</label>
                            <input class="form-control" id="waktu_operasional"
                                placeholder="Contoh: Senin-Jumat (09.00 - 17.00 WIB)" name="waktu_operasional" value="{{$wisata->waktu_operasional}}"></input>
                        </div>
                        <div class="form-group">
                            <label for="link_pendukung">Web Objek Wisata</label>
                            <input type="link" class="form-control" id="link_pendukung" placeholder="Contoh: www.curugdago.com"
                                name="link_pendukung" value="{{$wisata->link_pendukung}}">
                        </div>
                        <div class="form-group">
                            <label for="latitude">Latitude</label>
                            <input type="decimal" class="form-control" id="latitude"
                                placeholder="Masukan latitude tempat wisata" name="latitude"
                                value="{{$wisata->latitude}}">
                        </div>
                        <div class="form-group">
                            <label for="longitude">Longitude</label>
                            <input type="decimal" class="form-control" id="longitude"
                                placeholder="Masukan longitude tempat wisata" name="longitude"
                                value="{{$wisata->longitude}}">
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