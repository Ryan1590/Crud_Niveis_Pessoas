<?php

use App\Http\Controllers\DesenvolvedorController;
use App\Models\Desenvolvedores;
use App\Models\Niveis;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::get('desenvolvedores', [DesenvolvedorController::class, 'index'])->name('desenvolvedores.index'); 
Route::get('create/desenvolvedores', [DesenvolvedorController::class, 'create']); // tela de create
Route::post('desenvolvedores', [DesenvolvedorController::class, 'store'])->name('desenvolvedores.store'); // rota metodo create desenvolvedores
Route::delete('desenvolvedores/{id}', [DesenvolvedorController::class, 'destroy'])->name('desenvolvedores.destroy'); // rota metodo destroy desenvolvedores
=======
Route::get('/', function () {
    return view('welcome');
});

Route::get('desenvolvedores', [DesenvolvedorController::class, 'index'])->name('desenvolvedores.index'); //lista devs
Route::get('desenvolvedores/create', [DesenvolvedorController::class, 'create']); // tela create
Route::post('desenvolvedores', [DesenvolvedorController::class, 'store'])->name('desenvolvedores.store'); // create desenvolvedores
Route::delete('desenvolvedores/{id}', [DesenvolvedorController::class, 'destroy'])->name('desenvolvedores.destroy'); // destroy desenvolvedores
>>>>>>> bca4cb8aa23f1c1be4af704066bd1aa51632b4eb
