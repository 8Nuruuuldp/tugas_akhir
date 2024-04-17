@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Tambah Wisata</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dasbor</a></li>
                        <li class="breadcrumb-item"><a href="/wisata">Data Wisata</a></li>
                        <li class="breadcrumb-item active">Tambah Wisata</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="kategori">Kategori Wisata</label>
                            <select id="kategori" class="form-control">
                                <option value="">Pilih Kategori</option>
                                <option value="makanan">Wisata Alam</option>
                                <option value="minuman">Wisata Pendidikan dan Sejarah</option>
                                <option value="fashion">Wisata Budaya</option>
                                <option value="fashion">Wisata Rekreatif</option>
                                <option value="minuman">Wisata Agro</option>
                                <option value="fashion">Wisata Religi</option>
                                <option value="fashion">Kampung Wisata Kreatif</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_tempat">Nama Tempat Wisata</label>
                            <input type="text" class="form-control" id="nama_tempat"
                                placeholder="Masukan nama tempat wisata">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat"
                                placeholder="Masukan alamat tempat wisata">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi"
                                placeholder="Masukan deskripsi tempat wisata">
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
                                placeholder="Masukan latitude tempat wisata">
                        </div>
                        <div class="form-group">
                            <label for="longitude">Longitude</label>
                            <input type="text" class="form-control" id="longitude"
                                placeholder="Masukan longitude tempat wisata">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
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