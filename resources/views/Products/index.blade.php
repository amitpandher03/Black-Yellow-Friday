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
        <form action="{{ route('products.index') }}" method="GET" class="flex flex-wrap gap-4 mb-6">
            <select name="category" class="select select-primary" onchange="this.form.submit()">
                <option value="">All Categories</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected(request('category') == $category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            <select name="sort" class="select select-primary" onchange="this.form.submit()">
                <option value="latest" @selected(request('sort') == 'latest')>Sort by: Latest</option>
                <option value="price_asc" @selected(request('sort') == 'price_asc')>Price: Low to High</option>
                <option value="price_desc" @selected(request('sort') == 'price_desc')>Price: High to Low</option>
                <option value="name_asc" @selected(request('sort') == 'name_asc')>Name: A to Z</option>
            </select>

            <div class="flex-grow flex gap-2">
                <input type="text" 
                       name="search" 
                       value="{{ request('search') }}" 
                       placeholder="Search products..." 
                       class="input input-bordered w-full max-w-xs" />
                <button type="submit" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
        </form>

        {{-- Products Grid --}}
        <div class="grid gap-6">
            @if ($products->isEmpty())
                <div class="flex flex-col items-center justify-center space-y-4 py-16">
                    <div class="rounded-full p-6 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white">No Products Found</h3>
                    <p class="text-white text-center max-w-md">
                        We couldn't find any products matching your criteria. Try adjusting your filters or search terms.
                    </p>
                    <button onclick="window.location.href='{{ route('products.index') }}'" class="btn btn-primary mt-4">
                        Clear Filters
                    </button>
                </div>
            @else
                <x-product-cards :products="$products" />
            @endif
        </div>

        {{-- Pagination --}}
        <div class="flex justify-center mt-8">
            <div class="join">
                {{ $products->appends(request()->query())->links('vendor.pagination.tailwind') }}
            </div>
        </div>
    </div>
</x-app-layout>
