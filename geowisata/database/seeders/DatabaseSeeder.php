<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use  App\Models\Data;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \User::factory(10)->create();

        // \User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Category::create([
            'name' => 'Wisata Alam',
            'slug' => 'wisata-alam'
        ]);
        Category::create([
            'name' => 'Wisata Pendidikan dan Sejarah',
            'slug' => 'wisata-pendidikan&sejarah'
        ]);
        Category::create([
            'name' => 'Wisata Budaya',
            'slug' => 'wisata-budaya'
        ]);
        Category::create([
            'name' => 'Wisata Rekreatif',
            'slug' => 'wisata-rekreatif'
        ]);
        Category::create([
            'name' => 'Wisata Agro',
            'slug' => 'wisata-agro'
        ]);
        Category::create([
            'name' => 'Wisata Religi',
            'slug' => 'wisata-religi'
        ]);
        Category::create([
            'name' => 'Kampung Wisata Kreatif',
            'slug' => 'kampung-wisata-kreatif'
        ]);

        //id 1
        Data::create([
            'title' => 'Curug Dago',
            'category_id'=> 1,
            'slug' => 'curug-dago',
            'address' => 'Jl. Dagopojok, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);

        //id 2
        Data::create([
            'title' => 'Museum Barli',
            'category_id'=> 2,
            'slug' => 'museum-barli',
            'address' => 'Jl. Prof. Dr. Sutami No.91, Sukarasa, Kec. Sukasari, Kota Bandung, Jawa Barat 40152',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Museum Sejarah Kota Bandung',
            'category_id'=> 2,
            'slug' => 'Museum-Sejarah-Kota-Bandung',
            'address' => 'Jl. Aceh No.47, Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40117',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Museum Sribaduga',
            'category_id'=> 2,
            'slug' => 'Museum-Sribaduga',
            'address' => 'Jl. BKR No.185, Pelindung Hewan, Kec. Astanaanyar, Kota Bandung, Jawa Barat 40243',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Museum Geologi',
            'category_id'=> 2,
            'slug' => 'Museum-Geologi',
            'address' => 'Jl. Diponegoro No.57, Cihaur Geulis, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40122',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Museum Pos Indonesia',
            'category_id'=> 2,
            'slug' => 'Museum-Pos-Indonesia',
            'address' => 'Jl. Cilaki No.73, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Museum Mandala Wangsit Siliwangi',
            'category_id'=> 2,
            'slug' => 'Museum-Mandala-Wangsit-Siliwangi',
            'address' => 'Jl. Lembong No.38, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40111',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Museum Konfrensi Asia Afrika',
            'category_id'=> 2,
            'slug' => 'Museum-Konfrensi-Asia-Afrika',
            'address' => 'Jl. Asia Afrika No.65, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40111',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Museum Pendidikan Universitas Pendidikan Indonesia',
            'category_id'=> 2,
            'slug' => 'Museum-Pendidikan-UPI',
            'address' => 'Jl. Dr. Setiabudi No.229, Isola, Kec. Sukasari, Kota Bandung, Jawa Barat 40154',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Museum Monumen Perjuangan Rakyat Jawa Barat',
            'category_id'=> 2,
            'slug' => 'museum-monumen-PRJ',
            'address' => 'Jl. Dipati Ukur No.48, Lebakgede, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Gedung Indonesia Menggugat',
            'category_id'=> 2,
            'slug' => 'Gedung-Indonesia-Menggugat',
            'address' => 'JL Perintis Kemerdekaan, No. 5, Babakan Ciamis, Sumurbandung, Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40117',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Monumen Penjara Banceuy',
            'category_id'=> 2,
            'slug' => 'Monumen-Penjara-Banceuy',
            'address' => 'Jl. Banceuy, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40111',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Bandung Creative Hub',
            'category_id'=> 2,
            'slug' => 'Bandung-Creative-Hub',
            'address' => 'Jl. Laswi No.7, Kacapiring, Kec. Batununggal, Kota Bandung, Jawa Barat 40271',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);

        // id 3
        Data::create([
            'title' => 'Saung Angklung Udjo',
            'category_id'=> 3,
            'slug' => 'Saung-Angklung-Udjo',
            'address' => 'JJl. Padasuka No.118, Pasirlayung, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40192',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Padepokan Seni Mayang Sunda',
            'category_id'=> 3,
            'slug' => 'Padepokan-Seni-Mayang-Sunda',
            'address' => 'JJl. Peta No.209, Suka Asih, Kec. Bojongloa Kaler, Kota Bandung, Jawa Barat 40231',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Teras Sunda Cibiru',
            'category_id'=> 3,
            'slug' => 'Teras-Sunda-Cibiru',
            'address' => 'Jl. Raya Cipadung, Cipadung, Kec. Cibiru, Kota Bandung, Jawa Barat 40614',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Pasir Kunci',
            'category_id'=> 3,
            'slug' => 'Pasir-Kunci',
            'address' => 'Jl. Pasir Kunci, Pasirjati, Kec. Ujung Berung, Kota Bandung, Jawa Barat 40616',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Dago Tea House',
            'category_id'=> 3,
            'slug' => 'Dago-Tea-House',
            'address' => 'Jl. Bukit Dago Selatan No.53A, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Gedung Rumentang Siang',
            'category_id'=> 3,
            'slug' => 'Gedung-Rumentang-Siang',
            'address' => 'Jl. Baranang Siang No.1, Kb. Pisang, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40112',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);

        // id 4
        Data::create([
            'title' => 'Trans Studio Bandung',
            'category_id'=> 4,
            'slug' => 'Trans-Studio-Bandung',
            'address' => 'Jl. Gatot Subroto No.289A, Cibangkong, Kec. Batununggal, Kota Bandung, Jawa Barat 40273',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Bandung Zoo',
            'category_id'=> 4,
            'slug' => 'Bandung-Zoo',
            'address' => 'Jl. Kebun Binatang No.6, Lb. Siliwangi, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Pandora Experience Bandung',
            'category_id'=> 4,
            'slug' => 'Pandora-Experience-Bandung',
            'address' => 'Jl. Sukajadi No.173A, Cipedes, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Taman Lalu Lintas Ade Irma Suryani Nasution',
            'category_id'=> 4,
            'slug' => 'Taman-Lalu-Lintas',
            'address' => 'Jl. Belitung No.1, Merdeka, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40113',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Teras Cikapundung BBWS',
            'category_id'=> 4,
            'slug' => 'Teras-Cikapundung-BBWS',
            'address' => 'Jl. Siliwangi, Hegarmanah, Kec. Cidadap, Kota Bandung, Jawa Barat 40131',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Bandung Carnival Land Karang Setra',
            'category_id'=> 4,
            'slug' => 'BCL-Karang-Setra',
            'address' => 'Jl. Sirnagalih No.15, Cipedes, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Centrum Million Balls',
            'category_id'=> 4,
            'slug' => 'Centrum-Million-Balls',
            'address' => 'Jl. Belitung No.10, Merdeka, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40113',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Gardenice Rink',
            'category_id'=> 4,
            'slug' => 'Gardenice-Rink',
            'address' => 'Paris Van Java, Lantai SL- 08, Jalan Sukajadi No.137-139 Paris Van Java Sky Level, Cipedes, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Margacinta Park',
            'category_id'=> 4,
            'slug' => 'Margacinta-Park',
            'address' => 'Jl. Margacinta No.98, Cijaura, Kec. Buahbatu, Kota Bandung, Jawa Barat 40287',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Kiara Artha Park',
            'category_id'=> 4,
            'slug' => 'Kiara-Artha-Park',
            'address' => 'Jl. Banten, Kebonwaru, Kec. Batununggal, Kota Bandung, Jawa Barat 40272',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Tepi Kota',
            'category_id'=> 4,
            'slug' => 'Tepi-Kota',
            'address' => ' Jl. Padang Golf, Sukamiskin, Kec. Arcamanik, Kota Bandung, Jawa Barat 40293',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);

        //id 5
        Data::create([
            'title' => 'Tani Kota',
            'category_id'=> 5,
            'slug' => 'Tani-Kota',
            'address' => ' Jl. Cisitu Indah VI, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);

        //id 6
        Data::create([
            'title' => 'Mesjid Raya Bandung',
            'category_id'=> 6,
            'slug' => 'Mesjid-Raya-Bandung',
            'address' => ' Jl. Dalem Kaum No.14, Balonggede, Kec. Regol, Kota Bandung, Jawa Barat 40251',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Mesjid Al-Jabbar',
            'category_id'=> 6,
            'slug' => 'Mesjid-Al-Jabbar',
            'address' => ' Jl. Cimencrang No.14, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);

        //id 7
        Data::create([
            'title' => 'Kampung Wisata Kreatif Braga',
            'category_id'=> 7,
            'slug' => 'Kampung-Wisata-Kreatif-Braga',
            'address' => ' Jl. Cimencrang No.14, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Kampung Wisata Kreatif Cigadung',
            'category_id'=> 7,
            'slug' => 'Kampung-Wisata-Kreatif-Cigadung',
            'address' => ' Jl. Cimencrang No.14, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Kampung Wisata Kreatif Rajut Binong Jati',
            'category_id'=> 7,
            'slug' => 'Kampung-Wisata-Kreatif-Rajut-Binong-Jati',
            'address' => ' Jl. Cimencrang No.14, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Kampung Wisata Kreatif Literasi Cinambo',
            'category_id'=> 7,
            'slug' => 'Kampung-Wisata-Kreatif-Literasi-Cinambo',
            'address' => ' Jl. Cimencrang No.14, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Kampung Wisata Kreatif Cigondewah',
            'category_id'=> 7,
            'slug' => 'Kampung-WisataKreatif-Cigondewah',
            'address' => ' Jl. Cimencrang No.14, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Kampung Wisata Kreatif Pasir Kunci',
            'category_id'=> 7,
            'slug' => 'Kampung-Wisata-Kreatif-Pasir-Kunci',
            'address' => ' Jl. Cimencrang No.14, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Kampung Wisata Kreatif Cibaduyut',
            'category_id'=> 7,
            'slug' => 'Kampung-Wisata-Kreatif-Cibaduyut',
            'address' => ' Jl. Cimencrang No.14, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);
        Data::create([
            'title' => 'Kampung Wisata Kreatif Gedebage',
            'category_id'=> 7,
            'slug' => 'Kampung-Wisata-Kreatif-Gedebage',
            'address' => ' Jl. Cimencrang No.14, Cimenerang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit...........',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero enim sint nesciunt nostrum natus possimus quidem dignissimos eveniet officiis? Dolorem quia consequuntur iste delectus, tempore sed aperiam, illo alias iure cupiditate suscipit?
            At consequuntur quis, voluptatibus accusamus aliquam maiores iusto quod, temporibus rem debitis reprehenderit laudantium ratione numquam expedita cumque iure nam molestias nisi officiis cum.
            Inventore enim repellendus maxime culpa suscipit veniam blanditiis tenetur vel animi deserunt omnis, tempora dolores. Odit, libero quae. Quo quam laudantium laborum voluptatibus consequuntur!'
        ]);

}
}
