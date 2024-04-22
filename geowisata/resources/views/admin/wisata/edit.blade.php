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
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Edit Data</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="/wisata/{{$wisata->id}}/updatewisata">
                    {{ csrf_field()  }}

                    <div class="card-body">
                        <div class="form-group">
                            <label for="kategori">Kategori Wisata</label>
                            <select id="kategori" class="form-control">
                                <option value="">Pilih Kategori</option>
                                <option value="Wisata Alam" @if($wisata->kategori== 'Wisata Alam') selected @endif >Wisata Alam</option>
                                <option value="Wisata Pendidikan dan Sejarah" @if($wisata->kategori== 'Wisata Pendidikan dan Sejarah') selected @endif >Wisata Pendidikan dan Sejarah</option>
                                <option value="Wisata Budaya" @if($wisata->kategori== 'Wisata Budaya') selected @endif >Wisata Budaya</option>
                                <option value="Wisata Rekreatif" @if($wisata->kategori== 'Wisata Rekreatif') selected @endif >Wisata Rekreatif</option>
                                <option value="Wisata Agro" @if($wisata->kategori== 'Wisata Agro') selected @endif >Wisata Agro</option>
                                <option value="Wisata Religi" @if($wisata->kategori== 'Wisata Religi') selected @endif >Wisata Religi</option>
                                <option value="Kampung Wisata Kreatif" @if($wisata->kategori== 'Kampung Wisata Kreatif') selected @endif >Kampung Wisata Kreatif</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_tempat">Nama Tempat Wisata</label>
                            <input type="text" class="form-control" id="nama_tempat"
                                placeholder="Masukan nama tempat wisata" value="{{$wisata->nama_tempat}}">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat"
                                placeholder="Masukan alamat tempat wisata" value="{{$wisata->alamat}}">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi"
                                placeholder="Masukan deskripsi tempat wisata" value="{{$wisata->deskripsi}}">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Foto atau Gambar Tempat Wisata</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="gambar">
                                    <label class="custom-file-label" for="gambar">Pilih berkas</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="latitude">Latitude</label>
                            <input type="text" class="form-control" id="latitude"
                                placeholder="Masukan latitude tempat wisata" value="{{$wisata->latitude}}">
                        </div>
                        <div class="form-group">
                            <label for="longitude">Longitude</label>
                            <input type="text" class="form-control" id="longitude"
                                placeholder="Masukan longitude tempat wisata" value="{{$wisata->longitude}}">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
