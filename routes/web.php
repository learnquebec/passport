<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RisqueThematiqueController;
use App\Http\Controllers\RisquesController;

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

Route::resource('risques', RisquesController::class)->only(['index','show','create','store','edit', 'update']);

Route::get('/risques/thematique/{id}', [RisqueThematiqueController::class, 'index'])->name('risques.thematiques.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




require __DIR__.'/auth.php';
