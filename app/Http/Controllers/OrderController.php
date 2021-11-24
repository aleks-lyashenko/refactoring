<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function form() {
        $products = Product::all();
        dd($products);
        return view('maxmoll/order', compact('products'));
    }
}
