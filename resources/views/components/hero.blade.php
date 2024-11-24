<div class="hero min-h-[80vh] bg-base-100">
    <div class="hero-content flex-col lg:flex-row-reverse gap-8">
        {{-- Hero Image --}}
        <div class="lg:w-1/2 relative">
            <div class="relative group">
                {{-- Main Image --}}
                <img 
                    src="https://images.unsplash.com/photo-1607083206869-4c7672e72a8a?q=80&w=2070&auto=format&fit=crop" 
                    alt="Black Friday Shopping Deals" 
                    class="rounded-lg shadow-2xl max-w-full object-cover h-[500px]"
                />
                
                {{-- Overlay gradient --}}
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent rounded-lg"></div>

                {{-- Floating Discount Badge --}}
                <div class="absolute -top-4 -right-4 bg-primary text-base-100 p-4 rounded-full animate-bounce shadow-lg">
                    <span class="font-bold text-2xl">50%</span>
                    <br/>
                    <span class="text-sm">OFF</span>
                </div>

                {{-- Additional floating elements --}}
                <div class="absolute bottom-4 left-4 flex gap-3">
                    <div class="badge badge-primary">Electronics</div>
                    <div class="badge badge-primary">Fashion</div>
                    <div class="badge badge-primary">Home</div>
                </div>
            </div>
        </div>

        {{-- Hero Content --}}
        <div class="lg:w-1/2 space-y-6">
            {{-- Timer Section --}}
            <div class="flex gap-4 justify-start">
                <div class="bg-base-100 border-2 border-primary p-3 rounded-box text-center min-w-[80px]">
                    <span class="countdown font-mono text-2xl text-primary">
                        <span style="--value:15;"></span>
                    </span>
                    <div class="text-xs text-primary">days</div>
                </div> 
                <div class="bg-base-100 border-2 border-primary p-3 rounded-box text-center min-w-[80px]">
                    <span class="countdown font-mono text-2xl text-primary">
                        <span style="--value:10;"></span>
                    </span>
                    <div class="text-xs text-primary">hours</div>
                </div> 
                <div class="bg-base-100 border-2 border-primary p-3 rounded-box text-center min-w-[80px]">
                    <span class="countdown font-mono text-2xl text-primary">
                        <span style="--value:24;"></span>
                    </span>
                    <div class="text-xs text-primary">minutes</div>
                </div>
                <div class="bg-base-100 border-2 border-primary p-3 rounded-box text-center min-w-[80px]">
                    <span class="countdown font-mono text-2xl text-primary">
                        <span style="--value:37;"></span>
                    </span>
                    <div class="text-xs text-primary">seconds</div>
                </div>
            </div>

            {{-- Main Content --}}
            <div class="space-y-4">
                <h1 class="text-5xl font-bold">
                    <span class="text-primary">BLACK</span> FRIDAY
                </h1>
                <h2 class="text-2xl text-primary font-semibold">
                    Mega Sale Is Live Now
                </h2>
                <p class="py-6 text-gray-300">
                    Get ready for the biggest shopping event of the year! Discover incredible deals 
                    with up to 70% off on electronics, fashion, home decor, and much more. 
                    Don't miss out on these exclusive offers - only available for a limited time!
                </p>
                
                {{-- CTA Buttons --}}
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('products.index', ['sort' => 'discount', 'filter' => 'sale']) }}" class="btn btn-primary">
                        Black Friday Deals
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                    <a href="{{ route('products.index', ['sort' => 'featured']) }}" class="btn btn-outline btn-primary">
                        All Products
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                    </a>
                </div>

                {{-- Features --}}
                <div class="flex flex-wrap gap-4 pt-4">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-sm">Free Shipping</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                        <span class="text-sm">Secure Payment</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                        <span class="text-sm">30-Day Returns</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
