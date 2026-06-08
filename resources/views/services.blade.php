@extends ('layouts.app')
@section ('title', 'Services | Rapsoltech Consulting')

@section ('content')
    {{-- ════════════════════════════
     HERO
════════════════════════════ --}}
    <div class="relative px-7 py-24 overflow-hidden">
        <div
            class="absolute inset-0 -z-10 bg-[linear-gradient(rgba(161,161,170,0.14)_1px,transparent_1px),linear-gradient(90deg,rgba(161,161,170,0.14)_1px,transparent_1px)] dark:bg-[linear-gradient(rgba(255,255,255,0.04)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.04)_1px,transparent_1px)] bg-size-[40px_40px]"
        ></div>
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700"></div>
        <div class="absolute -bottom-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700"></div>
        <div class="absolute -bottom-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700"></div>

        <div class="flex items-center gap-3 mb-7" data-animate>
            {{-- <div class="w-8 h-px bg-amber-500"></div> --}}
            <span class="text-xs font-semibold uppercase tracking-[0.2em] text-shark-500 dark:text-shark-400">
                What We Do
            </span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-end">
            <div>
                <h1
                    class="font-display text-5xl md:text-6xl font-black leading-[1.05] tracking-tight text-shark-900 dark:text-white mb-6"
                    data-animate
                    data-delay="1"
                >
                    Services built<br />for <span class="text-black-pearl-900 dark:text-amber-500">real outcomes.</span>
                </h1>
                <p
                    class="text-lg text-shark-500 dark:text-shark-400 leading-relaxed"
                    data-animate
                    data-delay="2"
                >We offer a focused set of technology and consulting services designed to work together. Every engagement is structured around outcomes, scalability, and long-term impact.</p>
            </div>
            {{-- <div class="grid grid-cols-2 gap-3 lg:justify-self-end" data-animate data-delay="3">
                @foreach ([['340+','Projects delivered'],['8','Core services'],['7+','Years experience'],['98%','Client retention']] as $s)
                    <div
                        class="p-4 rounded-xl border border-shark-200 dark:border-shark-800 bg-white dark:bg-shark-900/40"
                    >
                        <div class="font-display font-black text-2xl text-shark-900 dark:text-white mb-0.5">
                            {{ $s[0] }}
                        </div>
                        <div class="text-xs text-shark-500 dark:text-shark-400">{{ $s[1] }}</div>
                    </div>
                @endforeach
            </div> --}}
        </div>
    </div>
    {{-- ════════════════════════════
     SERVICES LIST
     Inflection-style: numbered,
     full-width rows, generous space
════════════════════════════ --}}
    <div class="relative border-t border-shark-200 dark:border-shark-800">
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700"></div>

        @php
    $services = [
        [
            'num'   => '01',
            'slug'  => 'app-development',
            'title' => 'Application & System Development',
            'short' => 'We architect and build secure, maintainable web and mobile applications that support growth, reduce operational risk, and adapt as your product evolves.',
            'tags'  => ['Web Apps', 'Mobile', 'APIs', 'ERP & CRM'],
            'icon'  => '<path d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5"/>',
        ],
        [
            'num'   => '02',
            'slug'  => 'seo',
            'title' => 'Search Engine Optimisation',
            'short' => 'We design SEO strategies that improve discoverability, attract qualified traffic, and convert intent into demand through technical and content-led approaches.',
            'tags'  => ['Technical SEO', 'Content Strategy', 'Analytics', 'Local SEO'],
            'icon'  => '<path d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>',
        ],
        [
            'num'   => '03',
            'slug'  => 'ai-integration',
            'title' => 'AI Integration',
            'short' => 'We develop and integrate AI-powered solutions that optimise processes, surface actionable insights, and deliver intelligent experiences your users will notice.',
            'tags'  => ['Machine Learning', 'Automation', 'NLP', 'Predictive Analytics'],
            'icon'  => '<path d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456Z"/>',
        ],
        [
            'num'   => '04',
            'slug'  => 'ui-ux-design',
            'title' => 'UI/UX Design & Research',
            'short' => 'We research, prototype, and design interfaces that are intuitive, accessible, and aligned with user and business goals. Design that is intentional and measurable.',
            'tags'  => ['User Research', 'Prototyping', 'Design Systems', 'Accessibility'],
            'icon'  => '<path d="M9.53 16.122a3 3 0 0 0-5.78 1.128 2.25 2.25 0 0 1-2.4 2.245 4.5 4.5 0 0 0 8.4-2.245c0-.399-.078-.78-.22-1.128Zm0 0a15.998 15.998 0 0 0 3.388-1.62m-5.043-.025a15.994 15.994 0 0 1 1.622-3.395m3.42 3.42a15.995 15.995 0 0 0 4.764-4.648l3.876-5.814a1.151 1.151 0 0 0-1.597-1.597L14.146 6.32a15.996 15.996 0 0 0-4.649 4.763m3.42 3.42a6.776 6.776 0 0 0-3.42-3.42"/>',
        ],
        [
            'num'   => '05',
            'slug'  => 'asset-management',
            'title' => 'Asset Management',
            'short' => 'Disciplined, data-driven portfolio management to grow and protect your wealth across East Africa  from real estate and equities to alternative investments.',
            'tags'  => ['Portfolio Management', 'Real Estate', 'Risk Advisory', 'Alternatives'],
            'icon'  => '<path d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75"/>',
        ],
        [
            'num'   => '06',
            'slug'  => 'tech-consulting',
            'title' => 'Technology Consulting',
            'short' => 'Strategic technology advisory to navigate digital transformation with confidence  cloud architecture, cybersecurity, systems integration, and IT governance.',
            'tags'  => ['Digital Transformation', 'Cloud', 'Cybersecurity', 'IT Governance'],
            'icon'  => '<path d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25"/>',
        ],
        [
            'num'   => '07',
            'slug'  => 'business-consulting',
            'title' => 'Business Consulting',
            'short' => 'Strategic business guidance to unlock growth, improve operations, and make better decisions  from financial modelling and M&A to market entry and SME scale-up.',
            'tags'  => ['Strategy', 'Financial Advisory', 'M&A', 'SME Growth'],
            'icon'  => '<path d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5"/>',
        ],
        [
            'num'   => '08',
            'slug'  => 'hardware-consulting',
            'title' => 'Hardware Consulting & Maintenance',
            'short' => 'End-to-end hardware advisory — from infrastructure procurement and network setup to preventive maintenance and on-site support across your organisation.',
            'tags'  => ['Infrastructure', 'Networking', 'Procurement', 'Maintenance'],
            'icon'  => '<path d="M5.25 14.25h13.5m-13.5 0a3 3 0 0 1-3-3m3 3a3 3 0 1 0 6 0m-6 0H3m16.5 0a3 3 0 0 0 3-3m-3 3a3 3 0 1 1-6 0m6 0h1.5m-7.5 0V5.625m0 8.625a3 3 0 0 1-3-3V5.625m6 8.625V5.625m0 8.625a3 3 0 0 0 3-3V5.625M9.75 5.625A2.625 2.625 0 0 1 12.375 3h-.75A2.625 2.625 0 0 1 14.25 5.625m-4.5 0h4.5"/>',
        ],
    ];
    @endphp

        @foreach ($services as $i => $service)
            <a
                href="{{ route('services.show', $service['slug']) }}"
                class="group block border-b border-shark-200 dark:border-shark-800 last:border-b-0 transition-colors duration-200 hover:bg-shark-50 dark:hover:bg-shark-900/40"
                data-animate
                data-delay="{{ min($i + 1, 5) }}"
            >
                <div class="px-7 py-10 grid grid-cols-1 md:grid-cols-[80px_1fr_auto] gap-6 items-start md:items-center">
                    {{-- Number --}}
                    <div
                        class="font-display font-black text-4xl text-shark-200 dark:text-shark-800 group-hover:text-black-pearl-950 dark:group-hover:text-amber-900 transition-colors duration-300 leading-none"
                    >
                        {{ $service['num'] }}
                    </div>

                    {{-- Content --}}
                    <div>
                        <div class="flex flex-wrap items-center gap-3 mb-3">
                            <div
                                class="w-8 h-8 rounded-lg bg-black-pearl-100 dark:bg-shark-800 flex items-center justify-center group-hover:bg-black-pearl-200 dark:group-hover:bg-amber-950/40 transition-colors duration-300"
                            >
                                <svg
                                    class="w-4 h-4 text-black-pearl-950 dark:text-shark-400 group-hover:text-black-pearl-950 dark:group-hover:text-amber-400 transition-colors duration-300"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    viewBox="0 0 24 24"
                                >
                                    {!! $service['icon'] !!}
                                </svg>
                            </div>
                            <h2
                                class="font-display font-bold text-xl text-black-pearl-900 dark:text-white group-hover:text-black-pearl-950 dark:group-hover:text-amber-400 transition-colors duration-300"
                            >
                                {{ $service['title'] }}
                            </h2>
                        </div>
                        <p class="text-sm text-shark-500 dark:text-shark-400 leading-relaxed max-w-2xl mb-4">
                            {{ $service['short'] }}
                        </p>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($service['tags'] as $tag)
                                <span
                                    class="px-2.5 py-1 rounded-md text-xs font-medium bg-black-pearl-100 dark:bg-shark-800 text-shark-500 dark:text-shark-400 group-hover:bg-black-pearl-200 dark:group-hover:bg-amber-950/30 group-hover:text-black-pearl-950 dark:group-hover:text-black-pearl-950 transition-colors duration-300"
                                >
                                    {{ $tag }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    {{-- Arrow --}}
                    <div
                        class="hidden md:flex w-10 h-10 rounded-full border border-black-pearl-300 dark:border-shark-800 items-center justify-center group-hover:border-black-pearl-500 dark:group-hover:border-amber-700 group-hover:bg-black-pearl-200 dark:group-hover:bg-amber-950/30 transition-all duration-300 shrink-0"
                    >
                        <svg
                            class="w-4 h-4 text-shark-400 dark:text-shark-600 group-hover:text-black-pearl-950 dark:group-hover:text-amber-400 transition-colors duration-300"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                        >
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    {{-- ════════════════════════════
     BOTTOM CTA
════════════════════════════ --}}
    <div
        class="relative border-t border-shark-200 dark:border-shark-800 overflow-hidden bg-shark-900 dark:bg-shark-950"
    >
        <div
            class="absolute -right-8 -bottom-6 font-display font-black text-[180px] leading-none text-white/3 select-none"
            aria-hidden="true"
        >
            RTC
        </div>

        <div class="relative px-7 py-20 text-center" data-animate>
            <div class="flex items-center justify-center gap-3 mb-7">
                <div class="w-8 h-px bg-amber-500"></div>
                <span class="text-xs font-semibold uppercase tracking-[0.2em] text-shark-400"
                    >Not sure where to start?</span
                >
                <div class="w-8 h-px bg-amber-500"></div>
            </div>
            <h2
                class="font-display text-4xl md:text-5xl font-black text-white leading-tight tracking-tight mb-5 max-w-xl mx-auto"
            >
                Let's figure it out <span class="text-amber-400">together.</span>
            </h2>
            <p class="text-base text-shark-400 leading-relaxed mb-10 max-w-lg mx-auto">Book a free 30-minute discovery call. No commitment, no sales pitch just an honest conversation about what your business needs.</p>
            <a
                href="/contact"
                class="inline-flex items-center gap-2 px-7 py-3.5 rounded-xl font-display font-semibold text-sm bg-black-pearl-300 hover:bg-black-pearl-400 text-shark-900 transition-all duration-200 hover:-translate-y-0.5 hover:shadow-lg hover:shadow-black-pearl-300"
            >
                Book a free consultation
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
            </a>
            {{-- <a
                href="/contact"
                class="inline-flex items-center gap-2 px-7 py-3.5 rounded-lg font-display font-semibold text-sm bg-amber-500 hover:bg-amber-400 text-shark-900 transition-all duration-200 hover:-translate-y-0.5 hover:shadow-lg hover:shadow-amber-500/25"
            >
                Book a free consultation
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
            </a> --}}
        </div>
    </div>

@endsection
