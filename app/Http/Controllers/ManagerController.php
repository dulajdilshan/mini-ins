<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('auth_manager');
    }

    public function viewDash()
    {
        return view('manager.dash');
    }

    public function viewApplyLoanForm()
    {
        return view('manager.manager_apply_loan');
    }

    public function viewApproveLoanList()
    {
        return view('manager.manager_approve_loan_list');
    }

    public function viewEditLoanList()
    {
        return view('manager.manager_edit_loan_list');
    }

    public function viewCustomers()
    {
        return view('manager.manager_customers');
    }

    public function viewGuarantors()
    {
        return view('manager.manager_guarantors');
    }

    public function viewApproveLoan()
    {
        return view('manager.manager_approve_loan');
    }

    public function viewEditLoan()
    {
        return view('manager.manager_edit_loan');
    }
}
