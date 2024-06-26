<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PETA WISATA</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.js"
        charset="utf-8"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.js"
        charset="utf-8"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="https://www.mapquestapi.com/sdk/leaflet/v2.2/mq-map.js?key=S8d7L47mdyAG5nHG09dUnSPJjreUVPeC"></script>
    <script src="https://www.mapquestapi.com/sdk/leaflet/v2.2/mq-routing.js?key=S8d7L47mdyAG5nHG09dUnSPJjreUVPeC">
    </script>

</head>

<body>

    <div class="map rounded" id="map">
        <div class="search-sidebar">
            <div
                class="formBlock bg-body text-dark w-25 position-absolute top-10 left-5  border shadow p-3 bg-white rounded">
                <form>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search..." oninput="onTyping(event)" />
                    </div>
                    <ul id="search-result"></ul>
                </form>
            </div>
        </div>
        {{-- <div class="hidden search-sidebar-content" id="sidebar">
            <div
                class="content-search bg-body text-dark h-100 position-absolute top-10 border shadow p-3 bg-white rounded">
                <ul>
                    <li>
                        <a href="#"><i class="rutes text-info bi bi-sign-turn-right-fill fa-2x p-2 active"></i></a>
                        <i class=" bi bi-car-front fa-2x p-2"></i>
                        <i class=" bi bi-bicycle fa-2x p-2"></i>
                        <i class=" bi bi-train-front fa-2x p-2"></i>
                        <i class=" bi bi-person-walking fa-2x p-2"></i>
                        <i class=" bi bi-bicycle fa-2x p-2"></i>
                        <i class=" bi bi-airplane fa-2x p-2"></i>
                        <i class=" bi bi-x-lg fa-2x p-2 active" onclick="toggleSidebar()"></i>
                    </li>
                </ul>
                <form id="form" >
                    <input type="text" name="start" class="form-control p-2 w-100 border" id="start"
                        placeholder="Pilih Titik Saat Ini" />
                    <input type="text" name="end" class="form-control p-2 w-100 border" id="destination"
                        placeholder="Pilih Tujuan"/>
                    <button style="display: none;" type="submit">Get Directions</button>
                </form>
            </div>
        </div> --}}
    </div>

    <style>
        #map {
            height: 100vh;
            width: 100%;
        }

        .formBlock {
            z-index: 999;
        }

        input:nth-child(1) {
            margin-bottom: 10px;
        }

        li {
            padding: 5px 0;
        }

    </style>

    <script>
        var map = L.map('map', ).setView([-6.914744, 107.609810], 13);

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

        $(document).ready(function () {
            $.getJSON('point/json', function (data) {
                $.each(data, function (index) {

                    L.marker([parseFloat(data[index].latitude), parseFloat(data[index]
                            .longitude)])
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
                navigator.geolocation.getCurrentPosition(function (position) {
                    var userlat = position.coords.latitude;
                    var userlng = position.coords.longitude;
                    console.log(userlat, userlng);
                    // Mengambil posisi tujuan dari database menggunakan Ajax
                    $.ajax({
                        url: 'point/json',
                        method: 'get',
                        dataType: 'json',
                        success: function (data) {
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

                        error: function (xhr, status, error) {
                            console.error("Error:", error);
                        }
                    });
                });
            } else {
                console.log("Geolocation is not supported by this browser.");
            }
        }

        // SEARCH Peta
        const marker = L.marker([-6.914744, 107.609810]).addTo(map);
        const resultsWrapperHTML = document.getElementById("search-result")

        map.on("click", function (e) {
            const {
                lat,
                lng
            } = e.latlng;
            marker.setLatLng([lat, lng]);
        });
        let typingInterval

        function onTyping(e) {
            clearTimeout(typingInterval);
            const {
                value
            } = e.target;
            typingInterval = setTimeout(() => {
                searchLocation(value);
            }, 500);
        }

        function searchLocation(keyword) {
            if (keyword) {
                fetch(`/search?keyword=${keyword}`)
                    .then((response) => {
                        return response.json()
                    }).then(json => {
                        console.log("json", json)
                        if (json.length > 0) return renderResults(json)
                        else alert("lokasi tidak ditemukan")
                    })
            }
        }

        function renderResults(result) {
            let resultsHTML = "";
            result.forEach((n) => {
                resultsHTML +=
                    `<li><i class="bi bi-geo-alt"></i> <a href="#" onclick="setLocation(${n.latitude}, ${n.longitude})">${n.nama_tempat}, ${n.alamat}</a></li>`;
            });
            resultsWrapperHTML.innerHTML = resultsHTML;
        }

        function clearResults() {
            resultsWrapperHTML.innerHTML = ""
        }

        function setLocation(latitude, longitude) {
            map.setView(new L.LatLng(latitude, longitude), 20)
            marker.setLatLng([latitude, longitude]);
            clearResults()
        }

    </script>

</body>

</html>
