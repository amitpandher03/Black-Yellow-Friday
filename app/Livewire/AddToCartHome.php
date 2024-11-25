<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cart;

class AddToCartHome extends Component
{
    public $product;
    public $quantity = 1;

    public function mount($product)
    {
        $this->product = $product;
    }

    public function addToCart()
   {
       if (!auth()->check()) {
           return redirect()->route('login');
       }
        $existingCart = Cart::where([
           'user_id' => auth()->id(),
           'product_id' => $this->product->id
       ])->first();
        if ($existingCart) {
           $existingCart->increment('quantity', $this->quantity);
       } else {
           Cart::create([
               'user_id' => auth()->id(),
               'product_id' => $this->product->id,
               'quantity' => $this->quantity
           ]);
       }
       $this->dispatch('cart-updated');
       $this->dispatch('notify', 'Added to cart!');
   }

    public function render()
    {
        return view('livewire.add-to-cart-home');
    }
}
