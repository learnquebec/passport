<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Risque;
use App\Models\Thematique;

class RisquesController extends Controller
{
    public function __construct(Request $request)
    {
        $this->middleware('auth')->only('index','show','create','store','edit','update','destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return view('risques.index');
        return view('risques.index', [
            'risques' => Risque::with('categorie','thematiques')->get(),
            'categories'=>Categorie::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        $thematiques = Thematique::all();
        $risque = new Risque;
        
        return view('risques.create', ['risque' => $risque, 'categories' =>$categories,'thematiques' =>$thematiques]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Categorie::all();
        $thematiques = Thematique::all();
        
        return view('risques.show', ['risque' => Risque::with('categorie','thematiques')->findOrFail($id), 'categories' =>$categories,'thematiques' =>$thematiques]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Categorie::all();
        $thematiques = Thematique::all();
        
        return view('risques.edit', ['risque' => Risque::with('categorie','thematiques')->findOrFail($id), 'categories' =>$categories,'thematiques' =>$thematiques]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
