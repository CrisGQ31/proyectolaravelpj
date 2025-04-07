<?php

use App\Http\Controllers\CursoLaravelController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Suscribed;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [CursoLaravelController::class, 'getNames'])->name('home');

Route::get('/suma/{A}/{B}', [CursoLaravelController::class, 'suma'])->name('suma');
Route::get('/resta/{A}/{B}', [CursoLaravelController::class, 'resta'])->name('resta');
Route::get('/multiplicacion/{A}/{B}', [CursoLaravelController::class, 'multiplicacion'])->name('multiplicacion');
Route::get('/division/{A}/{B}', [CursoLaravelController::class, 'division'])->name('division');

Route::get('suscribed', function (){
    return 'Bienvenido suscrito';
})->middleware(Suscribed::class);


Route::view('ejemplo','example',['name' => 'Cristhian'])->name('example');

Route::get('/ejemplo2',[CursoLaravelController::class, 'index'])->name('index');


Route::controller(PostController::class)->group(function (){
    Route::get('posts', 'index')->name('posts.index');
    Route::get('/posts/create', 'create')->name('posts.create');
    Route::post('/posts/store', 'store')->name('posts.store');      //vista "store"
});
