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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'MessageController@home');

Route::post('/messages/create', 'MessageController@create');

Route::post('/messages/create', 'MessageController@store');

//Display all Messages
Route::get('/messages/all', 'MessageController@index');

Route::delete('/messages/all/{id}/delete', 'MessageController@delete');


Route::get('/profile', 'ProfileController@index')->name('profile');

Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');

Auth::routes();



// create a message
Route::get('/messages/create', 'MessageController@create');


// part of a tutorial unused in this project
// Route::get('/uploadfile','UploadFileController@index');
// Route::post('/uploadfile','UploadFileController@showUploadFile');
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/info', 'HomeController@info');
