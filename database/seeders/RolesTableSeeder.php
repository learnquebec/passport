<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => 1,
             'role_en' =>'Administrator',
            'role_fr' =>'Administrateur',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('roles')->insert([
            'id' => 2,
             'role_en' =>'Teacher',
            'role_fr' =>'Enseignant',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('roles')->insert([
            'id' => 3,
             'role_en' =>'Student',
            'role_fr' =>'Étudiant',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
