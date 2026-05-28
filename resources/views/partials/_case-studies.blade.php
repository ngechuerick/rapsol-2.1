{{-- ══════════════════════════════════════════════════════════
     CASE STUDIES SECTION
     Featured project + 2 below
     Design: metrics-forward cards with outcome numbers
══════════════════════════════════════════════════════════ --}}

<section
    id="case-studies"
    class="relative border-t border-shark-200 dark:border-shark-800 bg-shark-50/30 dark:bg-shark-900/10"
>
    <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700 z-10"></div>
    <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700 z-10"></div>

    <div class="px-7 pt-16 pb-16">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-10" data-animate>
            <div>
                <p class="font-mono text-[10px] font-semibold uppercase tracking-[0.15em] text-amber-600 dark:text-amber-500 mb-3">— Case Studies</p>
                <h2
                    class="font-display text-3xl md:text-4xl font-bold tracking-tight text-shark-900 dark:text-white leading-tight"
                >
                    Work that speaks<br />for itself.
                </h2>
            </div>
            <a
                href="/case-studies"
                class="inline-flex items-center gap-2 text-xs font-medium text-shark-500 dark:text-shark-400 hover:text-shark-900 dark:hover:text-white transition-colors duration-200"
            >
                View all case studies
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
            </a>
        </div>

        {{-- Featured case study (full width) --}}
        <div
            class="relative border border-shark-200 dark:border-shark-800 rounded-xl overflow-hidden bg-white dark:bg-shark-900/40 mb-4 group"
            data-animate
        >
            {{-- Decorative gradient band --}}
            <div class="h-1.5 bg-linear-to-r from-amber-400 via-amber-500 to-amber-600"></div>

            <div class="p-7 grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                {{-- Project info --}}
                <div class="lg:col-span-2">
                    <div class="flex items-center gap-3 mb-5">
                        <span
                            class="inline-flex items-center px-2.5 py-1 rounded-md text-[10px] font-mono font-bold uppercase tracking-wider bg-amber-100 dark:bg-amber-950/40 text-amber-700 dark:text-amber-400"
                        >
                            NGO
                        </span>
                        <span class="font-mono text-[10px] text-shark-400 dark:text-shark-600"
                            >2025 — Nairobi, Kenya</span
                        >
                    </div>

                    <h3
                        class="font-display font-bold text-xl md:text-2xl text-shark-900 dark:text-white mb-3 leading-tight"
                    >
                        HDF — Human Development Fund
                    </h3>
                    <p class="text-sm text-shark-500 dark:text-shark-400 leading-relaxed mb-6 max-w-xl">KCB Group's legacy core banking infrastructure was limiting their ability to launch new products. We led a full digital transformation migrating 4.2M customer accounts to a modern cloud-native architecture while maintaining zero downtime across 200+ branches.</p>

                    <div class="flex flex-wrap gap-2">
                        @foreach (['Asset Tagging', 'Asset Management', 'Data', 'Staff Training'] as $tag)
                            <span
                                class="px-2.5 py-1 rounded-md text-[10px] font-mono bg-shark-100 dark:bg-shark-800 text-shark-500 dark:text-shark-400"
                            >
                                {{ $tag }}
                            </span>
                        @endforeach
                    </div>
                </div>

                {{-- Metrics --}}
                <div class="grid grid-cols-2 gap-3">
                    @foreach ([
                        ['40%', 'Faster transaction processing'],
                        ['4.2M', 'Accounts migrated successfully'],
                        ['0', 'Hours of unplanned downtime'],
                        ['KES 1.8B', 'Infrastructure cost saved over 5 years'],
                    ] as $m)
                        <div
                            class="p-4 rounded-xl bg-shark-50 dark:bg-shark-800/60 border border-shark-200 dark:border-shark-700"
                        >
                            <div class="font-display font-black text-xl text-shark-900 dark:text-white mb-1">
                                {{ $m[0] }}
                            </div>
                            <div class="text-[10px] text-shark-500 dark:text-shark-400 leading-tight">{{ $m[1] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="border-t border-shark-100 dark:border-shark-800 px-7 py-4 flex items-center justify-between">
                <span class="text-xs text-shark-400 dark:text-shark-600 font-mono"
                    >12-month engagement · Technology</span
                >
                <a
                    href="#"
                    class="inline-flex items-center gap-1.5 text-xs font-medium text-amber-600 dark:text-amber-400 hover:text-amber-700 dark:hover:text-amber-300 transition-colors duration-200"
                >
                    Read full case study
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>

        {{-- Two secondary case studies --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ([
                [
                    'tag' => 'Real Estate',
                    'tag_color' => 'blue',
                    'year' => '2022 — Nairobi',
                    'title' => 'Actis Real Estate — Property Management Platform',
                    'desc' => 'Built a centralised property management system that digitised 60+ commercial and residential properties, automated rent collection, and delivered real-time portfolio dashboards for pan-African investors.',
                    'metrics' => [
                        ['60+', 'Properties digitised'],
                        ['92%', 'Rent collection rate'],
                        ['KES 48M', 'Revenue tracked monthly'],
                    ],
                    'duration' => '8-month engagement',
                ],
                [
                    'tag' => 'Government',
                    'tag_color' => 'green',
                    'year' => '2021 — Nairobi County',
                    'title' => 'Nairobi County — Revenue Collection System',
                    'desc' => 'Designed and deployed a digital revenue management system integrating parking fees, business permits, and land rates. Eliminated leakage, reduced manual processing by 78%, and tripled monthly digital collection figures.',
                    'metrics' => [
                        ['KES 2.3B', 'Collected digitally in Year 1'],
                        ['78%', 'Reduction in manual processing'],
                        ['3.2x', 'Revenue growth post-launch'],
                    ],
                    'duration' => '12-month engagement',
                ],
            ] as $i => $cs)
                <div
                    class="border border-shark-200 dark:border-shark-800 rounded-xl overflow-hidden bg-white dark:bg-shark-900/40 flex flex-col group"
                    data-animate
                    data-delay="{{ $i + 1 }}"
                >
                    <div class="p-6 flex-1">
                        <div class="flex items-center gap-3 mb-4">
                            <span
                                class="inline-flex items-center px-2.5 py-1 rounded-md text-[10px] font-mono font-bold uppercase tracking-wider
                                     {{ $cs['tag_color'] === 'blue' ? 'bg-blue-50 dark:bg-blue-950/30 text-blue-700 dark:text-blue-400' : 'bg-emerald-50 dark:bg-emerald-950/30 text-emerald-700 dark:text-emerald-400' }}"
                            >
                                {{ $cs['tag'] }}
                            </span>
                            <span
                                class="font-mono text-[10px] text-shark-400 dark:text-shark-600"
                                >{{ $cs['year'] }}</span
                            >
                        </div>

                        <h3 class="font-display font-bold text-base text-shark-900 dark:text-white mb-3 leading-tight">
                            {{ $cs['title'] }}
                        </h3>
                        <p class="text-xs text-shark-500 dark:text-shark-400 leading-relaxed">{{ $cs['desc'] }}</p>
                    </div>

                    {{-- Metrics row --}}
                    <div
                        class="border-t border-shark-100 dark:border-shark-800 grid grid-cols-3 divide-x divide-shark-100 dark:divide-shark-800"
                    >
                        @foreach ($cs['metrics'] as $m)
                            <div class="px-4 py-3">
                                <div class="font-display font-black text-sm text-shark-900 dark:text-white">
                                    {{ $m[0] }}
                                </div>
                                <div class="text-[9px] text-shark-400 dark:text-shark-600 leading-tight mt-0.5">
                                    {{ $m[1] }}
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div
                        class="border-t border-shark-100 dark:border-shark-800 px-6 py-3 flex items-center justify-between"
                    >
                        <span
                            class="text-[10px] text-shark-400 dark:text-shark-600 font-mono"
                            >{{ $cs['duration'] }}</span
                        >
                        <a
                            href="#"
                            class="text-xs font-medium text-shark-500 dark:text-shark-400 hover:text-shark-900 dark:hover:text-white transition-colors group-hover:text-amber-600 dark:group-hover:text-amber-400 duration-200"
                        >
                            Read more →
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
