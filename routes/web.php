<?php

use App\Http\Controllers\EmpruntController;
use App\Http\Controllers\LivreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LivreController::class,'index'])->name('livre.index');
Route::get('/livres/create', [LivreController::class,'create'])->name('livre.create');
Route::post('/livres/add', [LivreController::class,'store'])->name('livre.store');
Route::get('/livres/edit/{id}', [LivreController::class,'edit'])->name('livre.edit');
Route::put('/livres/update/{id}', [LivreController::class,'update'])->name('livre.update');
Route::delete('/livres/delete/{id}', [LivreController::class,'destroy'])->name('livre.destroy');


Route::get('/emprunts', [EmpruntController::class,'index'])->name('emprunt.index');
Route::get('/emprunts/create', [EmpruntController::class,'create'])->name('emprunt.create');
Route::post('/emprunts/add', [EmpruntController::class,'store'])->name('emprunt.store');
Route::get('/emprunts/edit/{id}', [EmpruntController::class,'edit'])->name('emprunt.edit');
Route::put('/emprunts/update/{id}', [EmpruntController::class,'update'])->name('emprunt.update');
Route::delete('/emprunts/delete/{id}', [EmpruntController::class,'destroy'])->name('emprunt.destroy');