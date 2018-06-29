<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewAdminDash()
    {
        return view('admin.branches_table');
    }
}
