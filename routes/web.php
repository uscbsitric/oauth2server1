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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
 * run php artisan migrate
 * run php artisan passport:install
 * */

Route::get('/simpleTest',
		   function()
		   {
			 //phpinfo();
	         $test1 = 'test value1';
	         $test2 = 'test value2';

	         return response()->json(['test1' => $test1,
	         		                  'test2' => $test2,
	         		                  'test3' => $test2
	                                 ]);
           }
          );
