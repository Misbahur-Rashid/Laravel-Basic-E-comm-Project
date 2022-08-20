<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'LG Mobile',
                'price' => '200',
                'description' => "A smartphone with 4gb ram and much more feature",
                "category" => "mobile",
                "gallery" => "https://www.gsmarena.com/apple_iphone_12-pictures-10509.php"
            ],
            [
                'name' => 'Nokia Mobile',
                'price' => '300',
                'description' => "A smartphone with 4gb ram and much more feature",
                "category" => "mobile",
                "gallery" => "https://www.gsmarena.com/apple_iphone_12-pictures-10509.php"
            ],
            [
                'name' => 'i phone 13',
                'price' => '700',
                'description' => "A smartphone with 4gb ram and much more feature",
                "category" => "mobile",
                "gallery" => "https://www.gsmarena.com/apple_iphone_12-pictures-10509.php"
            ],
            [
                'name' => 'LG Mobile',
                'price' => '200',
                'description' => "A smartphone with 4gb ram and much more feature",
                "category" => "mobile",
                "gallery" => "https://www.gsmarena.com/apple_iphone_12-pictures-10509.php"
            ]

        ]);
    }
}
