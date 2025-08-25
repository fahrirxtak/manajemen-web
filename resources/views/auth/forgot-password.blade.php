<!DOCTYPE html>
<html lang="en">
<x-head />

<body class="dark:bg-neutral-800 bg-neutral-100 dark:text-white">

    <section class="bg-white dark:bg-neutral-700 flex flex-wrap min-h-[100vh]">
        <div class="lg:w-1/2 lg:block hidden">
            <div class="flex items-center flex-col h-full justify-center">
                <img src="{{ asset('assets/images/auth/forgot-pass-img.png') }}" alt="">
            </div>
        </div>

        <div class="lg:w-1/2 py-8 px-6 flex flex-col justify-center">
            <div class="lg:max-w-[464px] mx-auto w-full">
                <div>
                    <h4 class="mb-3">Forgot Password</h4>
                    <p class="mb-8 text-secondary-light text-lg">
                        Enter the email address associated with your account and we will send you a link to reset your password.
                    </p>
                </div>

                <!-- Session Status -->
                @if (session('status'))
                    <div class="mb-4 text-sm text-green-600 dark:text-green-400">
                        {{ session('status') }}
                    </div>
                @endif

                <!-- Form -->
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="icon-field mb-6 relative">
                        <span class="absolute start-4 top-1/2 -translate-y-1/2 pointer-events-none flex text-xl">
                            <iconify-icon icon="mage:email"></iconify-icon>
                        </span>
                        <input type="email" name="email"
                               class="form-control h-[56px] ps-11 border-neutral-300 bg-neutral-50 dark:bg-neutral-600 rounded-xl @error('email') border-red-500 @enderror"
                               placeholder="Email" value="{{ old('email') }}" required autofocus>

                        @error('email')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="btn btn-primary justify-center text-sm btn-sm px-3 py-4 w-full rounded-xl">
                        Send Reset Link
                    </button>

                    <div class="text-center mt-6">
                        <a href="{{ route('login') }}" class="text-primary-600 font-bold hover:underline">
                            Back to Sign In
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <x-script />
</body>
</html>
