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
                <form class="form-inline">
                    <div class="form-group mb-2">
                        <label for="wisata"></label>
                        <input type="text" class="form-control" id="searchInput" placeholder="Search..."
                            oninput="onTyping(this)" />
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="kategori">
                            <select id="kategoriSelect" class="form-control" onchange="onCategoryChange()">
                                <option value="">Kategori Wisata</option>
                                @foreach ($kategori as $kategoriItem)
                                <option value="{{ $kategoriItem->id }}">{{ $kategoriItem->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-success mb-2">Search</button>
                    <ul id="search-result"></ul>
                </form>
            </div>

            <div id="map">
            </div>
            <script>
                var map = L.map('map').setView([-6.914744, 107.609810], 10);

                map.zoomControl.setPosition('bottomright')

                L.tileLayer(
                    'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
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

                var iconMap = L.icon({
                    iconUrl: "https://img.icons8.com/plasticine/100/place-marker.png",
                    iconSize: [40, 40],
                    iconAnchor: [22, 44],
                    tooltipAnchor: [22, -20]
                });

                $(document).ready(function () {
                    $.getJSON('point/json', function (data) {
                        $.each(data, function (index) {

                            L.marker([parseFloat(data[index].latitude), parseFloat(data[index]
                                    .longitude)], {
                                    icon: iconMap
                                })
                                .addTo(map)
                                .bindPopup(
                                    '<div class"min-h-screen flex items-center justify-center"><img class="h-48 w-full object-cover object-end" src="./img/' +
                                    data[index].gambar +
                                    '"><div class="p-6"><h4 class="mt-2 font-bold text-lg truncate">' +
                                    data[index].nama_tempat + '</h4><div class=""> <br> ' +
                                    data[index]
                                    .alamat +
                                    ' </div><div class="my-2"><a href="/detailwisata/' + data[
                                        index].id +
                                    '" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50 mt-4 w-full flex items-center justify-center">Lihat Selengkapnya</a><button onclick="getLocation(' +
                                    data[index].latitude + ',' + data[index].longitude +
                                    ')" class="py-2 text-blue-500 rounded shadow-md hover:bg-blue-300 active:bg-blue-700 disabled:opacity-50 mt-2 w-full flex items-center justify-center">Ayo kesana!</button></div></div></div></div>'
                                );
                        });
                    });
                });

                var iconMap = L.icon({
                    iconUrl: "https://img.icons8.com/plasticine/100/place-marker.png",
                    iconSize: [40, 40],
                    iconAnchor: [22, 44],
                    tooltipAnchor: [22, -20]
                });
                //filtering
                const searchInput = document.getElementById('searchInput');
                const kategoriSelect = document.getElementById('kategoriSelect');

                searchInput.addEventListener('input', function () {
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
                    map.eachLayer(function (layer) {
                        if (layer instanceof L.Marker) {
                            map.removeLayer(layer);
                        }
                    });
                    result.forEach(n => {
                        let marker = L.marker([n.latitude, n.longitude], {
                            icon: iconMap
                        }).addTo(map);
                        let popupContent = `<div class"min-h-screen flex items-center justify-center">
                            <img class="h-48 w-full object-cover object-end" src="./img/${n.gambar}>
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
                        marker.on('click', function () {
                            marker.openPopup();
                        });
                        map.setView([n.latitude, n.longitude], 15);
                    });
                }

                function clearResults() {
                    map.eachLayer(function (layer) {
                        if (layer instanceof L.Marker) {
                            map.removeLayer(layer);
                        }
                    });
                }

            </script>

            <style>
                #map {
                    height: 100vh;
                    width: 100%;
                }



            </style>
        </div>


</div>
</section>
<!-- /.row -->
</div>

@endsection
