<div class="flex items-center justify-center pt-4">
    <div>
        <div class="pb-1 text-lg font-semibold text-gray-800 dark:text-gray-100">Subscribe to the newsletter</div>
        <form class="flex flex-col sm:flex-row" action="/newsletters" method="POST">
            <div>
                @csrf
                <label class="sr-only" for="email-input">Email address</label>
                <input type="email"
                       autocomplete="email"
                       class="w-72 rounded-md px-4 focus:border-transparent focus:outline-none focus:ring-2 focus:ring-primary-600 dark:bg-black"
                       id="email-input"
                       name="email"
                       placeholder="Enter your email"
                       required>
            </div>
            <div class="mt-2 flex w-full rounded-md shadow-sm sm:mt-0 sm:ml-3">
                <button
                    class="w-full rounded-md bg-primary-500 py-2 px-4 font-medium text-white sm:py-0 hover:bg-primary-700 dark:hover:bg-primary-400 focus:outline-none focus:ring-2 focus:ring-primary-600 focus:ring-offset-2 dark:ring-offset-black"
                    type="submit">
                    Add Email
                </button>
            </div>
        </form>
        @if(session('email-added'))
            <div class="text-green-500">{{ session('email-added') }}</div>
        @endif
        @if(session('email-exists'))
            <div class="text-red-500">{{ session('email-exists') }}</div>
        @endif
    </div>
</div>
