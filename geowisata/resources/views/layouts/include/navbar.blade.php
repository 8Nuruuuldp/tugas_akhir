<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">Beranda</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Tentang</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Rekomendasi</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Peta Wisata</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                <i class="fas fa-cog"></i>
            </a>
        </li>
        <li class="nav-item mt-1">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn btn-success btn-sm"
                    onclick="return confirm('Apakah Anda yakin ingin keluar dari Dasbor Admin')">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    Keluar
                </button>
            </form>
        </li>
    </ul>
</nav>
<!-- /.navbar -->