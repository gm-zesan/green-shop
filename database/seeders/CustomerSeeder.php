<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = array(
            array('id' => '2','name' => 'G.M. Zesan','email' => 'gmzesan7767@gmail.com','mobile' => '01921324091','password' => '$2y$10$V3NR7C7nG6hXQNlgwrMo8uG3tLYHW4pksKG6XnVlIHLmg/zWHji1C','address' => 'Uttara, Dhaka','date_of_birth' => '2024-10-14','n_id' => NULL,'image' => 'customer-profile/HYqXagJI5zQDHneXG5LvoUyYjTAvr1hZDwXplGu1.png','blood_group' => 'O+','created_at' => '2023-06-13 01:53:31','updated_at' => '2024-10-14 09:49:17'),
            array('id' => '5','name' => 'hasan','email' => 'mdh33262@gmail.com','mobile' => '34564321','password' => '$2y$10$2Pok6ggzRrVdvoheOLSM/OLj8QLCjx6.lqHD8wUg0H.ocOVjTzx4S','address' => NULL,'date_of_birth' => NULL,'n_id' => NULL,'image' => NULL,'blood_group' => NULL,'created_at' => '2023-06-27 14:52:26','updated_at' => '2023-06-27 14:52:26'),
            array('id' => '6','name' => 'vai','email' => 'vai@gmail.com','mobile' => '12345556','password' => '$2y$10$pS2AYINpQxSb.EwyK8pMmeeBz0gxZNU/9Eq0ammSt/2MvF0DiNwBe','address' => NULL,'date_of_birth' => NULL,'n_id' => NULL,'image' => NULL,'blood_group' => NULL,'created_at' => '2023-06-27 16:57:32','updated_at' => '2023-06-27 16:57:32'),
            array('id' => '7','name' => 'OnlineTest-1','email' => 'test1@gmail.com','mobile' => '0189898989','password' => '$2y$10$C3SfU4luhNZ2/VZIcdG9IO7QEqPENabxSBwFUv98DXVD/kc/mqmk2','address' => NULL,'date_of_birth' => NULL,'n_id' => NULL,'image' => NULL,'blood_group' => NULL,'created_at' => '2023-06-30 21:44:20','updated_at' => '2023-06-30 21:44:20'),
            array('id' => '8','name' => 'ostad','email' => 'ostad@gmail.com','mobile' => '01787878787','password' => '$2y$10$A8usbm9Zv/xug.4sPEjok.X/e1qlwGr7jBhdPGUsAQjTiaUstBRrG','address' => NULL,'date_of_birth' => NULL,'n_id' => NULL,'image' => NULL,'blood_group' => NULL,'created_at' => '2023-07-01 14:25:44','updated_at' => '2023-07-01 14:25:44'),
            array('id' => '9','name' => 'test-2','email' => 'test2@gmail.com','mobile' => '0123232323','password' => '$2y$10$WTX4dmSs7Hu4/uTzJoy1BO6WyWfPBi7XxH9ikza3a7QIZdi9owWUy','address' => NULL,'date_of_birth' => NULL,'n_id' => NULL,'image' => NULL,'blood_group' => NULL,'created_at' => '2023-07-01 14:37:35','updated_at' => '2023-07-01 14:37:35')
        );

        foreach ($customers as $customer) {
            \App\Models\Customer::create($customer);
        }
    }
}
