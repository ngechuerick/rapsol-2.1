<section class="relative border-t border-zinc-200 dark:border-zinc-800">
    <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
    <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>

    <div class="px-7 py-16">
        <div class="mb-10" data-animate>
            <div class="flex items-center gap-3 mb-4">
                <div class="w-8 h-px bg-amber-500"></div>
                <span class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400"
                    >Our Journey</span
                >
            </div>
            <h2
                class="font-display text-3xl md:text-4xl font-bold tracking-tight text-zinc-900 dark:text-white leading-tight"
            >
                Seven years of growth
            </h2>
        </div>

        <div class="relative pl-2">
            <div
                class="absolute left-2 top-2 bottom-2 w-0.5 bg-linear-to-b from-amber-500 via-amber-500/40 to-amber-500/10"
            ></div>

            @foreach ([
                ['2018','Founded in Nairobi',         'Three founders, one co-working desk, and a belief that East Africa deserved world-class technology and consulting. Our first engagement: a logistics startup\'s booking platform.', false],
                ['2019','Grew to a team of twelve',   'Moved into our first dedicated office in Westlands and built out our core engineering and advisory teams, taking on our first ten anchor clients.', false],
                ['2020','First tier-1 banking client','Landed our first major financial services engagement, proving our model at enterprise scale during a challenging year for the industry.', false],
                ['2022','Expanded across East Africa','Opened operations in Uganda and Tanzania, crossed 80 active clients, and launched our dedicated asset management arm.', false],
                ['2024','Recognised industry-wide',   'Named among East Africa\'s top consulting firms and earned CMA Kenya licensing for our financial advisory practice.', false],
                ['2025','120+ clients, 6 countries',  'Today we manage $2.4B in assets under advisory and have delivered 340+ projects with a 98% client retention rate.', true],
            ] as $i => [$year, $title, $desc, $current])
                <div class="relative pl-9 pb-8 last:pb-0" data-animate data-delay="{{ min($i + 1, 5) }}">
                    <div
                        class="absolute -left-2 top-0.5 w-4.5 h-4.5 rounded-full border-4 border-zinc-50 dark:border-zinc-950 bg-amber-500 z-10"
                    >
                        @if ($current)
                            <div class="absolute inset-0 rounded-full bg-amber-500 animate-ping opacity-40"></div>
                        @endif
                    </div>
                    <div class="text-sm font-bold text-amber-600 dark:text-amber-500 mb-1">
                        {{ $year }}
                        @if ($current)
                            <span
                                class="ml-2 px-2 py-0.5 rounded-full text-xs font-semibold bg-amber-100 dark:bg-amber-950/40 text-amber-700 dark:text-amber-400"
                                >Today</span
                            >
                        @endif
                    </div>
                    <h3 class="font-display font-semibold text-base text-zinc-900 dark:text-white mb-1.5">
                        {{ $title }}
                    </h3>
                    <p class="text-xs text-zinc-500 dark:text-zinc-400 leading-relaxed max-w-lg">{{ $desc }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
