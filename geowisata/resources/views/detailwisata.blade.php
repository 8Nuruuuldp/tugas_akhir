<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandung Geowisata</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="flex items-center justify-between px-12 py-4 bg-transparent">
        <img src="#" alt="Bandung Geowisata" width="120" />

        <div class="flex md:hidden">
            <button id="hamburger">
                <img class="toggle block" src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png"
                    width="40" height="40" />
                <img class="toggle hidden" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png"
                    width="40" height="40" />
            </button>
        </div>

        <div
            class="toggle hidden md:flex w-full md:w-auto text-right text-bold mt-5 md:mt-0 border-t-2 border-blue-900 md:border-none">
            <a href="/"
                class="block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Beranda</a>
            <a href="#"
                class="block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Tentang</a>
            <a href="#"
                class="block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Rekomendasi</a>
            <a href="/petawisata"
                class="block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Peta
                Wisata</a>
            <a href="/kontak"
                class="block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Kontak</a>
        </div>
        @auth
        <a href="/dashboard"
            class="toggle hidden md:flex w-full md:w-auto px-4 py-2 text-right bg-green-700 hover:bg-green-500 text-white md:rounded">Dashboard</a>
        @else
        <a href="/login"
            class="toggle hidden md:flex w-full md:w-auto px-4 py-2 text-right bg-green-700 hover:bg-green-500 text-white md:rounded">Masuk</a>
        @endauth
    </nav>
    <section class="content">
        <div class="container">
            <div id="info_wisata">
                <img src="{{ asset('img/' . $wisata->gambar) }}" alt="{{ $wisata->nama }}">
                <h1>{{ $wisata->nama_tempat }}</h1>
                <h3>{{ $wisata->alamat }}</h3>
                <h3>{{ $wisata->latitude }}</h3>
                <h3>{{ $wisata->longitude }}</h3>
                <p>{{ $wisata->deskripsi }}</p>
            </div>
            <div>
                <form action="" method="get">
                    <div class="card-body">
                        <h1>Ulasan</h1>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <div>
                                <input type="text" id="nama" name="nama" placeholder="Masukan nama Anda"
                                    class="form-control"><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <div>
                                <input type="email" id="email" name="email" placeholder="Masukan Email Anda"
                                    class="form-control"><br>
                            </div>
                        </div>
                        <!-- sementara -->
                        <div class="form-group">
                            <label for="ulasan">Rating</label>
                            <div>
                                <input type="" id="rating" name="rating"
                                    class="form-control"><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ulasan">Ulasan</label>
                            <div>
                                <input type="text-area" id="ulasan" name="ulasan" placeholder="Masukan ulasan Anda"
                                    class="form-control"><br>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>