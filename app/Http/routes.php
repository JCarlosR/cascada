<?php

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/objetivos-empresa', 'HomeController@objectives');
Route::get('/objetivos-cobit-corporativos', 'HomeController@corporate');
Route::get('/objetivos-cobit-ti', 'HomeController@ti');
Route::get('/procesos-cobit', 'HomeController@processes');
