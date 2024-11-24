<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach ($products as $product)
    <div class="card bg-base-100 shadow-xl hover:shadow-2xl hover:bg-primary/10 transition-shadow duration-300 border border-primary/20">
        <figure class="relative px-4 pt-4">
            <img src="{{ $product->image ? Storage::url($product->image) : 'https://placehold.co/600x400' }}" 
                 alt="{{ $product->name }}" 
                 class="rounded-xl w-full h-48 object-cover" />
            {{-- Category Badge --}}
            <div class="absolute top-6 right-6">
                <div class="badge badge-primary">{{ $product->category->name }}</div>
            </div>
        </figure>
        <div class="card-body">
            <h2 class="card-title text-primary">{{ $product->name }}</h2>
            <div class="flex items-center gap-2 my-1">
                <div class="rating rating-sm">
                    @for($i = 1; $i <= 5; $i++)
                        <input type="radio" name="rating-{{ $product->id }}" 
                            class="mask mask-star-2 bg-primary" 
                            @checked($i <=  round($product->averageRating())) disabled />
                    @endfor
                </div>
                <span class="text-sm text-gray-400">
                    @if($product->reviews->count() > 0)
                        ({{ number_format($product->averageRating(), 1) }})
                    @else
                        (No reviews)
                    @endif
                </span>
            </div>
            <p class="text-gray-400 text-sm line-clamp-2">
                {{ $product->description }}
            </p>
            <div class="flex justify-between items-center mt-4">
                <div class="flex flex-col">
                    @if($product->discount_percentage > 0)
                        <span class="text-2xl font-bold text-primary">
                            ${{ number_format($product->discounted_price, 2) }}
                        </span>
                        <span class="text-sm text-gray-400 line-through">
                            ${{ number_format($product->price, 2) }}
                        </span>
                    @else
                        <span class="text-2xl font-bold text-primary">
                            ${{ number_format($product->price, 2) }}
                        </span>
                    @endif
                </div>
                <div class="flex gap-2">
                    <form action="{{ route('cart.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </button>
                    </form>
                    <a href="{{ route('products.show', $product) }}" class="btn btn-primary btn-sm">
                        View Details
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
