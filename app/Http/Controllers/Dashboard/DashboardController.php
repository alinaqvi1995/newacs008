<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\User;
use App\Models\Order;

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
        $customers = User::with('orders')->where('role', 'customer')->get();
        return view('dashboard.pages.customers', compact('customers'));
    }

    public function getCustomerOrders($id)
    {
        $orders = Order::where('user_id', $id)
            ->with('orderItems.product')
            ->get()
            ->flatMap(function ($order) {
                return $order->orderItems->map(function ($item) {
                    return [
                        'product_name' => $item->product->name ?? 'Unknown Product',
                        'quantity' => $item->quantity,
                        'image' => asset($item->product->image ?? 'default.png'),
                        'price' => $item->price,
                        'rating' => $item->product->rating ?? 0,
                        'total_purchases' => $item->product->total_purchases ?? 0,
                    ];
                });
            });

        return response()->json([
            'success' => true,
            'orders' => $orders,
        ]);
    }

}