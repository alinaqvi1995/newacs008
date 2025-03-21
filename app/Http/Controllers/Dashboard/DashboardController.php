<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

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
        $products = Product::all();
        $ordersTotal = Order::all();
        $orders = Order::with('user', 'orderItems.product')->latest()->get()->take(5);

        $totalSale = Order::with('orderItems')->get()->sum(function ($order) {
            return $order->orderItems->sum(function ($item) {
                return $item->price * $item->quantity;
            });
        });

        $totalStockValue = Product::sum(DB::raw('price * quantity'));

        $totalSale = number_format($totalSale, 2, '.', '');
        $totalStockValue = number_format($totalStockValue, 2, '.', '');
        // dd($products->toArray(), $ordersTotal->toArray(), $orders, $totalSale, $totalStockValue);
        return view('dashboard.pages.index', compact('orders', 'products', 'ordersTotal', 'totalSale', 'totalStockValue'));
    }

    public static function orders()
    {
        $orders = Order::with('user', 'orderItems.product')->latest()->paginate(10);
        return view('dashboard.orders.index', compact('orders'));
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