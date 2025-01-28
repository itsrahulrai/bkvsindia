<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin@123'),
                'role' => 'admin',
                'status' => 'active',
            ],
            [
                'name' => 'student',
                'email' => 'student@gmail.com',
                'password' => bcrypt('student@123'),
                'role' => 'user',
                'status' => 'active',

            ],
            [
                'name' => 'frenchies',
                'email' => 'frenchies@gmail.com',
                'password' => bcrypt('frenchies@123'),
                'role' => 'frenchies',
                'status' => 'active',

            ]
        ]);
    }
}
