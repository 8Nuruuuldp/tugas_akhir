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

        //title
        Data::create([
            'title' => 'Curug Dago',
            'category_id'=> 1,
            'slug' => 'curug-dago',
            'address' => 'Jl. Dagopojok, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut labore ratione amet facilis voluptatem iste consectetur iusto fugit, voluptate commodi nobis, nam ducimus quo atque mollitia explicabo tempora dignissimos cumque natus voluptates dolores molestias facere. Architecto doloribus quidem debitis voluptates numquam veniam suscipit molestias, beatae commodi, est sint dolorum assumenda?'
        ]);

        Data::create([
            'title' => 'Museum Barli',
            'category_id'=> 2,
            'slug' => 'museum-barli',
            'address' => 'Jl. Prof. Dr. Sutami No.91, Sukarasa, Kec. Sukasari, Kota Bandung, Jawa Barat 40152',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut labore ratione amet facilis voluptatem iste consectetur iusto fugit, voluptate commodi nobis, nam ducimus quo atque mollitia explicabo tempora dignissimos cumque natus voluptates dolores molestias facere. Architecto doloribus quidem debitis voluptates numquam veniam suscipit molestias, beatae commodi, est sint dolorum assumenda?'
        ]);
        Data::create([
            'title' => 'Museum Kebudayaan Tionghoa',
            'category_id'=> 2,
            'slug' => 'museum-kebudayaan-tionghoa',
            'address' => 'Jl. Nana Rohana No.37, Wr. Muncang, Kec. Bandung Kulon, Kota Bandung, Jawa Barat 40211',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut labore ratione amet facilis voluptatem iste consectetur iusto fugit, voluptate commodi nobis, nam ducimus quo atque mollitia explicabo tempora dignissimos cumque natus voluptates dolores molestias facere. Architecto doloribus quidem debitis voluptates numquam veniam suscipit molestias, beatae commodi, est sint dolorum assumenda?'
        ]);
        Data::create([
            'title' => 'Museum Preanger',
            'category_id'=> 2,
            'slug' => 'museum-preanger',
            'address' => 'Jl. Asia Afrika No.81, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40112',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut labore ratione amet facilis voluptatem iste consectetur iusto fugit, voluptate commodi nobis, nam ducimus quo atque mollitia explicabo tempora dignissimos cumque natus voluptates dolores molestias facere. Architecto doloribus quidem debitis voluptates numquam veniam suscipit molestias, beatae commodi, est sint dolorum assumenda?'
        ]);
        Data::create([
            'title' => 'Museum Preanger',
            'category_id'=> 2,
            'slug' => 'museum-preanger',
            'address' => 'Jl. Asia Afrika No.81, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40112',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut labore ratione amet facilis voluptatem iste consectetur iusto fugit, voluptate commodi nobis, nam ducimus quo atque mollitia explicabo tempora dignissimos cumque natus voluptates dolores molestias facere. Architecto doloribus quidem debitis voluptates numquam veniam suscipit molestias, beatae commodi, est sint dolorum assumenda?'
        ]);

}
}
