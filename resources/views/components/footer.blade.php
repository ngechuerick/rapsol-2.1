<footer class="mt-3 bg-zinc-900 dark:bg-zinc-950 text-zinc-400 transition-colors duration-300">
    <div class="max-w-5xl mx-auto px-6">
        {{-- border-x border-zinc-200 dark:border-zinc-800 --}}
        {{-- ── TOP GRID ── --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 py-14">
            {{-- Brand --}}
            <div class="sm:col-span-2 lg:col-span-1">
                <div class="flex items-center gap-2.5 mb-4">
                    <div class="w-7 h-7 rounded-lg bg-white flex items-center justify-center shrink-0">
                        <div class="w-3.5 h-3.5 rounded-sm bg-zinc-900"></div>
                    </div>
                    <span class="font-display font-semibold text-[15px] text-white"> {{ config('app.name') }} </span>
                </div>
                <p class="text-sm leading-relaxed opacity-50 mb-6 max-w-[200px]">Building world-class web experiences that create lasting results for people and teams.</p>
                {{-- Social links --}}
                <div class="flex items-center gap-2.5">
                    @foreach ([
                        ['Twitter',  'https://twitter.com',  '<path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>'],
                        ['GitHub',   'https://github.com',   '<path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>'],
                        ['LinkedIn', 'https://linkedin.com', '<path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>'],
                        ['Discord',  'https://discord.com',  '<path d="M20.317 4.37a19.791 19.791 0 00-4.885-1.515.074.074 0 00-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 00-5.487 0 12.64 12.64 0 00-.617-1.25.077.077 0 00-.079-.037A19.736 19.736 0 003.677 4.37a.07.07 0 00-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 00.031.057 19.9 19.9 0 005.993 3.03.078.078 0 00.084-.028c.462-.63.874-1.295 1.226-1.994a.076.076 0 00-.041-.106 13.107 13.107 0 01-1.872-.892.077.077 0 01-.008-.128 10.2 10.2 0 00.372-.292.074.074 0 01.077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 01.078.01c.12.098.246.198.373.292a.077.077 0 01-.006.127 12.299 12.299 0 01-1.873.892.077.077 0 00-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 00.084.028 19.839 19.839 0 006.002-3.03.077.077 0 00.032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 00-.031-.03z"/>'],
                    ] as [$name, $href, $path])
                        <a
                            href="{{ $href }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="{{ $name }}"
                            class="w-8 h-8 rounded-lg border border-white/10 flex items-center justify-center text-zinc-500 hover:text-white hover:border-white/25 hover:bg-white/5 transition-all duration-200"
                        >
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">{!! $path !!}</svg>
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- Navigation --}}
            <div>
                <h4
                    class="font-mono text-[10px] font-semibold uppercase tracking-[0.12em] text-zinc-600 dark:text-zinc-700 mb-5"
                >
                    Navigation
                </h4>
                <ul class="space-y-3">
                    @foreach ([
                        'Home'    => '/',
                        'About'   => '/about',
                        'Work'    => '/work',
                        'Blog'    => '/blog',
                        'Contact' => '/contact',
                    ] as $label => $href)
                        <li>
                            <a
                                href="{{ $href }}"
                                class="text-sm text-zinc-500 hover:text-white transition-colors duration-200"
                            >
                                {{ $label }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Legal --}}
            <div>
                <h4
                    class="font-mono text-[10px] font-semibold uppercase tracking-[0.12em] text-zinc-600 dark:text-zinc-700 mb-5"
                >
                    Legal
                </h4>
                <ul class="space-y-3">
                    @foreach ([
                        'Privacy Policy'   => '/privacy',
                        'Terms of Service' => '/terms',
                        'Cookie Policy'    => '/cookies',
                        'Licenses'         => '/licenses',
                    ] as $label => $href)
                        <li>
                            <a
                                href="{{ $href }}"
                                class="text-sm text-zinc-500 hover:text-white transition-colors duration-200"
                            >
                                {{ $label }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Newsletter --}}
            <div>
                <h4
                    class="font-mono text-[10px] font-semibold uppercase tracking-[0.12em] text-zinc-600 dark:text-zinc-700 mb-5"
                >
                    Stay Updated
                </h4>
                <p class="text-sm text-zinc-500 leading-relaxed mb-5">Get updates on new projects and articles delivered to your inbox.</p>
                <form class="space-y-2">
                    @csrf
                    <input
                        type="email"
                        name="email"
                        placeholder="your@email.com"
                        required
                        class="w-full px-4 py-2.5 rounded-lg text-sm bg-white/[0.04] border border-white/[0.08] text-zinc-300 placeholder-zinc-600 focus:outline-none focus:border-white/20 transition-colors duration-200"
                    />
                    <button
                        type="submit"
                        class="w-full py-2.5 rounded-lg text-sm font-medium bg-white text-zinc-900 hover:bg-zinc-100 transition-colors duration-200"
                    >
                        Subscribe →
                    </button>
                </form>
            </div>
        </div>

        {{-- ── BOTTOM BAR ── --}}
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 py-6 border-t border-white/6">
            <span class="font-mono text-[10px] text-zinc-700 dark:text-zinc-800">
                &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
            </span>
            <div class="flex items-center gap-5">
                <a href="/privacy" class="text-[11px] text-zinc-600 hover:text-zinc-400 transition-colors">Privacy</a>
                <a href="/terms" class="text-[11px] text-zinc-600 hover:text-zinc-400 transition-colors">Terms</a>
                <span class="font-mono text-[10px] text-zinc-700 dark:text-zinc-800">
                    Uptime <span class="animate-pulse text-green-400">•</span>
                </span>
            </div>
        </div>
    </div>
</footer>
