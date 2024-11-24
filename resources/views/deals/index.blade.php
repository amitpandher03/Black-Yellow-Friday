<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-primary mb-8">Today's Best Deals</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($deals as $product)
                <x-product-card :product="$product" />
            @empty
                <div class="col-span-full text-center py-12">
                    <h3 class="text-lg font-semibold">No deals available at the moment</h3>
                    <p class="text-gray-500">Check back later for amazing deals!</p>
                </div>
            @endforelse
        </div>

        <div class="mt-8 flex justify-center">
            <div class="join">
                {{ $deals->appends(request()->query())->links('vendor.pagination.tailwind') }}
            </div>
        </div>
    </div>
</x-app-layout> 