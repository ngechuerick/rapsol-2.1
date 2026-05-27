@php
    $links = [
        ['label' => 'Home',    'route' => '/'],
        ['label' => 'About',   'route' => '/about'],
        ['label' => 'Work',    'route' => '/work'],
        ['label' => 'Blog',    'route' => '/blog'],
        ['label' => 'Contact', 'route' => '/contact'],
        ['label' => 'Gallery', 'route' => '/gallery'],
    ];
@endphp

<div x-data="{ open: false }">

    {{-- ══════════════════════════════════════
         STICKY HEADER
    ══════════════════════════════════════ --}}
    <header class="sticky top-0 z-50 border-b border-zinc-200 dark:border-zinc-800 backdrop-blur-md bg-white/70 dark:bg-zinc-950/70 transition-colors duration-300">

        {{-- Inner wrapper — matches body content column width exactly --}}
        <div class="max-w-5xl mx-auto px-5 border-x border-zinc-200 dark:border-zinc-800  flex items-center justify-between h-14
                        transition-colors duration-300">
       
                {{-- Logo --}}
                <a href="/"
                   class="flex items-center gap-2.5 font-display font-semibold text-[15px]
                          text-zinc-900 dark:text-white transition-colors duration-300 shrink-0">
                    <div class="w-6 h-6 rounded-md flex items-center justify-center shrink-0
                                bg-zinc-900 dark:bg-white transition-colors duration-300">
                        <div class="w-3 h-3 rounded-sm bg-white dark:bg-zinc-900 transition-colors duration-300"></div>
                    </div>
                    {{ config('app.name') }}
                </a>

                {{-- Desktop nav links --}}
                <nav class="hidden md:flex items-center gap-0.5" aria-label="Main navigation">
                    @foreach($links as $link)
                    <a href="{{ $link['route'] }}"
                       class="px-3.5 py-2 rounded-lg text-sm font-medium transition-all duration-200
                              {{ request()->is(ltrim($link['route'], '/') ?: '/')
                                    ? 'text-zinc-900 dark:text-white bg-zinc-100 dark:bg-white/8'
                                    : 'text-zinc-500 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-white/6' }}">
                        {{ $link['label'] }}
                    </a>
                    @endforeach
                </nav>

                {{-- Right side --}}
                <div class="flex items-center gap-2.5">

                    {{-- Dark/light label + toggle --}}
                    <div class="flex items-center gap-1.5">
                        <span class="font-mono text-[9px] text-zinc-400 dark:text-zinc-600 hidden sm:block"
                              x-text="dark ? 'dark' : 'light'"></span>
                        <button @click="dark = !dark"
                                aria-label="Toggle dark mode"
                                class="relative w-8 h-[18px] rounded-full border transition-all duration-300 shrink-0
                                       border-zinc-300 dark:border-zinc-700
                                       bg-zinc-100 dark:bg-zinc-800">
                            <span class="absolute top-[2px] w-[13px] h-[13px] rounded-full transition-all duration-300"
                                  :class="dark
                                      ? 'left-[17px] bg-zinc-400 dark:bg-zinc-400'
                                      : 'left-[2px] bg-zinc-900'"></span>
                        </button>
                

                    {{-- CTA — desktop only --}}
                    {{-- <a href="/contact"
                       class="hidden md:inline-flex items-center px-4 py-[7px] rounded-lg
                              text-xs font-medium transition-opacity duration-200 hover:opacity-80
                              bg-zinc-900 dark:bg-white text-white dark:text-zinc-900">
                        Get started
                    </a> --}}

                    {{-- Hamburger — mobile only --}}
                    <button @click="open = true"
                            class="md:hidden flex flex-col items-center justify-center gap-[5px]
                                   w-8 h-8 rounded-md border border-zinc-200 dark:border-zinc-800
                                   hover:bg-zinc-50 dark:hover:bg-zinc-900
                                   transition-all duration-200 shrink-0"
                            aria-label="Open menu">
                        <span class="block w-[14px] h-[1.5px] rounded-full bg-zinc-600 dark:bg-zinc-400"></span>
                        <span class="block w-[14px] h-[1.5px] rounded-full bg-zinc-600 dark:bg-zinc-400"></span>
                        <span class="block w-[10px] h-[1.5px] rounded-full bg-zinc-600 dark:bg-zinc-400 self-start"></span>
                    </button>

                </div>
            </div>
        </div>
    </header>


    {{-- ══════════════════════════════════════
         MOBILE DRAWER — slides in from LEFT
    ══════════════════════════════════════ --}}

    {{-- Backdrop --}}
    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="open = false"
         class="fixed inset-0 z-50 bg-black/40 backdrop-blur-sm md:hidden"
         style="display: none;"
         aria-hidden="true">
    </div>

    {{-- Drawer panel --}}
    <div x-show="open"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="-translate-x-full"
         x-transition:enter-end="translate-x-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="translate-x-0"
         x-transition:leave-end="-translate-x-full"
         class="fixed inset-y-0 left-0 z-50 w-72 flex flex-col
                bg-white dark:bg-zinc-950
                border-r border-zinc-200 dark:border-zinc-800
                shadow-xl transition-colors duration-300 md:hidden"
         style="display: none;"
         @keydown.escape.window="open = false">

        {{-- Drawer header --}}
        <div class="flex items-center justify-between px-5 h-[52px]
                    border-b border-zinc-100 dark:border-zinc-900">
            <a href="/"
               @click="open = false"
               class="flex items-center gap-2.5 font-display font-semibold text-[15px]
                      text-zinc-900 dark:text-white">
                <div class="w-6 h-6 rounded-md flex items-center justify-center
                            bg-zinc-900 dark:bg-white transition-colors duration-300">
                    <div class="w-3 h-3 rounded-sm bg-white dark:bg-zinc-900 transition-colors duration-300"></div>
                </div>
                {{ config('app.name') }}
            </a>

            {{-- Close button --}}
            <button @click="open = false"
                    class="w-8 h-8 rounded-md border border-zinc-200 dark:border-zinc-800
                           flex items-center justify-center
                           text-zinc-500 dark:text-zinc-400
                           hover:bg-zinc-50 dark:hover:bg-zinc-900
                           transition-all duration-200"
                    aria-label="Close menu">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M18 6L6 18M6 6l12 12"/>
                </svg>
            </button>
        </div>

        {{-- Drawer links --}}
        <nav class="flex-1 px-3 py-4 overflow-y-auto" aria-label="Mobile navigation">
            @foreach($links as $link)
            <a href="{{ $link['route'] }}"
               @click="open = false"
               class="flex items-center justify-between px-4 py-3 rounded-lg mb-1
                      text-sm font-medium transition-all duration-200
                      {{ request()->is(ltrim($link['route'], '/') ?: '/')
                            ? 'text-zinc-900 dark:text-white bg-zinc-100 dark:bg-zinc-800'
                            : 'text-zinc-500 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-50 dark:hover:bg-zinc-800/60' }}">
                {{ $link['label'] }}
                <svg class="w-3.5 h-3.5 opacity-30" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M9 18l6-6-6-6"/>
                </svg>
            </a>
            @endforeach
        </nav>

        {{-- Drawer footer --}}
        <div class="px-5 py-5 border-t border-zinc-100 dark:border-zinc-900 space-y-3">

            {{-- Dark toggle row --}}
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="font-mono text-[10px] text-zinc-400 dark:text-zinc-600"
                          x-text="dark ? 'dark mode' : 'light mode'"></span>
                </div>
                <button @click="dark = !dark"
                        aria-label="Toggle dark mode"
                        class="relative w-9 h-5 rounded-full border transition-all duration-300
                               border-zinc-300 dark:border-zinc-700
                               bg-zinc-100 dark:bg-zinc-800">
                    <span class="absolute top-[3px] w-[14px] h-[14px] rounded-full transition-all duration-300"
                          :class="dark ? 'left-[19px] bg-zinc-400' : 'left-[3px] bg-zinc-900'"></span>
                </button>
            </div>

            {{-- CTA --}}
            <a href="/contact"
               @click="open = false"
               class="flex items-center justify-center w-full py-2.5 rounded-lg
                      text-sm font-medium transition-opacity hover:opacity-85
                      bg-zinc-900 dark:bg-white text-white dark:text-zinc-900">
                Get started →
            </a>
        </div>

    </div>

</div>