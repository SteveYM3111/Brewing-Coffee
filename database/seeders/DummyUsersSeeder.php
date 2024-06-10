<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Admin',
                'email'=>'Admin@gmail.com',
                'role'=>'Admin',
                'password'=>bcrypt('Admin123'),
            ],
            [
                'name'=>'Pembeli',
                'email'=>'Pembeli@gmail.com',
                'role'=>'Pembeli',
                'password'=>bcrypt('Pembeli123'),
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
