<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = array(
            array('id' => '1','name' => 'Electronics','description' => 'electronics','image' => 'upload/categories-image/Bangladesh-Post-Office-1.png','status' => '1','created_at' => '2023-05-21 07:30:52','updated_at' => '2023-05-21 18:28:39'),
            array('id' => '2','name' => 'Books','description' => 'books','image' => 'upload/categories-image/akun.png','status' => '1','created_at' => '2023-05-21 07:32:40','updated_at' => '2023-05-21 18:29:32'),
            array('id' => '5','name' => 'House hold item','description' => 'house hold item','image' => 'upload/categories-image/received_1164553777075592.png','status' => '1','created_at' => '2023-05-21 18:39:39','updated_at' => '2023-05-21 18:39:39'),
            array('id' => '6','name' => 'Test','description' => 'test','image' => 'upload/categories-image/received_1164553777075592.png','status' => '1','created_at' => '2023-05-21 18:40:10','updated_at' => '2023-05-21 18:40:10'),
            array('id' => '7','name' => 'Man Fashion','description' => 'man fashion','image' => 'upload/categories-image/275849652_3065414807056437_3731767000305472740_n.jpg','status' => '1','created_at' => '2023-05-31 11:04:29','updated_at' => '2023-05-31 11:04:29'),
            array('id' => '8','name' => 'Women Fashon','description' => 'women fashion','image' => 'upload/categories-image/20200121_180522.jpg','status' => '1','created_at' => '2023-05-31 11:05:01','updated_at' => '2023-05-31 11:05:01'),
            array('id' => '9','name' => 'Gadget','description' => 'gadget','image' => 'upload/categories-image/257683557_283879476985946_4646287553526183087_n.jpg','status' => '1','created_at' => '2023-05-31 11:06:32','updated_at' => '2023-05-31 11:06:32')
        );

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
