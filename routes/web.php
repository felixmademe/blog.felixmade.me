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

use App\Http\Controllers\AboutMe;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ShowProfile;

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get( '/', LandingController::class );

Route::get('inloggning', [LoginController::class, 'showLoginForm'])->name( 'login-form' );
Route::post('login', [LoginController::class, 'login'])->name( 'login' );
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get( 'om/bloggen', function()
{
    return view( 'about.blog' );
} )->name( 'about.blog' );

Route::get( 'om/mig', AboutMe::class)->name( 'about.me' );

Route::group( [ 'middleware' => 'auth' ], function()
{
    Route::get( 'inlägg/skapa', [PostController::class, 'create'] )->name( 'posts.create' );
    Route::get( 'inlägg/{id}/visa', [PostController::class, 'show'] )->name( 'posts.show' );
    Route::get( 'inlägg/{id}/redigera', [PostController::class, 'edit'] )->name( 'posts.edit' );
    Route::post( 'inlägg/lagra', [PostController::class, 'store'] )->name( 'posts.store' );
    Route::patch( 'inlägg/{id}', [PostController::class, 'update'] )->name( 'posts.update' );
    Route::delete( 'inlägg/{id}', [PostController::class, 'destroy'] )->name( 'posts.destroy' );
    Route::get( 'profil', [ShowProfile::class] )->name( 'user.profile' );
});

Route::get( 'inlägg', [PostController::class, 'index'] )->name( 'posts.index' );
Route::get( 'inlägg/{slug}', [PostController::class, 'display'] )->name( 'posts.display' );
