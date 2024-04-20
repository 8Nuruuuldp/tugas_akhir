<?php

// Koneksi ke database
$db = mysqli_connect('localhost', 'root', '', 'geowisata');

// Buat query untuk mengambil data kategori
$query = "SELECT id_kategori, nama_kategori FROM table_kategori";

// Jalankan query dan simpan hasilnya
$result = mysqli_query($db, $query);

?>