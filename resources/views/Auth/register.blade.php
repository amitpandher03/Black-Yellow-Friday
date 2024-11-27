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
        </div>
    </div>
</x-app-layout>
