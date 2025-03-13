<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class SubscriberController extends Controller
{
    public function index(Request $request)
    {
        $subscribers = Subscriber::all();

        return view('dashboard.pages.subscriber', compact('subscribers'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        Subscriber::create(['email' => $request->email]);

        return response()->json(['message' => 'Subscription successful!']);
    }
}
