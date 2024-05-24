<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandung Geowisata</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <script src="https://cdn.maptiler.com/maptiler-geocoding-control/v1.2.0/leaflet.umd.js"></script>
    <link href="https://cdn.maptiler.com/maptiler-geocoding-control/v1.2.0/style.css" rel="stylesheet">

</head>

<body>
    <nav class="sticky top-0 z-5 bg-white">
        <div class="flex flex-wrap items-center justify-between px-12 py-4">
            <img src="/img/logo.svg" alt="Bandung Geowisata" width="120" />

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
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Beranda</a>
                <a href="/#tentang"
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Tentang</a>
                <a href="/#rekomendasi"
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Rekomendasi</a>
                <a href="/#petawisata"
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Peta
                    Wisata</a>
                <a href="/#kontak"
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Kontak</a>
            </div>
    </nav>
    <section>
        <div class="bg-gray-100 dark:bg-gray-800 py-8">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row -mx-4">
                    <div class="md:flex-1 px-4">
                        
                        
                        <div class="h-[460px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-4">
                            @if ($wisata && $wisata->gambar)
                            <img class="w-full h-full object-cover" src="{{ asset('img/' . ($wisata->gambar)) }}"
                                alt="Foto wisata">
                            @else
                            <p>Tidak ada gambar tersedia.</p>
                            @endif
                        </div>
                        {{-- Rencana penambahan button --}}
                        {{-- <div class="flex -mx-2 mb-4">
                            <div class="w-1/2 px-2">
                                <button
                                    class="w-full bg-gray-900 dark:bg-gray-600 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-800 dark:hover:bg-gray-700">
                                    <a
                                        href="http://www.google.com/maps/place/&{{ $wisata->latitude }}&{{ $wisata->longitude }}"><svg
                            xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50"
                            viewBox="0 0 172 172" style=" fill:#26e07f;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                <g fill="#1fb141">
                                    <path
                                        d="M21.5,21.5v129h64.5v-32.25v-64.5v-32.25zM86,53.75c0,17.7805 14.4695,32.25 32.25,32.25c17.7805,0 32.25,-14.4695 32.25,-32.25c0,-17.7805 -14.4695,-32.25 -32.25,-32.25c-17.7805,0 -32.25,14.4695 -32.25,32.25zM118.25,86c-17.7805,0 -32.25,14.4695 -32.25,32.25c0,17.7805 14.4695,32.25 32.25,32.25c17.7805,0 32.25,-14.4695 32.25,-32.25c0,-17.7805 -14.4695,-32.25 -32.25,-32.25z">
                                    </path>
                                </g>
                            </g>
                        </svg>

                        Dapatkan
                        Arah</a>
                        </button>
                    </div>
                    <div class="w-1/2 px-2">
                        <button
                            class="w-full bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white py-2 px-4 rounded-full font-bold hover:bg-gray-300 dark:hover:bg-gray-600">Halaman
                            Utama</button>
                    </div>
                </div> --}}
            </div>
            <div class="md:flex-1 px-4">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">{{ $wisata->nama_tempat }}
                </h2>
                <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                    {{ $wisata->alamat }}
                </p>
                <div class="mr-4">

                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <p class="ms-2 text-sm font-bold text-gray-900 dark:text-white">4.95</p>
                        <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                        <a href="#"
                            class="text-sm font-medium text-gray-900 underline hover:no-underline dark:text-white">73
                            reviews</a>
                    </div>
                </div>


                <div class="mr-4 mt-2">
                    <span class="font-bold text-gray-700 dark:text-gray-300">Deskripsi</span>
                    <p class="text-gray-600 dark:text-gray-300 text-sm mt-2">
                        {{ $wisata->deskripsi }}
                    </p>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <!--ulasan-->
    <section class="content">
        <div class="pl-5 pr-5 mt-6 ml-2 mr-4 mb-8">
            <div id="info_wisata">
                <div>
                    @if (session('success'))
                    <div id="successMessage" class="bg-green-500 text-white p-4 rounded mb-4">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form action="{{ route('store.ulasan') }}" method="POST">
                        @csrf

                        <div class="mb-4 font-[Poppins]">

                            <input
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                type="hidden" name="wisata_id" value="{{ $wisata->id }}" readonly>

                        </div>
                        <div class="mb-4 font-[Poppins]">
                            <label for="nama" class="block text-black font-extrabold mb-2">Nama Lengkap <span
                                    class="text-red-600">*</span></label>
                            <input type="text" id="nama_pengulas" name="nama_pengulas"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Masukan nama Anda">
                           
                        </div>
                        <div class="mb-4 font-[Poppins]">
                            <label for="email" class="block text-black font-extrabold mb-2">Email <span
                                    class="text-red-600">*</span></label>
                            <input type="email" id="email_pengulas" name="email_pengulas"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Contoh: janesmith@gmail.com">
                        </div>
                        <div class=" mb-4 font-[Poppins]">
                            <label for="email" class="block text-black font-extrabold mb-2">Rating <span
                                class="text-red-600">*</span></label>
                            <select type="number" id="rating" name="rating"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Pilih Rating">
                                <option value="">Pilih Rating</option>
                                @for ($i = 1; $i <= 5; $i++) 
                                <option value="{{ $i }}">{{ $i }} <i
                                    class="fas fa-star"></i></option>
                                @endfor
                            </select>
                        </div>
                        <div class="mb-4 font-[Poppins]">
                            <label for="pesan" class="block text-black font-extrabold mb-2">Ulasan Anda <span
                                    class="text-red-600">*</span></label>
                            <textarea id="ulasan" name="ulasan" rows="4"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Ketik ulasan Anda disini"></textarea>
                        </div>
                        <button type="submit"
                            class="bg-green-600 text-white px-8 py-2 rounded-lg hover:bg-green-700">Kirim
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
    // Notifikasi Pesan Pada Form Kontak
    document.addEventListener('DOMContentLoaded', function() {
        var successMessage = document.getElementById('successMessage');

        if (successMessage) {
            successMessage.style.display = 'block';
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 5000); // Menyembunyikan pesan setelah 5 detik
        }
    });
    </script>
</body>

</html>