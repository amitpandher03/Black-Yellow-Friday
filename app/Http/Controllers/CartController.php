<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;


class CartController extends Controller
{
    public function index()
    {
        $cartItems = auth()->user()->cart()->with('product')->get();
        $subtotal = $cartItems->sum(function($item) {
            return $item->product->discounted_price * $item->quantity;
        });
        
        return view('cart.index', compact('cartItems', 'subtotal'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $existingCart = Cart::where([
            'user_id' => auth()->id(),
            'product_id' => $request->product_id
        ])->first();

        if ($existingCart) {
            $existingCart->increment('quantity', $request->quantity);
        } else {
            Cart::create([
                'user_id' => auth()->id(),
                'product_id' => $request->product_id,
                'quantity' => $request->quantity
            ]);
        }

        return back()->with('success', 'Product added to cart');
    }

    public function update(Request $request, Cart $cart)
    {
        if ($cart->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $cart->update(['quantity' => $request->quantity]);
        return back()->with('success', 'Cart updated successfully');
    }

    public function destroy(Cart $cart)
    {
        if ($cart->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $cart->delete();
        return back()->with('success', 'Product removed from cart');
    }
}
