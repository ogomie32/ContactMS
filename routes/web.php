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

Route::get('/mail', function () {
    return view('mail');
});

// Route::get('/frequent', function () {
//     return view('contacts.frequent');
// });

Auth::routes();

Route::get('/contacts', 'ContactController@index');
Route::get('/contacts/create', 'ContactController@create');
Route::get('/contacts/{contact}', 'ContactController@show');
Route::post('/contacts', 'ContactController@store');
Route::post('/mail', 'ContactController@mailto');
Route::get('/contacts/{contact}/edit', 'ContactController@edit')->name('contacts.edit');
Route::PUT('/contacts/{contact}', 'ContactController@update')->name('contacts.update');

Route::get('/favorite', 'ContactController@display');
Route::post('/favorite/{id}', 'ContactController@favorite');
Route::get('/unfavorite/{id}', 'ContactController@unfavorite');

Route::get('/payments/create', 'PaymentsController@create')->middleware('auth');
Route::post('/payments', 'PaymentsController@store')->middleware('auth');
