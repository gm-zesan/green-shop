<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = array(
            array('id' => '1','name' => 'GM.Zesan','email' => 'gmzesan7767@gmail.com','avatar' => 'avatars/Ljf8yCZupoKRHgk9ZKCo1R143l7rpbnWeJBjH4oG.png','email_verified_at' => NULL,'password' => bcrypt('12345678aA'),'two_factor_secret' => NULL,'two_factor_recovery_codes' => NULL,'two_factor_confirmed_at' => NULL,'remember_token' => 'ZeuCGlJNNmh8HiFbMB3NG4mWpmLxQfAvc60CsIrnTJYH67z700YIx71ilR9I','current_team_id' => NULL,'profile_photo_path' => NULL,'created_at' => '2023-04-25 18:55:52','updated_at' => '2024-10-14 09:01:40'),
            array('id' => '2','name' => 'Green Shop','email' => 'greenshop25@gmail.com','avatar' => 'avatars/Ljf8yCZupoKRHgk9ZKCo1R143l7rpbnWeJBjH4oG.png','email_verified_at' => NULL,'password' => bcrypt('greenshop25'),'two_factor_secret' => NULL,'two_factor_recovery_codes' => NULL,'two_factor_confirmed_at' => NULL,'remember_token' => 'ZeuCGlJNNmh8HiFbMB3NG4mWpmLxQfAvc60CsIrnTJYH67z700YIx71ilR9I','current_team_id' => NULL,'profile_photo_path' => NULL,'created_at' => '2023-04-25 18:55:52','updated_at' => '2024-10-14 09:01:40')
        );

        foreach ($users as $user) {
            \App\Models\User::create($user);
        }
    }
}
