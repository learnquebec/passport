<?php

namespace App\Http\Controllers;

use App\Models\Thematique;
use Illuminate\Http\Request;

class RisqueThematiqueController extends Controller
{
    // display all Risques associated with a Thematique
    public function index($thematique){
        $thematique = Thematique::findOrFail($thematique);
        return view('risques.index', ['risques' =>$thematique->risques]);
    }
}
