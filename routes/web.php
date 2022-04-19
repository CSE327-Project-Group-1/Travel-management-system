<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|

|

:param request: it's a HttpResponse from user.
:type request: HttpResponse


*/


/*  creating a request to show home page in website 
*/
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
  /*this method is used to show the URL request of cities in page */

Route::get('/cities', ['middleware'=>'auth', 'uses'=>'App\Http\Controllers\CityController@cities'])->name('cities');

/*this method is used to show the URL request of profile in website*/
Route::get('/profile', ['middleware'=>'auth', 'uses'=>'App\Http\Controllers\ProfileController@profile'])->name('profile');
