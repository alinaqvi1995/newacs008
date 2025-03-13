<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\User;

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

    public static function wishlist()
    {
        $wishlists = Wishlist::where('user_id', auth()->id())->with('product')->get();
        return view('dashboard.pages.wishlists', compact('wishlists'));
    }

    public static function customers()
    {
        $customers = User::where('role', 'customer')->get();
        return view('dashboard.pages.customers', compact('customers'));
    }
}