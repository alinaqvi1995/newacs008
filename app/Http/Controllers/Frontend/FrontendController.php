<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.pages.index');
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
