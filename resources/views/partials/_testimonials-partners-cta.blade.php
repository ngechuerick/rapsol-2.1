{{-- ══════════════════════════════════════════════════════════
     PARTNERS SECTION
     Logo grid — grayscale default, colour on hover
══════════════════════════════════════════════════════════ --}}

<section
    id="partners"
    class="relative border-t border-shark-200 dark:border-shark-800 bg-shark-50/50 dark:bg-shark-900/20"
>
    <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700 z-10"></div>
    <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700 z-10"></div>

    <div class="px-7 py-14">
        <div class="text-center mb-10" data-animate>
            <p class="font-mono text-[10px] font-semibold uppercase tracking-[0.15em] text-shark-600 dark:text-shark-400 mb-2">Trusted by Our Partners</p>
        </div>

        {{-- Logo grid --}}
        <div
            class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-px bg-shark-200 dark:bg-shark-800 border border-shark-200 dark:border-shark-800 rounded-xl overflow-hidden"
            data-animate
            data-delay="1"
        >
            @foreach ([
        ['Westkate',     'westkate.svg'],
        ['SmartiCleaning',          'aws.svg'],
        ['SmartEdge', 'google-cloud.svg'],
        ['HDF',   'salesforce.svg'],
        ['Apptech',          'sap.svg'],
        ['ThinkReal',       'oracle.svg'],
        ['Siaya',        'cisco.svg'],
    ] as $p)
                <div
                    class="bg-white dark:bg-shark-950 flex items-center justify-center py-6 px-4 group cursor-default transition-colors duration-200 hover:bg-shark-50 dark:hover:bg-shark-900"
                >
                    <img
                        src="{{ asset('images/logos/' . $p[1]) }}"
                        alt="{{ $p[0] }}"
                        class="h-7 w-auto object-contain grayscale opacity-50 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-200"
                    />
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════════════════
     TESTIMONIALS SECTION
     Large quote typography — editorial, not carousel
══════════════════════════════════════════════════════════ --}}

<section id="testimonials" class="relative border-t border-shark-200 dark:border-shark-800">
    <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700 z-10"></div>
    <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700 z-10"></div>

    <div class="px-7 pt-16 pb-16">
        <div class="mb-10" data-animate>
            <p class="font-mono text-[10px] font-semibold uppercase tracking-[0.15em] text-black-pearl-950 dark:text-amber-500 mb-3">Testimonials</p>
            <h2
                class="font-display text-3xl md:text-4xl font-bold tracking-tight text-shark-900 dark:text-white leading-tight"
            >
                Heard from our clients
            </h2>
        </div>

        {{-- Featured quote --}}
        {{-- <div
            class="relative border border-shark-200 dark:border-shark-800 rounded-xl p-8 md:p-10 bg-white dark:bg-shark-900/40 mb-4 overflow-hidden"
            data-animate
        > --}}
        {{-- Large decorative quote mark --}}
        {{-- <div
                class="absolute top-6 right-8 font-display font-black text-[120px] leading-none text-shark-50 dark:text-shark-900 select-none pointer-events-none"
                aria-hidden="true"
            >
                "
            </div> --}}

        {{-- <div class="relative max-w-3xl">
                <div class="flex gap-0.5 mb-6">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                        </svg>
                    @endfor
                </div>

                <blockquote
                    class="font-display text-xl md:text-2xl font-medium text-shark-900 dark:text-white leading-relaxed mb-8"
                >
                    "Rapsoltech Consulting doesn't just deliver projects they become strategic partners in your growth
                    journey. The team's understanding of African market nuances, regulatory landscape, and technical
                    depth set them apart from any firm we've worked with globally."
                </blockquote>

                <div class="flex items-center gap-4">
                    <div
                        class="w-11 h-11 rounded-full bg-linear-to-br from-blue-500 to-blue-700 flex items-center justify-center text-white font-bold text-sm shrink-0"
                    >
                        JM
                    </div>
                    <div>
                        <div class="font-display font-semibold text-sm text-shark-900 dark:text-white">
                            James Mwangi
                        </div>
                        <div class="text-xs text-shark-400 dark:text-shark-600">
                            Chief Technology Officer · Equity Bank Kenya
                        </div>
                    </div>
                </div>
            </div> --}}
        {{-- </div> --}}

        {{-- 3 secondary testimonials --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach ([
                [
                    'initials' => 'SK',
                    'grad' => 'from-black-pearl-200 to-black-pearl-800',
                    'name' => 'Sarah Kamau',
                    'role' => 'Head of Digital · Kenya Pipeline Company',
                    'stars' => 5,
                    'quote' => 'The revenue system they built for us eliminated years of manual reconciliation. In 6 months, our digital collection tripled. Worth every shilling.',
                ],
                [
                    'initials' => 'DO',
                    'grad' => 'from-black-pearl-200 to-black-pearl-800',
                    'name' => 'David Ochieng',
                    'role' => 'CEO · Actis Real Estate Kenya',
                    'stars' => 5,
                    'quote' => 'We\'ve digitised our entire property portfolio and our investors now have real-time visibility. It completely transformed how we present ourselves to international LPs.',
                ],
                [
                    'initials' => 'AW',
                    'grad' => 'from-black-pearl-200 to-black-pearl-800',
                    'name' => 'Amina Wanjiru',
                    'role' => 'Founder · TurboSave FinTech',
                    'stars' => 5,
                    'quote' => 'As an early-stage startup, I was worried about working with a "big firm". Nexus Africa met us where we were — pragmatic, affordable, and genuinely invested in our success.',
                ],
            ] as $i => $t)
                <div
                    class="border border-shark-200 dark:border-shark-800 rounded-xl p-6 bg-white dark:bg-shark-900/40"
                    data-animate
                    data-delay="{{ $i + 1 }}"
                >
                    <div class="flex gap-0.5 mb-4">
                        @for ($j = 0; $j < $t['stars']; $j++)
                            <svg class="w-3 h-3 text-black-pearl-950 dark:text-amber-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                            </svg>
                        @endfor
                    </div>

                    <blockquote class="text-sm text-shark-600 dark:text-shark-400 leading-relaxed mb-5 italic">
                        "{{ $t['quote'] }}"
                    </blockquote>

                    <div class="flex items-center gap-3">
                        <div
                            class="w-8 h-8 rounded-full bg-linear-to-br {{ $t['grad'] }} flex items-center justify-center text-white text-[11px] font-bold shrink-0"
                        >
                            {{ $t['initials'] }}
                        </div>
                        <div>
                            <div class="text-xs font-semibold text-shark-900 dark:text-white">{{ $t['name'] }}</div>
                            <div class="text-[10px] text-shark-400 dark:text-shark-600">{{ $t['role'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════════════════
     CTA SECTION
     Full-width dark band — bold, direct, high contrast
══════════════════════════════════════════════════════════ --}}

<section
    id="cta"
    class="relative border-t border-shark-200 dark:border-shark-800 overflow-hidden bg-shark-900 dark:bg-shark-950"
>
    {{-- Large ambient text --}}
    <div
        class="absolute -right-8 -bottom-6 font-display font-black text-[180px] leading-none text-white/3 select-none pointer-events-none"
        aria-hidden="true"
    >
        RTC
    </div>

    <div class="relative px-7 py-20 text-center" data-animate>
        <div
            class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-black-pearl-400 bg-black-pearl-800 mb-6"
        >
            <span class="font-mono text-[10px] text-shark-100 font-semibold tracking-widest uppercase">
                We Are Available for new engagements
            </span>
        </div>

        <h2
            class="font-display text-4xl md:text-5xl font-black text-white leading-tight tracking-tight mb-5 max-w-2xl mx-auto"
        >
            Ready to build something<br />
            <span class="text-amber-400">extraordinary</span>?
        </h2>

        <p class="text-base text-shark-400 leading-relaxed mb-10 max-w-lg mx-auto">Whether you need a digital product, a business consultation strategy, or a long-term technology partner let's start with a conversation.</p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a
                href="/contact"
                class="inline-flex items-center gap-2 px-7 py-3.5 rounded-xl font-display font-semibold text-sm bg-black-pearl-300 hover:bg-black-pearl-400 text-shark-900 transition-all duration-200 hover:-translate-y-0.5 hover:shadow-lg hover:shadow-black-pearl-300"
            >
                Book a Free Consultation
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
            </a>
            <a
                href="/services"
                class="inline-flex items-center gap-2 px-7 py-3.5 rounded-xl font-display font-semibold text-sm border border-shark-700 hover:border-shark-500 text-shark-300 hover:text-white transition-all duration-200 hover:-translate-y-0.5"
            >
                See our work
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
            </a>
        </div>

        {{-- Trust signals --}}
        <div class="mt-12 flex flex-wrap items-center justify-center gap-6 pt-8 border-t border-shark-800">
            @foreach (['Project delivery', 'Quality', 'GDPR compliance', 'Consulting'] as $trust)
                <div class="flex items-center gap-2 text-xs text-shark-500">
                    <svg class="w-3.5 h-3.5 text-amber-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                    {{ $trust }}
                </div>
            @endforeach
        </div>
    </div>
</section>
