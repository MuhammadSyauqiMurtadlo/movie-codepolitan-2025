<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => '$2y$10$eW5jY3J5cHRlZC5wYXNzd29yZDEyMw==' // bcrypt('password123')
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => '$2y$10$eW5jY3J5cHRlZC5wYXNzd29yZDEyMw==' // bcrypt('password123')
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alice@example.com',
                'password' => '$2y$10$eW5jY3J5cHRlZC5wYXNzd29yZDEyMw==' // bcrypt('password123')
            ],
        ];

        DB::table('users')->insert($users);
    }
}
