<div class="navbar bg-base-100 shadow-lg">
    {{-- Logo/Brand Section --}}
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            {{-- Mobile Menu --}}
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="{{ route('home') }}" class="text-primary">Home</a></li>
                <li><a href="{{ route('products.index') }}" class="text-primary">Products</a></li>
                <li><a href="#" class="text-primary">Deals</a></li>
            </ul>
        </div>
        <a href="{{ route('home') }}" class="btn btn-ghost text-primary text-xl">BlackFriday</a>
    </div>

    {{-- Desktop Menu --}}
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a href="{{ route('home') }}" class="text-primary">Home</a></li>
            <li><a href="{{ route('products.index') }}" class="text-primary">Products</a></li>
            <li><a href="#" class="text-primary">Deals</a></li>
        </ul>
    </div>

    {{-- Right Section (Search, Cart, Profile) --}}
    <div class="navbar-end">
        {{-- Search --}}
        <button class="btn btn-ghost btn-circle">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </button>
        {{-- Cart --}}
        <button class="btn btn-ghost btn-circle">
            <div class="indicator">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span class="badge badge-sm badge-primary indicator-item">8</span>
            </div>
        </button>
        {{-- Profile --}}
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                    <img alt="Avatar" src="https://ui-avatars.com/api/?name={{ auth()->user() ? auth()->user()->name : 'User' }}" />
                </div>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                @auth
                    <li><a class="text-primary">Profile</a></li>
                    <li><a class="text-primary">Settings</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="text-primary">Logout</button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}" class="text-primary">Login</a></li>
                    <li><a href="{{ route('register') }}" class="text-primary">Register</a></li>
                @endauth
            </ul>
        </div>
    </div>
</div>