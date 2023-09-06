<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get(
    '/produtos',
    [\App\Http\Controllers\ProdutoController::class, 'index']
)
    ->name('produtos.index');
Route::get(
    '/produtos/create',
    [\App\Http\Controllers\ProdutoController::class, 'create']
)
    ->name('produtos.create');
Route::post(
    '/produtos',
    [\App\Http\Controllers\ProdutoController::class, 'store']
)
    ->name('produtos.store');
Route::get(
    '/produtos/{id}',
    [\App\Http\Controllers\ProdutoController::class, 'show']
)
    ->name('produtos.show');
Route::get(
    '/produtos/{id}/edit',
    [\App\Http\Controllers\ProdutoController::class, 'edit']
)
    ->name('produtos.edit');
Route::put(
    '/produtos/{id}',
    [\App\Http\Controllers\ProdutoController::class, 'update']
)
    ->name('produtos.update');
Route::delete(
    '/produtos/{id}',
    [\App\Http\Controllers\ProdutoController::class, 'destroy']
)
    ->name('produtos.destroy');
    Route::get('/produtos/pesquisa', [\App\Http\Controllers\ProdutoController::class, 'pesquisa'])->name('produtos.pesquisa');
    Route::get('/produtos/buscar', [\App\Http\Controllers\ProdutoController::class, 'buscarPorNome'])->name('produtos.buscar');




