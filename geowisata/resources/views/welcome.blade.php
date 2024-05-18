<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandung Geowisata</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Leaflet Js -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/gokertanrisever/leaflet-ruler@master/src/leaflet-ruler.css"
        integrity="sha384-P9DABSdtEY/XDbEInD3q+PlL+BjqPCXGcF8EkhtKSfSTr/dS5PBKa9+/PMkW2xsY" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/gh/gokertanrisever/leaflet-ruler@master/src/leaflet-ruler.js"
        integrity="sha384-N2S8y7hRzXUPiepaSiUvBH1ZZ7Tc/ZfchhbPdvOE5v3aBBCIepq9l+dBJPFdo1ZJ" crossorigin="anonymous">
    </script>

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
                <a href="#"
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Beranda</a>
                <a href="#"
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Tentang</a>
                <a href="#"
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Rekomendasi</a>
                <a href="#"
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Peta
                    Wisata</a>
                <a href="/kontak/create"
                    class="font-[Poppins] block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Kontak</a>
            </div>
    </nav>
    <section
        class="bg-[url('https://images.unsplash.com/photo-1549473889-14f410d83298?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] flex justify-center items-center h-screen">
        <div class="text-center grid py-8 px-12 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-16 ">
            <div class="place-self-center text-center mr-auto">
                <h1
                    class="font-[Poppins] mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">
                    BANDUNG</h1>
                <h4
                    class="font-[Poppins] mb-4 max-w-2xl text-3xl font-extrabold leading-none md:text-3xl xl:text-4xl dark:text-white">
                    KOTA SEJUTA PESONA</h4>
                <p
                    class="font-[Poppins] items-center text-center mb-6 max-w-2xl font-light text-white lg:mb-8 md:text-lg lg:text-xl dark:text-white">
                    Ayo jelajahi kota Bandung dan temukan berbagai pesonanya. Kamu dapat menekan tombol dibawah untuk
                    menemukan berbagai objek wisata yang menarik di kota Bandung
                </p>
                <a href="/petawisata"
                    class="font-[Poppins] inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center bg-white text-gray-900 rounded-lg border border-gray-300 hover:bg-grey-100 focus:ring-4 focus:ring-gray-100 dark:text-dark dark:border-white dark:hover:bg-grey-700 dark:focus:ring-grey-800">
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

    <section class="flex justify-center items-center h-screen object-cover w-full object-center">
        <div class="grid items-center py-8 px-12 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-16 ">
            <div class="">
                <div class="text-center">
                    <h1
                        class="font-[Poppins] text-center mb-8 text-2xl font-extrabold leading-none md:text-4xl xl:text-5xl">
                        Tentang Kota Bandung </h1>
                    <p
                        class="font-[Poppins] inline-flex items-center mb-6 max-w-2xl font-light text-slate-700 lg:mb-8 md:text-lg lg:text-xl dark:text-slate-800">
                        Bandung, kota yang dijuluki "Kota Kembang" dan "Paris Van Java", merupakan ibukota Jawa
                        Barat
                        dan metropolitan terbesar di provinsi tersebut.
                        Dikelilingi pegunungan, Bandung menawarkan suasana sejuk dan nyaman dengan udara pegunungan.
                        Keindahan alamnya yang memukau, budaya Sunda yang kaya,
                        dan kulinernya yang lezat menjadikannya tujuan wisata populer bagi wisatawan domestik dan
                        internasional
                    </p>
                </div>
            </div>

            <div class="flex gap-8 hover:gap-6">
                <div class="">
                    <img src="./img/gedungmerdeka.png" class="size-auto rounded">
                </div>
                <div class="">
                    <img src="./img/pasarbaru.png" class="size-auto rounded">
                </div>
                <div class="">
                    <img src="./img/asiaafrika.png" class="size-auto rounded">
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="font-[Poppins] max-w-screen-xl mx-auto sm:p-10 md:p-16 bg-green-900">
            <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-3 gap-8 p-8">

                <div class="max-w-sm bg-white rounded-lg shadow">
                    <a href="#">
                        <img class="rounded-t-lg"
                            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxfHxwZXJzb258ZW58MHwwfHx8MTcxMDUxNjkwM3ww&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="" />
                    </a>
                    <div class="p-5">
                        <h5 class="font-[Poppins] mb-2  text-slate-800 font-bold tracking-tight text-gray-900">Gedung
                            Sate</h5>
                        <div class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <p class="text-gray-600 font-semibold text-sm ml-1">
                                4.96
                                <span class="text-gray-500 font-normal">(76 reviews)</span>
                            </p>
                        </div>
                        <p class="text-sm">Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat
                            40115</p>
                        <p class="text-slate-900 text-xs pt-2 pb-2">
                            Lorem ipsum dolor sit amet, consectetur adipisicin elit.
                            Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium
                            nihil.
                        </p>
                        <a href="#"
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

                <div class="max-w-sm bg-white rounded-lg shadow">
                    <a href="#">
                        <img class="rounded-t-lg"
                            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxfHxwZXJzb258ZW58MHwwfHx8MTcxMDUxNjkwM3ww&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="" />
                    </a>
                    <div class="p-5">
                        <h5 class="mb-2  text-slate-800 font-bold tracking-tight text-gray-900">Gedung Sate</h5>
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
                        <p class="text-sm">Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat
                            40115</p>
                        <p class="text-slate-900 text-xs pt-2 pb-2">
                            Lorem ipsum dolor sit amet, consectetur adipisicin elit.
                            Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium
                            nihil.
                        </p>
                        <a href="#"
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

                <div class="max-w-sm bg-white rounded-lg shadow">
                    <a href="#">
                        <img class="rounded-t-lg"
                            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxfHxwZXJzb258ZW58MHwwfHx8MTcxMDUxNjkwM3ww&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="" />
                    </a>
                    <div class="p-5">
                        <h5 class="mb-2  text-slate-800 font-bold tracking-tight text-gray-900">Gedung Sate</h5>
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
                        <p class="text-sm">Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat
                            40115</p>
                        <p class="text-slate-900 text-xs pt-2 pb-2">
                            Lorem ipsum dolor sit amet, consectetur adipisicin elit.
                            Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium
                            nihil.
                        </p>
                        <a href="#"
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

                <div class="max-w-sm bg-white rounded-lg shadow">
                    <a href="#">
                        <img class="rounded-t-lg"
                            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxfHxwZXJzb258ZW58MHwwfHx8MTcxMDUxNjkwM3ww&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="" />
                    </a>
                    <div class="p-5">
                        <h5 class="mb-2  text-slate-800 font-bold tracking-tight text-gray-900">Gedung Sate</h5>
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
                        <p class="text-sm">Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat
                            40115</p>
                        <p class="text-slate-900 text-xs pt-2 pb-2">
                            Lorem ipsum dolor sit amet, consectetur adipisicin elit.
                            Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium
                            nihil.
                        </p>
                        <a href="#"
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
    </section>

    <section>

        <div class="max-w-screen-xl mx-auto sm:p-8 md:p-16">
            <h4 class="mb-8 font-[Poppins] font-bold leading-none md:text-3xl xl:text-4xl dark:text-slate-800">
                Peta Wisata
            </h4>

            <form>
                <div class="flex gap-2">
                    <input type="text" id="searchInput"
                        class="w-full md:w-80 px-3 h-10 rounded border-2 border-slate-300 focus:outline-none focus:border-sky-500"
                        placeholder="Search..." oninput="onTyping(this)" />
                    <label for="kategori">
                        <select id="kategoriSelect"
                            class="font-[Poppins] w-full md:w-80 px-3 h-10 rounded border-2 border-slate-300 focus:outline-none focus:border-sky-500"
                            onchange="onCategoryChange()">
                            <option value="">Kategori Wisata</option>
                            @foreach ($kategori as $kategoriItem)
                                <option value="{{ $kategoriItem->id }}">{{ $kategoriItem->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </label>
                    <button type="submit"
                        class="bg-green-500 text-white rounded px-2 md:px-3 py-0 md:py-1">Search</button>
                </div>
                <ul id="search-result"></ul>
            </form>

            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

            <div id="map" class="rounded"> </div>
        </div>

    </section>

    <!-- Start Contact -->
    <section id="kontak" class="contact">
        <div class="container font-[Poppins] mx-auto px-4 py-8">

            <!-- Start Contact-Header -->
            <div class="contact-header">
                <div class="text-center p-5">
                    <h2 class="text-4xl font-extrabold mb-4 text-green-600">Lorem</h2>
                    <p class="mb-6 text-gray-700">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, dolorem quis inventore odio
                        excepturi, laborum repudiandae corporis quasi aliquid consectetur praesentium expedita
                        doloremque
                        laboriosam minima in cumque quibusdam minus id. Iste blanditiis rerum fuga aspernatur suscipit
                        quo
                        laboriosam a porro pariatur magnam repudiandae, obcaecati quaerat, nulla quidem, sapiente
                        voluptatum
                        eaque!
                    </p>
                    <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-6 mb-5">
                        <p class="text-gray-700 flex items-center">
                            <i class="fas fa-phone-alt mr-2 text-green-600"></i><strong class="text-green-600">Telepon
                                :
                            </strong> &nbsp; (123) 456-7890
                        </p>
                        <p class="text-gray-700 flex items-center">
                            <i class="fas fa-envelope mr-2 text-green-600"></i><strong class="text-green-600">Email :
                            </strong> &nbsp;
                            Bdg@gmail.com
                        </p>
                        <p class="text-gray-700 flex items-center">
                            <i class="fab fa-twitter mr-2 text-green-600"></i><strong class="text-green-600">Twitter :
                            </strong> &nbsp; @bandunggeowisata
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Contact-Header -->

            <!-- Start Contact-Body -->
            <div class="contact-body">
                <div class="max-w-lg mx-auto bg-white p-8 font-[Poppins] rounded-lg shadow-lg">
                    <h2 class="text-2xl font-extrabold mb-6 text-green-600">Hubungi Kami</h2>
                    @if (session('success'))
                        <div id="successMessage" class="bg-green-500 text-white p-4 rounded mb-4">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ url('/kontak/store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="nama" class="block text-sm font-medium text-gray-500">Nama <span
                                    class="text-red-600">*</span></label>
                            <input type="text" id="nama" name="nama" required
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-500">Email <span
                                    class="text-red-600">*</span></label>
                            <input type="email" id="email" name="email" required
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="pesan" class="block text-sm font-medium text-gray-500">Pesan <span
                                    class="text-red-600">*</span></label>
                            <textarea id="pesan" name="pesan" rows="4" required
                                class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
                        </div>
                        <div>
                            <button type="submit"
                                class="w-full bg-green-700 text-white font-semibold py-2 px-4 rounded-md shadow hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Contact-Body -->

        </div>
    </section>
    <!-- End Contact -->

    <section class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
        <footer class="bg-white font-[Poppins] h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            <div class="mx-auto w-full max-w-screen-xl">
                <div class=" md:mb-0 py-12 px-16">
                    <a href="#" class="flex items-center">
                        <img src="./img/logo.svg" class="h-12 me-3" alt="Bandung Geowisata" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-slate-900"></span>
                    </a>
                </div>
                <div class="grid grid-cols-2 px-16 py-8 lg:py-8 md:grid-cols-4">

                    <div>
                        <h2 class="mb-6  font-semibold text-gray-900 uppercase dark:text-slate-900">Kontak Kami</h2>
                        <ul class="text-gray-500 dark:text-gray-600 font-medium">
                            <li class="mb-4">
                                <a href="#" class=" hover:underline">Tentang Kami</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Sosial Media</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6  font-semibold text-gray-900 uppercase dark:text-slate-900">Menu</h2>
                        <ul class="text-gray-500 dark:text-gray-600 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Tentang Bandung</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Rekomendasi</a>
                            </li>
                            <li class="mb-4">
                                <a href="/petawisata" class="hover:underline">Peta Wisata</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            </div>
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400 content-center">© 2024 <a
                    href="#" class="hover:underline">Bandung Geowisata™</a>. All Rights Reserved.</span>
        </footer>
    </section>

    <script>
        var map = L.map('map').setView([-6.914744, 107.609810], 10);

        map.zoomControl.setPosition('bottomright')

        L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            maxZoom: 20,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        const Marker = L.marker([-6.914744, 107.609810]).addTo(map);

        var popup = L.popup();

        function onMapClick(data) {
            popup
                .setLatLng(data.latlng)
                .setContent(data.latlng.toString())
                .openOn(map);
        }

        $(document).ready(function() {
            $.getJSON('point/json', function(data) {
                $.each(data, function(index) {

                    L.marker([parseFloat(data[index].latitude), parseFloat(data[index]
                            .longitude)])
                        .addTo(map)
                        .bindPopup(
                            '<div class"min-h-screen flex items-center justify-center"><img class="h-48 w-full object-cover object-end" src="./img/' +
                            data[index].gambar +
                            '"><div class="p-6"><h4 class="mt-2 font-bold text-lg truncate">' +
                            data[index].nama_tempat + '</h4><div class=""> <br> ' + data[index]
                            .alamat +
                            ' </div><div class="my-2"><a href="/hwisata" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50 mt-4 w-full flex items-center justify-center">Lihat Selengkapnya</a><button onclick="getLocation(' +
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
        map.on("click", function(e) {
            const {
                latitude,
                longitude
            } = e.latlng
            Marker.setLatLng([latitude, longitude]);
            clearResults();
        });
        let typingInterval
        // typing handler
        function onTyping(e) {
            clearInterval(typingInterval)
            const {
                value
            } = e.target.value;
            typingInterval = setInterval(() => {
                clearInterval(typingInterval)
                searchLocation(value)
            }, 500);
        }
        //elemen input dan select
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
        // search handler
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
        // render results
        function renderResults(result) {
            const resultsWrapperHTML = document.getElementById("search-result");
            let resultsHTML = "";
            result.forEach(n => {
                resultsHTML +=
                    `<li><a href="#" onclick="setLocation(${n.latitude},${n.longitude}); return false;">${n.nama_tempat}, ${n.alamat}</a></li>`
            });
            resultsWrapperHTML.innerHTML = resultsHTML;
        }

        function setLocation(latitude, longitude) {
            map.setView(new L.LatLng(latitude, longitude), 25);
            Marker.setLatLng([latitude, longitude]);
            clearResults();
        }
        // clear results
        function clearResults() {
            const resultsWrapperHTML = document.getElementById("search-result");
            resultsWrapperHTML.innerHTML = "";
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
        #map {
            height: 100vh;
            width: 100%;
        }

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
    </style>

</body>

</html>
