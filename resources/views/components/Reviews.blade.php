<section class="py-16 bg-base-100">
    <div class="container mx-auto px-4">
        {{-- Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">
                <span class="text-primary">Customer</span> Reviews
            </h2>
            <p class="text-gray-300 max-w-2xl mx-auto">
                Join thousands of satisfied customers who saved big on Black Friday
            </p>
        </div>

        {{-- Quick Stats --}}
        <div class="flex justify-center gap-8 mb-12 flex-wrap">
            <div class="flex items-center gap-2">
                <div class="rating rating-md">
                    @for ($i = 1; $i <= 5; $i++)
                        <input type="radio" name="rating-overall" 
                            class="mask mask-star-2 bg-primary" 
                            @checked($i == 5) disabled />
                    @endfor
                </div>
                <span class="text-primary font-bold">4.8/5</span>
            </div>
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <span class="text-gray-300">25.6K+ Happy Customers</span>
            </div>
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                </svg>
                <span class="text-gray-300">98% Verified Purchases</span>
            </div>
        </div>

        {{-- Reviews Carousel --}}
        <div class="carousel carousel-center max-w-full p-4 space-x-4">
            {{-- Review Card 1 --}}
            <div class="carousel-item w-full md:w-96">
                <div class="card bg-base-100 border border-primary/20">
                    <div class="card-body">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="avatar">
                                <div class="w-12 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                                    <img src="https://i.pravatar.cc/150?img=1" alt="Sarah" />
                                </div>
                            </div>
                            <div>
                                <h3 class="font-bold text-primary">Sarah J.</h3>
                                <div class="rating rating-sm">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <input type="radio" name="rating-1" 
                                            class="mask mask-star-2 bg-primary" 
                                            @checked($i == 5) disabled />
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <p class="text-sm">"Amazing deals! Got my dream TV at 50% off. The checkout process was smooth, and delivery was faster than expected."</p>
                        <div class="text-xs text-gray-400 mt-4">4K Smart TV Purchase</div>
                    </div>
                </div>
            </div>

            {{-- Review Card 2 --}}
            <div class="carousel-item w-full md:w-96">
                <div class="card bg-base-100 border border-primary/20">
                    <div class="card-body">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="avatar">
                                <div class="w-12 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                                    <img src="https://i.pravatar.cc/150?img=2" alt="Michael" />
                                </div>
                            </div>
                            <div>
                                <h3 class="font-bold text-primary">Michael C.</h3>
                                <div class="rating rating-sm">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <input type="radio" name="rating-2" 
                                            class="mask mask-star-2 bg-primary" 
                                            @checked($i == 5) disabled />
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <p class="text-sm">"Best Black Friday shopping experience ever! The website was fast, and the discounts were incredible."</p>
                        <div class="text-xs text-gray-400 mt-4">Gaming Console Purchase</div>
                    </div>
                </div>
            </div>

            {{-- Review Card 3 --}}
            <div class="carousel-item w-full md:w-96">
                <div class="card bg-base-100 border border-primary/20">
                    <div class="card-body">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="avatar">
                                <div class="w-12 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                                    <img src="https://i.pravatar.cc/150?img=3" alt="Emily" />
                                </div>
                            </div>
                            <div>
                                <h3 class="font-bold text-primary">Emily R.</h3>
                                <div class="rating rating-sm">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <input type="radio" name="rating-3" 
                                            class="mask mask-star-2 bg-primary" 
                                            @checked($i == 4) disabled />
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <p class="text-sm">"The early access deals were fantastic! Saved big on my Christmas shopping this year."</p>
                        <div class="text-xs text-gray-400 mt-4">Smartphone Purchase</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>