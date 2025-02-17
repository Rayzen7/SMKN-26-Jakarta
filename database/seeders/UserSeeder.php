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
        \App\Models\User::create([
            'name'=> 'admin2',
            'email'=> 'admin2@gmail.com',
            'password'=> bcrypt('admin2')
        ]);
    }
}
