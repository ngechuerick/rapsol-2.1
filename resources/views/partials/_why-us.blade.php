{{-- ══════════════════════════════════════════════════════════
     WHY US SECTION
     Editorial three-band layout:
       1. Header    — statement left, lead paragraph offset right
       2. Pillars   — 4-up hairline grid, stat promoted to a kicker
       3. Close     — headline metric beside the client pull quote
     Content is unchanged from the previous version; this is layout,
     rhythm and spacing only.
══════════════════════════════════════════════════════════ --}}

<section id="why-us" class="relative border-t border-shark-200 dark:border-shark-800 overflow-hidden">
    <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700 z-10"></div>
    <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700 z-10"></div>

    {{-- Background: large ambient text. Tucked into the top-right corner and
         clipped by the section edge, so it reads as texture behind the header
         instead of sitting on top of a pillar heading. --}}
    <div
        class="hidden md:block absolute -top-8 right-6 font-display font-black text-[8.75rem] leading-none text-shark-100 dark:text-shark-900 select-none pointer-events-none opacity-60 dark:opacity-100"
        aria-hidden="true"
    >
        RTC
    </div>

    <div class="relative px-7 md:px-12 lg:px-16 py-20 md:py-28">
        {{-- ═══ 1. HEADER ═══ --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-y-8 gap-x-12 mb-20 md:mb-24">
            <div class="lg:col-span-7" data-animate>
                <p class="font-mono text-xs font-semibold uppercase tracking-[0.15em] text-black-pearl-950 dark:text-gold-400 mb-5">— Why Rapsoltech Consulting</p>
                <h2
                    class="font-display text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight text-shark-900 dark:text-white leading-[1.1]"
                >
                    Built for Africa.<br />Designed for Growth.
                </h2>
            </div>

            {{-- Lead sits bottom-aligned in the far right columns, so the
                 heading gets the whole left field to itself. --}}
            <div class="lg:col-span-4 lg:col-start-9 flex lg:items-end" data-animate data-delay="1">
                <p class="text-base text-shark-600 dark:text-shark-400 leading-relaxed">We're not a generic agency. We're a Kenyan-rooted firm that understands local markets while deploying world-class methodologies since 2020.</p>
            </div>
        </div>

        {{-- ═══ 2. PILLARS ═══ --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-x-8 lg:gap-x-12 gap-y-14">
            @foreach ([
                [
                    'icon' => '<path d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/>',
                    'title' => 'Local Expertise, Global Standards',
                    'desc' => 'Deep roots in Kenya\'s regulatory, financial, and tech ecosystem  paired with ISO, ITIL, CFA, and PMP frameworks.',
                    'stat' => '7+ yrs',
                ],
                [
                    'icon' => '<path d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/>',
                    'title' => 'Regulated & Trusted',
                    'desc' => ' Your assets and data are in safe, accountable hands.',
                    'stat' => '3 licenses',
                ],
                [
                    'icon' => '<path d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z"/>',
                    'title' => 'End-to-End Execution',
                    'desc' => 'Strategy without execution is just theory. We take your vision from whiteboard to live product  no handoffs to third parties.',
                    'stat' => '340+ projects',
                ],
                [
                    'icon' => '<path d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z"/>',
                    'title' => 'Senior-Led Delivery',
                    'desc' => 'No juniors running your accounts. Every engagement is led by experienced principals with 8+ years in their domain.',
                    'stat' => '8+ yrs avg',
                ],
            ] as $i => $pillar)
                <div
                    class="group border-t border-shark-200 dark:border-shark-800 pt-7 hover:border-black-pearl-700 dark:hover:border-gold-400 transition-colors duration-300"
                    data-animate
                    data-delay="{{ $i + 1 }}"
                >
                    <div
                        class="w-11 h-11 rounded-lg bg-black-pearl-100 dark:bg-black-pearl-900 flex items-center justify-center mb-6 group-hover:bg-black-pearl-200 dark:group-hover:bg-black-pearl-800 transition-colors duration-300"
                    >
                        <svg
                            class="w-5 h-5 text-black-pearl-700 dark:text-black-pearl-50"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.5"
                            viewBox="0 0 24 24"
                        >
                            {!! $pillar['icon'] !!}
                        </svg>
                    </div>

                    {{-- Stat is now the kicker rather than a cramped right-aligned aside --}}
                    <p
                        class="font-mono text-xs font-bold uppercase tracking-[0.15em] text-black-pearl-700 dark:text-gold-400 mb-2.5"
                    >
                        {{ $pillar['stat'] }}
                    </p>

                    <h3 class="font-display font-bold text-lg text-shark-900 dark:text-white leading-snug mb-3">
                        {{ $pillar['title'] }}
                    </h3>

                    <p class="text-sm text-shark-600 dark:text-shark-400 leading-relaxed">{{ $pillar['desc'] }}</p>
                </div>
            @endforeach
        </div>

        {{-- ═══ 3. CLOSE — metric + pull quote ═══ --}}
        <div
            class="mt-20 md:mt-24 pt-14 border-t border-shark-200 dark:border-shark-800 grid grid-cols-1 lg:grid-cols-12 gap-y-12 gap-x-12"
        >
            <div class="lg:col-span-3" data-animate>
                <div class="font-display text-6xl font-black text-shark-900 dark:text-white leading-none mb-3">
                    100<span class="text-black-pearl-950 dark:text-gold-400">%</span>
                </div>
                <div class="text-sm text-shark-600 dark:text-shark-400 font-medium">Projects &amp; Solution delivery</div>
            </div>

            {{-- The quote was a footnote under the metric; it now carries the
                 close of the section at pull-quote scale. --}}
            <blockquote class="lg:col-span-8 lg:col-start-5" data-animate data-delay="1">
                <p
                    class="font-display text-xl md:text-2xl font-medium text-shark-800 dark:text-shark-200 leading-relaxed italic"
                >"Rapsoltech Consulting doesn't just deliver projects they become strategic partners in our growth journey."</p>
                <footer class="mt-5 flex items-center gap-3">
                    <span class="w-6 h-px bg-black-pearl-700 dark:bg-gold-400 shrink-0"></span>
                    <span class="font-mono text-sm text-shark-600 dark:text-shark-400">CTO, HDF Kenya</span>
                </footer>
            </blockquote>
        </div>
    </div>
</section>
