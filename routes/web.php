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

Route::get('/dashboard', function () {
    return view('module.dashboard.dashboard',['',]);
});

Route::get('users','UserController@index')->name('user.index');

Route::group(['prefix' => '/profile'],function(){
    Route::get('/',function(){
        return view('module.profile.profile');
    });
    Route::get('/configuration',function(){
        return view('module.profile.configuration');
    });
});



Auth::routes();

