<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = array(
            array('id' => '2','category_id' => '2','title' => 'iolo','subtitle' => 'iul,','description' => '<p>tyku</p>','image' => 'upload/blogs-image/437158673_932649695533802_2529258865227535374_n.jpg','created_by' => '1','created_at' => '2024-10-12 07:48:04','updated_at' => '2024-10-12 09:02:07'),
            array('id' => '3','category_id' => '2','title' => 'kujyhgf','subtitle' => 'iuytrgdfsd','description' => '<p>muknjygh</p>','image' => 'upload/blogs-image/Screenshot_1.png','created_by' => '1','created_at' => '2024-10-12 07:54:37','updated_at' => '2024-10-12 09:07:15')
        );
    }
}
