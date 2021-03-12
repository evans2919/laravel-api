<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');

    // echo Hash::make('edteam');

    // echo "<br> <br>";

    // echo bcrypt('secret');

    // echo "<br> <br>";

    // $cadena = 'Laravel';

    // echo md5($cadena);

    // echo "<br> <br>";

    // echo Crypt::encrypt($cadena);

    // echo "<br>";

    // // echo Crypt::decrypt($cadena);

    // echo "<br>";

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
