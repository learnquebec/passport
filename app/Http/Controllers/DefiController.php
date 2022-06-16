<?php

namespace App\Http\Controllers;

use App\Models\Defi;
use App\Http\Requests\StoredefiRequest;
use App\Http\Requests\UpdatedefiRequest;

class DefiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoredefiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredefiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\defi  $defi
     * @return \Illuminate\Http\Response
     */
    public function show(Defi $defi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\defi  $defi
     * @return \Illuminate\Http\Response
     */
    public function edit(Defi $defi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedefiRequest  $request
     * @param  \App\Models\defi  $defi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedefiRequest $request, Defi $defi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\defi  $defi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Defi $defi)
    {
        //
    }
}
