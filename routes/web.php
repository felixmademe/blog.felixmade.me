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

Route::get( '/', 'LandingController' );

Route::get('inloggning', 'Auth\LoginController@showLoginForm')->name( 'login-form' );
Route::post('login', 'Auth\LoginController@login')->name( 'login' );
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get( 'om/bloggen', function()
{
    return view( 'about.blog' );
} )->name( 'about.blog' );

Route::get( 'om/mig', function()
{
    return view( 'about.me' );
} )->name( 'about.me' );

Route::group( [ 'middleware' => 'auth' ], function()
{
    Route::get( 'inlägg/skapa', 'PostController@create' )->name( 'posts.create' );
    Route::get( 'inlägg/{id}/visa', 'PostController@show' )->name( 'posts.show' );
    Route::get( 'inlägg/{id}/redigera', 'PostController@edit' )->name( 'posts.edit' );
    Route::post( 'inlägg/lagra', 'PostController@store' )->name( 'posts.store' );
    Route::patch( 'inlägg/{id}', 'PostController@update' )->name( 'posts.update' );
    Route::delete( 'inlägg/{id}', 'PostController@destroy' )->name( 'posts.destroy' );
    Route::get( 'profil', 'ShowProfile' )->name( 'user.profile' );
});

Route::get( 'inlägg', 'PostController@index' )->name( 'posts.index' );
Route::get( 'inlägg/{slug}', 'PostController@display' )->name( 'posts.display' );
