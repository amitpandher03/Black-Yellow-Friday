<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold">
                Shopping <span class="text-primary">Cart</span>
            </h1>
            <a href="{{ route('products.index') }}" class="btn btn-outline btn-primary">
                Continue Shopping
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Cart Items -->
            <div class="lg:col-span-2 space-y-4">
                @forelse($cartItems as $item)
                    <div class="card bg-base-100 shadow-xl">
                        <div class="card-body flex flex-row items-center">
                            @if(Storage::exists($item->product->image))
                                <img src="{{ Storage::url($item->product->image) }}" 
                                    class="w-24 h-24 object-cover rounded-xl" />
                            @else
                                <img src="{{  $item->product->image  }}" 
                                    class="w-24 h-24 object-cover rounded-xl" />
                            @endif
                            <div class="flex-1 ml-4">
                                <h3 class="card-title text-primary">{{ $item->product->name }}</h3>
                                <p class="text-gray-400">${{ number_format($item->product->discounted_price, 2) }}</p>
                                <div class="flex items-center gap-4 mt-4">
                                    <form action="{{ route('cart.update', $item) }}" method="POST" class="flex items-center gap-2">
                                        @csrf
                                        @method('PUT')
                                        <label class="text-sm">Qty:</label>
                                        <select name="quantity" class="select select-bordered select-sm w-20"
                                                onchange="this.form.submit()">
                                            @for($i = 1; $i <= 10; $i++)
                                                <option value="{{ $i }}" @selected($i == $item->quantity)>
                                                    {{ $i }}
                                                </option>
                                            @endfor
                                        </select>
                                    </form>
                                    <form action="{{ route('cart.destroy', $item) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-ghost btn-sm text-error">Remove</button>
                                    </form>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="font-bold text-primary">
                                    ${{ number_format($item->product->discounted_price * $item->quantity, 2) }}
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-8">
                        <p class="text-gray-400">Your cart is empty</p>
                        <a href="{{ route('products.index') }}" class="btn btn-primary mt-4">
                            Browse Products
                        </a>
                    </div>
                @endforelse
            </div>

            <!-- Order Summary -->
            @if($cartItems->count() > 0)
                <div class="card bg-base-100 shadow-xl h-fit">
                    <div class="card-body">
                        <h2 class="card-title text-primary">Order Summary</h2>
                        <div class="space-y-4 mt-4">
                            <div class="flex justify-between">
                                <span>Subtotal</span>
                                <span>${{ number_format($subtotal, 2) }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Shipping</span>
                                <span>Free</span>
                            </div>
                            <div class="divider"></div>
                            <div class="flex justify-between font-bold">
                                <span>Total</span>
                                <span>${{ number_format($subtotal, 2) }}</span>
                            </div>
                        </div>
                        <div class="mt-6 space-y-2">
                            <button class="btn btn-primary w-full" disabled>
                                Sign in to Continue
                            </button>
                            <p class="text-xs text-center text-gray-400">
                                Checkout functionality coming soon!
                            </p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-app-layout> 