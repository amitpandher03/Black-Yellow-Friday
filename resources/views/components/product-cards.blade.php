<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach ($products as $product)
    <div class="card bg-base-100 shadow-xl hover:shadow-2xl hover:bg-primary/20 transition-shadow duration-300 border border-primary/20 h-full">
        <figure class="relative px-4 pt-4">
            @if(Storage::exists($product->image))
                <img src="{{ Storage::url($product->image) }}" 
                    class="w-24 h-24 object-cover rounded-xl" />
            @else
                <img src="{{  $product->image  }}" 
                    class="rounded-xl w-full h-48 object-cover" />
            @endif
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
                    <livewire:add-to-cart-home :product="$product" />
                    <a href="{{ route('products.show', $product) }}" class="btn btn-primary btn-sm">
                        View Details
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
