<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('auth_admin');
    }
    public function viewAdminDash()
    {
        return view('admin.dash');
    }

    public function viewAdminLoans()
    {
        return view('admin.admin_loans');
    }

    public function viewAdminBranches()
    {
        return view('admin.admin_branches');
    }

    public function viewAdminCentres()
    {
        return view('admin.admin_centres');
    }

    public function viewAdminCustomers()
    {
        return view('admin.admin_customers');
    }

    public function viewAdminManagers()
    {
        return view('admin.admin_managers');
    }

    public function viewAdminCashiers()
    {
        return view('admin.admin_cashiers');
    }

}
