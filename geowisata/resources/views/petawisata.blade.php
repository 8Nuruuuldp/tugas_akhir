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
        <script src="https://www.mapquestapi.com/sdk/leaflet/v2.2/mq-routing.js?key=S8d7L47mdyAG5nHG09dUnSPJjreUVPeC"></script>

</head>

<body>

    <div class="map rounded" id="map">
        <div class="search-sidebar" >
            <div
                class="formBlock bg-body text-dark w-25 position-absolute top-10 left-5  border shadow p-3 bg-white rounded">
                <form>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search..." oninput="onTyping(this)" />
                        <span class=""><i class=" fas fa-search fa-3x p-2"></i></span>
                        <button onclick="toggleSidebar()"><i class="  bi bi-sign-turn-right-fill fa-3x active"></i></button>
                    </div>
                    <ul id="search-result"></ul>
                </form>
            </div>
        </div>
        <div class="hidden search-sidebar-content" id="sidebar">
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
        </div>
    </div>

    <style>
        #map {
            height: 100vh;
            width: 100%;
        }

        input:nth-child(1) {
            margin-bottom: 10px;
        }

        .formBlock {
            z-index: 999;
        }

        .content-search {
            z-index: 999;
            width: 26.4%;
        }
        .hidden {
    display: none;
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
                            '<div class"min-h-screen flex items-center justify-center"><div class="bg-white rounded-lg overflow-hidden shadow-2xl xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2"><img class="h-48 w-full object-cover object-end" src="./img/' +
                            data[index].gambar + '">' +
                            '<div class="p-6"><h4 class="mt-2 font-bold text-lg truncate">' +
                            data[index].nama_tempat + '</h4><div class=""> <br>' + data[
                                index]
                            .alamat +
                            '</div><div class="my-2"><a href="/hwisata" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50 mt-4 w-full flex items-center justify-center">Lihat Selengkapnya</a><a href="" class="py-2 text-blue-500 rounded shadow-md hover:bg-blue-300 active:bg-blue-700 disabled:opacity-50 mt-2 w-full flex items-center justify-center">Ayo kesana!</a></div></div></div></div>'
                        );
                });
            });
        });

        // SEARCH SINGLE
        const resultsWrapperHTML = document.getElementById("search-result")
        map.on("click", function (e) {
            const {
                latitude,
                longitude
            } = e.latlng
            // regenerate marker position
            Marker.setLatLng([latitude, longitude])
        })
        let typingInterval
        // typing handler
        function onTyping(e) {
            clearInterval(typingInterval)
            const {
                value
            } = e
            typingInterval = setInterval(() => {
                clearInterval(typingInterval)
                searchdata(value)
            }, 500)
        }
        // search handler
        function searchdata(keyword) {
            if (keyword) {
                // request dari database
                fetch(`/search?keyword=${keyword}`)
                    .then((response) => {
                        return response.json()
                    }).then(json => {
                        // get respon data dari database
                        console.log("json", json)
                        if (json.length > 0) return renderResults(json)
                        else alert("lokasi tidak ditemukan")
                    })
            }
        }
        // render results
        function renderResults(result) {
            let resultsHTML = ""
            result.map((n) => {
                resultsHTML +=
                    `<li> <i class="bi bi-geo-alt p-2"></i>
                        <a href="#" onclick="setdata(${n.latitude},${n.longitude});">${n.nama_tempat}, ${n.alamat}</a></li>`
            })
            resultsWrapperHTML.innerHTML = resultsHTML
        }
        // clear results
        function clearResults() {
            resultsWrapperHTML.innerHTML = ""
        }
        // set lokasi yang dicari result
        function setdata(latitude, longitude) {
            // set map focus
            map.setView(new L.LatLng(latitude, longitude), 20)
            // generate lokasi maker
            Marker.setLatLng([latitude, longitude])
            // clear results
            clearResults()
        }
        //SEARCH ROUTING
        var sidebar = document.getElementById('sidebar');

function toggleSidebar() {
    sidebar.classList.toggle('hidden');
}

        function runDirection(start, end) {
            var map = L.map('map', ).setView([-6.914744, 107.609810], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            var dir = MQ.routing.directions();

            dir.route({
                data: [
                    start,
                    end
                ]
            });

            CustomRouteLayer = MQ.Routing.RouteLayer.extend({
            createStartMarker: (data) => {
                var custom_icon;
                var marker;

                custom_icon = L.icon({
                    iconUrl: 'assets/img/red.png',
                    iconSize: [20, 29],
                    iconAnchor: [10, 29],
                    popupAnchor: [0, -29]
                });

                marker = L.marker(data.latLng, {icon: custom_icon}).addTo(map);

                return marker;
            },

            createEndMarker: (data) => {
                var custom_icon;
                var marker;

                custom_icon = L.icon({
                    iconUrl: 'assets/img/blue.png',
                    iconSize: [20, 29],
                    iconAnchor: [10, 29],
                    popupAnchor: [0, -29]
                });

                marker = L.marker(data.latLng, {icon: custom_icon}).addTo(map);

                return marker;
            }
        });

        map.addLayer(new CustomRouteLayer({
            directions: dir,
            fitBounds: true
        }));
        }

        function submitForm(event) {
            event.preventDefault();

            map.remove();

            start = document.getElementById("start").value;
            end = document.getElementById("destination").value;

            runDirection(start, end);

            document.getElementById("form").reset();
        }
        const form = document.getElementById('form');
        form.addEventListener('submit', submitForm);

    </script>

</body>

</html>
