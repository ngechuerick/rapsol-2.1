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
                <p class="font-mono text-xs font-semibold uppercase tracking-[0.15em] text-black-pearl-950 dark:text-gold-400 mb-3">Our Work</p>
                <h2
                    class="font-display text-3xl md:text-4xl font-bold tracking-tight text-shark-900 dark:text-white leading-tight"
                >
                    Work that speaks<br />for itself.
                </h2>
            </div>
            {{-- <a
                href="/case-studies"
                class="inline-flex items-center gap-2 text-sm font-medium text-shark-500 dark:text-shark-400 hover:text-shark-900 dark:hover:text-white transition-colors duration-200"
            >
                View all case studies
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
            </a> --}}
        </div>

        {{-- Featured case study (full width) --}}
        <div
            class="relative border border-shark-200 dark:border-shark-800 rounded-xl overflow-hidden bg-white dark:bg-shark-900/40 mb-4 group"
            data-animate
        >
            {{-- Decorative gradient band --}}
            <div class="h-1 bg-linear-to-r from-black-pearl-950 via-gold-400 to-gold-400"></div>

            <div class="p-7 grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                {{-- Project info --}}
                <div class="lg:col-span-2">
                    <div class="flex items-center gap-3 mb-5">
                        <span
                            class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-mono font-bold uppercase tracking-wider bg-black-pearl-100 dark:bg-gold-950/40 text-black-pearl-950 dark:text-gold-400"
                        >
                            NGO
                        </span>
                        <span class="font-mono text-xs text-shark-500 dark:text-shark-400"
                            >2025 Nairobi, Kenya</span
                        >
                    </div>

                    <h3
                        class="font-display font-bold text-xl md:text-2xl text-shark-900 dark:text-white mb-3 leading-tight"
                    >
                        HDF Human Development Fund
                    </h3>
                    <p class="text-base text-shark-500 dark:text-shark-400 leading-relaxed mb-6 max-w-xl">Tracking assets using excell sheets is not only tideous but also inefficient. Having an opportunity to solve this real world problem by building an asset management system has been not only revolutional but problem solving approach for HDF. We do tagging the assets and data management.</p>

                    <div class="flex flex-wrap gap-2">
                        @foreach (['Asset Tagging', 'Asset Management', 'Data', 'Staff Training'] as $tag)
                            <span
                                class="px-2.5 py-1 rounded-md text-xs bg-black-pearl-100 dark:bg-shark-800 text-black-pearl-950 dark:text-shark-400"
                            >
                                {{ $tag }}
                            </span>
                        @endforeach
                    </div>
                </div>

                {{-- Metrics --}}
            </div>

            <div class="border-t border-shark-100 dark:border-shark-800 px-7 py-4 flex items-center justify-between">
                <span class="text-sm text-shark-500 dark:text-shark-400">12-month engagement · Technology</span>
                {{-- <a
                    href="#"
                    class="inline-flex items-center gap-1.5 text-sm font-medium text-gold-800 dark:text-gold-400 dark:text-gold-400 hover:text-gold-800 dark:hover:text-gold-400 dark:hover:text-gold-300 transition-colors duration-200"
                >
                    Read full case study
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a> --}}
            </div>
        </div>

        {{-- Two secondary case studies --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ([
                [
                    'tag' => 'Real Estate',
                    'year' => '2022 — Nairobi',
                    'title' => ' Real Estate — Property Management Platform',
                    'desc' => 'Built a centralised property management system that digitised 60+ commercial and residential properties, automated rent collection, and delivered real-time portfolio dashboards for pan-African investors.',
                    'duration' => '8-month engagement',
                ],
                [
                    'tag' => 'Government',
                    'year' => '2021 — Nairobi County',
                    'title' => 'Nairobi County — Revenue Collection System',
                    'desc' => 'Designed and deployed a digital revenue management system integrating parking fees, business permits, and land rates. Eliminated leakage, reduced manual processing by 78%, and tripled monthly digital collection figures.',
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
                                class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-mono font-bold uppercase tracking-wider dark:bg-blue-950/30 text-black-pearl-950 dark:text-blue-400 bg-black-pearl-100"
                            >
                                {{ $cs['tag'] }}
                            </span>
                            <span
                                class="font-mono text-xs text-shark-500 dark:text-shark-400"
                                >{{ $cs['year'] }}</span
                            >
                        </div>

                        <h3 class="font-display font-bold text-base text-shark-900 dark:text-white mb-3 leading-tight">
                            {{ $cs['title'] }}
                        </h3>
                        <p class="text-base text-shark-500 dark:text-shark-400 leading-relaxed">{{ $cs['desc'] }}</p>
                    </div>

                    <div
                        class="border-t border-shark-100 dark:border-shark-800 px-6 py-3 flex items-center justify-between"
                    >
                        <span
                            class="text-xs text-shark-500 dark:text-shark-400 font-mono"
                            >{{ $cs['duration'] }}</span
                        >
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
