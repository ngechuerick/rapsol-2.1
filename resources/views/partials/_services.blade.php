{{-- ══════════════════════════════════════════════════════════
     SERVICES SECTION
     Two-pillar layout: Technology left, Consulting right
     Unique asymmetric grid with category divider
══════════════════════════════════════════════════════════ --}}

<section id="services" class="relative border-t border-shark-200 dark:border-shark-800">
    {{-- Diamond corners --}}
    <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700 z-10"></div>
    <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700 z-10"></div>

    {{-- Section header --}}
    <div class="px-7 pt-16 pb-10" data-animate>
        <p class="font-mono text-[10px] font-semibold uppercase tracking-[0.15em] text-amber-600 dark:text-amber-500 mb-3">— What We Do</p>
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
            <h2
                class="font-display text-3xl md:text-4xl font-bold tracking-tight text-shark-900 dark:text-white leading-tight"
            >
                Comprehensive Solutions<br class="hidden md:block" />
                for Modern Business
            </h2>
            <p class="text-base text-shark-600 dark:text-shark-400 max-w-xs leading-relaxed md:text-right">From digital products to financial strategy one firm, complete capability.</p>
        </div>
    </div>

    {{-- Category divider: TECHNOLOGY --}}
    {{-- <div class="relative mx-7 mb-0">
        <div class="flex items-center gap-4">
            <div class="flex items-center gap-2">
                <div class="w-1.5 h-1.5 rounded-full bg-amber-500"></div>
                <span
                    class="font-mono text-[10px] font-bold uppercase tracking-[0.15em] text-amber-600 dark:text-amber-500"
                >
                    Technology Services
                </span>
            </div>
            <div class="flex-1 h-px bg-shark-200 dark:bg-shark-800"></div>
        </div>
    </div> --}}

    {{-- Tech services grid --}}
    <div class="px-7 pt-5 pb-8 grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ([
            [
                'num'   => '01',
                'icon'  => '<path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2V9M9 21H5a2 2 0 0 1-2-2V9m0 0h18"/>',
                'title' => 'Web & App Development',
                'desc'  => 'Scalable digital products built for performance, aesthetics, and real-world growth across African markets.',
                'tags'  => ['Custom Web Apps', 'Mobile (iOS & Android)', 'E-Commerce', 'UI/UX Design'],
                'featured' => true,
            ],
            [
                'num'   => '02',
                'icon'  => '<path d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25"/>',
                'title' => 'IT & Digital Consulting',
                'desc'  => 'Strategic technology advisory to navigate transformation with confidence. Cloud, security, systems integration.',
                'tags'  => ['Digital Transformation', 'Cloud Migration', 'Cybersecurity', 'Systems Integration'],
                'featured' => false,
            ],
            [
                'num'   => '03',
                'icon'  => '<path d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z"/>',
                'title' => 'Data Analytics & AI',
                'desc'  => 'Turn raw data into competitive intelligence. BI dashboards, machine learning, and intelligent automation.',
                'tags'  => ['Business Intelligence', 'ML Solutions', 'Data Governance', 'RPA Automation'],
                'featured' => false,
            ],
        ] as $i => $svc)
            <div
                class="group relative border border-shark-200 dark:border-shark-800 rounded-xl p-6
                    {{ $svc['featured'] ? 'bg-amber-50 dark:bg-amber-950/20 border-amber-200 dark:border-amber-900/50' : 'bg-white dark:bg-shark-900/40' }}
                    hover:-translate-y-1 transition-all  duration-100 cursor-pointer"
                data-animate
                data-delay="{{ $i + 1 }}"
            >
                {{-- Number --}}
                <div class="font-mono text-[12px] font-bold text-shark-300 dark:text-shark-700 mb-4">
                    {{ $svc['num'] }}
                </div>

                {{-- Icon --}}
                <div
                    class="w-10 h-10 rounded-lg mb-5 flex items-center justify-center
                        {{ $svc['featured'] ? 'bg-amber-100 dark:bg-amber-900/40' : 'bg-shark-100 dark:bg-shark-800' }}"
                >
                    <svg
                        class="w-5 h-5 {{ $svc['featured'] ? 'text-amber-600 dark:text-amber-400' : 'text-shark-500 dark:text-shark-400' }}"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.5"
                        viewBox="0 0 24 24"
                    >
                        {!! $svc['icon'] !!}
                    </svg>
                </div>

                <h3 class="font-display font-semibold text-lg text-shark-900 dark:text-white mb-2">
                    {{ $svc['title'] }}
                </h3>
                <p class="text-base text-shark-500 dark:text-shark-400 leading-relaxed mb-5">{{ $svc['desc'] }}</p>

                {{-- Tags --}}
                <ul class="space-y-1.5 mb-5">
                    @foreach ($svc['tags'] as $tag)
                        <li class="flex items-center gap-2 text-sm text-shark-500 dark:text-shark-400">
                            <div
                                class="w-1 h-1 rounded-full {{ $svc['featured'] ? 'bg-amber-500' : 'bg-shark-300 dark:bg-shark-600' }} shrink-0"
                            ></div>
                            {{ $tag }}
                        </li>
                    @endforeach
                </ul>

                {{-- <a
                    href="#"
                    class="inline-flex items-center gap-1.5 text-xs font-medium transition-all duration-200
                      {{ $svc['featured'] ? 'text-amber-600 dark:text-amber-400' : 'text-shark-400 dark:text-shark-500 group-hover:text-shark-900 dark:group-hover:text-white' }}"
                >
                    Learn more
                    <svg class="w-3 h-3 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a> --}}
            </div>
        @endforeach
    </div>

    {{-- Category divider: CONSULTING --}}
    <div class="relative mx-7 mb-0">
        <div class="flex items-center gap-4">
            <div class="flex items-center gap-2">
                <div class="w-1.5 h-1.5 rounded-full bg-shark-400 dark:bg-shark-500"></div>
                <span
                    class="font-mono text-[10px] font-bold uppercase tracking-[0.15em] text-shark-400 dark:text-shark-500"
                >
                    Consulting Services
                </span>
            </div>
            <div class="flex-1 h-px bg-shark-200 dark:bg-shark-800"></div>
        </div>
    </div>

    {{-- Consulting services: wide 2-col + 1 accent --}}
    <div class="px-7 pt-5 pb-16 grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ([
            [
                'num'   => '04',
                'icon'  => '<path d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z"/>',
                'title' => 'Asset Management',
                'desc'  => 'Disciplined, data-driven portfolio management to grow and protect your wealth across East Africa. From real estate to equities — we manage what matters.',
                'tags'  => ['Portfolio Construction', 'Real Estate Advisory', 'Risk Management', 'Alternative Investments'],
                'span'  => 'md:col-span-2',
            ],
            [
                'num'   => '05',
                'icon'  => '<path d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z"/>',
                'title' => 'Financial Advisory',
                'desc'  => 'Strategic guidance for complex financial decisions  from M&A to growth financing.',
                'tags'  => ['Corporate Finance', 'M&A Advisory', 'Financial Modeling', 'Business Planning'],
                'span'  => '',
            ],
            [
                'num'   => '06',
                'icon'  => '<path d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z"/>',
                'title' => 'SME Growth Programs',
                'desc'  => 'End-to-end support for Kenya\'s SMEs  strategy, tech, and capital advisory in one package designed for rapid scale.',
                'tags'  => ['Strategy Workshops', 'Digital Setup', 'Access to Finance', 'Scale Support'],
                'span'  => 'md:col-span-2',
            ],
        ] as $i => $svc)
            <div
                class="group relative border border-shark-200 dark:border-shark-800 rounded-xl p-6
                    bg-white dark:bg-shark-900/40
                    hover:-translate-y-1 transition-all duration-300 cursor-pointer {{ $svc['span'] }}"
                data-animate
                data-delay="{{ $i + 1 }}"
            >
                <div class="font-mono text-[10px] font-bold text-shark-300 dark:text-shark-700 mb-4">
                    {{ $svc['num'] }}
                </div>

                <div class="w-10 h-10 rounded-lg bg-shark-100 dark:bg-shark-800 mb-5 flex items-center justify-center">
                    <svg class="w-5 h-5 text-shark-500 dark:text-shark-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        {!! $svc['icon'] !!}
                    </svg>
                </div>

                <h3 class="font-display font-semibold text-lg text-shark-900 dark:text-white mb-2">
                    {{ $svc['title'] }}
                </h3>
                <p class="text-base text-shark-500 dark:text-shark-400 leading-relaxed mb-5">{{ $svc['desc'] }}</p>

                <ul class="space-y-1.5 mb-5">
                    @foreach ($svc['tags'] as $tag)
                        <li class="flex items-center gap-2 text-sm text-shark-500 dark:text-shark-400">
                            <div class="w-1 h-1 rounded-full bg-shark-300 dark:bg-shark-600 shrink-0"></div>
                            {{ $tag }}
                        </li>
                    @endforeach
                </ul>

                {{-- <a
                    href="#"
                    class="inline-flex items-center gap-1.5 text-xs font-medium text-shark-400 dark:text-shark-500 group-hover:text-shark-900 dark:group-hover:text-white transition-colors duration-200"
                >
                    Learn more
                    <svg class="w-3 h-3 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a> --}}
            </div>
        @endforeach
    </div>
</section>
