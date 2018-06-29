<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function viewDash()
    {
        return view('manager.dash');
    }
}
