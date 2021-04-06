<?php

use Illuminate\Support\Facades\Route;

Route::get('wizard', function () {
    return view('welcome');
});
Route::get('/empresas','EmpresaController@index')->name('empresas');
Route::get('/empresas/{empresa}','EmpresaController@show');
Route::post('/empresas', 'EmpresaController@store');
Route::get('/','EmpresaController@registro');

//PASOS PARA EL REGISTRO
Route::get('/registro','EmpresaController@createStep1');
Route::post('/registro', 'EmpresaController@PostcreateStep1');
Route::get('/registro2', 'EmpresaController@createStep2');
Route::post('/registro2', 'EmpresaController@PostcreateStep2');
Route::get('/registro3', 'EmpresaController@createStep3');
Route::post('/registro3', 'EmpresaController@PostcreateStep3');
Route::get('/registro4', 'EmpresaController@createStep4');
Route::post('/registro4', 'EmpresaController@PostcreateStep4');
Route::get('/registro5', 'EmpresaController@createStep5');
Route::post('/registro5', 'EmpresaController@PostcreateStep5');
Route::get('/registro6', 'EmpresaController@createStep6');
Route::post('/registro6', 'EmpresaController@PostcreateStep6');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
