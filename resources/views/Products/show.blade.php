<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        {{-- Breadcrumbs --}}
        <div class="text-sm breadcrumbs mb-6">
            <ul>
                <li><a href="{{ route('products.index') }}" class="text-primary">Products</a></li>
                <li>{{ $product->name }}</li>
            </ul>
        </div>

        {{-- Product Details --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            {{-- Product Images --}}
            <div class="space-y-4">
                <div class="card bg-base-100 shadow-xl">
                    @if ($product->image)
                        <figure class="px-4 pt-4">
                            <img src="{{  $product->image }}" alt="Product" class="rounded-xl" />
                        </figure>
                    @else
                        <figure class="px-4 pt-4">
                            <img src="https://placehold.co/600x400" alt="Product" class="rounded-xl" />
                        </figure>
                    @endif
                </div>
                <div class="grid grid-cols-4 gap-4">
                    @if ($product->image < 2)
                        @foreach ($product->images as $image)
                            <img src="{{ asset('storage/' . $image) }}" alt="Thumbnail" class="rounded-lg cursor-pointer hover:ring-2 ring-primary" />
                        @endforeach
                    @else
                        @for ($i = 0; $i < 4; $i++)
                            <img src="https://placehold.co/150x150" alt="Thumbnail" class="rounded-lg cursor-pointer hover:ring-2 ring-primary" />
                        @endfor
                    @endif
                </div>
            </div>

            {{-- Product Info --}}
            <div class="space-y-6">
                <div>
                    <h1 class="text-4xl font-bold mb-2">{{ $product->name }}</h1>
                    {{-- Creator Info --}}
                    <div class="flex items-center gap-2 text-gray-500 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span>Created by {{ $product->user->name }}</span>
                        <span class="text-gray-400">•</span>
                        <span class="text-gray-400">{{ $product->created_at->diffForHumans() }}</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="badge badge-primary">{{ $product->category->name }}</div>
                        <div class="rating rating-sm">
                            @for($i = 1; $i <= 5; $i++)
                                <input type="radio" name="rating-2" 
                                    class="mask mask-star-2 bg-primary" 
                                    @checked($i == 4) disabled />
                            @endfor
                        </div>
                        <span class="text-gray-400">(4.0)</span>
                    </div>
                </div>

                {{-- Price Section --}}
                <div class="space-y-4">
                    @if($product->discount_percentage > 0)
                        <div class="flex items-end gap-4">
                            <div class="text-3xl font-bold text-primary">
                                ${{ number_format($product->discounted_price, 2) }}
                            </div>
                            <div class="text-xl text-gray-400 line-through">
                                ${{ number_format($product->price, 2) }}
                            </div>
                        </div>
                    @else
                        <div class="text-3xl font-bold text-primary">
                            ${{ number_format($product->price, 2) }}
                        </div>
                    @endif
                    <p class="text-gray-400">
                        {{ $product->description }}
                    </p>
                </div>

                {{-- Stock Status --}}
                <div class="flex items-center gap-2">
                    <span class="text-sm font-semibold">Availability:</span>
                    <span class="badge badge-success">In Stock</span>
                </div>

                {{-- Features --}}
                <div class="space-y-2">
                    <h3 class="text-lg font-semibold text-primary">Key Features</h3>
                    <ul class="space-y-2">
                        @foreach(explode("\n", $product->features ?? "No features listed") as $feature)
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                {{ $feature }}
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Action Buttons --}}
                <div class="flex gap-4 pt-4">
                    <button class="btn btn-primary flex-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Add to Cart
                    </button>
                    <button class="btn btn-outline btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
