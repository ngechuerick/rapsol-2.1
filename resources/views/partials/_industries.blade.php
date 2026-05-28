{{-- ══════════════════════════════════════════════════════════
     INDUSTRIES SECTION
     Interactive sector grid — Alpine.js active state
     Hovering reveals sector description + client count
══════════════════════════════════════════════════════════ --}}

<section id="industries" class="relative border-t border-zinc-200 dark:border-zinc-800" x-data="{ active: 'fintech' }">
    <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700 z-10"></div>
    <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700 z-10"></div>

    <div class="px-7 pt-16 pb-16">
        <div class="mb-10" data-animate>
            <p class="font-mono text-[10px] font-semibold uppercase tracking-[0.15em] text-amber-600 dark:text-amber-500 mb-3">— Industries</p>
            <h2
                class="font-display text-3xl md:text-4xl font-bold tracking-tight text-zinc-900 dark:text-white leading-tight"
            >
                Sectors we serve
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
            {{-- Sector list (left 2/3) --}}
            <div class="lg:col-span-2 grid grid-cols-2 md:grid-cols-3 gap-3" data-animate data-delay="1">
                @foreach ([
                    ['id' => 'fintech',    'label' => 'FinTech',           'clients' => '42 clients',  'icon' => '<path d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z"/>'],
                    ['id' => 'realestate', 'label' => 'Real Estate',       'clients' => '28 clients',  'icon' => '<path d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z"/>'],
                    ['id' => 'government', 'label' => 'Government',        'clients' => '15 clients',  'icon' => '<path d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z"/>'],
                    ['id' => 'sme',        'label' => 'SMEs',              'clients' => '95 clients',  'icon' => '<path d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016 2.993 2.993 0 0 0 2.25-1.016 3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z"/>'],
                    ['id' => 'healthcare', 'label' => 'Healthcare',        'clients' => '19 clients',  'icon' => '<path d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"/>'],
                    ['id' => 'agritech',   'label' => 'AgriTech',          'clients' => '12 clients',  'icon' => '<path d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/>'],
                ] as $sector)
                    <button
                        @click="active = '{{ $sector['id'] }}'"
                        class="group text-left p-4 rounded-xl border transition-all duration-300 cursor-pointer"
                        :class="active === '{{ $sector['id'] }}'
                            ? 'border-amber-300 dark:border-amber-700 bg-amber-50 dark:bg-amber-950/30'
                            : 'border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-900/40 hover:border-zinc-300 dark:hover:border-zinc-700'"
                    >
                        <div
                            class="w-8 h-8 rounded-lg flex items-center justify-center mb-3 transition-colors duration-300"
                            :class="active === '{{ $sector['id'] }}'
                             ? 'bg-amber-100 dark:bg-amber-900/40'
                             : 'bg-zinc-100 dark:bg-zinc-800 group-hover:bg-zinc-200 dark:group-hover:bg-zinc-700'"
                        >
                            <svg
                                class="w-4 h-4 transition-colors duration-300"
                                :class="active === '{{ $sector['id'] }}' ? 'text-amber-600 dark:text-amber-400' : 'text-zinc-500 dark:text-zinc-400'"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.5"
                                viewBox="0 0 24 24"
                            >
                                {!! $sector['icon'] !!}
                            </svg>
                        </div>

                        <div
                            class="font-display font-semibold text-lg transition-colors duration-300"
                            :class="active === '{{ $sector['id'] }}' ? 'text-amber-700 dark:text-amber-400' : 'text-zinc-900 dark:text-white'"
                        >
                            {{ $sector['label'] }}
                        </div>
                        <div
                            class="font-mono text-xs mt-1 transition-colors duration-300"
                            :class="active === '{{ $sector['id'] }}' ? 'text-amber-600/70 dark:text-amber-500/70' : 'text-zinc-400 dark:text-zinc-600'"
                        >
                            {{ $sector['clients'] }}
                        </div>
                    </button>
                @endforeach
            </div>

            {{-- Detail panel (right 1/3) --}}
            <div class="sticky top-20" data-animate data-delay="2">
                @foreach ([
                    ['id' => 'fintech',    'title' => 'Financial Technology',
                     'desc' => 'We\'ve powered core banking upgrades, mobile money platforms, and digital lending solutions across Kenya and East Africa. From CBK compliance frameworks to API integrations with M-Pesa and Airtel Money we understand the nuances of African fintech.',
                     'highlights' => ['Mobile money integrations', 'Core banking modernisation', 'Regulatory compliance (CBK)', 'Digital lending platforms']],
                    ['id' => 'realestate', 'title' => 'Real Estate & PropTech',
                     'desc' => 'Property management systems, estate portals, asset valuation models, and investor reporting dashboards. We\'ve digitised portfolios ranging from 12 to 300+ properties for developers, REITs, and family offices.',
                     'highlights' => ['Property management systems', 'Investor reporting portals', 'Asset valuation models', 'Tenant management platforms']],
                    ['id' => 'government', 'title' => 'Government & Public Sector',
                     'desc' => 'Revenue collection systems, citizen-facing portals, and inter-agency integration platforms. All built to meet Kenya\'s government ICT standards with security-first architecture.',
                     'highlights' => ['Revenue collection systems', 'Citizen service portals', 'Data interoperability', 'Compliance & audit trails']],
                    ['id' => 'sme',        'title' => 'Small & Medium Enterprises',
                     'desc' => 'Our largest client segment. From first website to ERP implementation  we scale with SMEs at every stage, combining affordable tech with strategic financial guidance.',
                     'highlights' => ['Digital presence setup', 'ERP & CRM implementation', 'Access to finance', 'Growth strategy workshops']],
                    ['id' => 'healthcare', 'title' => 'Healthcare & MedTech',
                     'desc' => 'Hospital management systems, telemedicine platforms, medical supply chain solutions, and patient data management  all built to international health data standards.',
                     'highlights' => ['Hospital management systems', 'Telemedicine platforms', 'Supply chain solutions', 'Patient data management']],
                    ['id' => 'agritech',   'title' => 'Agriculture & AgriTech',
                     'desc' => 'Farm management tools, commodity trading platforms, smallholder finance solutions, and supply chain traceability systems connecting Kenya\'s agricultural economy.',
                     'highlights' => ['Farm management tools', 'Commodity trading platforms', 'Smallholder finance', 'Supply chain traceability']],
                ] as $detail)
                    <div
                        x-show="active === '{{ $detail['id'] }}'"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        class="border border-zinc-200 dark:border-zinc-800 rounded-xl p-6 bg-white dark:bg-zinc-900/40"
                        style="display: none"
                    >
                        <h3 class="font-display font-bold text-base text-zinc-900 dark:text-white mb-3">
                            {{ $detail['title'] }}
                        </h3>
                        <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed mb-5">{{ $detail['desc'] }}</p>
                        <div class="space-y-2">
                            @foreach ($detail['highlights'] as $h)
                                <div class="flex items-center gap-2 text-xs text-zinc-600 dark:text-zinc-400">
                                    <div class="w-1 h-1 rounded-full bg-amber-500 shrink-0"></div>
                                    {{ $h }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
