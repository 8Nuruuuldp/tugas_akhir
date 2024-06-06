@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">Dashboard</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
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
                    <div class="form-group mb-2 ">
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
                    <ul id="search-result"></ul>
                </form>
            </div>

            <div id="map" style="width: 100%; height: 600px;">
            </div>
            <script>
                var map = L.map('map', ).setView([-6.914744, 107.609810], 13);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '© OpenStreetMap contributors',
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
                                .bindPopup('<p class="fw-semibold">' +
                                data[index].nama_tempat +'</p><div class="">' +
                                data[index].alamat);
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
                        let popupContent = `<div>
                            <p class="fw-semibold">${n.nama_tempat}</p>
                            <div class="">${n.alamat}</div>
                            </div>`;

                        marker.bindPopup(popupContent);
                        marker.on('click', function () {
                            marker.openPopup();
                        });
                        map.setView([n.latitude, n.longitude], 20);
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
