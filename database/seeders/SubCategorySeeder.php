<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sub_categories = array(
            array('id' => '1','category_id' => '2','name' => 'Motivational','description' => 'motivation','image' => 'upload/sub-categories-image/20200121_180522.jpg','status' => '1','created_at' => '2023-05-21 19:23:46','updated_at' => '2023-05-21 19:23:46'),
            array('id' => '2','category_id' => '1','name' => 'Phone','description' => 'phone','image' => 'upload/sub-categories-image/received_1164553777075592.png','status' => '2','created_at' => '2023-05-21 19:52:42','updated_at' => '2023-05-21 19:55:44'),
            array('id' => '4','category_id' => '9','name' => 'HeadPhone','description' => 'headphone','image' => 'upload/sub-categories-image/Untitled design.png','status' => '1','created_at' => '2023-05-30 20:21:49','updated_at' => '2023-06-04 08:31:34'),
            array('id' => '5','category_id' => '7','name' => 'T-Shirt','description' => 't-shirt','image' => 'upload/sub-categories-image/akun.png','status' => '1','created_at' => '2023-05-31 11:07:14','updated_at' => '2023-05-31 11:07:14'),
            array('id' => '6','category_id' => '8','name' => 'Three Piece','description' => 'three piece','image' => 'upload/sub-categories-image/Untitled design.png','status' => '1','created_at' => '2023-05-31 11:08:32','updated_at' => '2023-05-31 11:08:32'),
            array('id' => '7','category_id' => '7','name' => 'Polo Shirt','description' => 'Polo Shirt','image' => 'upload/sub-categories-image/t-shirt (4).png','status' => '1','created_at' => '2023-05-31 16:44:24','updated_at' => '2023-05-31 16:44:24'),
            array('id' => '8','category_id' => '7','name' => 'Shirt','description' => 'shirt','image' => 'upload/sub-categories-image/shirt (16).png','status' => '1','created_at' => '2023-05-31 16:52:21','updated_at' => '2023-05-31 16:52:21')
        );

        foreach ($sub_categories as $sub_category) {
            \App\Models\SubCategory::create($sub_category);
        }
    }
}
