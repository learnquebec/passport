<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use JeroenZwart\CsvSeeder\CsvSeeder;
use Illuminate\Support\Facades\DB;

class RisqueSeeder extends CsvSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function __construct()
    {
        $this->file = '/database/seeders/csvs/risques.csv';
    }
    public function run()
    {
        echo "Seeding risques table: ";
        // Recommended when importing larger CSVs
        DB::disableQueryLog();
        parent::run();
    }
}
