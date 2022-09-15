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
    $title = 'home';
    return view('comics',compact('title'));
});
Route::get('/', function () {
    return view('header');
});
Route::get('/', function () {
    return view('jumbotron');
});
Route::get('/', function () {
    return view('main');
});
Route::get('/', function () {
    return view('footer');
});