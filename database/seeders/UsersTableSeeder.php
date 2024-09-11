<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    'username' => 'picard@enterprise.com',
                    'password' => bcrypt('admin'),
                    'created_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'username' => 'worf@enterprise.com',
                    'password' => bcrypt('admin'),
                    'created_at' => date('Y-m-d H:i:s'),

                ],
                [
                    'username' => 'mariner@cerritos.com',
                    'password' => bcrypt('admin'),
                    'created_at' => date('Y-m-d H:i:s'),
                ],
               
            ]
        );
    }
}
