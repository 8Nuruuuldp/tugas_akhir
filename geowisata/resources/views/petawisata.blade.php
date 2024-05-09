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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.css" />

</head>

<body>

    <div class="map rounded" id="map">

        <div class="formBlock">
            <form>
                <div class="input-group mb-3">
                    <a href="#"><i class="fa fa-bars fa-3x p-2 active"></i></a>
                    <input type="text" class="form-control" placeholder="Search..." oninput="onTyping(this)" />
                    <a href="#routing" role="tab"><i class="bi bi-sign-turn-right-fill fa-3x p-2 active"></i></a>
                </div>
                <ul id="search-result"></ul>
            </form>
        </div>

        <style>
            #map {
                height: 100vh;
                width: 100%;
            }

            .formBlock {
                max-width: 400px;
                background-color: #FFF;
                border: 1px solid #ddd;
                position: absolute;
                top: 10px;
                left: 10px;
                padding: 10px;
                z-index: 999;
                box-shadow: 0 1px 5px rgba(0, 0, 0, 0.65);
                border-radius: 5px;
                width: 90%;
            }

            .formblack {
                max-width: 380px;
                background-color: #FFF;
                border: 1px solid #ddd;
                position: absolute;
                top: 100px;
                left: 10px;
                padding: 10px;
                z-index: 999;
                box-shadow: 0 1px 5px rgba(0, 0, 0, 0.65);
                border-radius: 5px;
                width: 90%;
            }

            input {
                padding: 10px;
                width: 90%;
                border: 1px solid #ddd;
                font-size: 15px;
                border-radius: 3px;
            }

            ul {
                position: relative;
                top: 15px;
                z-index: 1001;
                width: 100%;
                list-style: none;
                padding: 0;
            }

            li {
                padding: 5px 0;
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
                    searchLocation(value)
                }, 500)
            }
            // search handler
            function searchLocation(keyword) {
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
                        `<li> <i class="bi bi-geo-alt"></i>
                        <a href="#" onclick="setLocation(${n.latitude},${n.longitude});">${n.nama_tempat}, ${n.alamat}</a></li>`
                })
                resultsWrapperHTML.innerHTML = resultsHTML
            }
            // clear results
            function clearResults() {
                resultsWrapperHTML.innerHTML = ""
            }
            // set lokasi yang dicari result
            function setLocation(latitude, longitude) {
                // set map focus
                map.setView(new L.LatLng(latitude, longitude), 20)
                // generate lokasi maker
                Marker.setLatLng([latitude, longitude])
                // clear results
                clearResults()
            }

            //routing search

        </script>

</body>

</html>
