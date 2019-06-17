<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', 'ProdutosController@index');

Route::get('/produtos/novo', 'ProdutosController@create');
Route::post('/produtos/cadastrar', 'ProdutosController@store');

Route::get('/produtos/{url}', 'ProdutosController@show');

Route::get('/produtos/editar/{url}', 'ProdutosController@edit');
Route::put('/produtos/atualizar/{url}', 'ProdutosController@update');

Route::get('/produtos/excluir/{url}', 'ProdutosController@destroy');