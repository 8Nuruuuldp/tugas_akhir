@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">Dasbor</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                        <li class="breadcrumb-item active">Dasbor</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </section>
    <!-- /.content-header -->

    <!-- Info boxes -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Admin</span>
                            <span class="info-box-number">
                                {{App\Models\User::count()}}
                                <small><a href="/user">Orang</a></small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-newspaper"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Kategori</span>
                            <span class="info-box-number">
                                {{App\Models\Kategori::count()}}
                                <small><a href="/kategori">Kategori</a></small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-copy"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Wisata</span>
                            <span class="info-box-number">
                                {{App\Models\Wisata::count()}}
                                <small><a href="/wisata">Objek Wisata</a></small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-comments"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Ulasan</span>
                            <span class="info-box-number">
                                {{App\Models\Ulasan::count()}}
                                <small><a href="/ulasan">Ulasan</a></small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <div class="col-sm-6">
                <h3 class="m-16">Peta Wisata</h3>
            </div>
            <div id="map">
                <div class="search-sidebar" >
                    <div
                        class="formBlock bg-body text-dark position-absolute border shadow p-2 bg-white rounded">
                        <form>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search..." oninput="onTyping(this)" />
                                <span class=""><i class=" fas fa-search fa-3x p-2"></i></span>
                                <a href="#" onclick="toggleSidebar()"><i class="  bi bi-sign-turn-right-fill fa-3x active"></i></a>
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
                                placeholder="Pilih Tujuan" />
                            <button style="display: none;" type="submit">Get Directions</button>
                        </form>
                    </div>
                </div>
                </div>
                <script>

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

                    map.on('click', onMapClick);

                    $( document ).ready(function() {
                        $.getJSON('point/json', function(data) {
                            $.each(data, function(index){

                                L.marker ([parseFloat(data[index].latitude),parseFloat(data[index].longitude)])
                                .addTo(map)
                                .bindPopup((data[index].nama_tempat));
                            });
                        });
                    });

                    const resultsWrapperHTML = document.getElementById("search-result")

        map.on("click", function(e){
        const {latitude, longitude} = e.latlng
        // regenerate marker position
        Marker.setLatLng([latitude, longitude])
        })

        let typingInterval

            // typing handler
            function onTyping(e) {
            clearInterval(typingInterval)
            const {value} = e

            typingInterval = setInterval(() => {
                clearInterval(typingInterval)
                searchLocation(value)
            }, 500)
            }

            // search handler
            function searchLocation(keyword) {
            if(keyword) {
                // request dari database
                fetch(`/search?keyword=${keyword}`)
                .then((response) => {
                    return response.json()
                }).then(json => {
                // get respon data dari database
                console.log("json", json)
                    if(json.length > 0) return renderResults(json)
                    else alert("lokasi tidak ditemukan")
                })
            }
            }

            // render results
            function renderResults(result) {
            let resultsHTML = ""

            result.map((n) => {
                resultsHTML += `<li>
                    <i class="bi bi-geo-alt"></i>
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
            map.setView(new L.LatLng(latitude, longitude), 25)

            // generate lokasi maker
            Marker.setLatLng([latitude, longitude])

            // clear results
            clearResults()
            }

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

            // delete current map layer
            map.remove();

            // getting form data
            start = document.getElementById("start").value;
            end = document.getElementById("destination").value;

            // run directions function
            runDirection(start, end);

            // reset form
            document.getElementById("form").reset();
        }

        // asign the form to form variable
        const form = document.getElementById('form');

        // call the submitForm() function when submitting the form
        form.addEventListener('submit', submitForm);
                </script>

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
            width: 35%;
            top: 10px;
            left: 5px;
        }

        .content-search {
            z-index: 999;
            width: 35%;
        }
        .hidden {
    display: none;
}

                </style>
            </div>


        </div>
    </section>
    <!-- /.row -->
</div>

@endsection
