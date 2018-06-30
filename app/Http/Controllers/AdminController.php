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
}
