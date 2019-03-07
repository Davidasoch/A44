<?php

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
});

Route::resource('car', 'CarController');

Route::get('personalizacion', 'PersonalizacionController@personalizar');

Route::post('personalizacion', 'PersonalizacionController@guardarpersonalizacion');

Route::get('idioma', 'IdiomaController@personalizar');

Route::post('idioma', 'IdiomaController@guardarpersonalizacion');

Route::resource('product', 'ProductController');

// Carrito ----

Route::bind('product', function($id){
    return App\Product::where('id',$id)->first();
});


Route::get('cart/show' , [
    'as' => 'cart-show',
    'uses' => 'CartController@show'
]);  

Route::get('cart/add/{product}', [
    'as' => 'cart-add',
    'uses' => 'cartController@add'
]);

Route::get('cart/delete/{product}',[
    'as' => 'cart-delete',
    'uses' => 'CartController@delete'
]);

Route::get('cart/trash', [
    'as' => 'cart-trash',
    'uses' => 'CartController@trash'
]);

Route::get('cart/update/{product}/{quantity}', [
    'as' => 'cart-update',
    'uses' => 'CartController@update'
]);

