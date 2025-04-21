<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banners = array(
            array('id' => '1','key' => 'hero-slider','image' => 'banners/hero-slider/jKtGtkL5hRoo0SWXgjApA0fW94PBiocEkQcaVHr2.jpg','created_at' => '2024-10-15 07:54:38','updated_at' => '2024-10-16 04:34:20'),
            array('id' => '2','key' => 'hero-slider','image' => 'banners/hero-slider/lXD1uZIkB2TC3NYllzZy9v5bOqMIYUfvx0WVQi2x.jpg','created_at' => '2024-10-15 08:08:19','updated_at' => '2024-10-16 04:34:53'),
            array('id' => '3','key' => 'hero-banner','image' => 'banners/hero-banner/EIhyztX2rhaxMkJk9YgWKMOIp2OV6QAohLxiirUu.jpg','created_at' => '2024-10-15 08:15:54','updated_at' => '2024-10-16 04:39:57'),
            array('id' => '4','key' => 'banner-section','image' => 'banners/banner-section/jJUBj5WUizYgEIcsmB7eUYF2Ct59ikOjJ0W29p5y.jpg','created_at' => '2024-10-15 08:16:18','updated_at' => '2024-10-15 08:16:18'),
            array('id' => '5','key' => 'banner-section','image' => 'banners/banner-section/HBFwz3YjfVScJDmZxYx4HjkBhLwTx4EcDFfCp3cj.jpg','created_at' => '2024-10-15 08:16:29','updated_at' => '2024-10-15 08:16:29'),
            array('id' => '7','key' => 'special-offer-banner','image' => 'banners/special-offer-banner/9NHQOwvxNqs1EPcb4BgnYPweIYPozo6xoPXeI3FU.jpg','created_at' => '2024-10-15 08:18:11','updated_at' => '2024-10-16 04:51:53')
        );

        foreach ($banners as $banner) {
            \App\Models\Banner::create($banner);
        }
    }
}
