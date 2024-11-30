<x-app-layout>
    {{-- Main Container with gradient background --}}
    <div class="min-h-screen bg-gradient-to-b from-base-200/50 to-base-100">
        <div class="container mx-auto px-4 py-12">
            <div class="max-w-4xl mx-auto">
                {{-- User Info Section with improved styling --}}
                <div class="bg-base-100 shadow-xl rounded-2xl p-8 mb-8 border border-base-200 backdrop-blur-sm">
                    <div class="flex flex-col md:flex-row items-center md:space-x-8">
                        <div class="relative mb-6 md:mb-0">
                            <div class="w-32 h-32 rounded-full border-4 border-primary/30 p-1 backdrop-blur-sm">
                                <img class="w-full h-full rounded-full object-cover" 
                                     src="{{ auth()->user()->profile_picture ? Storage::url(auth()->user()->profile_picture) : 'https://ui-avatars.com/api/?name='.auth()->user()->name.'&background=random' }}" 
                                     alt="Profile picture">
                            </div>
                            <label for="profile-picture" class="absolute bottom-2 right-2 bg-primary rounded-full p-2 shadow-lg hover:scale-110 transition-transform cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-base-100" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793z" />
                                    <path d="M11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                </svg>
                            </label>
                            <form id="profile-picture-form" action="{{ route('profile.update-picture') }}" method="POST" enctype="multipart/form-data" class="hidden">
                                @csrf
                                @method('PUT')
                                <input type="file" 
                                       id="profile-picture" 
                                       name="profile_picture" 
                                       accept="image/*"
                                       class="hidden"
                                       onchange="this.form.submit()">
                            </form>
                        </div>
                        
                        {{-- User Details with enhanced typography --}}
                        <div class="text-center md:text-left">
                            <h2 class="text-3xl font-bold mb-2">
                                <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary to-primary-focus">
                                    {{ auth()->user()->name }}
                                </span>
                            </h2>
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

                {{-- Stats Overview with animated hover effects --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <div class="bg-base-100 shadow-lg rounded-xl p-6 border border-base-200 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
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
                    <div class="bg-base-100 shadow-lg rounded-xl p-6 border border-base-200 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
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

                {{-- Products Section with improved card design --}}
                <div class="bg-base-100 shadow-xl rounded-2xl p-8 mb-8 border border-base-200">
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
                            </svg>
                            <h3 class="text-xl font-semibold">My Products</h3>
                        </div>
                        @if(auth()->user()->products()->count() > 0)
                            <a href="{{ route('products.index') }}" class="text-primary hover:text-primary-focus transition-colors duration-200 flex items-center space-x-1">
                                <span>View all</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        @endif
                    </div>

                    @if(auth()->user()->products()->count() > 0)
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach(auth()->user()->products()->latest()->get() as $product)
                                <div class="card bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-base-200 overflow-hidden">
                                    <figure class="px-4 pt-4">
                                        @if($product->image && Storage::disk('public')->exists($product->image))
                                            <img src="{{ Storage::url($product->image) }}" 
                                                class="rounded-xl w-full h-48 object-cover" 
                                                alt="{{ $product->name }}" />
                                        @else
                                            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="rounded-xl h-48 w-full object-cover" />
                                        @endif
                                    </figure>
                                    <div class="card-body">
                                        <h2 class="card-title text-sm">{{ $product->name }}</h2>
                                        <p class="text-primary font-bold">${{ number_format($product->price, 2) }}</p>
                                        <div class="flex items-center gap-2">
                                            <div class="card-actions">
                                                <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-primary">Edit</a>
                                            </div>
                                            <div class="card-actions">
                                                <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-error" onclick="return confirm('Are you sure you want to delete this product?')">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-12 bg-base-200/30 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                            <p>You haven't created any products yet.</p>
                            <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm mt-4">Create Product</a>
                        </div>
                    @endif
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
    </div>
</x-app-layout> 