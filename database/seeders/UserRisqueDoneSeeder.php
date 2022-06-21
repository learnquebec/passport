<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserRisqueDoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_risque_dones')->insert([
            'user_risque_id' =>2,
            'difficulty_id'=>3,
            'comment' => "premier commentaire",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('user_risque_dones')->insert([
            'user_risque_id' =>2,
            'difficulty_id'=>2,
            'comment' => 'Deuxième commentaire',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('user_risque_dones')->insert([
            'user_risque_id' =>2,
            'difficulty_id'=>1,
            'comment' =>'Troisième commentaire',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('user_risque_dones')->insert([
            'user_risque_id' =>3,
            'difficulty_id'=>3,
            'comment' => 'Quatrième commentaire',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
    }
}
