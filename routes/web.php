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

Auth::routes();

Route::get('/', 'WelcomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

/**
 * articles
 */

Route::resource('articles', 'ArticlesController');

/**
 * auth
 */

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

Route::get('auth/logout', function() {
	auth()->logout();

	return 'bye';
});

Route::get('protected', ['middleware' => 'auth', function() {
	return '어서오세요.'.auth()->user()->name;
}]);


// DB::listen(function ($query) {
// 	var_dump($query->sql);
// });