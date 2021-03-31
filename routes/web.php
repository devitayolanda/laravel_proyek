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
Route::get('/home', 'App\Http\Controllers\HomeController@user')->name('home');

Route::get('/', function(){
    return redirect('login');
});

Route :: get ('/logout', 'App\Http\Controllers\HomeController@logout')->name('logout');
Route :: get ('/stickynote', 'App\Http\Controllers\stickynoteController@index')->name('stickynote');
Route :: get ('/todolist', 'App\Http\Controllers\todolistController@index')->name('todolist');
Route :: get ('/mywall', 'App\Http\Controllers\mywallController@index')->name('mywall');