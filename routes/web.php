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


Route::get('verify/resend', 'Auth\TwoFactorController@resend')->name('verify.resend');
Route::resource('verify', 'Auth\TwoFactorController')->only(['index', 'store']);

Route::group([
    'prefix' => 'admin', 
    'as' => 'admin.',
    'namespace' => 'Admin', 
    'middleware' => ['auth', 'twofactor','admin']
], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('users','UserController');
});

Route::group([ 
    'middleware' => ['auth', 'twofactor']
], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});
