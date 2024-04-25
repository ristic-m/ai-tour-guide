<!doctype html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AI Tour Guide</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reddit+Mono:wght@200..900&display=swap" rel="stylesheet">

    <link rel="icon" href="./images/logo.png">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black min-h-screen">

<nav x-data="{ open: false }" class="bg-black border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">

            <!-- Logo on the left -->
            <div class="flex">
                <a href="{{ route('dashboard') }}">
                    <img src="./images/logo.png" alt="logo" class="w-[70px] sm:w-[100px] pt-2">
                </a>
            </div>

            <!-- Centered title -->
            <h1 class="hidden sm:block text-white text-xl md:text-2xl flex-grow text-center font-reddit">AI Tour Guide</h1>

            <!-- Settings Dropdown on the right -->
            <div class="flex font-reddit">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                                           onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>


<div class="flex flex-col" style="height: calc(100vh - 80px);">
    <div class="flex-grow overflow-auto border border-white rounded-lg bg-gray-500/10 mx-4 mt-4 sm:mx-28 mt-8">
        <ul id="messages" class="px-4 py-4 space-y-2 font-reddit">
            <!-- messages -->
        </ul>
    </div>
    <div class="px-4 py-4 sm:px-28 py-8">
        <form id="chatForm" class="flex items-center">
            <input type="text" id="messageInput" placeholder="Message AI Tour Guide" class="flex-1 w-full rounded-lg p-2 font-reddit">
            <button type="submit" class="ml-2 px-4 sm:px-12 py-3 bg-violet-500 text-white rounded-full font-bold transition duration-200 hover:bg-violet-600 focus:outline-none font-reddit">
                Send
            </button>
        </form>
    </div>
</div>

<footer class="w-full absolute bottom-0 left-0 text-center mb-2">
    <p class="font-reddit text-white/50 text-sm">&#169;2024</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('chatForm');
        const messageInput = document.getElementById('messageInput');
        const messagesContainer = document.getElementById('messages');

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const message = messageInput.value.trim();
            if (message) {
                displayMessage(message, 'right');
                messageInput.value = '';
                sendMessageToAPI(message);
            }
        });

        function displayMessage(message, side) {
            const sideClass = side === 'right' ? 'text-right' : 'text-left';
            const msgHtml = `<li class="${sideClass}"><div class="inline-block bg-violet-500 rounded px-4 py-2 text-white">${message}</div></li>`;
            messagesContainer.innerHTML += msgHtml;
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }

        function sendMessageToAPI(message) {
            axios.post('/api/send-message', {
                message: message,
            }, {
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'), // CSRF token
                }
            })
                .then(function(response) {
                    displayMessage(response.data.message, 'left');
                })
                .catch(function(error) {
                    console.error('Error:', error);
                    displayMessage('fail', 'left');
                });
        }
    });
</script>
</body>
</html>


