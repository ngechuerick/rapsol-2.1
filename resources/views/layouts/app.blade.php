<!DOCTYPE html>
<html lang="en" x-data="{ dark: false }" :class="dark ? 'dark' : ''" x-cloak>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen font-sans antialiased transition-colors duration-300 bg-zinc-50 dark:bg-zinc-950 text-zinc-900 dark:text-zinc-300">

    {{-- Navigation --}}
    <x-navbar/>

    {{-- ═══ PAGE BODY ═══ --}}
    <div class="px-4 md:px-6">

        {{-- Bordered content column with diamond corner accents --}}
        <div class="max-w-5xl mx-auto border-x border-zinc-200 dark:border-zinc-800 min-h-screen transition-colors duration-300">
            @yield('content')
        </div>

    </div>


    <x-footer/>

</body>
</html>