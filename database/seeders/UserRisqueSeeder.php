<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserRisqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_risques')->insert([
            'user_id' =>4,
            'risque_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('user_risques')->insert([
            'user_id' =>4,
            'risque_id'=>3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('user_risques')->insert([
            'user_id' =>4,
            'risque_id'=>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('user_risques')->insert([
            'user_id' =>4,
            'risque_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
    }
}
