<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bandung Geowisata | Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="Admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="Admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="Admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="Admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="Admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="Admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="Admin/plugins/summernote/summernote-bs4.min.css">

</head>


<body
    class="hold-transition login-page bg-[url('https://images.unsplash.com/photo-1549473889-14f410d83298?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] flex justify-center items-center h-screen">
    <!-- Registration 5 - Bootstrap Brain Component -->
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="flex justify-center items-center"> <img src="/img/logo.svg"
                        alt="Bandung Geowisata" width="120" />
                </a>
            </div>
            <div class="card-body">
                <p class="login-box-msg h2">Daftar</p>
                <form action="/register" method="post">
                    @csrf
                    <p>Nama Lengkap</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nama Lengkap" id="name"
                            name="name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <p>Email</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <p>Password</p>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" id="password"
                            name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <p>Konfirmasi Password</p>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" id="confirm_password"
                            name="confirm_password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-success btn-block">Daftar</button>
                    </div>
                </form>
            </div>
            <p class="mb-4 text-center">
                Sudah punya akun ? <a href="/login" class="text-center"><b class="text-primary">Login</b></a>
            </p>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>


    <!-- jQuery -->
    <script src="Admin/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="Admin/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Bootstrap 4 -->
    <script src="Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
