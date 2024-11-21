<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        {{-- Header --}}
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">
                <span class="text-primary">Products</span> Catalog
            </h1>
            <a href="{{ route('products.create') }}" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add Product
            </a>
        </div>

        {{-- Filters --}}
        <div class="flex flex-wrap gap-4 mb-6">
            <select class="select select-primary">
                <option>All Categories</option>
                <option>Electronics</option>
                <option>Fashion</option>
                <option>Home</option>
            </select>

            <select class="select select-primary">
                <option>Sort by: Latest</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
                <option>Name: A to Z</option>
            </select>

            <div class="flex-grow">
                <input type="text" placeholder="Search products..." class="input input-bordered w-full max-w-xs" />
            </div>
        </div>

        {{-- Products Grid --}}
        <div class="grid gap-6">
            <x-product-cards :products="$products" />
        </div>

        {{-- Pagination --}}
        <div class="flex justify-center mt-8">
            <div class="join">
                {{ $products->links('vendor.pagination.tailwind') }}
            </div>
        </div>
    </div>
</x-app-layout>
