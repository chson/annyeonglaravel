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

/**
 * ORIGIN GET CODE START
 */ 
// Route::get('/', function () {
//     return view('welcome');
// });
/**
 * ORIGIN GET CODE END
 */ 
Route::get('/', function() {
	$items = ['apple', 'banana', 'tomato'];

	return view('welcome', ['items'=>$items]);
});