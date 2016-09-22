<?php

Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/uno', 'HomeController@objectives');
Route::get('/dos', 'HomeController@corporate');
Route::get('/tres', 'HomeController@ti');
Route::get('/cuatro', 'HomeController@processes');

// Objectives
Route::get('/objectives', 'ObjectiveController@index');
Route::post('/objectives', 'ObjectiveController@store');
Route::delete('/objectives', 'ObjectiveController@destroy');
Route::put('/objectives', 'ObjectiveController@update');