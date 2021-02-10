<?php

use Illuminate\Support\Facades\Route;

Route::get('wizard', function () {
    return view('welcome');
});
Route::get('/empresas/registro','EmpresaController@registro');
Route::get('/empresas','EmpresaController@index')->name('empresas');
Route::get('/empresas/{empresa}','EmpresaController@show');
Route::post('/empresas', 'EmpresaController@store');
Route::get('/','EmpresaController@registro');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
