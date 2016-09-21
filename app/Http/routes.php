<?php

Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/uno', 'HomeController@objectives');
Route::get('/dos', 'HomeController@corporate');
Route::get('/tres', 'HomeController@ti');
Route::get('/cuatro', 'HomeController@processes');
