@props(['name', 'rating', 'date', 'comment', 'image', 'product'])
<div class="card bg-base-100 shadow-xl border border-primary/20">
    <div class="card-body">
        <div class="flex items-start gap-4">
            <div class="avatar">
                <div class="w-16 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                    <img src="{{ $image }}" alt="{{ $name }}" />
                </div>
            </div>
            <div class="flex-1">
                <h3 class="card-title text-primary">{{ $name }}</h3>
                <div class="flex items-center gap-2 my-2">
                    <div class="rating rating-sm">
                        @for ($i = 1; $i <= 5; $i++)
                            <input type="radio" name="rating-{{ $name }}" 
                                class="mask mask-star-2 bg-primary" 
                                @checked($i == $rating) disabled />
                        @endfor
                    </div>
                    <span class="text-sm text-gray-400">{{ $date }}</span>
                </div>
                <p class="text-sm text-gray-300">Purchased: {{ $product }}</p>
                <p class="mt-4">{{ $comment }}</p>
            </div>
        </div>
    </div>
</div> 