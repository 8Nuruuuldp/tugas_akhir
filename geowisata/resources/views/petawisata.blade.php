<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PETA WISATA</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin=""/>
        <script src="https://cdn.tailwindcss.com"></script>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
        <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
           
</head>
<body>
    <div class="map rounded" id="map"></div>

    <style>
        #map { 
            height: 100vh;
            width: 100%; 
        }
    </style>

    <script>
        var map = L.map('map').setView([-6.914744, 107.609810], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        map.zoomControl.setPosition('bottomright')

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
                    .bindPopup('<div class="anialiased text-gray-900"><div class" min-h-screen p-8 flex items-center justify-center"><div class="bg-white rounded-lg overflow-hidden shadow-2xl xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2"><img class="h-48 w-full object-cover object-end" src="./img/' + data[index].gambar + '">'+'<div class="p-6"><h4 clas="mt-2 font-bold text-lg truncate">'+data[index].nama_tempat+'</h4><div class="my-2"><strong>Alamat</strong> :<br>'+data[index].alamat+'</div><div class="my-2"><a href="/hwisata" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50 mt-4 w-full flex items-center justify-center">Lihat Selengkapnya</a><a href="/hwisata" class="py-2 text-blue-500 rounded shadow-md hover:bg-blue-300 active:bg-blue-700 disabled:opacity-50 mt-2 w-full flex items-center justify-center">Ayo kesana!</button></div></div></div></div>');
                });
            });
        });

    </script>
</body>
</html>