<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="w-max mx-auto mb-4">
        <h1
            class="animate-typing overflow-hidden whitespace-nowrap border-r-4 border-r-white pr-5 text-3xl text-violet-400 font-reddit font-bold">
            Start Exploring.
        </h1>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" class="text-white font-reddit" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" class="text-white font-reddit" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="relative mt-2 mx-auto">
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="absolute left-0 remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-violet-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-200 font-reddit">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="absolute right-0 underline text-sm text-violet-200 hover:text-violet-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

        </div>

{{--        <div class="block mx-auto">--}}
        {{--            <x-primary-button class="ms-3">--}}
        {{--                {{ __('') }}--}}
        {{--            </x-primary-button>--}}
        {{--        </div>--}}
        <button type="submit" class="mt-6 relative flex justify-center items-center justify-start inline-block px-5 py-3 overflow-hidden font-bold font-reddit rounded-full group mx-auto my-2 w-40">
            <span class="w-32 h-32 rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-violet-400 opacity-[3%]"></span>
            <span class="absolute top-0 left-0 w-48 h-48 -mt-1 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-violet-400 opacity-100 group-hover:-translate-x-8"></span>
            <span class="relative w-full text-left text-violet-400 transition-colors duration-200 ease-in-out group-hover:text-gray-900 text-center">Log In</span>
            <span class="absolute inset-0 border-2 border-violet-400 rounded-full"></span>
        </button>

    </form>

    <footer class="w-full absolute bottom-0 left-0 text-center mb-2">
        <p class="font-reddit text-gray-600">&#169;2024</p>
    </footer>
</x-guest-layout>


