<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

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
                'name'=>'Iphone',
                'price'=>'1000$',
                'description'=>'An Iphone Change Your Experience',
                'category'=>'Mobile',
                'gallery'=>'https://scdn.slashgear.com/wp-content/uploads/2019/10/apple-iphone-11-9.jpg',
            ],
            [
                'name'=>'Oppo',
                'price'=>'300$',
                'description'=>'An Oppo Phone Is Fast',
                'category'=>'Mobile',
                'gallery'=>'https://www.pakmobizone.pk/wp-content/uploads/2019/10/oppo-A5-2020-2.jpg',
            ],
            [
                'name'=>'MacOs',
                'price'=>'11000$',
                'description'=>'Best New MacBook Air',
                'category'=>'Computer',
                'gallery'=>'https://icdn8.digitaltrends.com/image/macbook-air-2018-review-5880-1920x1280.jpg',
            ]
        ]);
    }
}
