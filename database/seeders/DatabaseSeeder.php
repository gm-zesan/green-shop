<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CustomerSeeder::class,
            
            CategorySeeder::class,
            SubCategorySeeder::class,
            UnitSeeder::class,
            ProductSeeder::class,
            OtherImageSeeder::class,
            
            BlogCategorySeeder::class,
            BlogSeeder::class,

            BannerSeeder::class,
        ]);
    }
}
