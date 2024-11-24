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
                            <img src="{{ $product->image }}" alt="Product" class="rounded-xl" />
                        </figure>
                    @else
                        <figure class="px-4 pt-4">
                            <img src="https://placehold.co/600x400" alt="Product" class="rounded-xl" />
                        </figure>
                    @endif
                </div>
                <div class="grid grid-cols-4 gap-4">
                    @if ($product->images && count($product->images) > 0)
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
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 24 24" fill="none">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ $feature }}
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Action Buttons --}}
                <div class="flex gap-4 pt-4">
                    <form action="{{ route('cart.store') }}" method="POST" class="flex-1">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" class="btn btn-primary w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>
                            Add to Cart
                        </button>
                    </form>
                    <form action="{{ route('wishlist.toggle', $product) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                 class="h-5 w-5 {{ auth()->user()?->wishlisted->contains($product) ? 'fill-current' : '' }}" 
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        {{-- Reviews Section --}}
        <div class="mt-16">
            <h2 class="text-2xl font-bold mb-8">Customer Reviews</h2>

            {{-- Add Review Form --}}
            @auth
                <div class="card bg-base-100 shadow-xl mb-8">
                    <div class="card-body">
                        <h3 class="card-title">Write a Review</h3>
                        <form action="{{ route('reviews.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            
                            <div class="form-control mb-4">
                                <div class="rating rating-lg">
                                    @for($i = 5; $i >= 1; $i--)
                                        <input type="radio" name="rating" value="{{ $i }}" 
                                            class="mask mask-star-2 bg-primary" 
                                            @checked($i == 5)/>
                                    @endfor
                                </div>
                            </div>

                            <div class="form-control mb-4">
                                <textarea name="comment" rows="3" 
                                    class="textarea textarea-bordered" 
                                    placeholder="Share your thoughts about this product..."></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                Submit Review
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <div class="alert mb-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-info shrink-0 w-6 h-6" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                    </svg>
                    <span>Please <a href="{{ route('login') }}" class="link link-primary">login</a> to write a review.</span>
                </div>
            @endauth

            {{-- Reviews List --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @forelse($product->reviews as $review)
                    <div class="bg-base-100 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-start space-x-4">
                            <div class="avatar">
                                <div class="w-12 h-12 rounded-full ring-2 ring-primary/20">
                                    <img src="https://ui-avatars.com/api/?name={{ urlencode($review->user->name) }}&background=random" />
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="font-semibold text-base-content">{{ $review->user->name }}</h4>
                                        <div class="flex items-center gap-2 mt-1">
                                            <div class="rating rating-sm">
                                                @for($i = 1; $i <= 5; $i++)
                                                    <input type="radio" class="mask mask-star-2 bg-primary" 
                                                        @checked($i == $review->rating) disabled />
                                                @endfor
                                            </div>
                                            <span class="text-xs text-gray-500">{{ $review->created_at->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 text-gray-600 text-sm leading-relaxed">{{ $review->comment }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full">
                        <div class="text-center py-8 bg-base-200 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                            </svg>
                            <p class="text-gray-500 font-medium">No reviews yet.</p>
                            <p class="text-gray-400 text-sm mt-1">Be the first to share your thoughts about this product!</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
