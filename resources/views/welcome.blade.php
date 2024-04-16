<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
{{--        <link rel="preconnect" href="https://fonts.bunny.net">--}}
{{--        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />--}}
        <link rel="stylesheet" href="/resources/css/buttonStyle.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Reddit+Mono:wght@200..900&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50 mx-auto relative min-h-screen border border-transparent relative">
        <div class="flex flex-col mt-52">

            <img src="./images/logo.png" alt="logo" class="mx-auto mb-8 w-1/6 ">

            <div class="w-max mx-auto mb-4">
                <h1
                    class="animate-typing overflow-hidden whitespace-nowrap border-r-4 border-r-white pr-5 text-4xl text-violet-400 font-reddit font-bold">
                    AI Tour Guide
                </h1>
            </div>

{{--            <h1 class="text-violet-400 mx-auto font-reddit font-bold sm:text-2xl mb-2">Learn, Travel, Discover.</h1>--}}
{{--            <h2 class="text-violet-400 mx-auto font-reddit font-bold sm:text-2xl mb-6">Your Personal <span class="text-white font-reddit sm:text-2xl">AI Tour Guide</span>.</h2>--}}

            <a href="/login" class="mt-2 relative flex justify-center items-center justify-start inline-block px-5 py-3 overflow-hidden font-bold font-reddit rounded-full group mx-auto my-2 w-72 cursor-pointer">
                <span class="w-48 h-48 rotate-45 translate-x-12 -translate-y-[-6rem] absolute left-0 top-0 bg-white opacity-[3%]"></span>
                <span class="absolute top-0 left-0 w-72 h-72 -mt-1 transition-all duration-500 ease-in-out rotate-45 -translate-x-96 -translate-y-24 bg-white opacity-100 group-hover:-translate-x-1"></span>
                <span class="relative w-full text-left text-white transition-colors duration-200 ease-in-out group-hover:text-gray-900 text-center">Log In</span>
                <span class="absolute inset-0 border-2 border-white rounded-full"></span>
            </a>

            <a href="/register" class="mt-2 relative flex justify-center items-center justify-start inline-block px-5 py-3 overflow-hidden font-bold font-reddit rounded-full group mx-auto my-2 w-72 cursor-pointer">
                <span class="w-48 h-48 rotate-45 translate-x-12 -translate-y-[-6rem] absolute left-0 top-0 bg-violet-400 opacity-[3%]"></span>
                <span class="absolute top-0 left-0 w-72 h-72 -mt-1 transition-all duration-500 ease-in-out rotate-45 -translate-x-96 -translate-y-24 bg-violet-400 opacity-100 group-hover:-translate-x-1"></span>
                <span class="relative w-full text-left text-violet-400 transition-colors duration-200 ease-in-out group-hover:text-gray-900 text-center">Sign Up</span>
                <span class="absolute inset-0 border-2 border-violet-400 rounded-full"></span>
            </a>

            <a href="terms" class="mx-auto font-reddit text-xs mt-6">terms of use</a>
            <a href="privacy" class="mx-auto font-reddit text-xs">privacy policy</a>
        </div>


        <footer class="w-full absolute bottom-0 left-0 text-center mb-2">
            <p class="font-reddit">&#169;2024</p>
        </footer>
    </body>
</html>
