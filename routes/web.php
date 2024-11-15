<?php

use App\Http\Controllers\ButacaController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/',[ButacaController::class, 'index'])->name('index');
