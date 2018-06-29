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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@viewDash')->name('home');


// Admin Controller
Route::get('/admin_dash','AdminController@viewAdminDash');


//Cashier controller
Route::get('/cashier_dash','CashierController@viewDash');
Route::get('/cashier_obtain_loan','CashierController@viewLoanObtainForm');
Route::get('/cashier_view_customers','CashierController@viewCustomers');
Route::get('/cashier_view_guarantors','CashierController@viewGuarantors');

//Other
Route::get('/blocked',function (){
    return view('blocked');
});
