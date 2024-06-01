<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;
class ThankyouController extends Controller
{
    public function show(Order $order)
    {
        // Suppose you have logic to fetch the order data here
        $items = Cart::instance('cart')->content(); // Get cart items
    
        // Check if $items is not null
        if ($items !== null) {
            return view('thankyou', ['items' => $items]);
        } else {
            // Handle the case where $items is null
            // For example, you can return an empty array
            return view('thankyou', ['items' => []]);
        }
        return view('thankyou', ['order' => $order]);
    }

    
}
