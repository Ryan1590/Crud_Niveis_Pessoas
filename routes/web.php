<?php

use App\Http\Controllers\DesenvolvedorController;
use App\Models\Desenvolvedores;
use App\Models\Niveis;
use Illuminate\Support\Facades\Route;

Route::get('desenvolvedores', [DesenvolvedorController::class, 'index'])->name('desenvolvedores.index'); 
Route::get('create/desenvolvedores', [DesenvolvedorController::class, 'create']); // tela de create
Route::post('desenvolvedores', [DesenvolvedorController::class, 'store'])->name('desenvolvedores.store'); // rota metodo create desenvolvedores
Route::delete('desenvolvedores/{id}', [DesenvolvedorController::class, 'destroy'])->name('desenvolvedores.destroy'); // rota metodo destroy desenvolvedores

