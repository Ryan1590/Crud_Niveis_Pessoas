<?php

use App\Http\Controllers\DesenvolvedorController;
use App\Models\Desenvolvedores;
use App\Models\Niveis;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('desenvolvedores', [DesenvolvedorController::class, 'index']); //lista devs
Route::get('desenvolvedor/create', [DesenvolvedorController::class, 'create']); // tela create
Route::post('desenvolvedores', [DesenvolvedorController::class, 'store'])->name('desenvolvedores.store'); // create desenvolvedores