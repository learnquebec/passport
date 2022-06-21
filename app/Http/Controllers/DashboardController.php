<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Risque;
use App\Models\Categorie;
use App\Models\Groups;
use App\Models\User;

use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

     // dd($categories);
        if($user->role_id == 3){

            return view('dashboardStudent', ['user' => $user]);
        }else{
            return view('dashboard', ['user' => $user]);
        }
    }
}
