<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      x-data="base"
      :class="darkMode ? 'dark' : ''">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @hasSection('title')
            @yield('title')
        @else
            My Coding Journey
        @endif
    </title>
    @hasSection('meta')
        @yield('meta')
    @else
    @endif
    @livewireStyles
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="dark:bg-black">

<div class="mx-auto max-w-3xl px-4 sm:px-6 xl:max-w-5xl xl:px-0">
    @include('sections.header')
    <main class="flex justify-center items-center" style="min-height: 60vh">
        @yield('body')
    </main>
    @include('sections.footer')
</div>

@livewireScripts

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('base', () => ({
            darkMode: false,
            init() {
                // this.darkMode = new Date().getHours() >= 18 || new Date().getHours() <= 6;
            },
            enableDarkMode() {
                this.darkMode = true
            },
            disableDarkMode() {
                this.darkMode = false
            }
        }))
    })
</script>
</body>
</html>
