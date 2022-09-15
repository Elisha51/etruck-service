<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class TruckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trucks = [
            [
                "id" => rand(1, 100000),
                "driver_id" => '2',
                "image_path" => 'path'. rand(0, 245),
                "truck_number" => rand(1, 100000),
                "plate_number" => "UGM " . rand(0, 245),
                "created_at" => Carbon::now()->toDateTimeString(),
                "updated_at" => Carbon::now()->toDateTimeString()
            ],
            [
                "id" => rand(1, 100000),
                "driver_id" => '2',
                "image_path" => 'path'. rand(0, 245),
                "truck_number" => rand(1, 100000),
                "plate_number" => "UGM " . rand(0, 245),
                "created_at" => Carbon::now()->toDateTimeString(),
                "updated_at" => Carbon::now()->toDateTimeString()
            ]
        ];

        
        DB::table('trucks')->insert($trucks);
    }
}
