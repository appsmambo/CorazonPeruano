<?php

Route::get('/', array('as' => 'index', 'uses' => 'HomeController@getIndex'));
Route::get('/listaDeVideos', array('as' => 'listaVideos', 'uses' => 'HomeController@getlistaDeVideos'));
Route::post('/listaDeVideos', array('as' => 'acceso', 'uses' => 'HomeController@postlistaDeVideos'));
Route::get('/descargaVideo/{id}/{item}', array('as' => 'descarga', 'uses' => 'HomeController@getDescargaVideos'));
Route::get('/verVideo/{id}/{item}', array('as' => 'descarga', 'uses' => 'HomeController@getVerVideos'));

Route::post('/enviarDatos', array('as' => 'video', 'uses' => 'HomeController@postSubirVideo'));
Route::post('/tuDni', array('as' => 'validar', 'uses' => 'HomeController@postValidaTuDni'));
