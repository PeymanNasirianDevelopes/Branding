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
Route::get('/', '\App\Http\Controllers\IndexController@index');
Route::get('/ss', '\App\Http\Controllers\IndexController@country');

Auth::routes();

Route::get('/user_panel', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user_panel/edit', [App\Http\Controllers\HomeController::class, 'edit_profile']);
Route::put('/user_panel/edit', [App\Http\Controllers\HomeController::class, 'update']);
Route::get('/user_panel/change_password', [App\Http\Controllers\HomeController::class, 'change_password']);
Route::get('/user_panel/add_advertising', [App\Http\Controllers\HomeController::class, 'advertising'])->name('add.advertising');


Route::post('change-password',[App\Http\Controllers\ChangePasswordController::class ,'store'])->name('change.password');

Route::get('/verifyemail/{token}', [App\Http\Controllers\Auth\RegisterController::class,'verify']);

Route::get('google', function () {
    return view('auth.googleAuth');
});

Route::get('auth/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [App\Http\Controllers\Auth\LoginController::class,'handleGoogleCallback']);
Route::get('/auth/redirect/{provider}',[App\Http\Controllers\SocialController::class ,'redirect']);
Route::get('/callback/{provider}', [App\Http\Controllers\SocialController::class,'callback']);

