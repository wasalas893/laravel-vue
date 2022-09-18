<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([

            [
                 'color_name' => 'Black',
                 'color_code' => '#000000',
                 'color_description'=>'Black',
                 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'color_name' => 'Grey',
                'color_code' => '#808080',
                'color_description'=>'Grey',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'color_name' => 'Brown',
                'color_code' => '#8b4513',
                'color_description'=>'Brown',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'color_name' => 'Violet',
                'color_code' => '#bb9ff1',
                'color_description'=>'Violet',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            
            
            
        ]);
    }
}
