<x-guest-layout>
    <div class="mb-4 text-sm text-gray-200">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" class="text-white font-reddit" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="mt-6 relative flex justify-center items-center justify-start inline-block px-5 py-3 overflow-hidden font-bold font-reddit rounded-full group mx-auto my-2 w-72">
                <span class="w-48 h-48 rotate-45 translate-x-12 -translate-y-[-6rem] absolute left-0 top-0 bg-violet-400 opacity-[3%]"></span>
                <span class="absolute top-0 left-0 w-72 h-72 -mt-1 transition-all duration-500 ease-in-out rotate-45 -translate-x-96 -translate-y-24 bg-violet-400 opacity-100 group-hover:-translate-x-1"></span>
                <span class="relative w-full text-left text-violet-400 transition-colors duration-200 ease-in-out group-hover:text-gray-900 text-center">Email Password Reset Link</span>
                <span class="absolute inset-0 border-2 border-violet-400 rounded-full"></span>
            </button>
        </div>
    </form>

    <footer class="w-full absolute bottom-0 left-0 text-center mb-2">
        <p class="font-reddit text-gray-600">&#169;2024</p>
    </footer>
</x-guest-layout>
