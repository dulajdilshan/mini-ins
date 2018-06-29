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


// Admin Controller
Route::get('/admin_dash','AdminController@viewAdminDash');


//Cashier controller
Route::get('/cashier_dash','CashierController@viewDash');
Route::get('/cashier_obtain_loan','CashierController@viewLoanObtainForm');
Route::get('/cashier_customers','CashierController@viewDash');
Route::get('/cashier_guarantors','CashierController@viewDash');

//Other
Route::get('/blocked',function (){
    return view('blocked');
});
