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
	if(Auth::check()){
		return redirect('/home');
	}
    return view('auth/login');
});

Auth::routes();


Route::group(['middleware'=>'auth'], function(){
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/roles', 'UsersController@viewRoles');
	Route::get('/users', 'UsersController@viewUsers');
	Route::get('/expenses', 'ExpensesController@viewExpenses');
	Route::get('/expensesCategory', 'ExpensesController@viewExpensesCategory');




});
