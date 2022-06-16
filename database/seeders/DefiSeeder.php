<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Defi;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DefiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('defis')->insert([
                'name' =>'Faire 5 risques dans la catégorie << Par moi-même >>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('defis')->insert([
            'name' =>'Faire 2 risques de la thématique << Loisir >>',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
    }
    // Defi::factory()->count(20)->create();
}
