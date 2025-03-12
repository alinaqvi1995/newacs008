<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function addToWishlist(Request $request)
    {
        if (!Auth::check()) {
            return response()->json(['error' => 'Login required'], 401);
        }

        $exists = Wishlist::where('user_id', Auth::id())->where('product_id', $request->product_id)->exists();

        if ($exists) {
            return response()->json(['message' => 'Already in wishlist'], 409);
        }

        Wishlist::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id
        ]);

        return response()->json(['message' => 'Added to wishlist'], 200);
    }

    public function removeFromWishlist($id)
    {
        Wishlist::where('user_id', Auth::id())->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Removed from wishlist');
    }
}
