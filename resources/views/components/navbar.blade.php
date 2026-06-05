@php
    $links = [
        ['label' => 'Home',    'route' => '/'],
        ['label' => 'About',   'route' => '/about'],
        ['label' => 'Services',    'route' => '/services'],
        ['label' => 'Gallery',    'route' => '/gallery'],
        ['label' => 'Blog',    'route' => '/blog'],
        ['label' => 'Contact', 'route' => '/contact'],
    ];
@endphp

{{-- ══════════════════════════════════════
     STICKY HEADER
     No wrapping div — sticky works directly
══════════════════════════════════════ --}}
<header
    class="sticky top-0 z-40 border-b border-zinc-200 dark:border-zinc-800 bg-white/90 dark:bg-zinc-950/90 backdrop-blur-md transition-colors duration-300"
>
    <div class="max-w-7xl mx-auto">
        <div
            class="border-x border-zinc-200 dark:border-zinc-800 px-5 h-13 flex items-center justify-between transition-colors duration-300"
        >
            {{-- Logo --}}
            <a href="/" class="flex items-center shrink-0">
                {{-- Light mode logo --}}
                <img
                    src="{{ asset('images/logo-dark.svg') }}"
                    alt="{{ config('app.name') }}"
                    class="h-12 w-auto dark:hidden"
                    loading="eager"
                />
                {{-- Dark mode logo --}}
                <img
                    src="{{ asset('images/logo-light.svg') }}"
                    alt="{{ config('app.name') }}"
                    class="h-12 w-auto hidden dark:block"
                    loading="eager"
                />
            </a>

            {{-- Desktop links --}}
            <nav class="hidden md:flex items-center gap-0.5" aria-label="Primary navigation">
                @foreach ($links as $link)
                    <a
                        href="{{ $link['route'] }}"
                        class="px-3.5 py-2 rounded-lg text-sm font-medium transition-all duration-200
                          {{ request()->is(ltrim($link['route'], '/') ?: '/')
                              ? 'text-zinc-900 dark:text-white bg-zinc-100 dark:bg-zinc-800'
                              : 'text-zinc-500 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800/60' }}"
                    >
                        {{ $link['label'] }}
                    </a>
                @endforeach
            </nav>

            {{-- Right: toggle + CTA + hamburger --}}
            <div class="flex items-center gap-2.5">
                {{-- Dark/light toggle --}}
                {{-- <div class="flex items-center gap-1.5">
                    <span
                        class="font-mono text-[9px] text-zinc-400 dark:text-zinc-600 hidden sm:block"
                        x-text="dark ? 'dark' : 'light'"
                    ></span>
                    <button
                        @click="dark = !dark"
                        aria-label="Toggle dark mode"
                        class="relative w-8 h-4.5 rounded-full border shrink-0 transition-all duration-300 border-zinc-300 dark:border-zinc-700 bg-zinc-100 dark:bg-zinc-800"
                    >
                        <span
                            class="absolute top-0.5 w-3.25 h-3.25 rounded-full transition-all duration-300"
                            :class="dark ? 'left-4.25 bg-zinc-400' : 'left-0.5 bg-zinc-900'"
                        ></span>
                    </button>
                </div> --}}

                {{-- Dark/light toggle --}}
                <div class="flex items-center gap-1.5">
                    <button
                        @click="dark = !dark"
                        aria-label="Toggle dark mode"
                        class="relative w-8 h-4.5 rounded-full border shrink-0 transition-all duration-300 border-zinc-300 dark:border-zinc-700 bg-zinc-100 dark:bg-zinc-800"
                    >
                        <span
                            class="absolute top-0.5 w-3.25 h-3.25 rounded-full transition-all duration-300 flex items-center justify-center"
                            :class="dark ? 'left-4.25 bg-zinc-700' : 'left-0.5 bg-black-pearl-950'"
                        >
                            {{-- Sun — shown in light mode --}}
                            <svg
                                x-show="!dark"
                                class="w-2.25 h-2.25 text-white"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path d="M12 2.25a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-1.5 0V3a.75.75 0 0 1 .75-.75ZM7.5 12a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM18.894 6.166a.75.75 0 0 0-1.06-1.06l-1.591 1.59a.75.75 0 1 0 1.06 1.061l1.591-1.59ZM21.75 12a.75.75 0 0 1-.75.75h-2.25a.75.75 0 0 1 0-1.5H21a.75.75 0 0 1 .75.75ZM17.834 18.894a.75.75 0 0 0 1.06-1.06l-1.59-1.591a.75.75 0 1 0-1.061 1.06l1.59 1.591ZM12 18a.75.75 0 0 1 .75.75V21a.75.75 0 0 1-1.5 0v-2.25A.75.75 0 0 1 12 18ZM7.758 17.303a.75.75 0 0 0-1.061-1.06l-1.591 1.59a.75.75 0 0 0 1.06 1.061l1.591-1.59ZM6 12a.75.75 0 0 1-.75.75H3a.75.75 0 0 1 0-1.5h2.25A.75.75 0 0 1 6 12ZM6.697 7.757a.75.75 0 0 0 1.06-1.06l-1.59-1.591a.75.75 0 0 0-1.061 1.06l1.59 1.591Z" />
                            </svg>

                            {{-- Moon — shown in dark mode --}}
                            <svg
                                x-show="dark"
                                class="w-[9px] h-[9px] text-zinc-200"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 0 1 .162.819A8.97 8.97 0 0 0 9 6a9 9 0 0 0 9 9 8.97 8.97 0 0 0 3.463-.69.75.75 0 0 1 .981.98 10.503 10.503 0 0 1-9.694 6.46c-5.799 0-10.5-4.7-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 0 1 .818.162Z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    </button>
                </div>

                {{-- Hamburger — mobile only --}}
                <button
                    @click="navOpen = true"
                    class="md:hidden w-8 h-8 flex flex-col items-center justify-center gap-1.25 rounded-md border border-zinc-200 dark:border-zinc-800 hover:bg-zinc-50 dark:hover:bg-zinc-900 shrink-0 transition-all duration-200"
                    aria-label="Open navigation menu"
                >
                    <span class="w-3.5 h-[1.5px] rounded-full bg-zinc-600 dark:bg-zinc-400"></span>
                    <span class="w-3.5 h-[1.5px] rounded-full bg-zinc-600 dark:bg-zinc-400"></span>
                    <span class="w-2.5 h-[1.5px] rounded-full bg-zinc-600 dark:bg-zinc-400 mr-auto"></span>
                </button>
            </div>
        </div>
    </div>
</header>

{{-- ══════════════════════════════════════
     MOBILE DRAWER — fixed, slides from left
     Uses navOpen from <html> x-data
══════════════════════════════════════ --}}

{{-- Backdrop --}}
<div
    x-show="navOpen"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    @click="navOpen = false"
    class="fixed inset-0 z-50 bg-black/50 backdrop-blur-sm md:hidden"
    style="display: none"
    aria-hidden="true"
></div>

{{-- Drawer --}}
<div
    x-show="navOpen"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="-translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="-translate-x-full"
    @keydown.escape.window="navOpen = false"
    class="fixed inset-y-0 left-0 z-50 w-72 flex flex-col md:hidden bg-white dark:bg-zinc-950 border-r border-zinc-200 dark:border-zinc-800 shadow-2xl transition-colors duration-300"
    style="display: none"
>
    {{-- Drawer header --}}
    <div
        class="flex items-center justify-between px-5 h-13 shrink-0 border-b border-zinc-100 dark:border-zinc-900 transition-colors duration-300"
    >
        <a
            href="/"
            @click="navOpen = false"
            class="flex items-center gap-2.5 font-display font-semibold text-[15px] text-zinc-900 dark:text-white"
        >
            <div
                class="w-6 h-6 rounded-md flex items-center justify-center bg-zinc-900 dark:bg-white transition-colors duration-300"
            >
                <div class="w-3 h-3 rounded-sm bg-white dark:bg-zinc-900 transition-colors duration-300"></div>
            </div>
            {{ config('app.name') }}
        </a>

        {{-- Close X button --}}
        <button
            @click="navOpen = false"
            class="w-8 h-8 rounded-md border border-zinc-200 dark:border-zinc-800 flex items-center justify-center text-zinc-500 dark:text-zinc-400 hover:bg-zinc-50 dark:hover:bg-zinc-900 transition-all duration-200"
            aria-label="Close menu"
        >
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M18 6L6 18M6 6l12 12" />
            </svg>
        </button>
    </div>

    {{-- Drawer links --}}
    <nav class="flex-1 px-3 py-3 overflow-y-auto" aria-label="Mobile navigation">
        @foreach ($links as $link)
            <a
                href="{{ $link['route'] }}"
                @click="navOpen = false"
                class="flex items-center justify-between px-4 py-3 rounded-lg mb-1
                  text-sm font-medium transition-all duration-200
                  {{ request()->is(ltrim($link['route'], '/') ?: '/')
                      ? 'text-zinc-900 dark:text-white bg-zinc-100 dark:bg-zinc-800'
                      : 'text-zinc-500 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-50 dark:hover:bg-zinc-800/60' }}"
            >
                {{ $link['label'] }}
                <svg class="w-3.5 h-3.5 opacity-25" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M9 18l6-6-6-6" />
                </svg>
            </a>
        @endforeach
    </nav>

    {{-- Drawer footer --}}
    <div
        class="px-5 py-5 space-y-3 border-t border-zinc-100 dark:border-zinc-900 shrink-0 transition-colors duration-300"
    >
        {{-- Mode toggle --}}
        <div class="flex items-center justify-between">
            <span
                class="font-mono text-[10px] text-zinc-400 dark:text-zinc-600"
                x-text="dark ? 'Dark mode' : 'Light mode'"
            ></span>
            <button
                @click="dark = !dark"
                class="relative w-9 h-5 rounded-full border transition-all duration-300 border-zinc-300 dark:border-zinc-700 bg-zinc-100 dark:bg-zinc-800"
            >
                <span
                    class="absolute top-0.75 w-3.5 h-3.5 rounded-full transition-all duration-300"
                    :class="dark ? 'left-4.75 bg-zinc-400' : 'left-0.75 bg-zinc-900'"
                ></span>
            </button>
        </div>

        {{-- CTA --}}
        <a
            href="/contact"
            @click="navOpen = false"
            class="flex items-center justify-center w-full py-2.5 rounded-lg text-sm font-medium transition-opacity hover:opacity-85 bg-zinc-900 dark:bg-white text-white dark:text-zinc-900"
        >
            Get started →
        </a>
    </div>
</div>
