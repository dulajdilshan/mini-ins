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

//Manager Controller
Route::get('/manager_dash','ManagerController@viewDash');
Route::get('/manager_obtain_loan','ManagerController@viewApplyLoanForm');
Route::get('/manager_approve_loan_list','ManagerController@viewApproveLoanList');
Route::get('/manager_edit_loan_list','ManagerController@viewEditLoanList');
Route::get('/manager_view_customers','ManagerController@viewCustomers');
Route::get('/manager_view_guarantors','ManagerController@viewGuarantors');
Route::get('/manager_approve_loan/{id}','ManagerController@viewApproveLoan');
Route::get('/manager_edit_loan/{id}','ManagerController@viewEditLoan');


//Cashier controller
Route::get('/cashier_dash','CashierController@viewDash');
Route::get('/cashier_obtain_loan','CashierController@viewLoanObtainForm');
Route::get('/cashier_view_customers','CashierController@viewCustomers');
Route::get('/cashier_view_guarantors','CashierController@viewGuarantors');
Route::get('/cashier_payment','CashierController@viewPayment');

//Other
Route::get('/blocked',function (){
    return view('blocked');
});
