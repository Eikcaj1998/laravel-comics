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

/* Route::get('/includes/{{id}}', function($id){
    $products = config('pasta');
    if (!is_numeric($id) || $id < 0 || $id >= count($products)){
        abort(404);
    }
    $product = $products[$id];
    return view('products.show',compact('product'));
});
 */