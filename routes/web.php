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
//Route::resource('projects', 'ProjectController')->except(['index', 'show']);

Route::view('/home','home')->name('home');

Route::view('/about', 'about')->name('about');



Route::get('/portafolio', 'ProjectController@index')->name('projects.index');

Route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');

Route::get('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');

Route::post('/portafolio', 'ProjectController@store')->name('projects.store');

Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');




Route::view('/contacto', 'contact')->name('contact');

Route::post('contact', 'MessageController@store')->name('messages.store');


/*Route::get('/', function () {
    return view('create');
});
*/