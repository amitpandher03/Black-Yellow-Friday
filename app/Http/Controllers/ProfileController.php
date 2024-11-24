<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user()->load(['wishlist.product', 'cart.product']);
        return view('profile.index', compact('user'));
    }
} 