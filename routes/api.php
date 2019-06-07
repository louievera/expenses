<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Auth::routes();

Route::group(['middleware' => 'auth'],function(){
	
});

Route::get('/roles','api\UserController@getRoles');
Route::get('/users','api\UserController@getUsers');
Route::get('/expenses','api\ExpenseController@getExpenses');

Route::get('/expensesCategory','api\ExpenseController@geExpensesCategory');
Route::post('/saveExpenses','api\ExpenseController@saveExpenses');





