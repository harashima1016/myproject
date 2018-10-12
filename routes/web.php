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



Auth::routes();

Route::group(['middleware' => ['web', 'auth']], function(){
  Route::get('/', function () {
      return view('welcome');
  });

  Route::get('/home', function() {
    if (Auth::user()->admin == 0) {
      return view('home');
    } else {
      $users['users'] = \App\User::all();
      return view('adminhome', $users);
    }
    });

});



// Route::get('/home', 'HomeController@index')->name('home');
//
// //9/20追記
// Route::get('admin_area', ['middleware' => 'admin', function () {
//     //
// }]);
//
// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');
//
// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');
