<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DealController extends Controller
{
    public function index()
    {
        // Get products with discounts
        $deals = Product::whereNotNull('discounted_price')
            ->where('discounted_price', '<', 100)
            ->latest()
            ->paginate(12);
            
        return view('deals.index', compact('deals'));
    }
} 