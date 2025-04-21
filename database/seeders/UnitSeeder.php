<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $units = array(
            array('id' => '1','name' => 'Kilogram','code' => 'kg','description' => 'kg','status' => '1','created_at' => '2023-05-22 10:38:35','updated_at' => '2023-05-29 11:48:16'),
            array('id' => '3','name' => 'Piece','code' => 'piece','description' => 'piece','status' => '1','created_at' => '2023-05-29 11:48:32','updated_at' => '2023-05-29 11:48:32'),
            array('id' => '4','name' => 'Box','code' => 'box','description' => 'box','status' => '1','created_at' => '2023-05-29 11:48:41','updated_at' => '2023-05-29 11:48:41')
        );

        foreach ($units as $unit) {
            \App\Models\Unit::create($unit);
        }
    }
}
