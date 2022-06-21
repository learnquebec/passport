<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesTableSeeder::class,
            UserSeeder::class,
            CategorieSeeder::class,
            ThematiqueSeeder::class,
            RisqueSeederManual::class,
            RisqueThematiqueSeeder::class,
            GroupSeeder::class,
            UserGroupSeeder::class,
            DefiSeeder::class,
            DefiGroupsSeeder::class,
            UserRisqueSeeder::class,
            UserRisqueDoneSeeder::class
        ]);
    }
}
