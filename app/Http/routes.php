<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use sisVentas\Categoria;
use sisVentas\User;

Route::get('/', function () {

    $users = User::all();

    return view('welcome',compact('users'));

});

Route::get('api/user', function () {

    return Datatables::eloquent(User::query())->make(true);

});

Route::resource('almacen/categoria','CategoriaController');
