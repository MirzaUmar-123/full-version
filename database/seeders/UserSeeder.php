<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'Alice Johnson',      'email' => 'alice@example.com',      'password' => Hash::make('password123')],
            ['name' => 'Bob Smith',          'email' => 'bob@example.com',        'password' => Hash::make('password123')],
            ['name' => 'Charlie Davis',      'email' => 'charlie@example.com',    'password' => Hash::make('password123')],
            ['name' => 'Diana Roberts',      'email' => 'diana@example.com',      'password' => Hash::make('password123')],
            ['name' => 'Ethan Brown',        'email' => 'ethan@example.com',      'password' => Hash::make('password123')],
            ['name' => 'Fiona Wilson',       'email' => 'fiona@example.com',      'password' => Hash::make('password123')],
            ['name' => 'George Thompson',    'email' => 'george@example.com',     'password' => Hash::make('password123')],
            ['name' => 'Hannah Lee',         'email' => 'hannah@example.com',     'password' => Hash::make('password123')],
            ['name' => 'Ian Martinez',       'email' => 'ian@example.com',        'password' => Hash::make('password123')],
            ['name' => 'Julia Clark',        'email' => 'julia@example.com',      'password' => Hash::make('password123')],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
