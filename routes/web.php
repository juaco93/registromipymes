<?php

use Illuminate\Support\Facades\Route;

Route::get('/empresas/registro','EmpresaController@registro');
Route::get('/empresas','EmpresaController@index')->name('empresas');
Route::get('/empresas/{empresa}','EmpresaController@show');
Route::post('/empresas', 'EmpresaController@store');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
