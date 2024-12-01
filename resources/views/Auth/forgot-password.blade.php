<x-app-layout>
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            {{-- Header --}}
            <div class="text-center">
                <h2 class="text-3xl font-bold">
                    Forgot <span class="text-primary">Password?</span>
                </h2>
                <p class="mt-2 text-gray-400">Enter your email to reset your password</p>
            </div>

            {{-- Form --}}
            <form class="mt-8 space-y-6" action="{{ route('password.email') }}" method="POST">
                @csrf

                {{-- Status Message --}}
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

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

                {{-- Submit --}}
                <button type="submit" class="btn btn-primary w-full">
                    Send Reset Link
                </button>

                {{-- Back to Login --}}
                <p class="text-center text-sm text-gray-400">
                    Remember your password?
                    <a href="{{ route('login') }}" class="text-primary hover:underline">
                        Back to login
                    </a>
                </p>
            </form>
        </div>
    </div>
</x-app-layout> 