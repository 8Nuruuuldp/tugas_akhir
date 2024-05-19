<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandung Geowisata</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="sticky top-0 z-5 bg-white">
        <div class="flex flex-wrap items-center justify-between px-12 py-4">
            <img src="./img/logo.svg" alt="Bandung Geowisata" width="120" />

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
                <a href="#beranda"
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Beranda</a>
                <a href="#tentang"
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Tentang</a>
                <a href="#rekomendasi"
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Rekomendasi</a>
                <a href="#"
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Peta
                    Wisata</a>
                <a href="#kontak"
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Kontak</a>
            </div>
    </nav>
    <section class="content">
        <div class="pl-5 pr-5 mt-6 ml-2 mr-4 mb-8">
            <div id="info_wisata">
                <h1 class="font-bold text-4xl text-center">{{ $wisata->nama_tempat }}</h1>
                <img src="{{ asset('./img/' . $wisata->gambar) }}" alt="{{ $wisata->nama }}" class="">
                <h1>{{ $wisata->nama_tempat }}</h1>
                <h3>{{ $wisata->alamat }}</h3>
                <h3>{{ $wisata->latitude }}</h3>
                <h3>{{ $wisata->longitude }}</h3>
                <p>{{ $wisata->deskripsi }}</p>
            </div>
            <div>
                @if (session('success'))
                <div id="successMessage" class="bg-green-500 text-white p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
                @endif
                <form action="{{ url('/ulasan/store') }}" method="POST">
                    @csrf
                    <div class="mb-4 font-[Poppins]">
                        <label for="nama" class="block text-black font-extrabold mb-2">Nama Lengkap <span
                                class="text-red-600">*</span></label>
                        <input type="text" id="nama" name="nama"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukan nama Anda">
                        <label for="nama" class="text-black">Contoh: Jane Smith</label>
                    </div>
                    <div class="mb-4 font-[Poppins]">
                        <label for="email" class="block text-black font-extrabold mb-2">Email <span
                                class="text-red-600">*</span></label>
                        <input type="email" id="email" name="email"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukan email Anda">
                        <label for="nama" class="text-black">Contoh: janesmith@gmail.com</label>
                    </div>
                    <div class=" mb-4 font-[Poppins] flex items-center mb-4">
                        <span class="text-lg font-bold mr-2">Rating:</span>
                        <input type="number" id="rating" class="w-12 pl-2 text-sm text-gray-700" min="1" max="5"
                            value="4.95">
                        <span class="text-sm text-gray-500 ml-2">/ 5</span>

                    </div>
                    <div class="mb-4 font-[Poppins]">
                        <label for="pesan" class="block text-black font-extrabold mb-2">Ulasan Anda <span
                                class="text-red-600">*</span></label>
                        <textarea id="pesan" name="pesan" rows="4"
                            class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Ketik ulasan Anda disini"></textarea>
                    </div>
                    <button type="submit"
                        class="bg-green-600 text-white px-8 py-2 rounded-lg hover:bg-green-700">Kirim</button>
                </form>
                </form>
            </div>
        </div>
    </section>
</body>

</html>