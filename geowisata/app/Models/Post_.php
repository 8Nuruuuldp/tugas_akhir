<?php

namespace App\Models;


class Post
{
    private static $data_posts = [
        [

        "title" => "Curug Dago",
        "slug" => "Curug-Dago",
        "address" => "Jl. Dagopojok, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135"

        ],
        [

        "title" => "Museum Barli",
        "slug" => "Museum-Barli",
        "address" => "Jl. Prof. Dr. Sutami No.91, Sukarasa, Kec. Sukasari, Kota Bandung, Jawa Barat 40152"

        ],
        [

        "title" => "Museum Kebudayaan Tionghoa",
        "slug" => "Museum-Kebudayaan-Tionghoa",
        "address" => "Jl. Nana Rohana No.37, Wr. Muncang, Kec. Bandung Kulon, Kota Bandung, Jawa Barat 40211"

            ],
        ];

    public static function all()
    {
        return collect(self::$data_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
