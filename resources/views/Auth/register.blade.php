<x-app-layout>
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            {{-- Header --}}
            <div class="text-center">
                <h2 class="text-3xl font-bold">
                    Create an <span class="text-primary">Account</span>
                </h2>
                <p class="mt-2 text-gray-400">Join our community today</p>
            </div>

            {{-- Form --}}
            <form class="mt-8 space-y-6" action="{{ route('register') }}" method="POST">
                @csrf

                {{-- Name --}}
                <div class="form-control">
                    <label class="label">
                        <span class="label-text text-primary">Full Name</span>
                    </label>
                    <input type="text" name="name" 
                           class="input input-bordered @error('name') input-error @enderror" 
                           value="{{ old('name') }}" required autofocus />
                    @error('name')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="form-control">
                    <label class="label">
                        <span class="label-text text-primary">Email</span>
                    </label>
                    <input type="email" name="email" 
                           class="input input-bordered @error('email') input-error @enderror" 
                           value="{{ old('email') }}" required />
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

                {{-- Confirm Password --}}
                <div class="form-control">
                    <label class="label">
                        <span class="label-text text-primary">Confirm Password</span>
                    </label>
                    <input type="password" name="password_confirmation" 
                           class="input input-bordered" required />
                </div>

                {{-- Terms --}}
                <div class="form-control">
                    <label class="label cursor-pointer gap-2">
                        <input type="checkbox" name="terms" 
                               class="checkbox checkbox-primary checkbox-sm" required />
                        <span class="label-text">
                            I agree to the 
                            <a href="#" class="text-primary hover:underline">Terms of Service</a>
                            and
                            <a href="#" class="text-primary hover:underline">Privacy Policy</a>
                        </span>
                    </label>
                </div>

                {{-- Submit --}}
                <button type="submit" class="btn btn-primary w-full">
                    Create Account
                </button>

                {{-- Login Link --}}
                <p class="text-center text-sm text-gray-400">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-primary hover:underline">
                        Sign in instead
                    </a>
                </p>
            </form>

            {{-- Social Registration --}}
            <div class="divider">OR</div>

            <div class="space-y-3">
                <button class="btn btn-outline w-full gap-2">
                    <svg class="h-5 w-5" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                        <path fill="currentColor" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                        <path fill="currentColor" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                        <path fill="currentColor" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                    </svg>
                    Continue with Google
                </button>

                <button class="btn btn-outline w-full gap-2">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                    </svg>
                    Continue with Facebook
                </button>
            </div>
        </div>
    </div>
</x-app-layout>
