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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<<<<<<< HEAD

Route::get('/cities', ['middleware'=>'auth', 'uses'=>'App\Http\Controllers\CityController@cities'])->name('cities');

Route::get('/profile', ['middleware'=>'auth', 'uses'=>'App\Http\Controllers\ProfileController@profile'])->name('profile');

Route::get('/contact', ['middleware'=>'auth', 'uses'=>'App\Http\Controllers\HomeController@contact'])->name('contact');

Route::get('/mobile', ['middleware'=>'auth', 'uses'=>'App\Http\Controllers\HomeController@mobile'])->name('mobile');

Route::get('/aboutus', ['middleware'=>'auth', 'uses'=>'App\Http\Controllers\HomeController@aboutus'])->name('aboutus');

Route::get('/places', ['middleware'=>'auth', 'uses'=>'App\Http\Controllers\HomeController@places'])->name('places');
=======

Route::get('/cities', ['middleware'=>'auth', 'uses'=>'App\Http\Controllers\CityController@cities'])->name('cities');

Route::get('/profile', ['middleware'=>'auth', 'uses'=>'App\Http\Controllers\ProfileController@profile'])->name('profile');
>>>>>>> b7270e9534b9352448e9def5648a29ea898a5fd2
