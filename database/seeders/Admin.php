<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Users::create([
            'username' => 'admin1',
            'number' => '0823464096185',
            'email' => 'admin1@gmail.com',
            'is_admin' => 1,
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'),
            're_password' => Hash::make('admin123'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
