<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RisqueThematiqueController;
use App\Http\Controllers\RisquesController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('risques', RisquesController::class)->only(['index','show','create','store','edit', 'update', 'student']);

Route::get('/risques/thematique/{id}', [RisqueThematiqueController::class, 'index'])->name('risques.thematiques.index');

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

//Route::get('/groupes', [GroupController::class, 'index'])->middleware(['auth'])->name('groupes');
//Route::get('/groupes/create', [GroupController::class, 'create'])->middleware(['auth'])->name('groupe create');
//Route::get('/groupes/update', [GroupController::class, 'update'])->middleware(['auth'])->name('groupe update');
//Route::get('/groupes/{id}', [GroupController::class, 'edit'])->middleware(['auth'])->name('groupe edit');
Route::resource('groupes', GroupController::class)->only(['index','show','create','store','edit', 'update', 'student']);

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
