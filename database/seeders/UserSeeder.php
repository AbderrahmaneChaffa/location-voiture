<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Normal User',
            'email' => 'user@example.com',
            'role' => 'user',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);
    }
}
