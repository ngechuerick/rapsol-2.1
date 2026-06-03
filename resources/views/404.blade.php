@extends ('layouts.app')
@section ('title', '404 — Page Not Found · Nexus Africa')

@section ('content')
    <div class="relative min-h-[70vh] flex flex-col items-center justify-center px-7 py-24 overflow-hidden text-center">
        {{-- Grid background --}}
        <div
            class="absolute inset-0 -z-10 bg-[linear-gradient(rgba(161,161,170,0.14)_1px,transparent_1px),linear-gradient(90deg,rgba(161,161,170,0.14)_1px,transparent_1px)] dark:bg-[linear-gradient(rgba(255,255,255,0.04)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.04)_1px,transparent_1px)] bg-size-[40px_40px]"
        ></div>

        {{-- Diamond corners --}}
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -bottom-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -bottom-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>

        {{-- Large ambient 404 --}}
        <div
            class="absolute inset-0 flex items-center justify-center pointer-events-none select-none"
            aria-hidden="true"
        >
            <span
                class="font-display font-black text-[200px] md:text-[280px] leading-none text-zinc-100 dark:text-zinc-900 transition-colors duration-300"
            >
                404
            </span>
        </div>

        {{-- Content --}}
        <div class="relative z-10" data-animate>
            <div class="flex items-center justify-center gap-3 mb-8">
                <div class="w-8 h-px bg-amber-500"></div>
                <span class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                    Page not found
                </span>
                <div class="w-8 h-px bg-amber-500"></div>
            </div>

            <h1 class="font-display text-3xl md:text-4xl font-black tracking-tight text-zinc-900 dark:text-white mb-4">
                This page doesn't exist.
            </h1>

            <p class="text-base text-zinc-500 dark:text-zinc-400 leading-relaxed max-w-md mx-auto mb-10">The page you're looking for may have been moved, renamed, or never existed. Let's get you somewhere useful.</p>

            {{-- Quick links --}}
            <div class="flex flex-col sm:flex-row items-center justify-center gap-3 mb-12">
                <a
                    href="/"
                    class="inline-flex items-center gap-2 px-6 py-3 rounded-lg font-display font-semibold text-sm bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 hover:opacity-85 transition-all duration-200 hover:-translate-y-0.5"
                >
                    Back to home
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a>
                <a
                    href="/contact"
                    class="inline-flex items-center gap-2 px-6 py-3 rounded-lg font-display font-semibold text-sm border border-zinc-200 dark:border-zinc-700 text-zinc-700 dark:text-zinc-300 hover:bg-zinc-50 dark:hover:bg-zinc-900 transition-all duration-200 hover:-translate-y-0.5"
                >
                    Contact us
                </a>
            </div>

            {{-- Suggested pages --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 max-w-xl mx-auto">
                @foreach ([
                ['Services',  '/services',  '<path d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z"/>'],
                ['About',     '/about',     '<path d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"/>'],
                ['Blog',      '/blog',      '<path d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25"/>'],
                ['Contact',   '/contact',  '<path d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>'],
            ] as [$label, $href, $icon])
                    <a
                        href="{{ $href }}"
                        class="group flex flex-col items-center gap-2 p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-900/40 text-zinc-500 dark:text-zinc-400 hover:border-amber-300 dark:hover:border-amber-700 hover:text-amber-600 dark:hover:text-amber-400 transition-all duration-300 hover:-translate-y-0.5"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            {!! $icon !!}
                        </svg>
                        <span class="text-xs font-semibold">{{ $label }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

@endsection
