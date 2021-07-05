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

Route::get('/','todoController@getHome');
Route::post('/add','todoController@postAdd')->name('add');
Route::post('/delete','todoController@postDelete')->name('delete');
Route::post('/edit','todoController@postEdit')->name('edit');
Route::get('/list', function () {
    $work=App\Todo::all()->toArray();
    var_dump($list);
});
