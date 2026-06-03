<section class="relative border-t border-zinc-200 dark:border-zinc-800 bg-zinc-50/50 dark:bg-zinc-900/20">
    <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
    <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>

    {{-- Mission / Vision --}}
    <div class="px-7 pt-16 pb-12 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="border-l-2 border-amber-500 pl-6" data-animate>
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-400 dark:text-zinc-600 mb-3">Our Mission</p>
            <p class="font-display text-lg md:text-xl font-medium text-zinc-900 dark:text-white leading-snug">To empower African businesses with technology and strategy that's world-class in quality and local in understanding.</p>
        </div>
        <div class="border-l-2 border-zinc-300 dark:border-zinc-700 pl-6" data-animate data-delay="1">
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-400 dark:text-zinc-600 mb-3">Our Vision</p>
            <p class="font-display text-lg md:text-xl font-medium text-zinc-900 dark:text-white leading-snug">A continent where every ambitious organisation has access to the tools, capital, and expertise to compete globally.</p>
        </div>
    </div>

    {{-- Values grid --}}
    <div class="px-7 pb-16">
        <div class="mb-8" data-animate>
            <div class="flex items-center gap-3 mb-4">
                <div class="w-8 h-px bg-amber-500"></div>
                <span class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400"
                    >What We Stand For</span
                >
            </div>
            <h2 class="font-display text-3xl md:text-4xl font-bold tracking-tight text-zinc-900 dark:text-white">
                Our values
            </h2>
        </div>

        <div
            class="grid grid-cols-1 md:grid-cols-3 gap-px bg-zinc-200 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden"
        >
            @foreach ([
                ['<path d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>','Outcomes over output','We measure success by your results, not hours billed or features shipped. Impact is the only metric that matters.'],
                ['<path d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"/><path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>','Radical transparency','No black boxes. You see our process, progress, and pricing at every step. Trust is built on visibility.'],
                ['<path d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418"/>','Locally rooted','We understand African markets because we\'re part of them — not visiting consultants flying in for a quarter.'],
                ['<path d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z"/>','Bias for action','We move fast, ship often, and iterate — without ever sacrificing the quality our clients depend on.'],
                ['<path d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25"/>','Always learning','The technology landscape evolves daily. So do we — relentlessly investing in our people and our craft.'],
                ['<path d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/>','Integrity first','Regulated, accountable, and honest — even when it costs us. Our reputation is our most valuable asset.'],
            ] as $i => [$icon, $title, $desc])
                <div
                    class="bg-white dark:bg-zinc-950 p-6 group hover:bg-zinc-50 dark:hover:bg-zinc-900/60 transition-colors duration-300"
                    data-animate
                    data-delay="{{ ($i % 3) + 1 }}"
                >
                    <div
                        class="w-9 h-9 rounded-lg bg-amber-50 dark:bg-amber-950/30 flex items-center justify-center mb-4 group-hover:bg-amber-100 dark:group-hover:bg-amber-900/40 transition-colors duration-300"
                    >
                        <svg class="w-4 h-4 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">{!! $icon !!}</svg>
                    </div>
                    <h3 class="font-display font-semibold text-sm text-zinc-900 dark:text-white mb-2">{{ $title }}</h3>
                    <p class="text-xs text-zinc-500 dark:text-zinc-400 leading-relaxed">{{ $desc }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
