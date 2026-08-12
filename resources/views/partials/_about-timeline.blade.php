<section class="relative border-t border-shark-200 dark:border-shark-800">
    <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700"></div>
    <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700"></div>

    <div class="px-7 py-16">
        <div class="mb-10" data-animate>
            <div class="flex items-center gap-3 mb-4">
                <span class="text-sm font-semibold uppercase tracking-[0.2em] text-shark-500 dark:text-shark-400"
                    >Our Journey</span
                >
            </div>
            <h2
                class="font-display text-3xl md:text-4xl font-bold tracking-tight text-shark-900 dark:text-white leading-tight"
            >
                Seven years of growth
            </h2>
        </div>

        <div class="relative pl-2">
            <div
                class="absolute left-2 top-2 bottom-2 w-0.5 bg-linear-to-b from-gold-400 via-gold-400/40 to-gold-400/10"
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
                        class="absolute -left-2 top-0.5 w-4.5 h-4.5 rounded-full border-4 border-shark-50 dark:border-shark-950 dark:bg-gold-400 z-10 bg-black-pearl-950"
                    >
                        {{-- @if ($current)
                            <div class="absolute inset-0 rounded-full bg-gold-400 animate-ping opacity-40"></div>
                        @endif --}}
                    </div>
                    <div class="text-sm font-bold text-black-pearl-950 dark:text-gold-400 mb-1">
                        {{ $year }}
                        @if ($current)
                            <span
                                class="ml-2 px-2 py-0.5 rounded-full text-sm font-semibold bg-black-pearl-200 dark:bg-gold-950/40 text-black-pearl-950 dark:text-gold-400"
                                >Today</span
                            >
                        @endif
                    </div>
                    <h3 class="font-display font-semibold text-base text-shark-900 dark:text-white mb-1.5">
                        {{ $title }}
                    </h3>
                    <p class="text-sm text-shark-500 dark:text-shark-400 leading-relaxed max-w-lg">{{ $desc }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
