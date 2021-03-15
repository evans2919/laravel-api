<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//http://laravel-api.test/api/user?api_token=xxxxxxxxxxxxxxx

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function() {

    // Route::resource('/products/all', 'ProductsController');

    Route::get('/products/all', 'ProductsController@index')->name('Products-all');

    Route::get('/correo/basico', 'MailController@EnviarBasico')->name('correo-basico');

    Route::get('/correo/con-datos', 'MailController@EnviarConDatos')->name('correo-con-datos');

    Route::get('/correo/con-plantilla', 'MailController@EnviarPlantilla')->name('correo-con-plantilla');
    
});


Route::get('/welcome', function(){
    return response()->json(['data' => 'Bienvenidos', 'code' => 200]);
});

