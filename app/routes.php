<?php

Route::get('/', array('as' => 'index', 'uses' => 'HomeController@getIndex'));

Route::post('/enviarDatos', array('as' => 'video', 'uses' => 'HomeController@postSubirVideo'));
Route::post('/tuDni', array('as' => 'validar', 'uses' => 'HomeController@postValidaTuDni'));
