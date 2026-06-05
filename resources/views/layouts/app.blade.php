<!DOCTYPE html>
<html
    lang="en"
    x-data="{
        dark: localStorage.getItem('theme') === 'dark',
        navOpen: false,
    }"
    :class="dark ? 'dark' : ''"
    x-init="$watch('dark', (v) => localStorage.setItem('theme', v ? 'dark' : 'light'))"
>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield ('title', config('app.name'))</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}" />
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('site.webmanifest') }}" />
    @vite (['resources/css/app.css', 'resources/js/app.js'])
</head>
<body
    class="min-h-screen font-sans antialiased transition-colors duration-300 bg-zinc-50 dark:bg-zinc-950 text-zinc-900 dark:text-zinc-300"
>
    {{-- Navigation --}}
    <x-navbar />

    {{-- ═══ PAGE BODY ═══ --}}
    <div class="px-4 md:px-6">
        {{-- Bordered content column with diamond corner accents --}}
        <div
            class="max-w-7xl mx-auto border-x border-zinc-200 dark:border-zinc-800 min-h-screen transition-colors duration-300"
        >
            @yield ('content')
        </div>
    </div>
    {{-- Cookie banner — must be outside the content column, at body level --}}
    <x-cookie-banner />

    <x-footer />
    @stack ('scripts')
</body>
</html>
