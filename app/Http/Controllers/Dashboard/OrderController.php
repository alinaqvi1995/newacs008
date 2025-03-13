<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        $cartItems = Cart::where('user_id', $request->user_id)->get();
        if ($cartItems->isEmpty()) {
            return response()->json(['message' => 'Cart is empty'], 400);
        }

        $totalPrice = 0;
        foreach ($cartItems as $cart) {
            $totalPrice += $cart->quantity * $cart->price;
        }
        $order = Order::create([
            'user_id' => $request->user_id,
            'total_price' => $totalPrice,
            'status' => 'pending',
        ]);

        foreach ($cartItems as $cart) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cart->product_id,
                'quantity' => $cart->quantity,
                'price' => $cart->price,
            ]);
        }

        // Clear Cart
        Cart::where('user_id', $request->user_id)->delete();

        return response()->json(['message' => 'Order placed successfully', 'order' => $order]);
    }

    public function updateStatus(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'status' => 'required|in:confirmed,pending,shipped,delivered,canceled,completed',
        ]);

        $order = Order::findOrFail($request->order_id);

        if ($request->status === 'completed') {
            // Reduce product quantity
            foreach ($order->orderItems as $item) {
                $product = Product::find($item->product_id);
                if ($product && $product->quantity >= $item->quantity) {
                    $product->quantity -= $item->quantity;
                    $product->save();
                } else {
                    return response()->json(['message' => 'Insufficient stock for ' . $product->name], 400);
                }
            }
        } elseif ($order->status === 'completed' && $request->status === 'canceled') {
            // Restock product if order is canceled after confirmation
            foreach ($order->orderItems as $item) {
                $product = Product::find($item->product_id);
                if ($product) {
                    $product->quantity += $item->quantity;
                    $product->save();
                }
            }
        }

        // Update status
        $order->status = $request->status;
        $order->save();

        return response()->json(['message' => 'Order status updated successfully']);
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);

        // If order was completed, restock products before deleting
        if ($order->status === 'completed') {
            foreach ($order->orderItems as $item) {
                $product = Product::find($item->product_id);
                if ($product) {
                    $product->quantity += $item->quantity;
                    $product->save();
                }
            }
        }

        // Delete order and its items
        $order->orderItems()->delete();
        $order->delete();

        return response()->json(['message' => 'Order deleted successfully']);
    }
}