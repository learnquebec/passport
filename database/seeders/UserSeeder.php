<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'id' =>1,
            'name' =>'SuperAdmin User',
            'email' =>'martinc@propage.ca',
            'password'=>bcrypt('mar123tin')
        ]);

        User::factory()
        ->count(50)
        ->create();
    }
}
