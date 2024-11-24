<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            {{-- User Info Section --}}
            <div class="bg-base-100 shadow-lg rounded-xl p-8 mb-8 border border-base-200">
                <div class="flex items-center space-x-6">
                    <div class="relative">
                        <img class="w-24 h-24 rounded-full border-4 border-primary/20" 
                             src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}" 
                             alt="Profile picture">
                        <div class="absolute bottom-0 right-0 bg-primary rounded-full p-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-base-100" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold"><span class="text-primary">{{ auth()->user()->name }}</span></h2>
                        <div class="flex items-center space-x-2 text-base-content/60">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                            <p>{{ auth()->user()->email }}</p>
                        </div>
                        <div class="flex items-center space-x-2 text-base-content/60 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                            </svg>
                            <p class="text-sm">Member since {{ auth()->user()->created_at->format('F j, Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Stats Overview --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div class="bg-base-100 shadow-lg rounded-xl p-6 border border-base-200">
                    <div class="flex items-center space-x-3">
                        <div class="bg-primary/10 rounded-lg p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold">Cart Items</h3>
                            <p class="text-3xl font-bold text-primary">{{ auth()->user()->cart()->count() }}</p>
                        </div>
                    </div>
                </div>
                <div class="bg-base-100 shadow-lg rounded-xl p-6 border border-base-200">
                    <div class="flex items-center space-x-3">
                        <div class="bg-primary/10 rounded-lg p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold">Wishlist Items</h3>
                            <p class="text-3xl font-bold text-primary">{{ auth()->user()->wishlist()->count() }}</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Wishlist Preview --}}
            <div class="bg-base-100 shadow-lg rounded-xl p-6 mb-8 border border-base-200">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                        </svg>
                        <h3 class="text-xl font-semibold">Wishlist Items</h3>
                    </div>
                    @if(auth()->user()->wishlist()->count() > 0)
                        <a href="{{ route('wishlist.index') }}" class="text-primary hover:text-primary-focus transition-colors duration-200 flex items-center space-x-1">
                            <span>View all</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    @endif
                </div>

                @if(auth()->user()->wishlist()->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach(auth()->user()->wishlist()->latest()->take(3)->get() as $item)
                            <div class="card bg-base-100 shadow-md hover:shadow-lg transition-shadow duration-200 border border-base-200">
                                <figure class="px-4 pt-4">
                                    <img src="{{ $item->product->image }}" alt="{{ $item->product->name }}" class="rounded-xl h-48 w-full object-cover" />
                                </figure>
                                <div class="card-body">
                                    <h2 class="card-title text-sm">{{ $item->product->name }}</h2>
                                    <p class="text-primary font-bold">${{ number_format($item->product->price, 2) }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-8 text-base-content/60">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        <p>Your wishlist is empty.</p>
                    </div>
                @endif
            </div>

            {{-- Cart Preview --}}
            <div class="bg-base-100 shadow-lg rounded-xl p-6 border border-base-200">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3z" />
                        </svg>
                        <h3 class="text-xl font-semibold">Cart Items</h3>
                    </div>
                    @if(auth()->user()->cart()->count() > 0)
                        <a href="{{ route('cart.index') }}" class="text-primary hover:text-primary-focus transition-colors duration-200 flex items-center space-x-1">
                            <span>View all</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    @endif
                </div>

                @if(auth()->user()->cart()->count() > 0)
                    <div class="space-y-4">
                        @foreach(auth()->user()->cart()->latest()->take(3)->get() as $item)
                            <div class="flex items-center space-x-4 p-4 rounded-lg bg-base-200/50">
                                <img src="{{ $item->product->image }}" alt="{{ $item->product->name }}" class="w-16 h-16 object-cover rounded-lg">
                                <div class="flex-1">
                                    <h4 class="font-semibold">{{ $item->product->name }}</h4>
                                    <p class="text-primary">${{ number_format($item->product->price, 2) }} x {{ $item->quantity }}</p>
                                </div>
                                <div class="text-right">
                                    <p class="font-bold text-primary">${{ number_format($item->product->price * $item->quantity, 2) }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-8 text-base-content/60">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <p>Your cart is empty.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout> 