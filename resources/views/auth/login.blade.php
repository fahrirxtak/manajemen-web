<x-guest-layout>
    <section class="bg-white dark:bg-dark-2 flex flex-wrap min-h-[100vh]">
        <!-- Left image -->
        <div class="lg:w-1/2 lg:block hidden">
            <div class="flex items-center flex-col h-full justify-center">
                <img src="{{ asset('images/logo/dagang.png') }}" alt="">
            </div>
        </div>

        <!-- Right form -->
        <div class="lg:w-1/2 py-8 px-6 flex flex-col justify-center">
            <div class="lg:max-w-[464px] mx-auto w-full">
                <div>
                    <a href="/" class="mb-2.5 max-w-[290px] block">
                        <img src="{{ asset('assets/images/logo/dagang.png') }}" alt="">
                    </a>
                    <h4 class="mb-3">Sign In to your Account</h4>
                    <p class="mb-8 text-secondary-light text-lg">Welcome back! Please enter your detail</p>
                </div>

                <!-- Laravel Breeze Login Form -->
                <form method="POST" action="{{ route('login') }}" class="w-full max-w-md mx-auto">
                    @csrf

                    <!-- Email -->
                    <div class="mb-5 min-h-[76px]">
                        <div class="icon-field relative">
                            <span
                                class="absolute start-4 top-1/2 -translate-y-1/2 pointer-events-none flex items-center text-xl text-secondary-light w-5 h-5">
                                <iconify-icon icon="mage:email"></iconify-icon>
                            </span>
                            <input type="email" name="email" value="{{ old('email') }}" autofocus
                                class="form-control h-[56px] ps-11 pe-4 border border-gray-300 bg-neutral-50 dark:bg-dark-2 rounded-xl w-full focus:ring-2 focus:ring-primary-600 focus:border-transparent @error('email') border-red-500 @enderror"
                                placeholder="Email">
                        </div>
                        @error('email')
                            <span class="text-red-500 text-sm block mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-5 min-h-[76px]">
                        <div class="icon-field relative overflow-visible">
                            <span
                                class="absolute start-4 top-1/2 -translate-y-1/2 pointer-events-none flex items-center text-xl text-secondary-light w-5 h-5">
                                <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                            </span>
                            <input type="password" name="password"
                                class="form-control h-[56px] ps-11 pe-4 border border-gray-300 bg-neutral-50 dark:bg-dark-2 rounded-xl w-full focus:ring-2 focus:ring-primary-600 focus:border-transparent @error('password') border-red-500 @enderror"
                                id="your-password" placeholder="Password">
                            <span
                                class="toggle-password absolute end-4 top-1/2 -translate-y-1/2 text-secondary-light cursor-pointer pr-4"
                                data-toggle="#your-password">
                                <iconify-icon icon="ri:eye-line"></iconify-icon>
                            </span>
                        </div>
                        @error('password')
                            <span class="text-red-500 text-sm block mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Remember + Forgot -->
                    <div class="mt-7 flex justify-between items-center gap-2">
                        <div class="flex items-center">
                            <input id="remember" name="remember" type="checkbox"
                                class="form-check-input h-4 w-4 text-primary-600 border-gray-300 rounded focus:ring-primary-500">
                            <label for="remember" class="ps-2 text-sm text-gray-700 dark:text-gray-300">Remember
                                me</label>
                        </div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                                class="text-primary-600 font-medium hover:underline text-sm dark:text-primary-400">
                                Forgot Password?
                            </a>
                        @endif
                    </div>

                    <!-- Submit -->
                    <button type="submit"
                        class="btn btn-primary justify-center text-sm btn-sm px-3 py-4 w-full rounded-xl mt-8 bg-primary-600 hover:bg-primary-700 text-white font-medium transition-colors duration-200">
                        Sign In
                    </button>
                </form>
            </div>
        </div>
    </section>

    @push('js')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".toggle-password").forEach(function(btn) {
                btn.addEventListener("click", function () {
                    const icon = this.querySelector("iconify-icon");
                    const input = document.querySelector(this.getAttribute("data-toggle"));

                    if (input) {
                        input.type = input.type === "password" ? "text" : "password";
                    }

                    // Ganti ikon, pastikan hanya ganti atribut
                    if (icon.icon === "ri:eye-line") {
                        icon.icon = "ri:eye-off-line";
                    } else {
                        icon.icon = "ri:eye-line";
                    }
                });
            });
        });
    </script>
    @endpush
</x-guest-layout>
