<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DefiGroup;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DefiGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('defi_groups')->insert([
            'name' =>'Faire 5 risques dans la catégorie << Par moi-même >>',
            'number_of_risks' =>5,
            'group_id' =>2,
            'start_date' => Carbon::parse('2022-06-01'),
            'end_date' => Carbon::parse('2022-07-01'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('defi_groups')->insert([
            'name' =>'Faire 5 risques dans la catégorie << Par moi-même >>',
            'number_of_risks' =>5,
            'user_id' =>2,
            'start_date' => Carbon::parse('2022-06-01'),
            'end_date' => Carbon::parse('2022-07-01'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
