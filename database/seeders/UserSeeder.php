<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Sunil Kumar',
            'email' => 'sunikumar3002323@gmail1.com',
            'password' => bcrypt('welcome@123'),
        ]);

    }
}
