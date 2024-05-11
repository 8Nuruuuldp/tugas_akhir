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
                            <span class="info-box-text">Jumlah Pengguna</span>
                            <span class="info-box-number">
                                {{App\Models\User::count()}}
                                <small><a href="/user">Pengguna</a></small>
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

                <div class="formBlock">
                    <form>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search..." oninput="onTyping(this)"/>
                            <span class=""><i class="fas fa-search fa-2x p-2"></i></span>
                            <a href="#"><i class="bi bi-sign-turn-right-fill fa-2x active"></i></a>
                        </div>
                        <ul id="search-result"></ul>
                    </form>
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
                </script>

                <style>
                    #map {
                        height: 100vh;
                        width: 100%;
                    }

                    .formBlock {
                    max-width: 380px;
                    background-color: #FFF;
                    border: 1px solid #ddd;
                    position: absolute;
                    top: 10px;
                    left: 10px;
                    padding: 10px;
                    z-index: 999;
                    box-shadow: 0 1px 5px rgba(0,0,0,0.65);
                    border-radius: 5px;
                    width: 90%;
                }

                </style>
            </div>


        </div>
    </section>
    <!-- /.row -->
</div>

@endsection
