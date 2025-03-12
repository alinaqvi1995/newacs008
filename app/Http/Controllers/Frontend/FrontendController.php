<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Wishlist;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::take(4)->get();
        $categories = Category::where('status', 1)->get();
        return view('frontend.pages.index', compact('products', 'categories'));
    }
    public function wishlist()
    {
        $wishlists = Wishlist::where('user_id', auth()->id())->with('product')->get();
        return view('frontend.pages.wishlist', compact('wishlists'));
        // return view('frontend.pages.wishlist');
    }
    public function products(Request $request)
    {
        $query = Product::query();
    
        // Apply search filter
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }
    
        // Apply price range filter
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }
        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }
    
        // Apply category filter
        if ($request->filled('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('id', $request->category);
            });
        }
    
        // Apply sorting
        if ($request->filled('sort_by')) {
            if ($request->sort_by == 'price_low_high') {
                $query->orderBy('price', 'asc');
            } elseif ($request->sort_by == 'price_high_low') {
                $query->orderBy('price', 'desc');
            } else {
                $query->latest(); // Default to latest products
            }
        } else {
            $query->latest();
        }
    
        $products = $query->get();
        $categories = Category::where('status', 1)->withCount('products')->get();
    
        // dd($products->toArray());
        
        if ($request->ajax()) {
            return view('frontend.partials.product_list', compact('products', 'categories'));
        } else {
            return view('frontend.pages.products.index', compact('products', 'categories'));
        }
    }
    
    public function productsdetail($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('frontend.pages.products.product-detail',compact( 'product'));
    }
    
    public function my_cart()
    {
        $cartItems = Cart::where('user_id', auth()->id())->with('product')->get();
        return view('frontend.pages.cart', compact('cartItems'));
    }
}
