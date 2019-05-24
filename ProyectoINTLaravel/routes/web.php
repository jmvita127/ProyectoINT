<?php

Route::get('/index', 'IndexController@home');

Route::get('/cajaBlanca', 'CajaBlancaController@cajaBlanca');

Route::get('/consolas', 'ConsolaController@consolas');

Route::get('/equipos', 'EquiposController@equipos');

Route::get('/', function () {
    return view('welcome');
});
