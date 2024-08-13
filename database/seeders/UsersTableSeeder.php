<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Admin
        DB::table('users')->insert([
            [
                'name' => 'Safwan Serat',
                'email' => 'safwan@example.com',
                'password' => Hash::make(12345678),
                'role' => 'admin',
                'status' => 'active'
            ],


            //Users
            [
                'name' => 'Wafiy Satu',
                'email' => 'wafiy@example.com',
                'password' => Hash::make(12345678),
                'role' => 'user',
                'status' => 'active'
            ]
        ]);
    }
}
