<?php

namespace App\Http\Controllers;

use App\Models\group;
use App\Models\defi;
use App\Http\Requests\StoregroupRequest;
use App\Http\Requests\UpdategroupRequest;

use Auth;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('groups', ['groups' => $user->groups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $user = Auth::user();
        return view('groups', ['groups' => $user->groups]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoregroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoregroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\group  $group
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
  

        return view('groups.edit', ['group' => Group::find($id), 'defis' => Defi::get()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
  

        return view('groups.edit', ['group' => Group::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdategroupRequest  $request
     * @param  \App\Models\group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(UpdategroupRequest $request, group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(group $group)
    {
        //
    }
}
