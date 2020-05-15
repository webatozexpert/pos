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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'Frontend\FrontendController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>'auth'],function(){

    Route::prefix('users')->group(function(){
    Route::get('/view', 'Backend\UserController@view')->name('users.view');
    Route::get('/add', 'Backend\UserController@add')->name('users.add');
    Route::post('/store', 'Backend\UserController@store')->name('users.store');
    Route::get('/edit/{id}', 'Backend\UserController@edit')->name('users.edit');
    Route::post('/update/{id}', 'Backend\UserController@update')->name('users.update');
    Route::get('/delete/{id}', 'Backend\UserController@delete')->name('users.delete');
});
Route::prefix('profiles')->group(function(){
    Route::get('/view', 'Backend\profileController@view')->name('profile.view');
    Route::get('/edit', 'Backend\profileController@edit')->name('profile.edit');
    Route::post('/store', 'Backend\profileController@update')->name('profile.update');
    Route::get('/password/view', 'Backend\profileController@passwordView')->name('profile.password.view');
    Route::post('/password/update', 'Backend\profileController@passwordUpdate')->name('profile.password.update');
    
});


});




