<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PecasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


    Route::prefix('pecas.blade.php')
    ->middleware(['auth'])
    ->controller(PecasController::class)
    ->group(function () {
        Route::get('/pecas/{name}', function($name){return view('pecas',['nomePecas'=>$name]);
        Route::get('/pecas/{name}', function($name){return view('pecas',['anoPecas'=>$name]);
        Route::get('/pecas/{name}', function($name){return view('pecas',['descricaoPecas'=>$name]);
        Route::get('/pecas/{name}', function($name){return view('pecas',['valorPecas'=>$name]);

        Route::get('/' , 'name')->name('pecas.name');
        Route::get('/novo', 'create')->name('pecas.create');
        Route::get('/editar/{id}', 'edit')->name('pecas.edit');
        Route::post('/deletar/{id}', 'destroy')->name('pecas.destroy');

});


