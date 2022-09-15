<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "id" => 1,
                "first_name" => "Test Customer",
                "last_name" => "Test Customer",
                "email" => "customer@gmail.com",
                "role" => "CUSTOMER",
                "contact" => "0700000000",
                "password" => Hash::make('123456'),
                "created_at" => Carbon::now()->toDateTimeString(),
                "updated_at" => Carbon::now()->toDateTimeString()
            ],
            [
                "id" => 2,
                "first_name" => "Test Driver",
                "last_name" => "Test Driver",
                "email" => "driver@gmail.com",
                "role" => "DRIVER",
                "contact" => "0700000001",
                "password" => Hash::make('123456'),
                "created_at" => Carbon::now()->toDateTimeString(),
                "updated_at" => Carbon::now()->toDateTimeString()
            ],
            [
                "id" => 3,
                "first_name" => "Test Admin",
                "last_name" => "Test Admin",
                "email" => "admin@gmail.com",
                "role" => "ADMIN",
                "contact" => "0700000002",
                "password" => Hash::make('123456'),
                "created_at" => Carbon::now()->toDateTimeString(),
                "updated_at" => Carbon::now()->toDateTimeString()
            ],
        ];

        DB::table('users')->insert($users);
    }
}
