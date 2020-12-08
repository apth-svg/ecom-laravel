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
        DB::table('products')->insert(
             [
            'name'=>'11 pro max',
            'price'=>'1100',
            'category'=>'IOS',
            'description'=>'A smart phone is 4gb ram',
            'gallery'=>'https://cdn.dxomark.com/wp-content/uploads/medias/post-35557/Apple-iPhone-11-Pro-Max-1.jpg'
            ],
        );
    }
}
