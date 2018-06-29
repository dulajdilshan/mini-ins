<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CashierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('auth_cashier');
    }

    public function viewDash()
    {
        return view('cashier.dash');
    }

    public function viewLoanObtainForm()
    {
        return view('cashier.cashier_obtain_loan');

    }

}
