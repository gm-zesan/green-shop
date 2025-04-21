<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blog_categories = array(
            array('id' => '2','name' => 'New One','description' => 'sadcd','created_at' => '2024-10-12 07:47:19','updated_at' => '2024-10-12 07:47:19')
        );

        foreach ($blog_categories as $blog_category) {
            \App\Models\BlogCategory::create($blog_category);
        }
    }
}
