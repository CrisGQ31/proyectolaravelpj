<?php

use App\Http\Controllers\CursoLaravelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/suma/{A}/{B}', [CursoLaravelController::class, 'suma'])->name('suma');
Route::get('/resta/{A}/{B}', [CursoLaravelController::class, 'resta'])->name('resta');
Route::get('/multiplicacion/{A}/{B}', [CursoLaravelController::class, 'multiplicacion'])->name('multiplicacion');
Route::get('/division/{A}/{B}', [CursoLaravelController::class, 'division'])->name('division');


