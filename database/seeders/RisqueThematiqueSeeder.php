<?php

namespace Database\Seeders;

use App\Models\Risque;
use App\Models\Thematique;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RisqueThematiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thematiqueCount = Thematique::All()->count();
        if(0 === $thematiqueCount){
            $this->command->info("No tags found, skipping assigning tags to blog posts");
            return;
        }

        $howManyMin = (int)$this->command->ask('Minimum thematiques on risques', 0);
        $howManyMax = min((int)$this->command->ask('Maximum thematiques on risques', $thematiqueCount), $thematiqueCount);

        Risque::all()->each(function(Risque $risque) use($howManyMin, $howManyMax){
            $take = random_int($howManyMin, $howManyMax);
            $thematique = Thematique::inRandomOrder()->take($take)->get()->pluck('id');
            $risque->thematiques()->sync($thematique);
        });
    }
}
