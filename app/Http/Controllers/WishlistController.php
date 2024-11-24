<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlistItems = auth()->user()->wishlisted()->paginate(12);
        return view('wishlist.index', compact('wishlistItems'));
    }

    public function toggle(Product $product)
    {
        $wishlist = Wishlist::where([
            'user_id' => auth()->id(),
            'product_id' => $product->id
        ])->first();

        if ($wishlist) {
            $wishlist->delete();
            $message = 'Product removed from wishlist';
        } else {
            Wishlist::create([
                'user_id' => auth()->id(),
                'product_id' => $product->id
            ]);
            $message = 'Product added to wishlist';
        }

        return back()->with('success', $message);
    }
} 