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
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.8654727282394825,
            'longitude' => 107.61818564264613
        ]);

        //id 2
        Wisata::create([
            'nama_tempat' => 'Museum Barli',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Prof. Dr. Sutami No.91, Sukarasa, Kec. Sukasari, Kota Bandung, Jawa Barat 40152',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.877415172977914,
            'longitude' => 107.58751020000001
        ]);

        Wisata::create([
            'nama_tempat' => 'Museum Kebudayaan Tionghoa',
            'kategori_id'=> 2,
            'alamat' => 'JJl. Nana Rohana No.37, Wr. Muncang, Kec. Bandung Kulon, Kota Bandung, Jawa Barat 40211',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.921418180157697,
            'longitude' => 107.57737035343807
        ]);
        Wisata::create([
            'nama_tempat' => 'Museum Preanger',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Asia Afrika No.81, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40112',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.920953382092875,
            'longitude' => 107.6118777084735
        ]);
        Wisata::create([
            'nama_tempat' => 'Museum Gedung Sate',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.902351429012489,
            'longitude' => 107.61867781437918
        ]);
        Wisata::create([
            'nama_tempat' => 'Museum Sejarah Kota Bandung',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Aceh No.47, Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40117',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.909748725813378,
            'longitude' => 107.60947788042576
        ]);
        Wisata::create([
            'nama_tempat' => 'Museum Sribaduga',
            'kategori_id'=> 2,
            'alamat' => 'Jl. BKR No.185, Pelindung Hewan, Kec. Astanaanyar, Kota Bandung, Jawa Barat 40243',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.937568329605235,
            'longitude' => 107.60350985639712
        ]);
        Wisata::create([
            'nama_tempat' => 'Museum Geologi',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Diponegoro No.57, Cihaur Geulis, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40122',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.90052447299109,
            'longitude' => 107.6213801939194
        ]);
        Wisata::create([
            'nama_tempat' => 'Museum Pos Indonesia',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Cilaki No.73, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.8654727282394825,
            'longitude' => 107.61818564264613
        ]);
        Wisata::create([
            'nama_tempat' => 'Museum Mandala Wangsit Siliwangi',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Lembong No.38, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40111',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.901869773534627,
            'longitude' => 107.61970098042565
        ]);
        Wisata::create([
            'nama_tempat' => 'Museum Konfrensi Asia Afrika',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Asia Afrika No.65, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40111',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.92106658260582,
            'longitude' => 107.60960675343809
        ]);
        Wisata::create([
            'nama_tempat' => 'Museum Pendidikan Universitas Pendidikan Indonesia',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Dr. Setiabudi No.229, Isola, Kec. Sukasari, Kota Bandung, Jawa Barat 40154',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.8597029925046185,
            'longitude' => 107.59413403385594
        ]);
        Wisata::create([
            'nama_tempat' => 'Museum Monumen Perjuangan Rakyat Jawa Barat',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Dipati Ukur No.48, Lebakgede, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.8933048777411505,
            'longitude' => 107.61846546508397
        ]);
        Wisata::create([
            'nama_tempat' => 'Gedung Indonesia Menggugat',
            'kategori_id'=> 2,
            'alamat' => 'JL Perintis Kemerdekaan, No. 5, Babakan Ciamis, Sumurbandung, Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40117',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.913715972730282,
            'longitude' => 107.60802001175111
        ]);
        Wisata::create([
            'nama_tempat' => 'Monumen Penjara Banceuy',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Banceuy, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40111',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.919452181336206,
            'longitude' => 107.60670071323673
        ]);
        Wisata::create([
            'nama_tempat' => 'Bandung Creative Hub',
            'kategori_id'=> 2,
            'alamat' => 'Jl. Laswi No.7, Kacapiring, Kec. Batununggal, Kota Bandung, Jawa Barat 40271',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.91822543229937,
            'longitude' => 107.63160196693198
        ]);

        // id 3
        Wisata::create([
            'nama_tempat' => 'Saung Angklung Udjo',
            'kategori_id'=> 3,
            'alamat' => 'JJl. Padasuka No.118, Pasirlayung, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40192',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.897571178887923,
            'longitude' => 107.65468499576704
        ]);
        Wisata::create([
            'nama_tempat' => 'Padepokan Seni Mayang Sunda',
            'kategori_id'=> 3,
            'alamat' => 'JJl. Peta No.209, Suka Asih, Kec. Bojongloa Kaler, Kota Bandung, Jawa Barat 40231',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.932718586027287,
            'longitude' => 107.58989888227353
        ]);
        Wisata::create([
            'nama_tempat' => 'Teras Sunda Cibiru',
            'kategori_id'=> 3,
            'alamat' => 'Jl. Raya Cipadung, Cipadung, Kec. Cibiru, Kota Bandung, Jawa Barat 40614',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.927199533275138,
            'longitude' => 107.71136072460273
        ]);
        Wisata::create([
            'nama_tempat' => 'Pasir Kunci',
            'kategori_id'=> 3,
            'alamat' => 'Jl. Pasir Kunci, Pasirjati, Kec. Ujung Berung, Kota Bandung, Jawa Barat 40616',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.897706562638155,
            'longitude' => 107.71440711679267
        ]);
        Wisata::create([
            'nama_tempat' => 'Dago Tea House',
            'kategori_id'=> 3,
            'alamat' => 'Jl. Bukit Dago Selatan No.53A, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.869311868973991,
            'longitude' => 107.61825483293288
        ]);
        Wisata::create([
            'nama_tempat' => 'Gedung Rumentang Siang',
            'kategori_id'=> 3,
            'alamat' => 'Jl. Baranang Siang No.1, Kb. Pisang, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40112',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.9194955299786916,
            'longitude' => 107.62147849391968
        ]);

        // id 4
        Wisata::create([
            'nama_tempat' => 'Trans Studio Bandung',
            'kategori_id'=> 4,
            'alamat' => 'Jl. Gatot Subroto No.289A, Cibangkong, Kec. Batununggal, Kota Bandung, Jawa Barat 40273',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.92533013136511,
            'longitude' => 107.63625382460275
        ]);
        Wisata::create([
            'nama_tempat' => 'Bandung Zoo',
            'kategori_id'=> 4,
            'alamat' => 'Jl. Kebun Binatang No.6, Lb. Siliwangi, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.889881360576677,
            'longitude' => 107.60683389576691
        ]);
        Wisata::create([
            'nama_tempat' => 'Pandora Experience Bandung',
            'kategori_id'=> 4,
            'alamat' => 'Jl. Sukajadi No.173A, Cipedes, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.88329741754196,
            'longitude' => 107.59630922460205
        ]);
        Wisata::create([
            'nama_tempat' => 'Taman Lalu Lintas Ade Irma Suryani Nasution',
            'kategori_id'=> 4,
            'alamat' => 'Jl. Belitung No.1, Merdeka, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40113',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.910955371934905,
            'longitude' => 107.61334962460259
        ]);
        Wisata::create([
            'nama_tempat' => 'Teras Cikapundung BBWS',
            'kategori_id'=> 4,
            'alamat' => 'Jl. Siliwangi, Hegarmanah, Kec. Cidadap, Kota Bandung, Jawa Barat 40131',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.884114911921208,
            'longitude' => 107.60686889576687
        ]);
        Wisata::create([
            'nama_tempat' => 'Bandung Carnival Land Karang Setra',
            'kategori_id'=> 4,
            'alamat' => 'Jl. Sirnagalih No.15, Cipedes, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.878372815802828,
            'longitude' => 107.59470476693141
        ]);
        Wisata::create([
            'nama_tempat' => 'Centrum Million Balls',
            'kategori_id'=> 4,
            'alamat' => 'Jl. Belitung No.10, Merdeka, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40113',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.912005928489333,
            'longitude' => 107.61607553809658
        ]);
        Wisata::create([
            'nama_tempat' => 'Gardenice Rink',
            'kategori_id'=> 4,
            'alamat' => 'Paris Van Java, Lantai SL- 08, Jalan Sukajadi No.137-139 Paris Van Java Sky Level, Cipedes, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.890299648384331,
            'longitude' => 107.59588012968328
        ]);
        Wisata::create([
            'nama_tempat' => 'Margacinta Park',
            'kategori_id'=> 4,
            'alamat' => 'Jl. Margacinta No.98, Cijaura, Kec. Buahbatu, Kota Bandung, Jawa Barat 40287',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.954810344896245,
            'longitude' => 107.64795482460313
        ]);
        Wisata::create([
            'nama_tempat' => 'Kiara Artha Park',
            'kategori_id'=> 4,
            'alamat' => 'Jl. Banten, Kebonwaru, Kec. Batununggal, Kota Bandung, Jawa Barat 40272',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.915910876144192,
            'longitude' => -6.954810344896245
        ]);
        Wisata::create([
            'nama_tempat' => 'Tepi Kota',
            'kategori_id'=> 4,
            'alamat' => ' Jl. Padang Golf, Sukamiskin, Kec. Arcamanik, Kota Bandung, Jawa Barat 40293',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.91094969601049,
            'longitude' => 107.66953038899508
        ]);

        //id 5
        Wisata::create([
            'nama_tempat' => 'Tani Kota',
            'kategori_id'=> 5,
            'alamat' => ' Jl. Cisitu Indah VI, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.876727543624047,
            'longitude' => 107.61104240926066
        ]);

        //id 6
        Wisata::create([
            'nama_tempat' => 'Mesjid Raya Bandung',
            'kategori_id'=> 6,
            'alamat' => ' Jl. Dalem Kaum No.14, Balonggede, Kec. Regol, Kota Bandung, Jawa Barat 40251',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.9214979814769295,
            'longitude' => 107.60608625159048
        ]);
        Wisata::create([
            'nama_tempat' => 'Mesjid Al-Jabbar',
            'kategori_id'=> 6,
            'alamat' => ' Jl. Cimencrang No.14, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.946154887855792,
            'longitude' => 107.70332953306911
        ]);

        //id 7
        Wisata::create([
            'nama_tempat' => 'Kampung Wisata Kreatif Braga',
            'kategori_id'=> 7,
            'alamat' => ' Jl. Cimencrang No.14, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -5.8654727282394825,
            'longitude' => 117.61818564264613
        ]);
        Wisata::create([
            'nama_tempat' => 'Kampung Wisata Kreatif Cigadung',
            'kategori_id'=> 7,
            'alamat' => ' Jl. Cimencrang No.14, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.8454727282394825,
            'longitude' => 107.61318564264613
        ]);
        Wisata::create([
            'nama_tempat' => 'Kampung Wisata Kreatif Rajut Binong Jati',
            'kategori_id'=> 7,
            'alamat' => ' Jl. Cimencrang No.14, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.8656727282394825,
            'longitude' => 107.61018564264613
        ]);
        Wisata::create([
            'nama_tempat' => 'Kampung Wisata Kreatif Literasi Cinambo',
            'kategori_id'=> 7,
            'alamat' => ' Jl. Cimencrang No.14, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.8654727582394825,
            'longitude' => 107.61818364264613
        ]);
        Wisata::create([
            'nama_tempat' => 'Kampung Wisata Kreatif Cigondewah',
            'kategori_id'=> 7,
            'alamat' => ' Jl. Cigondewah Kidul No.37 Cigondewah, Rahayu, Bandung Kulon, Bandung City, West Java 40214',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.9442612,
            'longitude' => 107.5632923
        ]);
        Wisata::create([
            'nama_tempat' => 'Kampung Wisata Kreatif Pasir Kunci',
            'kategori_id'=> 7,
            'alamat' => ' Jl. Cimencrang No.14, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.8654727282395825,
            'longitude' => 107.61818564264611
        ]);
        Wisata::create([
            'nama_tempat' => 'Kampung Wisata Kreatif Cibaduyut',
            'kategori_id'=> 7,
            'alamat' => ' Jl. Cimencrang No.14, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.8654727282394829,
            'longitude' => 107.51818564264613
        ]);
        Wisata::create([
            'nama_tempat' => 'Kampung Wisata Kreatif Gedebage',
            'kategori_id'=> 7,
            'alamat' => ' Jl. Cimencrang No.14, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'gambar'=> '',
            'sumber'=>'lorem',
            'deskripsi'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?',
            'latitude' => -6.8659727282394825,
            'longitude' => 107.61815564264613
        ]);

}
}
