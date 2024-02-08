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
            'name' => 'Abdulaziz',
            'email' => 'test@test.com',
            'password' => 11111111
        ]);
    User::create([
            'name' => 'Doston',
            'email' => 'test1@test.com',
            'password' => 11111111
        ]);
    User::create([
            'name' => 'Nurbek',
            'email' => 'test2@test.com',
            'password' => 11111111
        ]);
    User::create([
            'name' => 'Sanjar',
            'email' => 'test3@test.com',
            'password' => 11111111
        ]);
    }
}
