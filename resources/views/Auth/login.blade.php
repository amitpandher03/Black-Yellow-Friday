<x-app-layout>
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            {{-- Header --}}
            <div class="text-center">
                <h2 class="text-3xl font-bold">
                    Welcome <span class="text-primary">Back</span>
                </h2>
                <p class="mt-2 text-gray-400">Sign in to your account</p>
            </div>

            {{-- Form --}}
            <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
                @csrf

                {{-- Email --}}
                <div class="form-control">
                    <label class="label">
                        <span class="label-text text-primary">Email</span>
                    </label>
                    <input type="email" name="email" 
                           class="input input-bordered @error('email') input-error @enderror" 
                           value="{{ old('email') }}" required autofocus />
                    @error('email')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="form-control">
                    <label class="label">
                        <span class="label-text text-primary">Password</span>
                    </label>
                    <input type="password" name="password" 
                           class="input input-bordered @error('password') input-error @enderror" 
                           required />
                    @error('password')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                {{-- Remember Me --}}
                <div class="flex items-center justify-between">
                    <label class="label cursor-pointer gap-2">
                        <input type="checkbox" name="remember" 
                               class="checkbox checkbox-primary checkbox-sm" />
                        <span class="label-text">Remember me</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" 
                           class="text-primary text-sm hover:underline">
                            Forgot your password?
                        </a>
                    @endif
                </div>

                {{-- Submit --}}
                <button type="submit" class="btn btn-primary w-full">
                    Sign in
                </button>

                {{-- Register Link --}}
                <p class="text-center text-sm text-gray-400">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-primary hover:underline">
                        Create one now
                    </a>
                </p>
            </form>
        </div>
    </div>
</x-app-layout>
