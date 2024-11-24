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

            <select name="sort" class="select select-primary" onchange="this.form.submit()">
                <option @selected(request('sort') == 'Sort by: Latest')>Sort by: Latest</option>
                <option @selected(request('sort') == 'Price: Low to High')>Price: Low to High</option>
                <option @selected(request('sort') == 'Price: High to Low')>Price: High to Low</option>
                <option @selected(request('sort') == 'Name: A to Z')>Name: A to Z</option>
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
            <x-product-cards :products="$products" />
        </div>

        {{-- Pagination --}}
        <div class="flex justify-center mt-8">
            <div class="join">
                {{ $products->appends(request()->query())->links('vendor.pagination.tailwind') }}
            </div>
        </div>
    </div>
</x-app-layout>
