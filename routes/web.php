<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

Route::get('/', HomeController::class);

Route::controller(CursoController::class)->group(function () {
    Route::resource('cursos','index');
    Route::resource('cursos\crear','create');
    Route::resource('cursos\{curso}','show');    
});

