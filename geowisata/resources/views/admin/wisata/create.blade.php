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
        </div><!-- /.container-fluid -->
    </section>
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
                        <form  action="{{url('/wisata/store')}}" method="POST">
                            {{ csrf_field()  }}
                            <div class="card-body">
                                <div class="form-group" >
                                    <label for="kategori">Kategori Wisata</label>
                                    <select id="" class="form-control" name="kategori">
                                        <option value="">Pilih Kategori</option>
                                        <option value="Wisata Alam">Wisata Alam</option>
                                        <option value="Wisata Pendidikan dan Sejarah">Wisata Pendidikan dan Sejarah
                                        </option>
                                        <option value="Wisata Budaya">Wisata Budaya</option>
                                        <option value="Wisata Rekreatif">Wisata Rekreatif</option>
                                        <option value="Wisata Agro">Wisata Agro</option>
                                        <option value="Wisata Religi">Wisata Religi</option>
                                        <option value="Kampung Wisata Kreatif">Kampung Wisata Kreatif</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama_tempat">Nama Tempat Wisata</label>
                                    <input type="text" class="form-control" id="nama_tempat"
                                        placeholder="Masukan nama tempat wisata" name="nama_tempat">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat"
                                        placeholder="Masukan alamat tempat wisata" name="alamat">
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <input type="text" class="form-control" id="deskripsi"
                                        placeholder="Masukan deskripsi tempat wisata" name="deskripsi">
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Foto atau Gambar Tempat Wisata</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="gambar" name="gambar">
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
                                        placeholder="Masukan latitude tempat wisata" name="latitude">
                                </div>
                                <div class="form-group">
                                    <label for="longitude">Longitude</label>
                                    <input type="text" class="form-control" id="longitude"
                                        placeholder="Masukan longitude tempat wisata" name="longitute">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    @endsection
