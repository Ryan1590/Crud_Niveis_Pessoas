<?php

use App\Http\Controllers\DesenvolvedorController;
use App\Http\Controllers\NiveisController;
use App\Models\Desenvolvedores;
use App\Models\Niveis;
use Illuminate\Support\Facades\Route;


Route::get('/', [NiveisController::class, 'index'])->name('niveis.index'); // tela que lista os niveis
Route::get('create/niveis', [NiveisController::class, 'create']); // tela de criar os niveis
Route::post('/', [NiveisController::class, 'store'])->name('niveis.store'); // rota que cria os niveis
Route::delete('niveis/{id}', [NiveisController::class, 'destroy'])->name('niveis.destroy'); // rota que deleta os niveis

/*Routes de desenvolvedores*/ 
Route::get('desenvolvedores', [DesenvolvedorController::class, 'index'])->name('desenvolvedores.index');  // tela que lista os desenvolvedores
Route::get('create/desenvolvedores', [DesenvolvedorController::class, 'create']); // tela de criar os desenvolvedores
Route::post('desenvolvedores', [DesenvolvedorController::class, 'store'])->name('desenvolvedores.store'); // rota que cria os desenvolvedores
Route::delete('desenvolvedores/{id}', [DesenvolvedorController::class, 'destroy'])->name('desenvolvedores.destroy'); // rota que deleta os desenvolvedores

