<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/novo', 'App\Http\Controllers\ProdutosController@create');
Route::post('/produtos/novo', 'App\Http\Controllers\ProdutosController@store')->name('registrar_produto');
Route::get('/produto/ver/{id}', 'App\Http\Controllers\ProdutosController@show');
Route::get('/produto/editar/{id}', 'App\Http\Controllers\ProdutosController@edit');
Route::post('/produto/editar/{id}', 'App\Http\Controllers\ProdutosController@update')->name('alterar_produto');
Route::get('/produto/excluir/{id}', 'App\Http\Controllers\ProdutosController@delete');
Route::post('/produto/excluir/{id}', 'App\Http\Controllers\ProdutosController@destroy')->name('excluir_produto');