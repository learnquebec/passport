<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ThematiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('thematiques')->insert([
                'id' =>1,
                'titre' =>'Culture populaire',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('thematiques')->insert([
            'id' =>2,
            'titre' =>'Loisirs',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('thematiques')->insert([
            'id' =>3,
            'titre' =>'Média/Technologie',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('thematiques')->insert([
            'id' =>4,
            'titre' =>'Emploi/Bénévolat/Travail',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('thematiques')->insert([
            'id' =>5,
            'titre' =>'Autre',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
    }
}
