<header class="flex items-center justify-between py-10">
    <div>
        <div class="flex items-center justify-between">
            <div x-cloak class="hidden h-6 text-2xl font-semibold sm:block dark:text-white">
                <h1 x-show="!darkMode">My <i @click="enableDarkMode" class="cursor-pointer ri-moon-fill"></i>oding
                    Journey</h1>
                <h1 x-show="darkMode">My C<i @click="disableDarkMode" class="cursor-pointer ri-sun-fill"
                                             style="color: #fde047"></i>ding
                    Journey</h1>
            </div>
        </div>
    </div>
    <div class="flex items-center text-base leading-5">
        <div class="hidden sm:block">
            @php($activeButton = fn($path) => request()->path() === $path ? 'text-primary-500 border-b-4 !py-2' : 'text-gray-900')
            <a class="p-1 font-medium dark:text-gray-100 sm:p-4 {{ $activeButton('/') }}" href="/">Home</a>
            <a class="p-1 font-medium dark:text-gray-100 sm:p-4 {{ $activeButton('posts') }}" href="/posts">Posts</a>
            <a class="p-1 font-medium dark:text-gray-100 sm:p-4 {{ $activeButton('tags') }}" href="/tags">Tags</a>
            <a class="p-1 font-medium dark:text-gray-100 sm:p-4 {{ $activeButton('about') }}" href="/about">About</a>
            <a class="p-1 font-medium dark:text-gray-100 sm:p-4 {{ $activeButton('donate') }}" href="/donate">
                <i class="ri-coins-fill text-2xl text-yellow-500"></i>
                <span>Donate</span>
            </a>
            @if(backpack_user())
                <a class="p-1 font-medium text-gray-900 dark:text-gray-100 sm:p-4" href="/admin">
                    Panel
                </a>
            @endif
        </div>
        <div class="sm:hidden">
            <div
                class="fixed top-0 left-0 z-10 h-full w-full transform bg-gray-200 opacity-95 duration-300 ease-in-out dark:bg-gray-800 translate-x-full">
                <nav class="fixed mt-8 h-full">
                    <div class="px-12 py-4">
                        <a class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100"
                           href="/">Home</a>
                    </div>
                    <div class="px-12 py-4">
                        <a class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100"
                           href="/posts">Posts</a>
                    </div>
                    <div class="px-12 py-4">
                        <div class="px-12 py-4">
                            <a class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100"
                               href="/tags">Tags</a>
                        </div>
                        <a class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100"
                           href="/about">About</a>
                    </div>
                    <div class="px-12 py-4">
                        <a class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100"
                           href="/donate">
                            <i class="ri-coins-fill text-2xl text-yellow-500"></i>
                            <span>Donate</span>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
