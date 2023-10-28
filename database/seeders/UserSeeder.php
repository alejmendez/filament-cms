<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Alejandro Méndez',
            'email' => 'alejmendez.87@gmail.com',
            'password' => bcrypt('1234qwer'),
        ]);
    }
}
