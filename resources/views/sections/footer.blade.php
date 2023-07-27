<footer>
    <div class="mt-16 flex flex-col items-center">
        <div class="mb-3 flex space-x-4">
            <a class="text-sm text-gray-500 transition hover:text-gray-600"
               target="_blank"
               rel="noopener noreferrer"
               href="mailto:{{ config('socials.email') }}">
                <span class="sr-only">mail</span>
                <i class="ri-mail-line"></i>
            </a>
            <a class="text-sm text-gray-500 transition hover:text-gray-600"
               target="_blank"
               rel="noopener noreferrer"
               href="{{ config('socials.github') }}">
                <span class="sr-only">github</span>
                <i class="ri-github-fill"></i>
            </a>
            <a class="text-sm text-gray-500 transition hover:text-gray-600" target="_blank"
               rel="noopener noreferrer" href="{{ config('socials.linkedin') }}">
                <span class="sr-only">linkedin</span>
                <i class="ri-linkedin-box-fill"></i>
            </a>
            <a class="text-sm text-gray-500 transition hover:text-gray-600" target="_blank"
               rel="noopener noreferrer" href="{{ config('socials.twitter') }}">
                <span class="sr-only">twitter</span>
                <i class="ri-twitter-fill"></i>
            </a>
        </div>
        <div class="mb-2 flex space-x-2 text-sm text-gray-500 dark:text-gray-400">
            <div>Emad Malekpour</div>
            <div> •</div>
            <div>© 2023</div>
        </div>
    </div>
</footer>
