<?php

Route::get('/index', 'IndexController@home');

Route::get('/cajaBlanca', 'CajaBlancaController@cajaBlanca');

Route::get('/consolas', 'ConsolaController@consolas');

Route::get('/equipos', 'EquiposController@equipos');

Route::get('/quienesSomos', 'QuienesSomosController@quienesSomos');

Route::get('/registro', 'RegistroController@registro');

Route::get('/login', 'LoginController@login');

Route::get('/', function () {
    return view('welcome');
});
