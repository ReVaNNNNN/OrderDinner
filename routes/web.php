<?php

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

// use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/wall', function () {
    return view('wall');
})->name('wall');

// Route::get('/wall', 'Controller@wall')->name('wall');

// Route::view('/wall-of-fame', 'wall_of_fame', ['name' => 'wall']);