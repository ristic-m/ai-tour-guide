<button {{ $attributes->merge(['type' => 'submit', 'class' => 'relative inline-flex items-center justify-start inline-block px-5 py-3 overflow-hidden font-bold font-reddit rounded-full group mx-auto my-2 w-40"']) }}>
    <span class="w-32 h-32 rotate-45 translate-x-12 -translate-y-2 absolute left-0 top-0 bg-violet-400 opacity-[3%]"></span>
    <span class="absolute top-0 left-0 w-48 h-48 -mt-1 transition-all duration-500 ease-in-out rotate-45 -translate-x-56 -translate-y-24 bg-violet-400 opacity-100 group-hover:-translate-x-8"></span>
    <span class="relative w-full text-left text-violet-400 transition-colors duration-200 ease-in-out group-hover:text-gray-900 text-center"></span>
    <span class="absolute inset-0 border-2 border-violet-400 rounded-full"></span>
    {{ $slot }}
</button>
