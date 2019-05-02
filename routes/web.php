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
Route::get('/', 'WelcomeController@index');
Route::resource('articles', 'ArticlesController');

Route::get('auth/login', function() {
	$credentials = [
		'email'=>'john@example.com',
		'password'=>'secret'
	];

	if(!auth()->attempt($credentials)) {
		return '로그인 정보가 정확하지 않습니다.';
	}

	return redirect('protected');
});

Route::get('protected', ['middleware' => 'auth', function() {
	return '어서오세요.'.auth()->user()->name;
}]);

Route::get('auth/logout', function() {
	auth()->logout();

	return 'bye';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
