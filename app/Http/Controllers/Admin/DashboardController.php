<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard.dashboard');
    }

    public function dashboard_1()
    {
        return view('admin.dashboard.dashboard-1');
    }

    public function dashboard_2()
    {
        return view('admin.dashboard.dashboard-2');
    }

    public function dashboard_3()
    {
        return view('admin.dashboard.dashboard-3');
    }
}
