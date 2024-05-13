@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Edit Data Admin</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dasbor</a></li>
                        <li class="breadcrumb-item"><a href="/wisata">Data Admin</a></li>
                        <li class="breadcrumb-item active">Edit Data Admin</li>
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
                    <h3 class="card-title">Edit Data Admin</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="/user/{{$users->id}}/update">
                    {{ csrf_field() }}
                    
                    <div class="card-body">
                        
                        <div class="form-group">
                            <label for="name">Nama Pengguna</label>
                            <input type="text" class="form-control" id="name"
                                placeholder="Masukan nama pengguna" name="name" value="{{$users->name}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email"
                                placeholder="Masukan alamat email" name="email" value="{{$users->email}}">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password"
                                placeholder="Masukan password" name="password" value="{{$users->password}}">
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