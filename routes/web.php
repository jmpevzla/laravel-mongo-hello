<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostresController;
use App\Http\Controllers\AnimalController;

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

Route::get('/postres', [PostresController::class, "index"]);

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/animal')->group(function () {
    Route::get('add', 'AnimalController@create')->name('animal.add');
    Route::post('add', 'AnimalController@store')->name('animal.store');
    Route::get('', 'AnimalController@index')->name('animal.index');
    Route::get('edit/{id}', 'AnimalController@edit')->name('animal.edit');
    Route::post('edit/{id}', 'AnimalController@update')->name('animal.update');
    Route::delete('{id}', 'AnimalController@destroy')->name('animal.delete');
});
