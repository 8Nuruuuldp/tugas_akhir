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

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/gokertanrisever/leaflet-ruler@master/src/leaflet-ruler.css" integrity="sha384-P9DABSdtEY/XDbEInD3q+PlL+BjqPCXGcF8EkhtKSfSTr/dS5PBKa9+/PMkW2xsY" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/gh/gokertanrisever/leaflet-ruler@master/src/leaflet-ruler.js" integrity="sha384-N2S8y7hRzXUPiepaSiUvBH1ZZ7Tc/ZfchhbPdvOE5v3aBBCIepq9l+dBJPFdo1ZJ" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
        <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>

        <link rel="stylesheet" href="https://opengeo.tech/maps/leaflet-search/src/leaflet-search.css">
        <script src="https://opengeo.tech/maps/leaflet-search/dist/leaflet-search.src.js"></script>

</head>
<body>
    <div class="rounded" id="map"></div>
    <div class="formBlock">
        <form id="form">
            <input type="text" name="start" class="input" id="start" placeholder="Cari Wilayah" />
        </form>
    </div>

    <style>
        #map {
            height: 100vh;
            width: 100%;
        }

        .formBlock {
                    max-width: 300px;
                    background-color: #FFF;
                    border: 1px solid #ddd;
                    position: absolute;
                    top: 10px;
                    left: 10px;
                    padding: 10px;
                    z-index: 999;
                    box-shadow: 0 1px 5px rgba(0,0,0,0.65);
                    border-radius: 5px;
                    width: 100%;
                }

                .leaflet-top .leaflet-control {
                    margin-top: 180px;
                }

                .input {
                    padding: 10px;
                    width: 100%;
                    border: 1px solid #ddd;
                    font-size: 15px;
                    border-radius: 3px;
                }
                #form {
                    padding: 0;
                    margin: 0;
                }
                .input:nth-child(1) {
                    margin-bottom: 10px;
                }


    </style>

    <script>
        var map = L.map('map').setView([-6.914744, 107.609810], 13);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
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
                    .bindPopup('<div class="my-2"><strong>Gambar</strong> :<br>'+data[index].gambar+'</div><div class="my-2"><strong>Nama Tempat</strong> :<br>'+data[index].nama_tempat+'</div><div class="my-2"><strong>Alamat</strong> :<br>'+data[index].alamat+'</div><div class="my-2"><strong>Deskripsi</strong> :<br>'+data[index].deskripsi+'</div><div class="my-2"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Beri Ulasan</button> <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Lihat selengkapnya</button> <button class="bg-cyan hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Get Direction</button></div>');
                });
            });
        });



        // var markersLayer = new L.LayerGroup();

        // map.addLayer(markersLayer);

        // var controlSearch = new L.Control.Search({
        //     container: 'form',
        //     position:'topright',
        //     layer: markersLayer,
        //     initial: false,
        //     zoom: 17,
        //     marker: false
        // });

        // map.addControl( controlSearch );

    </script>
</body>
</html>
