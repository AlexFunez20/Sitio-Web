<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'inicio')->name('inicio');
Route::view('/eventos', 'eventos')->name('eventos');
Route::view('/boletos', 'boletos')->name('boletos');
Route::view('/galeria', 'galeria')->name('galeria');
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/contacto', 'contacto')->name('contacto');
