<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('frontend.pages.index', compact('products'));
    }
    public function wishlist()
    {
        return view('frontend.pages.wishlist');
    }
    public function products()
    {
        return view('frontend.pages.products.index');
    }
    public function productsdetail()
    {
        return view('frontend.pages.products.product-detail');
    }
}
