<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/produtos', [\App\Http\Controllers\ProdutoController::class, 'index'])->name('prod.index');

Route::get('/produtos/add', [\App\Http\Controllers\ProdutoController::class, 'add'])->name('prod.add');

Route::post('/produtos/add', [\App\Http\Controllers\ProdutoController::class, 'salvar'])->name('prod.salvar');

Route::get('/produtos/editar/{id}', [\App\Http\Controllers\ProdutoController::class, 'editar'])->name('prod.editar');
Route::put('/produtos/editar/{id}', [\App\Http\Controllers\ProdutoController::class, 'salvarEdite'])->name('prod.salvarEdite');

Route::get('/produtos/exibir/{id}', [\App\Http\Controllers\ProdutoController::class, 'exibir'])->name('prod.exibir');

Route::get('/produtos/deletar/{id}', [\App\Http\Controllers\ProdutoController::class, 'deletar'])->name('prod.deletar');

// ANY aceita todos os métodos (get, post, put, etc...)
Route::any('/produtos/buscar', [\App\Http\Controllers\ProdutoController::class, 'buscar'])->name('prod.buscar');

Route::get('/', function () {
    return view('welcome');
});
