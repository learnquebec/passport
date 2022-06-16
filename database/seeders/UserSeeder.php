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
            'first_name' =>'SuperAdmin',
            'last_name' =>'User',
            'email' =>'martinc@propage.ca',
            'password'=>bcrypt('mar123tin'),
            'role_id'=>1
        ]);
        DB::table('users')->insert([
            'id' =>2,
            'first_name' =>'Enseignant',
            'last_name' =>'Un',
            'email' =>'enseignant1@learnquebec.ca',
            'password'=>bcrypt('password'),
            'role_id'=>2
        ]);
        DB::table('users')->insert([
            'id' =>3,
            'first_name' =>'Enseignant',
            'last_name' =>'Deux',
            'email' =>'enseignant2@learnquebec.ca',
            'password'=>bcrypt('password'),
            'role_id'=>2
        ]);
        DB::table('users')->insert([
            'id' =>3,
            'first_name' =>'Etudiant',
            'last_name' =>'Un',
            'email' =>'etudiant1@learnquebec.ca',
            'password'=>bcrypt('password'),
            'role_id'=>3
        ]);
        DB::table('users')->insert([
            'id' =>4,
            'first_name' =>'Etudiant',
            'last_name' =>'Deux',
            'email' =>'etudiant2@learnquebec.ca',
            'password'=>bcrypt('password'),
            'role_id'=>3
        ]);

        User::factory()
        ->count(50)
        ->create();
    }
}
