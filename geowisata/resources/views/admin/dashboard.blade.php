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
                <form>
                    <div class="input-group mb-3">
                        <input type="text" id="searchInput" class="form-control" placeholder="Search..." oninput="onTyping(this)" />
                        <label for="kategori">
                            <select id="kategoriSelect" class="form-control" onchange="onCategoryChange()">
                                <option value="">Kategori Wisata</option>
                                @foreach ($kategori as $kategoriItem)
                                <option value="{{ $kategoriItem->id }}">{{ $kategoriItem->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </label>
                        <button class="cari btn btn-success" type="submit">Search</button>
                    </div>
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

                const Marker = L.marker([-6.914744, 107.609810]).addTo(map);

                var popup = L.popup();

                function onMapClick(data) {
                    popup
                        .setLatLng(data.latlng)
                        .setContent(data.latlng.toString())
                        .openOn(map);
                }

                //filtering
        map.on("click", function (e) {
            const {
                latitude,
                longitude
            } = e.latlng
            Marker.setLatLng([latitude, longitude]);
            clearResults();
        });
        let typingInterval
        // typing handler
        function onTyping(e) {
            clearInterval(typingInterval)
            const {
                value
            } = e.target.value;
            typingInterval = setInterval(() => {
                clearInterval(typingInterval)
                searchLocation(value)
            }, 500);
        }
        //elemen input dan select
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
        // search handler
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
        // render results
        function renderResults(result) {
            const resultsWrapperHTML = document.getElementById("search-result");
            let resultsHTML = "";
            result.forEach(n => {
                resultsHTML +=
                    `<li><a href="#" onclick="setLocation(${n.latitude},${n.longitude}); return false;">${n.nama_tempat}, ${n.alamat}</a></li>`
            });
            resultsWrapperHTML.innerHTML = resultsHTML;
        }
        function setLocation(latitude, longitude) {
            map.setView(new L.LatLng(latitude, longitude), 25);
            Marker.setLatLng([latitude, longitude]);
            clearResults();
        }
        // clear results
        function clearResults() {
            const resultsWrapperHTML = document.getElementById("search-result");
            resultsWrapperHTML.innerHTML = "";
        }

            </script>

            <style>
                #map {
                    height: 100vh;
                    width: 100%;
                }

                input:nth-child(1) {
                    margin-bottom: 10px;
                }

                #search-result {
            position: relative;
            top: 20px;
            z-index: 1001;
            width: 100%;
            list-style: none;
            padding: 0;
        }

        li {
            padding: 5px 0;
        }
        .cari {
            width: 80px;
            height: 38px;
            padding: 5px;
        }

            </style>
        </div>


</div>
</section>
<!-- /.row -->
</div>

@endsection
