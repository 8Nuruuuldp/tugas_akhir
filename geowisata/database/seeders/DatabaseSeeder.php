<?php

namespace Database\Seeders;

// use Illuminate\Wisatabase\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;
use  App\Models\Wisata;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's Wisatabase.
     *
     * @return void
     */
    public function run()
    {
        // \User::factory(10)->create();

        // \User::factory()->create([
        //     'nama_kategori' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Kategori::create([
            'nama_kategori' => 'Wisata Alam'
        ]);
        Kategori::create([
            'nama_kategori' => 'Wisata Pendidikan dan Sejarah'
        ]);
        Kategori::create([
            'nama_kategori' => 'Wisata Budaya'
        ]);
        Kategori::create([
            'nama_kategori' => 'Wisata Rekreatif'
        ]);
        Kategori::create([
            'nama_kategori' => 'Wisata Agro'
        ]);
        Kategori::create([
            'nama_kategori' => 'Wisata Religi'
        ]);
        Kategori::create([
            'nama_kategori' => 'Kampung Wisata Kreatif'
        ]);



        //id 1
        Wisata::create([
            'nama_tempat' => 'Curug Dago',
            'kategori_id'=> 1,
            'alamat' => 'Jl. Dagopojok, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> 'Setiap hari pukul 08.00-17.00 WIB',
            'link_pendukung'=>'',
            'sumber'=>'https://www.mongabay.co.id/wp-content/uploads/2019/06/Curug-Dago3-768x512.jpg',
            'deskripsi'=> 'Curug dago adalah wisata air terjun di Bandung yang letaknya di kawasan Taman Hutan Raya Ir. H. Djuanda.
            Yang memiliki nilai sejarah tinggi. Curug dago berada di atas ketinggian 800 meter di atas permukaan air laut dengan tinggi air terjunnya sekitar 12 meter,
            curug dago ini terbentuk oleh aliran sungai Cikapundung yang mengalir dari Maribaya ke kota Bandung. Curug dago sebenarnya memiliki sisi menarik dari segi sejarah selain keindahan alam
            yang hijau dan asri curug dago pun sangat terkenal dengan sejarah yang dikenang dan penuh mistis di dalamnya.',
            'latitude' => -6.8654727282394825,
            'longitude' => 107.61818564264613
        ]);

        //id 2
        Wisata::create([
            'nama_tempat' => 'Museum Barli',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Prof. Dr. Sutami No.91, Sukarasa, Kec. Sukasari, Kota Bandung, Jawa Barat 40152',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> 'Senin-Sabtu pukul 10.00-17.00 WIB',
            'link_pendukung'=>'',
            'sumber'=>'https://lh3.googleusercontent.com/p/AF1QipO8Exlk4DhnAEnrvGpMomzwxwbGXBvLOalh0nEz=s1286-w720-h1286',
            'deskripsi'=> 'Museum Barli merupakan museum seni yang menampilkan banyak karya seni mulai dari  lukisan, hingga patung.
            Museum ini milik perorangan yang didirikan pada tahun 1990. Nama museum ini berasal dari nama seorang pelukis yang bernama  Barli.
            Di  Museum Barli, kamu bisa mengenal berbagai macam karya seni dari seniman Indonesia. Museum Barli menampilkan karya seni rupa kontemporer dan memorable.
            Karya seni yang disajikan sangat realistik dan lebih banyak memperlihatkan kehidupan sehari-hari.',
            'latitude' => -6.877415172977914,
            'longitude' => 107.58751020000001
        ]);

        Wisata::create([
            'nama_tempat' => 'Museum Kebudayaan Tionghoa',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Nana Rohana No.37, Wr. Muncang, Kec. Bandung Kulon, Kota Bandung, Jawa Barat 40211',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> 'Senin-Sabtu pukul 09.00-15.00 WIB',
            'link_pendukung'=>'',
            'sumber'=>'https://lh3.googleusercontent.com/p/AF1QipPq8yCcWixwjQFfiubdJGfpuZM_3zSKO3jisZg0=s1328-w720-h1328',
            'deskripsi'=> 'Museum Kebudayaan Tionghoa yang berada di Jalan Nana Rohana, Kota Bandung, Jawa Barat menghadirkan sejarah kebudayaan Tiongkok kuno serta cerita tokoh-tokoh ternama dari etnis Tionghoa Indonesia.
            Menurut pengelola, museum yang didirikan oleh Yayasan Dana Sosial Priangan (YDSP) Bandung ini mulai digunakan sejak 2012. Museum ini bertujuan untuk memperkenalkan sumbangsih etnis Tionghoa dalam pembangunan nusantara dan Indonesia,
            baik dalam bidang politik, pendidikan, ekonomi, sosial hingga budaya. Di museum ini, para pengunjung bisa mengetahui awal mula perjalanan etnis Tionghoa hingga berada di Indonesia.
            Diharapkan, museum tersebut bisa dikembangkan dan diperbesar agar diketahui semakin banyak orang.',
            'latitude' => -6.921418180157697,
            'longitude' => 107.57737035343807
        ]);
        Wisata::create([
            'nama_tempat' => 'Museum Preanger',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Asia Afrika No.81, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40112',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> 'Senin-Sabtu pukul 11.00-17.00 WIB',
            'link_pendukung'=>'',
            'sumber'=>'https://bandungklik.com/wp-content/uploads/2021/04/grand_hotel_preanger_bandung_klik.jpg',
            'deskripsi'=> 'Museum Preanger adalah sebuah museum yang terbilang unik, berbeda dengan kebanyakan museum lainnya, museum ini terletak di dalam sebuah hotel,
            yang juga bersejarah dan memiliki nama yang sama dengan museum yaitu Preanger. Museum ini didedikasikan untuk Wolff Schoemacker seorang arsitek berkebangsaan Belanda,
            yang juga sekaligus mantan rektor Technische Hoogeschool te Bandoeng  (ITB). Schoemacker memang bisa dikatakan sebagai arsitek bangunan-bangunan monumental di Kota yang pernah dipimpin oleh Bupati Wiranata Kusumah.
            Schoemacker lahir di Banyubiru, Semarang, 1882 yang saat itu masuk wilayah Hindia Belanda. Museum Wolff Schoemacker (Preanger) terletak di dalam sebuah  hotel yang kini bernama Grand Hotel Preanger.',
            'latitude' => -6.920953382092875,
            'longitude' => 107.6118777084735
        ]);
        Wisata::create([
            'nama_tempat' => 'Museum Gedung Sate',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> 'Selasa-Minggu pukul 09.30-16.00 WIB',
            'link_pendukung'=>'',
            'sumber'=>'https://lh3.googleusercontent.com/p/AF1QipNIIoHAulvp9X4zb09N22lwnb717AIweZi2z_c=s1328-w720-h1328',
            'deskripsi'=> 'Gedung Sate merupakan gedung kantor Gubernur Jawa Barat. Gedung ini memiliki ciri khas berupa ornamen tusuk sate pada menara sentralnya, yang telah lama menjadi penanda atau markah tanah Kota Bandung yang tidak saja dikenal masyarakat di Jawa Barat,
            tetapi juga seluruh Indonesia bahkan model bangunan itu dijadikan pertanda bagi beberapa bangunan dan tanda-tanda kota di Jawa Barat. Misalnya bentuk gedung bagian depan Stasiun Kereta Api Tasikmalaya.
            Gedung berwarna putih ini mulai dibangun pada tahun 1920 dan masih berdiri kokoh hingga saat ini.',
            'latitude' => -6.902351429012489,
            'longitude' => 107.61867781437918
        ]);
        Wisata::create([
            'nama_tempat' => 'Museum Sejarah Kota Bandung',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Aceh No.47, Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40117',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> 'Selasa-Minggu pukul 10.00-15.00 WIB',
            'link_pendukung'=>'',
            'sumber'=>'https://lh3.googleusercontent.com/p/AF1QipPDBLv-r18b4Mna1KaoDpLePdipK4460xNLn6YT=s1328-w720-h1328',
            'deskripsi'=> 'Museum Kota Bandung merupakan salah satu museum yang terbilang baru di Kota Bandung. Museum ini diresmikan pada 31 November 2018 lalu. Meskipun baru diresmikan beberapa tahun silam,
            Museum Kota Bandung merupakan bangunan tua yang memiliki sejarah tersendiri. Bangunan tersebut merupakan Frabelschool (taman kanak-kanak) didirikan oleh kelompok Freemasonry (Vrimerselarij)
            Bandung yang mempunyai tempat perkumpulan bernama Loge Sint Jan. Museum Kota Bandung ini telah direncanakan sejak tahun 2015, tetapi museum tersebut baru bisa dibuka secara resmi pada akhir tahun 2018.
            Hal ini disebabkan oleh terlambatnya proses perampungan museum tersebut. Selain untuk mengarsipkan kronologi perkembangan Kota dan Kabupaten Bandung dari masa ke masa, tujuan dari pembangunan
            atau pembuatan museum ini adalah agar bisa menjadi sarana perkembangan seni dan teknologi di Kota Bandung.',
            'latitude' => -6.909748725813378,
            'longitude' => 107.60947788042576
        ]);
        Wisata::create([
            'nama_tempat' => 'Museum Sribaduga',
            'kategori_id'=> 2,
            'alamat' => 'Jl. BKR No.185, Pelindung Hewan, Kec. Astanaanyar, Kota Bandung, Jawa Barat 40243',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> 'Selasa-Jumat pukul 08.00-16.00 dan Sabtu-Minggu pukul 08.00-14.00 WIB',
            'link_pendukung'=>'',
            'sumber'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Sri_Baduga_Museum.JPG/1600px-Sri_Baduga_Museum.JPG',
            'deskripsi'=> 'Museum Sri Baduga merupakan meseum yang menyimpan peninggalan-peninggalan dari Jawa Barat. Didirikan tahun 1974, museum diresmikan pada 1980 dengan nama Museum Negeri Provisi Jawa Barat oleh Menteri Pendidikan dan Kebudayaan,
            Dr Daud Yusuf. Di tahun 1990, museum ini berubah nama menjadi Museum Negeri Provinsi Jawa Barat Sri Baduga. Sri Baduga ialah nama seorang Raja Agung kerajaan Sunda yang beragama Hindu di Jawa Barat.
            Koleksi pada Museum Sri Baduga banyak memamerkan berbagai macam benda bersejarah dan benda antik yang bernilai seni tinggi. Beragam benda tersebut terdiri dari beberapa koleksi, seperti koleksi arca pada zaman megalitik, pakaian adat, rumah,
            perkakas, permainan, dan alat musik tradisional.',
            'latitude' => -6.937568329605235,
            'longitude' => 107.60350985639712
        ]);
        Wisata::create([
            'nama_tempat' => 'Museum Geologi',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Diponegoro No.57, Cihaur Geulis, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40122',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> 'Senin-Kamis pukul 09.00-/15.00 dan Sabtu-Minggu pukul 09.00-14.00 WIB',
            'link_pendukung'=>'',
            'sumber'=>'https://img.bandung.go.id/images/foto/2021/10/18/galeri/163964346273.jpg',
            'deskripsi'=> 'Gedung Museum Geologi dibangun pada 1928 dan diresmikan dengan nama "Geologische Museum" pada 16 Mei 1929 bertepatan dengan penyelenggaraan Kongres Ilmu Pengetahuan Pasifik yang ke IV.
            Pembangunan dikerjakan selama 11 bulan dengan 300 pekerja dan menghabiskan dana 400.000 Gulden dibangun dengan arsitektur bergaya Art Deco berdasarkan rancangan arsitektur karya seorang arsitek Belanda, Ir. H. Menalda van Schouwenburg.',
            'latitude' => -6.90052447299109,
            'longitude' => 107.6213801939194
        ]);
        Wisata::create([
            'nama_tempat' => 'Museum Pos Indonesia',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Cilaki No.73, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> 'Senin-Jumat pukul 09.00-15.00 dan Sabtu pukul 09.00-13.00 WIB',
            'link_pendukung'=>'',
            'sumber'=>'https://img.bandung.go.id/images/foto/2021/10/18/galeri/163964367518.jpg',
            'deskripsi'=> 'Museum POS Indonesia telah hadir sejak masa Hindia Belanda dengan nama Museum PTT (Pos Telegrap dan Telepon) ,tepatnya pada tahun 1931 terletak dibagian sayap kanan bawah Gedung Kantor Pusat PTT Jalan Cilaki No.73 Bandung 40115.
            Museum ini dibuka untuk umum dan koleksinya terdiri dari prangko-prangko baik dalam maupun luar negeri namun terjadinya peristiwa Perang Dunia ke II menyebabkan Museum ini kurang terurus sebagaimana mestinya, bahkan nyaris terlupakan.
            Timbulah gagasan untuk mendirikan Museum Pos dan Giro yang koleksinya tidak hanya terdiri dari prangko-prangko tetapi juga benda-benda lainnya berupa foto-foto, peralatan pos dan lain sebagainya yang bernilai sejarah.
            Untuk mewujudkan gagasan yang sudah lama ada ini maka pada tanggal 18 Desember 1980 oleh Direksi Perum Pos dan Giro telah dibentuk sebuah panitia dengan nama Panitia Persiapan Pendirian Museum Pos dan Giro dengan tugas utama melakukan inventarisasi dan
            mengumpulkan benda-benda bersejarah yang layak dijadikan isi Museum. Setelah bekerja beberapa bulan lamanya, Panitia telah berhasil mengumpulkan beberapa benda yang kemudian telah pula diusahakan untuk dipamerkan kepada umum dalam bentuk suatu Pameran Pos
            dan Giro yang diselenggarakan pada tanggal 27 September 1982 bersamaan pula dengan peresmian penerapan Sistem Kode Pos Indonesia untuk keperluan intern Perum Pos dan Giro oleh Direktur Utama Perum Pos dan Giro bertempat di ruangan lantai bawah gedung Kantor Pusat Perum Pos dan Giro.
            Dan setahun kemudian pada tanggal 27 September 1983 bertepatan dengan Hari Bakti Postel ke 38 ruangan lantai bawah tersebut oleh Menteri Pariwisata, Pos dan Telekomunikasi, Achmad Tahir telah diresmikan sebagai museum dengan nama Museum POS Dan GIRO. Sejalan dengan perkembangan perusahaan pos dimana terhitung
            tanggal 20 juni 1995 nama dan status perusahaan berubah dari Perusahaan Umum Pos dan Giro menjadi PT. Pos Indonesia (persero). maka terjadi pula perubahan nama museum ini dari Museum Pos dan Giro menjadi MUSEUM POS INDONESIA sampai sekarang.',
            'latitude' => -6.8654727282394825,
            'longitude' => 107.61818564264613
        ]);
        Wisata::create([
            'nama_tempat' => 'Museum Mandala Wangsit Siliwangi',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Lembong No.38, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40111',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> 'Senin-Kamis pukul 08.00 - 15.00 WIB
            Jumat pukul 08.00 - 10.00 WIB
            Sabtu pukul 08.00 - 12.00 WIB',
            'link_pendukung'=>'',
            'sumber'=>'https://tempat.org/pesona-keindahan-wisata-museum-mandala/',
            'deskripsi'=> 'Museum Mandala Wangsit Siliwangi merupakan museum khusus yang diresmikan oleh Panglima Divisi Siliwangi Kolonel Ibrahim Adjie pada tanggal 23 Mei 1966. Nama museum Mandala Wangsit diartikan sebagai tempat untuk menyimpan amanat, petuah atau nasihat.
            Siliwangi merupakan nama Komando Daerah Militer TNI-AD di Jawa Barat dan Banten yang diambil dari nama Raja Kerajaan Sunda (Kemdikbud Ristek).',
            'latitude' => -6.901869773534627,
            'longitude' => 107.61970098042565
        ]);
        Wisata::create([
            'nama_tempat' => 'Museum Konfrensi Asia Afrika',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Asia Afrika No.65, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40111',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> 'Tutup Sementara mulai 21 April 2024',
            'link_pendukung'=>'',
            'sumber'=>'https://unsplash.com/photos/white-concrete-building-during-daytime-YgVrDxEfnuQ',
            'deskripsi'=> 'Museum Konferensi Asia Afrika merupakan museum yang digunakan untuk mengenang peristiwa Konferensi Asia Afrika yang menjadi sumber inspirasi dan motivasi bagi bangsa-bangsa Asia Afrika. Museum ini dibangun oleh Pemerintah Republik Indonesia dan berada
            di bawah wewenang Departemen Pendidikan dan Kebudayaan. sementara pengelolaannya di bawah koordinasi Departemen Luar Negeri dan Pemerintah Daerah Tingkat I Provinsi Jawa Barat.',
            'latitude' => -6.92106658260582,
            'longitude' => 107.60960675343809
        ]);
        Wisata::create([
            'nama_tempat' => 'Museum Pendidikan Universitas Pendidikan Indonesia',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Dr. Setiabudi No.229, Isola, Kec. Sukasari, Kota Bandung, Jawa Barat 40154',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> 'Senin - Kamis pukul 08.00 - 11.30, 13.00 - 15.00 WIB
            Jumat pukul 08.00 - 11.00, 13.30 - 15.30 WIB
            Sabtu - Minggu : Tutup',
            'link_pendukung'=>'',
            'sumber'=>'https://museum.kemdikbud.go.id/storage//assets/images/museums/114/2022-10-04_5795.jpg',
            'deskripsi'=> 'Museum Pendidikan merupakan perpaduan antara museum sejarah (history museums) dan museum ilmu dan teknologi (science and technology museum) yang khusus didirikan
            dan didedikasikan untuk upaya penyelamatan dan pelestarian peninggalan-peninggalan sejarah pendidikan. Kehadiran Museum Pendidikan Nasional di Kampus Universitas Pendidikan Indonesia ini merupakan salah satu bentuk tanggung jawab UPI,
            sebagai perguruan tinggi yang memiliki kepedulian akan pentingnya melestarikan warisan sejarah budaya bangsa, khususnya dibidang pendidikan. Sesuai dengan tujuan dan fungsi pendirian Museum Pendidikan Nasional
            sebagai sebuah lembaga studi warisan budaya dan pusat informasi edukati, kultural, dan rekreatif, maka tema umum rancangan museum mencerminkan kronologi perjalanan pendidikan nasional Indonesia dari masa ke masa,
            sedangkan tema khususnya adalah sejarah guru dan pendidikan guru (Kemdikbud Ristek).',
            'latitude' => -6.8597029925046185,
            'longitude' => 107.59413403385594
        ]);
        Wisata::create([
            'nama_tempat' => 'Museum Monumen Perjuangan Rakyat Jawa Barat',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Dipati Ukur No.48, Lebakgede, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> 'Senin - Jumat pukul 08.00 - 16.00 WIB
            Sabtu - Minggu : Tutup',
            'link_pendukung'=>'',
            'sumber'=>'https://museum.kemdikbud.go.id/storage/assets/images/museums/226/2020-07-24_4366.jpg',
            'deskripsi'=> 'Monumen Perjuangan Rakyat Jawa Barat dibangun pada 1991 dan diresmikan penggunaannya pada 23 Agustus 1995 oleh Gubernur Jawa Barat saat itu, Raden Nana Nuriana. Monumen ini memiliki museum yang terletak di bawah tanah.
            Museum ini berisi bukti-bukti perjuangan rakyat Jawa Barat dari masa kolonial sampai era pemberontakan DI/TII (Kemdikbud Ristek). ',
            'latitude' => -6.8933048777411505,
            'longitude' => 107.61846546508397
        ]);
        Wisata::create([
            'nama_tempat' => 'Gedung Indonesia Menggugat',
            'kategori_id'=> 2,
            'alamat' => 'JL Perintis Kemerdekaan, No. 5, Babakan Ciamis, Sumurbandung, Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40117',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> 'Senin - Minggu pukul 08.00 - 16.00 WIB',
            'link_pendukung'=>'',
            'sumber'=>'https://www.serbabandung.com/gedung-indonesia-menggugat/',
            'deskripsi'=> '',
            'latitude' => -6.913715972730282,
            'longitude' => 107.60802001175111
        ]);
        Wisata::create([
            'nama_tempat' => 'Monumen Penjara Banceuy',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Banceuy, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40111',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> '',
            'link_pendukung'=>'',
            'sumber'=>'https://nasional.kompas.com/read/2022/11/09/06275921/menilik-penjara-banceuy-tempat-bung-karno-ditahan-dan-lahirkan-pleidoi?page=all',
            'deskripsi'=> 'Monumen Penjara Banceuy merupakan saksi bisu sejarah perjuangan bangsa Indonesia.  Di penjara ini,
            presiden pertama RI Ir. Soekarno pernah mendekam selama delapan bulan atas tuduhan pemberontakan dan dijerat pasal-pasal karet haatzai artikelen.
            Pernjara ini hanya berukuran 2,5 x 1,5 meter.',
            'latitude' => -6.919452181336206,
            'longitude' => 107.60670071323673
        ]);
        Wisata::create([
            'nama_tempat' => 'Bandung Creative Hub',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Laswi No.7, Kacapiring, Kec. Batununggal, Kota Bandung, Jawa Barat 40271',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> 'Senin - Minggu pukul 08.00 - 21.00 WIB',
            'link_pendukung'=>'',
            'sumber'=>'https://akcdn.detik.net.id/community/media/visual/2019/01/16/923ca344-ce43-4f4c-9625-cf9d03769853.jpeg?w=700&q=90',
            'deskripsi'=> 'Gedung Bandung Creative Hub diresmikan oleh Wali Kota dan Wakil Wali Kota Bandung saat itu yaitu M. Ridwan Kamil dan Oded M. Danial pada tahun 2017 lalu.
            Gedung ini didirikan dengan tujuan untuk menjadi sebuah fasilitas agar warga lebih kreatif lagi dan mengekpresikan ide dan gagasannya.',
            'latitude' => -6.91822543229937,
            'longitude' => 107.63160196693198
        ]);

        // id 3
        Wisata::create([
            'nama_tempat' => 'Saung Angklung Udjo',
            'kategori_id'=> 3,
            'alamat' => 'Jl. Padasuka No.118, Pasirlayung, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40192',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> 'Senin - Minggu pukul 08.00 - 17.00 WIB',
            'link_pendukung'=>'',
            'sumber'=>'http://facebook.com/saungangklungudjo',
            'deskripsi'=> 'Saung Angklung Udjo telah berdiri dari tahun 1966 dan didirikan oleh Udjo Ngalagena. aung Angklung Udjo ini dibangun
            sebagai bukti dedikasi untuk melestarikan seni dan budaya tradisional Sunda, Jawa Barat.
            Saung Angklung Udjo menawarkan berbagai macam pengalaman musik angklung, termasuk pertunjukan live yang memukau dan pembelajaran tentang cara memainkan alat musik tradisional tersebut.  ',
            'latitude' => -6.897571178887923,
            'longitude' => 107.65468499576704
        ]);
        Wisata::create([
            'nama_tempat' => 'Padepokan Seni Mayang Sunda',
            'kategori_id'=> 3,
            'alamat' => 'Jl. Peta No.209, Suka Asih, Kec. Bojongloa Kaler, Kota Bandung, Jawa Barat 40231',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> 'Senin - Jumat pukul 08.00 - 16.00 WIB',
            'link_pendukung'=>'',
            'sumber'=>'http://facebook.com/derusaputra',
            'deskripsi'=> 'Padepokan Seni "Mayang Sunda" merupakan gedung pertunjukan, latihan, dan pengembangan seni–budaya, yang berdiri pada tahun 1987.',
            'latitude' => -6.932718586027287,
            'longitude' => 107.58989888227353
        ]);
        Wisata::create([
            'nama_tempat' => 'Teras Sunda Cibiru',
            'kategori_id'=> 3,
            'alamat' => 'Jl. Raya Cipadung, Cipadung, Kec. Cibiru, Kota Bandung, Jawa Barat 40614',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> '',
            'link_pendukung'=>'',
            'sumber'=>'https://bandungaktual.com/teras-sunda-cibiru-kota-bandung-objek-wisata-seni-dan-budaya/',
            'deskripsi'=> '',
            'latitude' => -6.927199533275138,
            'longitude' => 107.71136072460273
        ]);
        Wisata::create([
            'nama_tempat' => 'Pasir Kunci',
            'kategori_id'=> 3,
            'alamat' => 'Jl. Pasir Kunci, Pasirjati, Kec. Ujung Berung, Kota Bandung, Jawa Barat 40616',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> '',
            'link_pendukung'=>'',
            'sumber'=>'https://yourbandung.com/pasir-kunci-ajang-bermain-permainan-tradisional-sunda-di-bandung-timur/',
            'deskripsi'=> '',
            'latitude' => -6.897706562638155,
            'longitude' => 107.71440711679267
        ]);
        Wisata::create([
            'nama_tempat' => 'Dago Tea House',
            'kategori_id'=> 3,
            'alamat' => 'Jl. Bukit Dago Selatan No.53A, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> '',
            'link_pendukung'=>'',
            'sumber'=>'https://tourbandung.id/dago-tea-house/',
            'deskripsi'=> '',
            'latitude' => -6.869311868973991,
            'longitude' => 107.61825483293288
        ]);
        Wisata::create([
            'nama_tempat' => 'Gedung Rumentang Siang',
            'kategori_id'=> 3,
            'alamat' => 'Jl. Baranang Siang No.1, Kb. Pisang, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40112',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> '',
            'link_pendukung'=>'',
            'sumber'=>'https://jurnalsoreang.pikiran-rakyat.com/khazanah/pr-1012619547/sejarah-gedung-rumentang-siang-tempat-nongkrong-para-seniman-bandung-sampai-arifin-c-noer-pernah-kesini?page=all',
            'deskripsi'=> '',
            'latitude' => -6.9194955299786916,
            'longitude' => 107.62147849391968
        ]);

        // id 4
        Wisata::create([
            'nama_tempat' => 'Trans Studio Bandung',
            'kategori_id'=> 4,
            'alamat' => 'Jl. Gatot Subroto No.289A, Cibangkong, Kec. Batununggal, Kota Bandung, Jawa Barat 40273',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> '',
            'link_pendukung'=>'',
            'sumber'=>'https://indonesiakaya.com/pustaka-indonesia/menikmati-wisata-penuh-keceriaan-di-trans-studio-bandung/',
            'deskripsi'=> '',
            'latitude' => -6.92533013136511,
            'longitude' => 107.63625382460275
        ]);
        Wisata::create([
            'nama_tempat' => 'Bandung Zoo',
            'kategori_id'=> 4,
            'alamat' => 'Jl. Kebun Binatang No.6, Lb. Siliwangi, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> '',
            'link_pendukung'=>'',
            'sumber'=>'lorem',
            'deskripsi'=> '',
            'latitude' => -6.889881360576677,
            'longitude' => 107.60683389576691
        ]);
        Wisata::create([
            'nama_tempat' => 'Pandora Experience Bandung',
            'kategori_id'=> 4,
            'alamat' => 'Jl. Sukajadi No.173A, Cipedes, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> '',
            'link_pendukung'=>'',
            'sumber'=>'https://www.google.com/maps/contrib/107893259954279379228',
            'deskripsi'=> '',
            'latitude' => -6.88329741754196,
            'longitude' => 107.59630922460205
        ]);
        Wisata::create([
            'nama_tempat' => 'Taman Lalu Lintas Ade Irma Suryani Nasution',
            'kategori_id'=> 4,
            'alamat' => 'Jl. Belitung No.1, Merdeka, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40113',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> '',
            'link_pendukung'=>'',
            'sumber'=>'https://tamanlalulintasbandung.com/galeri/pendidikan/',
            'deskripsi'=> '',
            'latitude' => -6.910955371934905,
            'longitude' => 107.61334962460259
        ]);
        Wisata::create([
            'nama_tempat' => 'Teras Cikapundung BBWS',
            'kategori_id'=> 4,
            'alamat' => 'Jl. Siliwangi, Hegarmanah, Kec. Cidadap, Kota Bandung, Jawa Barat 40131',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> '',
            'link_pendukung'=>'',
            'sumber'=>'https://wisatahits.blog/tiket-dan-aktivitas-teras-cikapundung-7884/',
            'deskripsi'=> '',
            'latitude' => -6.884114911921208,
            'longitude' => 107.60686889576687
        ]);
        Wisata::create([
            'nama_tempat' => 'Bandung Carnival Land Karang Setra',
            'kategori_id'=> 4,
            'alamat' => 'Jl. Sirnagalih Nojpg, Cipedes, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162',
            'waktu_operasional'=> ' Weekday : Jam 11.00 – 19.00 WIB
            Weekend : Jam 11.00 – 20.00 WIB',
            'link_pendukung'=>'',
            'gambar'=> 'img/BandungCarnavalLand.png',
            'sumber'=>'https://anekatempatwisata.com/wisata-bandung-bandung-carnival-land/#google_vignette',
            'deskripsi'=> 'Bandung Carnival Land adalah salah satu tempat wisata di Bandung yang sangat mirip dengan Dunia Fantasi Ancol namun dengan versi mini.
            Wisata satu ini  sangat menarik untuk dikunjungi saat malam hari. Masyarakat Bandung sendiri menyebutkan bahwa BCL merupakan miniaturnya Dunia Fantasi Ancol dengan versi yang lebih mini.',
            'latitude' => -6.878372815802828,
            'longitude' => 107.59470476693141
        ]);
        Wisata::create([
            'nama_tempat' => 'Centrum Million Balls',
            'kategori_id'=> 4,
            'alamat' => 'Jl. Belitung No.1jpgMerdeka, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40113',
            'waktu_operasional'=> 'Senin - Minggu (10:00 - 20:00)',
            'link_pendukung'=>'',
            'gambar'=> 'img/CentrumMillionBalls.png',
            'sumber'=>'https://en.tiket.com/to-do/attraction-centrum-million-balls-bandung',
            'deskripsi'=> 'Centrum Million Balls Bandung adalah salah satu objek wisata keluarga yang sangat populer di media sosial.
            Tempat ini menyajikan kolam mandi bola yang diklaim sebagai wahana mandi bola terbesar se-Asia Tenggara.
            Centrum Million Balls Bandung menghadirkan keseruan yang menggembirakan karena orang dewasa dapat bermain mandi bola layaknya anak-anak.',
            'latitude' => -6.912005928489333,
            'longitude' => 107.61607553809658
        ]);
        Wisata::create([
            'nama_tempat' => 'Gardenice Rink',
            'kategori_id'=> 4,
            'alamat' => 'Paris Van Java, Ljpgai SL- 08, Jalan Sukajadi No.137-139 Paris Van Java Sky Level, Cipedes, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162',
            'waktu_operasional'=> 'Senin - Minggu (10:00 - 22:00)',
            'link_pendukung'=>'',
            'gambar'=> 'img/gardiencerink.png',
            'sumber'=>'https://en.tiket.com/to-do/gardenice-rink',
            'deskripsi'=> 'Gardenice merupakan wahana ice skating rink yang sudah ada sejak tahun 2010. Banyak orang datang ke tempat ini hanya untuk menikmati permainan ice skating',
            'latitude' => -6.890299648384331,
            'longitude' => 107.59588012968328
        ]);
        Wisata::create([
            'nama_tempat' => 'Margacinta Park',
            'kategori_id'=> 4,
            'alamat' => 'Jl. Margacinta Nojpg, Cijaura, Kec. Buahbatu, Kota Bandung, Jawa Barat 40287',
            'waktu_operasional'=> '
            Waterpark 08:00-17:00
            Building 08:00-20:00
            ',
            'link_pendukung'=>'',
            'gambar'=> 'img/margacintapark.png',
            'sumber'=>'https://www.facebook.com/profile.php?id=100075430224276&sk=photos_by',
            'deskripsi'=> 'Margacinta Park merupakan sebuah kolam renang yang berlokasi di Cijaura, Buahbatu. Wisatawan bisa bermain air dengan sepuasnya karena
            di Margacinta Park mempunyai kolam renang serta wahana permainan air.Terdapat area Hello Garden Cafe & Eatery dengan area indoor lesehan dan semi outdoor.',
            'latitude' => -6.954810344896245,
            'longitude' => 107.64795482460313
        ]);
        Wisata::create([
            'nama_tempat' => 'Kiara Artha Park',
            'kategori_id'=> 4,
            'alamat' => 'Jl. Banten, Kebonjpgu, Kec. Batununggal, Kota Bandung, Jawa Barat 40272',
            'waktu_operasional'=> 'Setiap Hari 10:00-18.00',
            'link_pendukung'=>'',
            'gambar'=> 'img/kiaraartapark.png',
            'sumber'=>'https://arthagraha.net/network-detail/kiara-artha-park#',
            'deskripsi'=> 'Kiara Artha Park merupakan taman di Bandung dengan luas yang mencapau 2,9 hektat. tampat ini tak hanya menjadi sebuah taman yang berhiaskan berbagai jenis bunga,
            namun lokasinya juga memadukan konspe hunian, bisnis, dan komersial. Menyajikan keindahan Dancing Fountian atau Air Mancur Menari. ',
            'latitude' => -6.915910876144192,
            'longitude' => -6.954810344896245
        ]);
        Wisata::create([
            'nama_tempat' => 'Tepi Kota',
            'kategori_id'=> 4,
            'alamat' => ' Jl. Padang Golf,jpgkamiskin, Kec. Arcamanik, Kota Bandung, Jawa Barat 40293',
            'waktu_operasional'=> 'Senin - Jumat 09.00 - 19.00
            Sabtu - Minggu 08.00 - 20.00',
            'link_pendukung'=>'',
            'gambar'=> 'img/TepiKota.png',
            'sumber'=>'https://www.bandung.go.id/news/read/8129/liburan-cuma-bayar-rp10-ribu-yuk-ke-tepi-kota-healing',
            'deskripsi'=> 'Tepi Kota Healing merupakan tempat wisata yang menawarkan beragam aktivitas menarik di dalamnya.
            Berbagai aktivitas di Tepi Kota Healing ini dijamin akan menambah keseruan wisata bareng keluarga. ',
            'latitude' => -6.91094969601049,
            'longitude' => 107.66953038899508
        ]);

        //id 5
        Wisata::create([
            'nama_tempat' => 'Tani Kota',
            'kategori_id'=> 5,
            'alamat' => ' Jl. Cisitu Indahjpg, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135',
            'waktu_operasional'=> 'Setiap Hari (08.00-15.00 WIB)',
            'link_pendukung'=>'',
            'gambar'=> 'img/TaniKota.png',
            'sumber'=>'https://kumparan.com/seputar-bandung/tani-kota-bandung-tempat-untuk-belajar-pertanian-yang-menarik-22VOTfUMMDJ/full/gallery/2',
            'deskripsi'=> 'Tani Kota yang terletak di tengah kota, merupakan kegiatan pertanian di perkotaan yang telah dilakukan di beberapa kota besar di dunia, dalam bentuk yang telah modern.
            Dengan teknologi pertanian vertikal dan rumah kaca misalnya. Kegiatan wisata pertanian di Tani Kota masih tradisional.
            Bentuk kegiatan pertanian ini sangat baik menjadi bahan pembelajaran untuk anak-anak.',
            'latitude' => -6.876727543624047,
            'longitude' => 107.61104240926066
        ]);

        //id 6
        Wisata::create([
            'nama_tempat' => 'Mesjid Raya Bandung',
            'kategori_id'=> 6,
            'alamat' => ' Jl. Dalem Kaum Njpg4, Balonggede, Kec. Regol, Kota Bandung, Jawa Barat 40251',
            'waktu_operasional'=> 'setiap hari (24 jam)',
            'link_pendukung'=>'',
            'gambar'=> 'img/MasjidRayaBandung.png',
            'sumber'=>'https://p2k.stekom.ac.id/ensiklopedia/Masjid_Raya_Bandung',
            'deskripsi'=> 'Bandung merupakan kebanggaan warga Bandung dan sekitarnya. Selain bersejarah dan megah, masjid ini telah menjadi landmark dan penyeimbang
            segala aspek kehidupan bermasyarakat bagi warga ibukota Jawa Barat tersebut.Sejumlah ahli sejarah menyatakan Masjid Raya Bandung didirikan pada 1812
            dengan bentuk bangunan panggung tradisional yang sederhana, bertiang kayu, berdinding anyaman bambu, beratap rumbia, dan dilengkapi sebuah kolam besar sebagai tempat mengambil wudhu.
            Sumber lain menyatakan bahwa Masjid Raya Bandung dibangun bersamaan dengan pembangunan Pendopo Kabupaten Bandung di selatan alun-alun yang diresmikan pada 25 September 1810.
            Sebuah pendapat berdasar mengingat masjid raya, alun- alun, dan pendopo kabupaten merupakan salah satu elemen pusat kota tradisional di masa Hindia Belanda,
            sebagai simbol religiusitas pemerintahan dan masyarakat serta sebagai pusat keagamaan kota.',
            'latitude' => -6.9214979814769295,
            'longitude' => 107.60608625159048
        ]);
        Wisata::create([
            'nama_tempat' => 'Mesjid Al-Jabbar',
            'kategori_id'=> 6,
            'alamat' => ' Jl. Cimencrang Njpg4, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'waktu_operasional'=> 'setiap hari (24 jam)',
            'link_pendukung'=>'',
            'gambar'=> 'img/mesjidal-jabar.png',
            'sumber'=>'https://aljabbar.jabarprov.go.id/sejarah',
            'deskripsi'=> 'Masjid Raya Al Jabbar mulai didesain tahun 2015 oleh Ridwan Kamil sebagai Masjid Raya tingkat Pemerintah Daerah Provinsi.
            Bangunan utama dirancang dengan luas lantai 99 x 99 m2 sesuai angka Asmaul Husna. Masjid Raya Al Jabbar; seperti museum, danau, plaza, dan taman-taman,
            akan membuat masjid ini tidak hanya memiliki fungsi ibadah, tetapi juga fungsi edukasi dan berpotensi sebagai pusat wisata religi Jawa Barat.',
            'latitude' => -6.946154887855792,
            'longitude' => 107.70332953306911
        ]);

        //id 7
        Wisata::create([
            'nama_tempat' => 'Kampung Wisata Kreatif Braga',
            'kategori_id'=> 7,
            'alamat' => ' Jl. Cimencrang No.14, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> '',
            'link_pendukung'=>'',
            'sumber'=>'https://awsimages.detik.net.id/community/media/visual/2022/12/18/kampung-wisata-kreatif-braga_169.jpeg?w=1200',
            'deskripsi'=> 'Kampung wisata braga dan co-working space menjadi sumber ekonomi bagi masyarakat.
            Di dalamnya terdapat beberapa kawasan, diantaranya kawasan tanaman obat keluarga, sanggar melukis, kacapi suling, tembang sunda cianjuran,
            dan degung rumah seni Ropih, industri kerajinan daur ulang sampah koran dan kantong plastik. Selain itu ada pula, kawasan antik Cikapundung
            dan destinasi wisata kuliner legendaris seperti Braga Permai, Kopi Aroma, dan Warung Kopi Purnama',
            'latitude' => -5.8654727282394825,
            'longitude' => 117.61818564264613
        ]);
        Wisata::create([
            'nama_tempat' => 'Kampung Wisata Kreatif Cigadung',
            'kategori_id'=> 7,
            'alamat' => ' Jl. Cimencrang No.14, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> '',
            'link_pendukung'=>'',
            'sumber'=>'https://jadesta.kemenparekraf.go.id/desa/kwk_cigadung',
            'deskripsi'=> 'Kampung wisata kreatif Cigadung merupakan kawasan wisata kreatif dan seni budaya dengan konsep periwisata berbasis masyarakat (community based tourism).
            Kelurahan Cigadung berkembang dan menggali potensi daerahnya secara mandiri. Pengembangan potensi tersebut dilakukan oleh masyarakat, tokoh masyarakat, kelompok penggerak pariwisata,
            bekerja sama dengan kewilayahan yaitu kelurahan dan kecamatan sehingga lahirlah Kampung Wisata Kreatif Cigadung. Saat ini terdapat potensi wisata dan destinasi yang terdiri dari sektor
            fashion, kerajinan (kriya), kuliner, akomodasi, dan seni budaya.',
            'latitude' => -6.8454727282394825,
            'longitude' => 107.61318564264613
        ]);
        Wisata::create([
            'nama_tempat' => 'Kampung Wisata Kreatif Rajut Binong Jati',
            'kategori_id'=> 7,
            'alamat' => ' Jl. Cimencrang No.14, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> '',
            'link_pendukung'=>'',
            'sumber'=>'https://jadesta.kemenparekraf.go.id/desa/_binong',
            'deskripsi'=> 'Kampung wisata Binong terdapat di kelurahan Binong Kecamatan Batununggal dataran tinggi luas 72 m2. Nama Binong sendiri berasal dari sebuah pohon yaitu pohon binong/winong berarti kuat berakar lebat. Memiliki 9 potensi wisata, yaitu:
            1. Wisata merajut asa & shopping village Kampoeng Rajoet
            2. Wisata kuliner ala binong tetenong *teh telang, teh khas orang  Binong & mie kocok Bandung ala Binong
            3. Sensasi pedo di sawah “buruan sae” oleh PKK
            4. Edukasi nabung di bank sampah, pegiat lingkungan
            5. Edutaiment tradisi seni dan budaya pencak silat
            6. Edukasi pembuatan alat musik kesenian waditra sunda
            7. Staycation di homestay Binong
            8. Terdapat taman BMX dan aquasquape
            9. Aktivitas ruang publik serta terdapat ciko arena (Cikapundung Kolot), wisata susur sungai',
            'latitude' => -6.8656727282394825,
            'longitude' => 107.61018564264613
        ]);
        Wisata::create([
            'nama_tempat' => 'Kampung Wisata Kreatif Literasi Cinambo',
            'kategori_id'=> 7,
            'alamat' => ' Jl. Cimencrang No.14, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> '',
            'link_pendukung'=>'',
            'sumber'=>'https://disk.mediaindonesia.com/files/news/2021/12/c49af4bf807510c3a34645795eded81f.jpg',
            'deskripsi'=> 'Dengan hadirnya Kampung WIsata Kreatif Literasi Cinambo yang mengusung tagline "Bandung Unggul Literasi",
            semakin menguatkan Kota Bandung sebagai kota kreatif yang lengkap dan berwarna. Hadirnya kampung kreatif ini mampu mendongkrak semangat
            literasi juga meningkatkan pemberdayaan masyrakat juga termasuk destinasi wisatanya.',
            'latitude' => -6.8654727582394825,
            'longitude' => 107.61818364264613
        ]);
        Wisata::create([
            'nama_tempat' => 'Kampung Wisata Kreatif Cigondewah',
            'kategori_id'=> 7,
            'alamat' => ' Jl. Cigondewah Kidul No.37 Cigondewah, Rahayu, Bandung Kulon, Bandung City, West Java 40214',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> '',
            'link_pendukung'=>'',
            'sumber'=>'https://prokopim.bandung.go.id/home/galeri_foto_detail/541',
            'deskripsi'=> 'Kampung wisata kreatif Cigondewah ini sarana pemberdayaan dan kemandirian masyarakat dalam mengembangkan sumber daya manusia
            dalam menciptakan kepariwisataan berdaya saing yang akan berdampak pada perekonomian sekiatar. Sebanyak 150 pengrajin dan oengusaha kain serta produk fesyen lainnya.',
            'latitude' => -6.9442612,
            'longitude' => 107.5632923
        ]);
        Wisata::create([
            'nama_tempat' => 'Kampung Wisata Kreatif Pasir Kunci',
            'kategori_id'=> 7,
            'alamat' => ' Jl. Cimencrang No.14, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> '',
            'link_pendukung'=>'',
            'sumber'=>'https://infobandungkota.com/wp-content/uploads/2022/10/F04A4184-1A4E-4E72-9C77-9DE396710EA6-750x422.jpeg',
            'deskripsi'=> 'Diresmikan pada tahun 2018 dengan tujuan tempat wisata ini menjadi salah satu langkah pelestarian budaya Sunda yang semakin kurang diminati dikalangan generasi muda.
            Termasuk pengembangan perekonomian lokal dan masyarakat sekitar. Pengunjung tempat wisata ini bisa melakukan beragam aktivitas.
            Terdapat Bale puhun sebagai ruang pertemuan, mushola, toilet, dan tempat parkir yang sangat luas ',
            'latitude' => -6.8654727282395825,
            'longitude' => 107.61818564264611
        ]);
        Wisata::create([
            'nama_tempat' => 'Kampung Wisata Kreatif Cibaduyut',
            'kategori_id'=> 7,
            'alamat' => ' Jl. Cimencrang No.14, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> '',
            'link_pendukung'=>'',
            'sumber'=>'https://static.republika.co.id/uploads/images/xlarge/056910700-1678752709-1280-856.jpg',
            'deskripsi'=> 'Cibaduyut telah terkenal sebagai sentra sepatu kulit bermutu. Kawasan ini juga menjadi salah satu destinasi wisata belanja di Kota Bandung. Sentra sepatu di Cibaduyut ini layak menjadi perhatian di Indonesia.
            Bahkan sepatu yang dibuat oleh salah satu pengrajin produknya telah terjual sampai ke Italia.',
            'latitude' => -6.8654727282394829,
            'longitude' => 107.51818564264613
        ]);
        Wisata::create([
            'nama_tempat' => 'Kampung Wisata Kreatif Gedebage',
            'kategori_id'=> 7,
            'alamat' => ' Jl. Cimencrang No.14, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'gambar'=> 'img/kiaraartapark.jpg',
            'waktu_operasional'=> '',
            'link_pendukung'=>'',
            'sumber'=>'https://assets.promediateknologi.id/crop/0x0:0x0/750x0/webp/photo/2023/03/09/ayobdg_kolam-retensi-gedebage_ncos-8-3261319159.jpg',
            'deskripsi'=> 'Kampung wisata kreatif terpadu kecamatan Gedebage setidaknya ada 4 spot wisata di kampung wisata kota Bandung Kecamatan Gedebage,
            yaitu Kampung Blekok, Masjid Raya Al-Jabar, Sarana Olahraga Stadion GBLA, dan Danau retensi Summarecon.',
            'latitude' => -6.8659727282394825,
            'longitude' => 107.61815564264613
        ]);

}
}
