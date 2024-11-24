<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold">
                My <span class="text-primary">Wishlist</span>
            </h1>
            <a href="{{ route('products.index') }}" class="btn btn-outline btn-primary">
                Continue Shopping
            </a>
        </div>

        @if(session('success'))
            <div class="alert alert-success mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($wishlistItems as $product)
                <x-product-card :product="$product" />
            @empty
                <div class="col-span-full text-center py-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                    <h3 class="text-lg font-semibold text-gray-400">Your wishlist is empty</h3>
                    <p class="text-gray-400 mt-2">Save items you'd like to buy later</p>
                    <a href="{{ route('products.index') }}" class="btn btn-primary mt-4">
                        Browse Products
                    </a>
                </div>
            @endforelse
        </div>

        <div class="mt-8">
            {{ $wishlistItems->links() }}
        </div>
    </div>
</x-app-layout> 