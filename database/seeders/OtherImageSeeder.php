<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OtherImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $other_images = array(
            array('id' => '1','product_id' => '1','image' => 'upload/product-other-images/271598.jpg','created_at' => '2023-05-30 22:15:44','updated_at' => '2023-05-30 22:15:44'),
            array('id' => '2','product_id' => '1','image' => 'upload/product-other-images/9541.jpg','created_at' => '2023-05-30 22:15:44','updated_at' => '2023-05-30 22:15:44'),
            array('id' => '3','product_id' => '1','image' => 'upload/product-other-images/460209.png','created_at' => '2023-05-30 22:15:44','updated_at' => '2023-05-30 22:15:44'),
            array('id' => '4','product_id' => '2','image' => 'upload/product-other-images/16432.png','created_at' => '2023-05-31 16:41:47','updated_at' => '2023-05-31 16:41:47'),
            array('id' => '5','product_id' => '2','image' => 'upload/product-other-images/266130.png','created_at' => '2023-05-31 16:41:47','updated_at' => '2023-05-31 16:41:47'),
            array('id' => '6','product_id' => '3','image' => 'upload/product-other-images/443408.png','created_at' => '2023-05-31 16:50:04','updated_at' => '2023-05-31 16:50:04'),
            array('id' => '7','product_id' => '3','image' => 'upload/product-other-images/465380.png','created_at' => '2023-05-31 16:50:04','updated_at' => '2023-05-31 16:50:04'),
            array('id' => '8','product_id' => '3','image' => 'upload/product-other-images/293670.png','created_at' => '2023-05-31 16:50:04','updated_at' => '2023-05-31 16:50:04'),
            array('id' => '9','product_id' => '4','image' => 'upload/product-other-images/488496.png','created_at' => '2023-05-31 16:54:33','updated_at' => '2023-05-31 16:54:33'),
            array('id' => '10','product_id' => '4','image' => 'upload/product-other-images/327690.png','created_at' => '2023-05-31 16:54:33','updated_at' => '2023-05-31 16:54:33'),
            array('id' => '11','product_id' => '4','image' => 'upload/product-other-images/197195.png','created_at' => '2023-05-31 16:54:33','updated_at' => '2023-05-31 16:54:33')
        );

        foreach ($other_images as $other_image) {
            \App\Models\OtherImage::create($other_image);
        }
    }
}
