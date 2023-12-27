<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    
    public function run(): void
    {
        // Create sample users
        User::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Jane Doe',
            'email' => 'jane.doe@example.com',
            'password' => Hash::make('password456'),
        ]);

        User::create([
            'name' => 'Alice Smith',
            'email' => 'alice.smith@example.com',
            'password' => Hash::make('password789'),
        ]);

        User::create([
            'name' => 'Bob Johnson',
            'email' => 'bob.johnson@example.com',
            'password' => Hash::make('passwordabc'),
        ]);

        User::create([
            'name' => 'Eva Davis',
            'email' => 'eva.davis@example.com',
            'password' => Hash::make('passwordxyz'),
        ]);

        // Create more sample users using the factory
        User::factory(5)->create();

    }
}
