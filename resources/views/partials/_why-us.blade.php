{{-- ══════════════════════════════════════════════════════════
     WHY US SECTION
     Asymmetric split: bold left statement + stacked right pillars
     Unique: large number as background design element
══════════════════════════════════════════════════════════ --}}

<section id="why-us" class="relative border-t border-shark-200 dark:border-shark-800 overflow-hidden">
    <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700 z-10"></div>
    <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700 z-10"></div>

    {{-- Background: large ambient text --}}
    <div
        class="absolute top-8 right-4 font-display font-black text-[140px] leading-none text-shark-100 dark:text-shark-900 select-none pointer-events-none opacity-60 dark:opacity-100"
        aria-hidden="true"
    >
        RTC
    </div>

    <div class="relative px-7 py-16 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
        {{-- Left: Statement --}}
        <div data-animate>
            <p class="font-mono text-[10px] font-semibold uppercase tracking-[0.15em] text-amber-600 dark:text-amber-500 mb-4">— Why Rapsoltech Consulting</p>
            <h2
                class="font-display text-3xl md:text-4xl font-bold tracking-tight text-shark-900 dark:text-white leading-tight mb-6"
            >
                Built for Africa.<br />Designed for Growth.
            </h2>
            <p class="text-base text-shark-500 dark:text-shark-400 leading-relaxed mb-10 max-w-sm">We're not a generic agency. We're a Kenyan-rooted firm that understands local markets while deploying world-class methodologies since 2020.</p>

            {{-- Key metric --}}
            <div
                class="border border-shark-200 dark:border-shark-800 rounded-xl p-6 bg-white dark:bg-shark-900/40 inline-block"
            >
                <div class="font-display text-5xl font-black text-shark-900 dark:text-white mb-1">
                    100<span class="text-amber-500">%</span>
                </div>
                <div class="text-xs text-shark-500 dark:text-shark-400 font-medium">Projects & Solution delivery</div>
            </div>

            {{-- Quote --}}
            <div class="mt-8 pl-4">
                <p class="text-sm text-shark-600 dark:text-shark-400 italic leading-relaxed">"Rapsoltech Consulting doesn't just deliver projects they become strategic partners in our growth journey."</p>
                <p class="text-xs text-shark-400 dark:text-shark-600 mt-2 font-mono">— CTO, HDF Kenya</p>
            </div>
        </div>

        {{-- Right: Differentiator pillars --}}
        <div class="space-y-3" data-animate data-delay="2">
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
                    'desc' => 'CMA Kenya licensed, CBK-compliant, and ICT Authority registered. Your assets and data are in safe, accountable hands.',
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
                    class="group flex items-start gap-4 p-4 rounded-xl border border-transparent hover:border-shark-200 dark:hover:border-shark-800 hover:bg-white dark:hover:bg-shark-900/40 transition-all duration-300 cursor-default"
                    data-animate
                    data-delay="{{ $i + 2 }}"
                >
                    <div
                        class="w-9 h-9 rounded-lg bg-shark-100 dark:bg-shark-800 flex items-center justify-center shrink-0 group-hover:bg-amber-50 dark:group-hover:bg-amber-950/30 transition-colors duration-300"
                    >
                        <svg
                            class="w-4 h-4 text-shark-500 dark:text-shark-400 group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors duration-300"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.5"
                            viewBox="0 0 24 24"
                        >
                            {!! $pillar['icon'] !!}
                        </svg>
                    </div>

                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="font-display font-semibold text-sm text-shark-900 dark:text-white">
                                {{ $pillar['title'] }}
                            </h3>
                            <span
                                class="font-bold text-[9px] text-shark-400 dark:text-shark-600 ml-2 shrink-0"
                                >{{ $pillar['stat'] }}</span
                            >
                        </div>
                        <p class="text-xs text-shark-500 dark:text-shark-400 leading-relaxed">{{ $pillar['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
