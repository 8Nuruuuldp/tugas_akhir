<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandung Geowisata</title>

    <link rel="icon" href="./img/logo.svg">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Leaflet Js -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.js" charset="utf-8">
    </script>

    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <script src="https://cdn.maptiler.com/maptiler-geocoding-control/v1.2.0/leaflet.umd.js"></script>
    <link href="https://cdn.maptiler.com/maptiler-geocoding-control/v1.2.0/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

    <link rel="stylesheet" href="https://leafletjs.com/index.html#marker">

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    <nav class="sticky mx-auto top-0 z-50 bg-white">
        <div class="flex flex-wrap items-center justify-between px-12 py-3">
            <img src="./img/logo.svg" alt="Bandung Geowisata" width="100" />

            <div class="flex md:hidden">
                <button id="hamburger">
                    <img class="toggle block" src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png"
                        width="40" height="40" />
                    <img class="toggle hidden" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png"
                        width="40" height="40" />
                </button>
            </div>

            <div
                class="toggle hidden md:flex w-full md:w-auto text-right text-bold mt-1 md:mt-0 border-t-2 border-blue-900 md:border-none">
                <a href="#beranda"
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Beranda</a>
                <a href="#tentang"
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Tentang</a>
                <a href="#rekomendasi"
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Rekomendasi</a>
                <a href="#petawisata"
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Peta
                    Wisata</a>
                <a href="#kontak"
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Kontak</a>
            </div>
    </nav>

    <section id="beranda"
        class="bg-[url('https://images.unsplash.com/photo-1549473889-14f410d83298?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] flex justify-center items-center h-screen">
        <div class="text-center grid py-8 px-12 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-16 ">
            <div class="place-self-center text-center mr-auto">
                <h1
                    class="font-[Poppins] mb-4 max-w-2xl text-4xl font-extrabold leading-n2ne md:text-5xl xl:text-6xl dark:text-white">
                    BANDUNG</h1>
                <h4
                    class="font-[Poppins] mb-4 max-w-2xl text-2xl font-extrabold md:text-2xl xl:text-4xl dark:text-white">
                    KOTA SEJUTA PESONA</h4>
                <p
                    class="font-[Poppins] items-center text-center mb-6 max-w-2xl font-light text-white lg:mb-8 md:text-lg lg:text-xl dark:text-white">
                    Ayo jelajahi kota Bandung dan temukan berbagai pesonanya. Kamu dapat menekan tombol dibawah untuk
                    menemukan berbagai objek wisata yang menarik di kota Bandung
                </p>
                <a href="#petawisata"
                    class="font-[Poppins] inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center bg-white text-gray-900 rounded-lg border border-gray-300 hover:bg-grey-100 focus:ring-4 focus:ring-gray-100 dark:text-dark dark:border-white dark:hover:bg-grey-700 dark:focus:ring-grey-800 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:duration-300">
                    Temukan Tempat Wisata
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section id="tentang" class="font-[Poppins] flex justify-center items-center object-cover w-full object-center">
        <div class="grid items-center py-8 px-12 mx-auto lg:gap-8 xl:gap-0 lg:py-16 ">
            <div class="">
                <div class="text-center">
                    <h1 class=" text-center mb-8 text-2xl font-extrabold leading-none md:text-4xl xl:text-5xl">
                        Tentang Kota Bandung </h1>
                    <p
                        class=" inline-flex items-center mb-6 font-light text-slate-700 lg:mb-8 md:text-lg lg:text-xl dark:text-slate-800">
                        Bandung, kota yang dijuluki "Kota Kembang" dan "Paris Van Java", merupakan ibukota Jawa Barat
                        dan metropolitan terbesar di provinsi tersebut.
                        Dikelilingi pegunungan, Bandung menawarkan suasana sejuk dan nyaman dengan udara pegunungan.
                        Keindahan alamnya yang memukau, budaya Sunda yang kaya,
                        dan kulinernya yang lezat menjadikannya tujuan wisata populer bagi wisatawan domestik dan
                        internasional.
                    </p>
                </div>
            </div>

            <div class="text-white flex items-center justify-center" x-data="carouselFilter()">
                <div class="container grid grid-cols-1">
                    <div class="flex justify-center">
                    </div>
                    <div class="row-start-2 col-start-1" x-show="active == 0"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-90">
                        <div class="grid grid-cols-1 grid-rows-1" x-data="carousel()" x-init="init()">
                            <div
                                class="col-start-1 row-start-1 relative z-20 flex items-center justify-center pointer-events-none">
                                <h1 class="absolute text-2xl md:text-5xl uppercase font-black tracking-widest text-center" x-show="active == 0"
                                    x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 transform translate-y-12"
                                    x-transition:enter-end="opacity-100 transform translate-y-0"
                                    x-transition:leave="transition ease-out duration-300"
                                    x-transition:leave-start="opacity-100 transform translate-y-0"
                                    x-transition:leave-end="opacity-0 transform -translate-y-12">Gedung Merdeka</h1>
                                <h1 class="absolute text-2xl md:text-5xl uppercase font-black tracking-widest text-center" x-show="active == 1"
                                    x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 transform translate-y-12"
                                    x-transition:enter-end="opacity-100 transform translate-y-0"
                                    x-transition:leave="transition ease-out duration-300"
                                    x-transition:leave-start="opacity-100 transform translate-y-0"
                                    x-transition:leave-end="opacity-0 transform -translate-y-12">Asia Afrika</h1>
                                <h1 class="absolute text-2xl md:text-5xl uppercase font-black tracking-widest text-center" x-show="active == 2"
                                    x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 transform translate-y-12"
                                    x-transition:enter-end="opacity-100 transform translate-y-0"
                                    x-transition:leave="transition ease-out duration-300"
                                    x-transition:leave-start="opacity-100 transform translate-y-0"
                                    x-transition:leave-end="opacity-0 transform -translate-y-12">Pasar Baru</h1>
                                <h1 class="absolute text-2xl md:text-5xl uppercase font-black tracking-widest text-center" x-show="active == 3"
                                    x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 transform translate-y-12"
                                    x-transition:enter-end="opacity-100 transform translate-y-0"
                                    x-transition:leave="transition ease-out duration-300"
                                    x-transition:leave-start="opacity-100 transform translate-y-0"
                                    x-transition:leave-end="opacity-0 transform -translate-y-12">Asia Afrika</h1>
                                <h1 class="absolute text-2xl md:text-5xl uppercase font-black tracking-widest text-center" x-show="active == 4"
                                    x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 transform translate-y-12"
                                    x-transition:enter-end="opacity-100 transform translate-y-0"
                                    x-transition:leave="transition ease-out duration-300"
                                    x-transition:leave-start="opacity-100 transform translate-y-0"
                                    x-transition:leave-end="opacity-0 transform -translate-y-12">Jembatan Kusumaatmaja
                                </h1>
                            </div>
                            <div class="carousel col-start-1 row-start-1" x-ref="carousel">
                                <div class="w-full px-2 flex-none md:w-3/5">
                                    <img src="./img/gedungmerdeka.png" loading="lazy">
                                </div>
                                <div class="w-full px-2 flex-none md:w-3/5 ">
                                    <img src="./img/asiaafrika.png" loading="lazy">
                                </div>
                                <div class="w-full px-2 flex-none md:w-3/5 ">
                                    <img src="./img/pasarbaru.png" loading="lazy">
                                </div>
                                <div class="w-full px-2 flex-none md:w-3/5 ">
                                    <img src="./img/jembatanasiaafrika.jpg" loading="lazy">
                                </div>
                                <div class="w-full px-2 flex-none md:w-3/5 ">
                                    <img src="./img/jl.Kusumaatmaja.jpg" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="rekomendasi"> <!--Tinggal Styling-->
            @php
            $wisata = App\Models\Wisata::orderByRaw("RAND()")->take(4)->get();
            @endphp
            @foreach($wisata as $wisata)
        <div class="container-fluid bg-green-900">
            
            <div class="font-[Poppins] max-w-screen-xl mx-auto sm:p-10 md:p-16 bg-green-900">
                <div class="grid">
                    <div class="max-w-sm bg-white rounded-lg shadow">
                        <a href="#">
                            <img class="rounded-t-lg"
                                src="{{ asset('.img/' . $wisata->gambar) }}"
                                alt="" />
                        </a>
                        <div class="p-3">
                            <h5 class="font-[Poppins] mb-2  text-slate-800 font-bold tracking-tight text-gray-900">
                            {{ $wisata->nama_tempat }}    
                            </h5>
                            <div class="flex items-center mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <p class="text-gray-600 font-semibold text-sm ml-1">
                                    4.96
                                    <span class="text-gray-500 font-normal">(76 reviews)</span>
                                </p>
                            </div>
                            <p class="text-sm">
                                {{ $wisata->alamat }}</p>
                            <p class="text-slate-900 text-xs pt-2 pb-2">
                                {{ $wisata->deskripsi }}
                            </p>
                            <a href="detailwisata/{{$wisata->id}}"
                                class="inline-flex items-center justify-center w-full px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Lihat selengkapnya
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                            
                        </div>
                    </div>
                    @endforeach
                </div>

                <h1
                    class="font-[Poppins] text-center mb-8 text-2xl font-extrabold leading-none md:text-4xl xl:text-5xl text-white">
                    Rekomendasi Destinasi
                </h1>
                <p class="font-[Poppins] text-center pb-2 text-white">
                    Bandung siap menyambut Anda dengan berbagai pesonanya. Jelajahi destinasi wisata favorit Anda dan
                    ciptakan
                    kenangan indah di Kota Kembang. Berikut ekomendasi yang dapat Anda kunjungi.
                </p>

            </div>
        </div>
    </section>

    <section id="petawisata">
        <div class="font-[Poppins] max-w-screen-xl mx-auto sm:p-8 md:p-8">
            <h1 class="mb-2 font-bold md:text-2xl xl:text-4xl dark:text-slate-800">
                Peta Wisata
            </h1>
            <p class=" inline-flex font-light text-slate-700 md:text-lg lg:text-xl dark:text-slate-800">
                Temukan destinasi wisata favorit Anda dan ciptakan kenangan indah di Kota Kembang dengan melakukan
                pencarian dibawah ini. </p>
            <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">

            <form class="mb-8 md:mb-12 ">
                <div class="flex flex-col md:flex-row gap-2 mb-4">
                    <input type="text" id="searchInput"
                        class="w-full md:w-100 px-3 md:px-3 py-2 h-10 rounded border-2 border-slate-300 focus:outline-none focus:border-sky-500"
                        placeholder="Cari Tempat dan Alamat" oninput="onTyping(this)" />
                    <label for="kategori">
                        <select id="kategoriSelect"
                            class="w-full md:w-80 px-3 md:px-3 py-2 h-10 rounded border-2 border-slate-300 focus:outline-none focus:border-sky-500"
                            onchange="onCategoryChange()">
                            <option value="">Kategori Wisata</option>
                            @foreach ($kategori as $kategoriItem)
                                <option value="{{ $kategoriItem->id }}">{{ $kategoriItem->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </label>
                    <button type="submit"
                        class="bg-green-500 text-white rounded px-3 md:px-3 md:px-3 py-1 md:py-1">Search</button>
                </div>
                <ul id="search-result"></ul>
            </form>

            <div id="map" class="z-10" style="width: 100%; height: 600px;"></div>
        </div>
    </section>

    <!-- Start Contact -->
    <section id="kontak" class="contact">
        <div class="bg-green-900 flex justify-center items-center min-h-screen p-6 md:p-8">
            <div
                class="w-full max-w-6xl mx-auto flex flex-col md:flex-row justify-between space-y-8 md:space-y-0 md:space-x-24">
                <!-- Kolom Kiri: Tulisan -->
                <div class="md:w-1/2 background-image">
                    <h1 class="font-[Poppins] mb-8 text-2xl font-extrabold md:text-4xl xl:text-5xl text-white">Mari
                        terhubung dengan kami</h1>
                    <p class="font-[Poppins] text-white mb-4">Jangan ragu untuk menghubungi kami melalui berbagai
                        saluran kontak yang kami sediakan. Kami di sini untuk membantu dan memastikan pengalaman Anda
                        lebih nyaman dan lancar</p>
                </div>
                <!-- Kolom Kanan: Form -->
                <div class="md:w-1/2">
                    @if (session('success'))
                        <div id="successMessage" class="bg-green-500 text-white p-4 rounded mb-4">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ url('/kontak/store') }}" method="POST">
                        @csrf
                        <div class="mb-4 font-[Poppins]">
                            <label for="nama" class="block text-white font-extrabold mb-2">Nama Lengkap <span
                                    class="text-red-600">*</span></label>
                            <input type="text" id="nama" name="nama"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Masukan nama Anda">
                            <label for="nama" class="text-white">Contoh: Jane Smith</label>
                        </div>
                        <div class="mb-4 font-[Poppins]">
                            <label for="email" class="block text-white font-extrabold mb-2">Email <span
                                    class="text-red-600">*</span></label>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Masukan email Anda">
                            <label for="nama" class="text-white">Contoh: janesmith@gmail.com</label>
                        </div>
                        <div class="mb-4 font-[Poppins]">
                            <label for="pesan" class="block text-white font-extrabold mb-2">Pesan Anda <span
                                    class="text-red-600">*</span></label>
                            <textarea id="pesan" name="pesan" rows="4"
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Ketik pesan Anda disini"></textarea>
                        </div>
                        <button type="submit"
                            class="bg-green-600 text-white px-8 py-2 rounded-lg hover:bg-green-700">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->


    <!-- Footer Section -->
    <footer class="bg-white font-[Poppins] p-2">
        <div class="container mx-auto w-full max-w-screen-xl px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Column 1 -->
                <div>
                    <a href="#beranda" class="flex items-center mb-3">
                        <img src="/img/logo.svg" class="h-14 mr-3" alt="Bandung Geowisata" />
                    </a>
                    <p class="text-gray-700 text-sm">
                        Bandung Geowisata adalah layanan yang menyediakan informasi dan titik lokasi mengenai objek
                        wisata yang ada di kota bandung.
                    </p>
                </div>
                <!-- Column 2 -->
                <div>
                    <h2 class="mb-0 font-semibold text-gray-900">Kontak Kami</h2>
                    <ul class="text-gray-700 text-sm">
                        <li class="mb-1">
                            <a href="mailto:bgeowisata@gmail.com" target="_blank" class="hover:underline"><i
                                    class="fas fa-envelope"></i>&nbsp; Email: bgeowisata@gmail.com</a>
                        </li>
                        <li class="mb-1">
                            <a href="https://wa.me/085182619614?text=Hallo%20Admin%20mohon%20bantu%20Saya%20perihal" target="_blank"
                                class="hover:underline"><i class="fas fa-phone"></i>&nbsp; Phone Number:
                                +62 851-8261-9614</a>
                        </li>
                    </ul>
                </div>
                <!-- Column 3 -->
                <div>
                    <h2 class="mb-0 font-semibold text-gray-900">Media Sosial</h2>
                    <ul class="text-gray-700 text-sm">
                        <li class="mb-1">
                            <a href="https://www.instagram.com/bgeowisata" target="_blank" class="hover:underline"><i
                                    class="fab fa-instagram"></i>&nbsp; Instagram: @bgeowisata</a>
                        </li>
                        <li class="mb-1">
                            <a href="https://www.twitter.com/bgeowisata" target="_blank" class="hover:underline"><i
                                    class="fab fa-twitter"></i>&nbsp; Twitter: @bgeowisata</a>
                        </li>
                        <li class="mb-1">
                            <a href="https://www.facebook.com/profile.php?id=61560469682604&mibextid=ZbWKwL" class="hover:underline"><i
                                    class="fab fa-facebook"></i>&nbsp; Facebook: Bandung Geowisata</a>
                        </li>
                    </ul>
                </div>
                <!-- Column 4 -->
                <div>
                    <h2 class="mb-0 font-semibold text-gray-900">Menu Cepat</h2>
                    <ul class="text-gray-700 text-sm">
                        <li class="mb-1">
                            <a href="#beranda" class="hover:underline">Beranda</a>
                        </li>
                        <li class="mb-1">
                            <a href="#tentang" class="hover:underline">Tentang</a>
                        </li>
                        <li class="mb-1">
                            <a href="#rekomendasi" class="hover:underline">Rekomendasi</a>
                        </li>
                        <li class="mb-1">
                            <a href="#petawisata" class="hover:underline">Peta Wisata</a>
                        </li>
                        <li class="mb-1">
                            <a href="#kontak" class="hover:underline">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="my-8 border-gray-200" />
            <div class="text-center">
                <span class="text-sm text-gray-500">© 2024 <a href="#" class="hover:underline">Bandung
                        Geowisata™</a>.
                    All Rights Reserved.</span>
            </div>
        </div>
    </footer>

    <script>
        function carousel() {
            return {
                active: 0,
                init() {
                    var flkty = new Flickity(this.$refs.carousel, {
                        wrapAround: true
                    });
                    flkty.on('change', i => this.active = i);
                }
            }
        }

        function carouselFilter() {
            return {
                active: 0,
                changeActive(i) {
                    this.active = i;

                    this.$nextTick(() => {
                        let flkty = Flickity.data(this.$el.querySelectorAll('.carousel')[i]);
                        flkty.resize();

                        console.log(flkty);
                    });
                }
            }
        }
        var map = L.map('map', ).setView([-6.914744, 107.609810], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors',
        }).addTo(map);


        var popup = L.popup();

        function onMapClick(data) {
            popup
                .setLatLng(data.latlng)
                .setContent(data.latlng.toString())
                .openOn(map);
        }

        var iconMap = L.icon({
            iconUrl: "https://img.icons8.com/plasticine/100/place-marker.png",
            iconSize: [40, 40],
            iconAnchor: [22, 44],
            tooltipAnchor: [22, -20]
        });

        $(document).ready(function() {
            $.getJSON('point/json', function(data) {
                $.each(data, function(index) {

                    L.marker([parseFloat(data[index].latitude), parseFloat(data[index]
                            .longitude)], {
                            icon: iconMap
                        })
                        .addTo(map)
                        .bindPopup(
                            '<div class"min-h-screen flex items-center justify-center"><img class="h-48 w-full object-cover object-end" src="./img/' +
                            data[index].gambar +
                            '"><div class="p-6"><h4 class="mt-2 font-bold text-lg truncate">' +
                            data[index].nama_tempat + '</h4><div class=""> <br> ' + data[index]
                            .alamat + ' </div><div class="my-2"><a href="/detailwisata/' + data[
                                index].id +
                            '" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50 mt-4 w-full flex items-center justify-center">Lihat Selengkapnya</a><button onclick="getLocation(' +
                            data[index].latitude + ',' + data[index].longitude +
                            ')" class="py-2 text-blue-500 rounded shadow-md hover:bg-blue-300 active:bg-blue-700 disabled:opacity-50 mt-2 w-full flex items-center justify-center">Ayo kesana!</button></div></div></div></div>'
                        );
                });
            });
        });

        function getLocation(latitude, longitude) {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var userlat = position.coords.latitude;
                    var userlng = position.coords.longitude;
                    console.log(userlat, userlng);
                    // Mengambil posisi tujuan dari database menggunakan Ajax
                    $.ajax({
                        url: 'point/json',
                        method: 'get',
                        dataType: 'json',
                        success: function(data) {
                            // Menampilkan rute dari posisi pengguna ke posisi tujuan
                            var startLat = L.latLng(userlat, userlng);
                            var endPoint = L.latLng(latitude, longitude);
                            L.Routing.control({
                                waypoints: [
                                    startLat,
                                    endPoint
                                ],
                                routeWhileDragging: true,
                                geocoder: L.Control.Geocoder.nominatim()
                            }).addTo(map);
                        },
                        error: function(xhr, status, error) {
                            console.error("Error:", error);
                        }
                    });
                });
            } else {
                console.log("Geolocation is not supported by this browser.");
            }
        }
        //filtering
        const searchInput = document.getElementById('searchInput');
        const kategoriSelect = document.getElementById('kategoriSelect');

        searchInput.addEventListener('input', function() {
            const keyword = this.value;
            const kategori = kategoriSelect.value;
            searchLocation(keyword, kategori);
        });

        function onCategoryChange() {
            const keyword = searchInput.value;
            const kategori = kategoriSelect.value;
            searchLocation(keyword, kategori);
        }

        function searchLocation(keyword, kategori) {
            if (keyword || kategori) {
                fetch(`/search?keyword=${encodeURIComponent(keyword)}&kategori=${encodeURIComponent(kategori)}`)
                    .then(response => response.json())
                    .then(json => {
                        console.log("json", json);
                        if (json.length > 0) {
                            renderResults(json);
                        } else {
                            clearResults();
                            alert("Lokasi tidak ditemukan");
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert("Terjadi kesalahan saat mencari lokasi");
                    });
            } else {
                clearResults();
            }
        }

        function renderResults(result) {
            map.eachLayer(function(layer) {
                if (layer instanceof L.Marker) {
                    map.removeLayer(layer);
                }
            });
            result.forEach(n => {
                let marker = L.marker([n.latitude, n.longitude], {
                    icon: iconMap
                }).addTo(map);
                let popupContent = `<div class"min-h-screen flex items-center justify-center">
                            <img class="h-48 w-full object-cover object-end" src="${n.gambar}" alt="${n.nama_tempat}">
                            <div class="p-6">
                            <h4 class="mt-2 font-bold text-lg truncate">${n.nama_tempat}</h4>
                            <div class=""> <br>${n.alamat}</div>
                            <div class="my-2">
                            <a href="/detailwisata/${n.id}" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50 mt-4 w-full flex items-center justify-center">Lihat Selengkapnya</a>
                            <button onclick="getLocation(${n.latitude}, ${n.longitude})" class="py-2 text-blue-500 rounded shadow-md hover:bg-blue-300 active:bg-blue-700 disabled:opacity-50 mt-2 w-full flex items-center justify-center">Ayo kesana!</button>
                            </div>
                            </div>
                            </div>`;
                marker.bindPopup(popupContent);
                marker.on('click', function() {
                    marker.openPopup();
                });
                map.setView([n.latitude, n.longitude], 15);
            });
        }

        function clearResults() {
            map.eachLayer(function(layer) {
                if (layer instanceof L.Marker) {
                    map.removeLayer(layer);
                }
            });
        }
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
        //Hamburger Menu
        document.getElementById("hamburger").onclick = function toggleMenu() {
            const navToggle = document.getElementsByClassName("toggle");
            for (let i = 0; i < navToggle.length; i++) {
                navToggle.item(i).classList.toggle("hidden");
            }
        };
    </script>

    <style>
        ul {
            position: relative;
            top: 20px;
            z-index: 1001;
            width: 100%;
            background: #FFF;
            list-style: none;
            padding: 0;
        }

        li {
            padding: 5px 0;
        }

        .background-image {
            background-image: url('/Admin/dist/img/Group.png');
            background-size: cover;
            background-position: center;
        }
    </style>

</body>

</html>
