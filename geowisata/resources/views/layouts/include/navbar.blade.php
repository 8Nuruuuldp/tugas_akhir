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
            <a href="/petawisata" class="nav-link">Peta Wisata</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/kontak/create" class="nav-link">Kontak</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-envelope"></i>
                <span class="badge badge-danger navbar-badge">{{App\Models\Kontak::count()}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="/kontak" class="dropdown-item dropdown-footer">Lihat Semua Pesan</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                <i class="fas fa-cog"></i>
            </a>
        </li>
        <li class="nav-item mt-1" style="margin-right:10px;">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn btn-success btn-sm"
                    onclick="return confirm('Apakah Anda yakin ingin keluar dari Dasbor Admin')">
                    <i class="nav-icon fas fa-sign-out-alt"></i> &nbsp;
                    Keluar
                </button>
            </form>
        </li>
    </ul>
</nav>
<!-- /.navbar -->