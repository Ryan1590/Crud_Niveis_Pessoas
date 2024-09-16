<?php

use App\Http\Controllers\DesenvolvedorController;
use App\Models\Desenvolvedores;
use App\Models\Niveis;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('desenvolvedores', [DesenvolvedorController::class, 'index'])->name('desenvolvedores.index'); //lista devs
Route::get('desenvolvedores/create', [DesenvolvedorController::class, 'create']); // tela create
Route::post('desenvolvedores', [DesenvolvedorController::class, 'store'])->name('desenvolvedores.store'); // create desenvolvedores
Route::delete('desenvolvedores/{id}', [DesenvolvedorController::class, 'destroy'])->name('desenvolvedores.destroy'); // destroy desenvolvedores