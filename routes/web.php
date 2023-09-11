<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\AdminController;

Route::get('/', 'PeliculasController@index');
Route::get('/inicio', 'PeliculasController@index');

Route::get('nosotros', function () {
    return ('Soy Josué y esto lo he forkeado yo');
});

Route::get('/adminjosue/clientes', 'AdminController@clientes');
Route::get('/adminjosue/crear', 'AdminController@create');
Route::get('/adminjosue/cartelera', 'AdminController@cartelera');

Route::resource('adminjosue', 'AdminController');
Route::resource('peliculas', 'PeliculasController');
Route::resource('caratulas', 'PeliculasController');

Route::get('contacto', [ContactoController::class, 'index'])->name('contacto.index');
Route::post('contacto', [ContactoController::class, 'store'])->name('contacto.store');
Route::get('/peliculas/añadircarrito/{id}', [ App\Http\Controllers\CarritoController::class, 'añadirCarrito' ])->name('peliculas.añadircarrito');
Route::get('/vercarrito', function () {
    return view('peliculas.vercarrito');
});

Route::get('butaca', 'CarritoController@butaca');
Route::get('checkout', 'CarritoController@checkout');

Route::get('/borrarcarrito', function () {
    session()->forget('carrito');
    return view('peliculas.vercarrito');
    });

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', 'Auth\LoginController@logout');

