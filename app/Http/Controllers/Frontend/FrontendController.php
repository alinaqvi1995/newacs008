<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::take(4)->get();
        return view('frontend.pages.index', compact('products'));
    }
    public function wishlist()
    {
        return view('frontend.pages.wishlist');
    }
    public function products(Request $request)
    {
        $products = Product::get();
        $categories = Category::where('status', 1)->withCount('products')->get();

        if ($request->ajax()) {
            return view('frontend.partials.product_list', compact('products', 'categories'));
        } else {
            return view('frontend.pages.products.index', compact('products', 'categories'));
        }
    }
    public function productsdetail()
    {
        return view('frontend.pages.products.product-detail');
    }
}
