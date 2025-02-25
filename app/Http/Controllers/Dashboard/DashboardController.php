<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function edit()
    {
        return view('dashboard.pages.index');
    }
    public static function login()
    {
        return view('dashboard.auth.login');
    }

    public static function dashboard()
    {
        return view('dashboard.pages.index');
    }

    public static function orders()
    {
        return view('dashboard.orders.index');
    }

    public static function addProduct()
    {
        return view('dashboard.products.add');
    }
}