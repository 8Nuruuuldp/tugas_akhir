<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandung Geowisata</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Leaflet Js -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>
 <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/gokertanrisever/leaflet-ruler@master/src/leaflet-ruler.css" integrity="sha384-P9DABSdtEY/XDbEInD3q+PlL+BjqPCXGcF8EkhtKSfSTr/dS5PBKa9+/PMkW2xsY" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/gh/gokertanrisever/leaflet-ruler@master/src/leaflet-ruler.js" integrity="sha384-N2S8y7hRzXUPiepaSiUvBH1ZZ7Tc/ZfchhbPdvOE5v3aBBCIepq9l+dBJPFdo1ZJ" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>

    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

        <script src="https://cdn.maptiler.com/maptiler-geocoding-control/v1.2.0/leaflet.umd.js"></script>
    <link href="https://cdn.maptiler.com/maptiler-geocoding-control/v1.2.0/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://opengeo.tech/maps/leaflet-search/src/leaflet-search.css">
        <script src="https://opengeo.tech/maps/leaflet-search/dist/leaflet-search.src.js"></script>

</head>
<body>

    <nav class="flex items-center justify-between px-12 py-4 bg-transparent">
    <img src="#" alt="Bandung Geowisata" width="120" />

    <div class="flex md:hidden">
        <button id="hamburger">
            <img class="toggle block"
                src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png" width="40" height="40" />
            <img class="toggle hidden" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png" width="40" height="40" />
        </button>
    </div>

    <div class="toggle hidden md:flex w-full md:w-auto text-right text-bold mt-5 md:mt-0 border-t-2 border-blue-900 md:border-none">
        <a href="/" class="block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Beranda</a>
        <a href="#" class="block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Tentang</a>
        <a href="#" class="block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Rekomendasi</a>
        <a href="/petawisata" class="block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Peta Wisata</a>
        <a href="#" class="block md:inline-block text-blue-900 hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Kontak</a>
    </div>

    <a href="/login" class="toggle hidden md:flex w-full md:w-auto px-4 py-2 text-right bg-green-700 hover:bg-green-500 text-white md:rounded">Masuk</a>

    </nav>

    <section class="bg-[url('https://images.unsplash.com/photo-1549473889-14f410d83298?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] flex justify-center items-center h-screen">
        <div class="text-center grid py-8 px-12 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-16 ">
            <div class="place-self-center text-center mr-auto">
                <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">BANDUNG</h1>
                <h4 class="mb-4 max-w-2xl text-3xl font-extrabold leading-none md:text-3xl xl:text-4xl dark:text-white">KOTA SEJUTA PESONA</h4>
                <p class="items-center text-center mb-6 max-w-2xl font-light text-white lg:mb-8 md:text-lg lg:text-xl dark:text-white">
                Ayo jelajahi kota Bandung dan temukan berbagai pesonanya. Kamu dapat menekan tombol dibawah untuk menemukan berbagai objek wisata yang menarik di kota Bandung
                </p>
                <a href="/petawisata" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center bg-white text-gray-900 rounded-lg border border-gray-300 hover:bg-grey-100 focus:ring-4 focus:ring-gray-100 dark:text-dark dark:border-white dark:hover:bg-grey-700 dark:focus:ring-grey-800">
                    Temukan Tempat Wisata
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
    </section>

    <section class="flex justify-center items-center h-screen object-cover w-full object-center">
        <div class="grid items-center py-8 px-12 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-16 ">
            <div class="">
                <div class="text-center">
                    <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-slate-800">
                        Tentang Kota Bandung</h1>
                    <p class="items-center mb-6 max-w-2xl font-light text-slate-700 lg:mb-8 md:text-lg lg:text-xl dark:text-slate-800">
                    Bandung, kota yang dijuluki "Kota Kembang" dan "Paris Van Java", merupakan ibukota Jawa Barat dan metropolitan terbesar di provinsi tersebut.
                    Dikelilingi pegunungan, Bandung menawarkan suasana sejuk dan nyaman dengan udara pegunungan. Keindahan alamnya yang memukau, budaya Sunda yang kaya,
                    dan kulinernya yang lezat menjadikannya tujuan wisata populer bagi wisatawan domestik dan internasional
                    </p>
                </div>
                <div class="flex gap-8 ">
                    <div class="">
                        <img src="#" class="size-auto rounded">
                    </div>
                    <div class="">
                        <img src="#" class="size-auto rounded">
                    </div>
                    <div class="">
                        <img src="#" class="size-auto rounded">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="max-w-screen-xl mx-auto sm:p-10 md:p-16 bg-green-900">
            <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-3 gap-8 p-8">

                <div class="bg-white rounded flex flex-col justify-between leading-normal">
                <img src="https://images.unsplash.com/photo-1683471619890-fb7e51c3201c?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-500 rounded">
                    <div class="p-4 pt-2">
                        <div class="mb-8">

                            <h6 class="text-gray-900 font-bold text-lg mb-2">
                                Gedung Sate
                            </h6>
                            <span>
                            Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan
                            </span>
                            <p>Bintang ini nantinya
                            <p class="text-gray-700 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>

                        </div>

                        <button type="button" class="text-slate-800 text-sm hover:bg-green-800 hover:text-white border border-slate-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center inline-flex items-center">
                            Lihat Selengkapnya
                            <svg class="w-3.5 h-3.5 ms-2 text-gray-800 dark:text-slate-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"/>
                            </svg>
                        </button>

                    </div>
                </div>
                <div class="bg-white rounded flex flex-col justify-between leading-normal">
                <img src="https://images.unsplash.com/photo-1683471619890-fb7e51c3201c?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-500 rounded">
                    <div class="p-4 pt-2">
                        <div class="mb-8">

                            <h6 class="text-gray-900 font-bold text-lg mb-2">
                                Gedung Sate
                            </h6>
                            <span>
                            Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan
                            </span>
                            <p>Bintang ini nantinya
                            <p class="text-gray-700 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>

                        </div>

                        <button type="button" class="text-slate-800 text-sm hover:bg-green-800 hover:text-white border border-slate-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center inline-flex items-center">
                            Lihat Selengkapnya
                            <svg class="w-3.5 h-3.5 ms-2 text-gray-800 dark:text-slate-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"/>
                            </svg>
                        </button>

                    </div>
                </div>
                <div class="bg-white rounded flex flex-col justify-between leading-normal">
                <img src="https://images.unsplash.com/photo-1683471619890-fb7e51c3201c?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-500 rounded">
                    <div class="p-4 pt-2">
                        <div class="mb-8">

                            <h6 class="text-gray-900 font-bold text-lg mb-2">
                                Gedung Sate
                            </h6>
                            <span>
                            Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan
                            </span>
                            <p>Bintang ini nantinya
                            <p class="text-gray-700 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>

                        </div>

                        <button type="button" class="text-slate-800 text-sm hover:bg-green-800 hover:text-white border border-slate-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center inline-flex items-center">
                            Lihat Selengkapnya
                            <svg class="w-3.5 h-3.5 ms-2 text-gray-800 dark:text-slate-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"/>
                            </svg>
                        </button>

                    </div>
                </div>
                <div class="bg-white rounded flex flex-col justify-between leading-normal">
                <img src="https://images.unsplash.com/photo-1683471619890-fb7e51c3201c?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-500 rounded">
                    <div class="p-4 pt-2">
                        <div class="mb-8">

                            <h6 class="text-gray-900 font-bold text-lg mb-2">
                                Gedung Sate
                            </h6>
                            <span>
                            Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan
                            </span>
                            <p>Bintang ini nantinya
                            <p class="text-gray-700 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>

                        </div>

                        <button type="button" class="text-slate-800 text-sm hover:bg-green-800 hover:text-white border border-slate-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center inline-flex items-center">
                            Lihat Selengkapnya
                            <svg class="w-3.5 h-3.5 ms-2 text-gray-800 dark:text-slate-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"/>
                            </svg>
                        </button>

                    </div>
                </div>


            </div>

            <h1 class="text-center mb-8 text-2xl font-extrabold leading-none md:text-4xl xl:text-5xl text-white">
                Rekomendasi Destinasi
            </h1>
            <p class="text-center pb-2 text-white">
                Bandung siap menyambut Anda dengan berbagai pesonanya. Jelajahi destinasi wisata favorit Anda dan ciptakan
                kenangan indah di Kota Kembang. Berikut ekomendasi yang dapat Anda kunjungi.
            </p>

        </div>
    </section>

    <section>

    <div class="max-w-screen-xl mx-auto sm:p-8 md:p-16">
        <h4 class="mb-8 font-bold leading-none md:text-3xl xl:text-4xl dark:text-slate-800">
            Peta Wisata
        </h4>

        <form>
            <div class="flex gap-2">
                <input name="searchInput" id="searchInput" type="text" placeholder="Search..." value="{{request('search')}}"
                    class="w-full md:w-80 px-3 h-10 rounded border-2 border-slate-300 focus:outline-none focus:border-sky-500">
                    <label for="kategori">
                        <select class="w-full md:w-80 px-3 h-10 rounded border-2 border-slate-300 focus:outline-none focus:border-sky-500" onchange="search(this.value)">
                            <option value="">Kategori Wisata</option>
                            @foreach ($kategori as $kategori)
                            <option value="{{$kategori->id}}" >{{$kategori->nama_kategori}}</option>
                            @endforeach
                        </select>
                    </label>
                <button type="submit" class="bg-green-500 text-white rounded px-2 md:px-3 py-0 md:py-1">Search</button>
            </div>
        </form>

        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

        <div id="map" class="rounded"> </div>

    </div>

    </section>
    <section class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
        <footer class="bg-white h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            <div class="mx-auto w-full max-w-screen-xl">
                <div class=" md:mb-0 py-12 px-16">
                    <a href="#" class="flex items-center">
                        <img src="#" class="h-8 me-3" alt="Bandung Geowisata" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-slate-900">Bandung Geowisata</span>
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
                            <a href="#" class="hover:underline">Peta Wisata</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        </div>
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400 content-center">© 2024 <a href="#" class="hover:underline">Bandung Geowisata™</a>. All Rights Reserved.</span>
        </footer>
    </section>

    <script>
        var data = [
            <?php foreach($wisata as $wisata => $value) { ?>
                {"lokasi":[<?= $value->latitude?> , <?= $value->longitude?> , <?= $value->kategori_id?>], "nama_tempat":"<?= $value->nama_tempat?>],"},
            <?php } ?>
        ];

        var map = L.map('map').setView([-6.914744, 107.609810], 10);

        map.zoomControl.setPosition('bottomright')

        L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            maxZoom: 20,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        var popup = L.popup();
            function onMapClick(data) {
            popup
            .setLatLng(data.latlng)
            .setContent(data.latlng.toString())
            .openOn(map);
        }

        $( document ).ready(function() {
            $.getJSON('point/json', function(data) {
                $.each(data, function(index){

                    L.marker ([parseFloat(data[index].latitude),parseFloat(data[index].longitude)])
                    .addTo(map)
                    .bindPopup((data[index].nama_tempat));
                });
            });
        });


    </script>

    <style>
        #map {
            height: 100vh;
            width: 100%;
        }
    </style>

</body>
</html>
