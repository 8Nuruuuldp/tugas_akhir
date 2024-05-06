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
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-newspaper"></i></span>

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

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-comments"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Ulasan</span>
                            <span class="info-box-number">760</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            </div>
            <div class="col-sm-6">
                <h3 class="m-16">Peta Wisata</h3>
            </div>
            <div id="map">

                {{-- <div class="formBlock">
                    <form action="/dashboard" >
                        <div class="input-group mb-3">
                            <input type="text" name="search" class="form-control" id="searchInput" placeholder="Search..."/>
                            <span class=""><i class="fas fa-search fa-2x p-2"></i></span>
                            <a href="#"><i class="bi bi-sign-turn-right-fill fa-2x active"></i></a>
                        </div>
                    </form>
                </div> --}}
                <script>

                    var data = [
                        <?php foreach($wisata as $wisata => $value) { ?> {
                            "lokasi": [<?= $value->latitude ?>, <?= $value->longitude ?>, <?= $value->kategori_id ?>],
                            "nama_tempat": "<?= $value->nama_tempat ?>", "alamat": "<?= $value->alamat ?>"
                        },
                        <?php } ?>
                    ];

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

                    var markersLayer = new L.LayerGroup();	//layer contain searched elements

                    map.addLayer(markersLayer);

                    var controlSearch = new L.Control.Search({
                        position:'topleft',
                        layer: markersLayer,
                        initial: false,
                        zoom: 20,
                        marker: false
                    });

                    map.addControl( controlSearch );

                    for(i in data) {
                        var nama_tempat = data[i].nama_tempat;
                        var lokasi = data[i].lokasi;
                        var marker = new L.Marker(new L.latLng(lokasi), {title: nama_tempat} );
                        marker.bindPopup('Nama Tempat: '+ nama_tempat );
                        markersLayer.addLayer(marker);
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
