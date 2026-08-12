@extends ('layouts.app')
@section ('title', 'Careers | Rapsoltech Consulting')
@section ('description', 'Join Rapsoltech Consulting. See open roles for engineers, consultants and analysts working on technology projects across East Africa.')

@section ('content')
    {{--HERO  --}}
    <div class="relative px-7 py-20 overflow-hidden">
        <div
            class="absolute inset-0 -z-10 bg-[linear-gradient(rgba(0,0,0,0.06)_1px,transparent_1px),linear-gradient(90deg,rgba(0,0,0,0.06)_1px,transparent_1px)] dark:bg-[linear-gradient(rgba(255,255,255,0.04)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.04)_1px,transparent_1px)] bg-size-[40px_40px]"
        ></div>
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -bottom-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -bottom-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>

        <div class="flex items-center gap-3 mb-6" data-animate>
            <span class="text-sm font-semibold uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                Careers at Rapsoltech Consulting
            </span>
        </div>

        <h1
            class="font-display text-5xl md:text-6xl font-black leading-[1.05] tracking-tight text-zinc-900 dark:text-white mb-5 max-w-2xl"
            data-animate
            data-delay="1"
        >
            Build the future of<br />
            East Africa <span class="text-black-pearl-900 dark:text-gold-400">with us.</span>
        </h1>

        <p
            class="text-lg text-zinc-500 dark:text-zinc-400 leading-relaxed max-w-xl mb-10"
            data-animate
            data-delay="2"
        >We're a team of engineers, strategists, and consulting experts on a mission to transform how East Africa does business. If that excites you, <span class="font-medium text-zinc-700 dark:text-zinc-300">we want to hear from you</span>.</p>

        <div class="flex flex-wrap gap-3" data-animate data-delay="3">
            <a
                href="#open-roles"
                class="inline-flex items-center gap-2 px-6 py-3 rounded-lg font-display font-semibold text-sm bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 hover:opacity-85 transition-all duration-200 hover:-translate-y-0.5"
            >
                See open roles
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
            </a>
            <a
                href="#life"
                class="inline-flex items-center gap-2 px-6 py-3 rounded-lg font-display font-semibold text-sm border border-zinc-200 dark:border-zinc-700 text-zinc-600 dark:text-zinc-300 hover:bg-zinc-50 dark:hover:bg-zinc-900 transition-all duration-200 hover:-translate-y-0.5"
            >
                Life at Rapsoltech
            </a>
        </div>
    </div>
    {{--STATS BAR --}}
    {{-- <div
        class="grid grid-cols-2 md:grid-cols-4 border-t border-zinc-200 dark:border-zinc-800 divide-x divide-zinc-200 dark:divide-zinc-800"
    >
        @foreach ([
        ['44',  'Team members'],
        ['8',   'Open roles'],
        ['6',   'Countries'],
        ['4.8★','Glassdoor rating'],
    ] as [$val, $lbl])
            <div class="py-6 text-center" data-animate>
                <div class="font-display font-black text-2xl text-zinc-900 dark:text-white mb-1">{{ $val }}</div>
                <div class="text-sm text-zinc-500 dark:text-zinc-400">{{ $lbl }}</div>
            </div>
        @endforeach
    </div> --}}
    {{-- LIFE AT Rapsoltech — values --}}
    <section id="life" class="relative border-t border-zinc-200 dark:border-zinc-800">
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>

        <div class="px-7 py-16">
            <div class="flex items-center gap-3 mb-3" data-animate>
                {{-- <div class="w-8 h-px bg-gold-400"></div> --}}
                <span class="text-sm font-semibold uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                    Why join us
                </span>
            </div>
            <h2
                class="font-display text-3xl md:text-4xl font-bold tracking-tight text-zinc-900 dark:text-white mb-10"
                data-animate
                data-delay="1"
            >
                Life at Rapsoltech Consulting
            </h2>

            {{-- VALUES GRID --}}
            <div
                class="grid grid-cols-1 md:grid-cols-3 gap-px bg-zinc-200 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden"
            >
                @foreach ([
        [
            '<path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>',
            'Work that matters',
            'Every project we take on has real, visible impact on African businesses and the livelihoods they support.',
        ],
        [
            '<path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 3.741-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5"/>',
            'Senior-level learning',
            'You work directly with experienced principals from day one  never siloed in a junior team doing busywork.',
        ],
        [
            '<path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418"/>',
            'Pan-African reach',
            'Collaborate with clients and colleagues across Kenya, Uganda, Tanzania, Rwanda and beyond.',
        ],
        [
            '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z"/>',
            'Competitive pay',
            'Market-rate salaries benchmarked quarterly against East African and global tech compensation data.',
        ],
        [
            '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25"/>',
            'Learning budget',
            'KES 50,000 annual budget per person for courses, conferences, certifications, and books.',
        ],
        [
            '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z"/>',
            'Flat structure',
            'No bureaucracy, no unnecessary hierarchy. Your ideas get to the client table directly.',
        ],
    ] as $i => [$icon, $title, $desc])
                    <div
                        class="bg-white dark:bg-zinc-950 p-6 group hover:bg-zinc-50 dark:hover:bg-zinc-900/60 transition-colors duration-300"
                        data-animate
                        data-delay="{{ ($i % 3) + 1 }}"
                    >
                        <div
                            class="w-9 h-9 rounded-lg bg-black-pearl-100 dark:bg-gold-950/30 flex items-center justify-center mb-4 group-hover:bg-black-pearl-200 dark:group-hover:bg-gold-900/40 transition-colors duration-300"
                        >
                            <svg
                                class="w-8 h-8 text-black-pearl-950 dark:text-gold-400"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.5"
                                viewBox="0 0 24 24"
                            >
                                {!! $icon !!}
                            </svg>
                        </div>
                        <h3 class="font-display font-bold text-base text-zinc-900 dark:text-white mb-2">
                            {{ $title }}
                        </h3>
                        <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed">{{ $desc }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- OUR HIRING PROCESS --}}
    <section class="relative border-t border-zinc-200 dark:border-zinc-800 bg-zinc-50/50 dark:bg-zinc-900/20">
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>

        <div class="px-7 py-14">
            <div class="flex items-center gap-3 mb-3" data-animate>
                {{-- <div class="w-8 h-px bg-gold-400"></div> --}}
                <span class="text-sm font-semibold uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                    How we hire
                </span>
            </div>
            <h2
                class="font-display text-2xl font-bold tracking-tight text-zinc-900 dark:text-white mb-8"
                data-animate
                data-delay="1"
            >
                A straightforward process. No surprises.
            </h2>

            <div class="relative pl-2">
                <div
                    class="absolute left-2 top-2 bottom-2 w-0.5 bg-linear-to-b from-gold-400 via-gold-400/40 to-transparent"
                ></div>

                @foreach ([
                ['Application', 'Submit your CV and a cover letter  about why you want to join Rapsoltech Consulting. We read every application  no automated filtering.'],
                ['Initial call', '30-minute conversation with our hiring team to learn about you, share what we\'re working on, and answer your questions honestly.'],
                ['Skills assessment', 'A short, practical task relevant to the role. Designed to take 2–3 hours, not days. We respect your time.'],
                ['Principal interview', 'A conversation with the team lead and a senior principal. We discuss your work, your thinking, and what you want from your career.'],
                ['Offer', 'If there\'s a fit on both sides, we move fast. Offer, references, and start date agreed as soon as possible.'],
            ] as $i => [$step, $desc])
                    <div class="relative pl-9 pb-8 last:pb-0" data-animate data-delay="{{ min($i + 1, 5) }}">
                        <div
                            class="absolute -left-2 right top-1 w-4.5 h-4.5 rounded-full border-4 border-zinc-50 bg-black-pearl-950 dark:border-zinc-950 dark:bg-gold-400 z-10"
                        ></div>
                        <div
                            class="text-sm font-bold text-dark-pearl-950 dark:text-gold-400 mb-1 uppercase tracking-wider"
                        >
                            Step {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}
                        </div>
                        <h3 class="font-display font-semibold text-base text-zinc-900 dark:text-white mb-1">
                            {{ $step }}
                        </h3>
                        <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed max-w-xl">{{ $desc }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- IF THERE ARE NO CURRENT OPEN ROLE WE JUST DISPLAY NO CURRENT OPEN ROLES --}}
    <section id="open-roles" class="relative border-t border-zinc-200 dark:border-zinc-800">
        <div class="py-12 flex items-center justify-center">
            <p>There are no current open roles. Check back soon.</p>
        </div>
    </section>
    {{--OPEN ROLES  --}}
    {{-- <section id="open-roles" class="relative border-t border-zinc-200 dark:border-zinc-800">
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>

        <div class="px-7 py-14">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-10" data-animate>
                <div>
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-8 h-px bg-gold-400"></div>
                        <span class="text-sm font-semibold uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                            Open Positions
                        </span>
                    </div>
                    <h2
                        class="font-display text-3xl md:text-4xl font-bold tracking-tight text-zinc-900 dark:text-white"
                    >
                        8 roles available
                    </h2>
                </div>
                <p class="text-sm text-zinc-500 dark:text-zinc-400 md:text-right max-w-xs">All roles are based in Nairobi unless stated otherwise.</p>
            </div>

            @php
        $jobs = [
            [
                'num'    => '01',
                'dept'   => 'Engineering',
                'tag'    => 'Technology',
                'title'  => 'Senior Full-Stack Engineer',
                'type'   => 'Full-time',
                'mode'   => 'On-site',
                'slug'   => 'senior-fullstack-engineer',
            ],
            [
                'num'    => '02',
                'dept'   => 'Engineering',
                'tag'    => 'Technology',
                'title'  => 'AI / ML Engineer',
                'type'   => 'Full-time',
                'mode'   => 'Hybrid',
                'slug'   => 'ai-ml-engineer',
            ],
            [
                'num'    => '03',
                'dept'   => 'Product',
                'tag'    => 'Design',
                'title'  => 'Senior UI/UX Designer',
                'type'   => 'Full-time',
                'mode'   => 'Hybrid',
                'slug'   => 'senior-uiux-designer',
            ],
            [
                'num'    => '04',
                'dept'   => 'Engineering',
                'tag'    => 'Technology',
                'title'  => 'Mobile Developer (React Native)',
                'type'   => 'Full-time',
                'mode'   => 'On-site',
                'slug'   => 'mobile-developer',
            ],
            [
                'num'    => '05',
                'dept'   => 'Strategy',
                'tag'    => 'Consulting',
                'title'  => 'Business Strategy Consultant',
                'type'   => 'Full-time',
                'mode'   => 'On-site',
                'slug'   => 'business-strategy-consultant',
            ],
            [
                'num'    => '06',
                'dept'   => 'Finance',
                'tag'    => 'Finance',
                'title'  => 'Financial Analyst',
                'type'   => 'Full-time',
                'mode'   => 'On-site',
                'slug'   => 'financial-analyst',
            ],
            [
                'num'    => '07',
                'dept'   => 'Marketing',
                'tag'    => 'Growth',
                'title'  => 'Digital Marketing Manager',
                'type'   => 'Full-time',
                'mode'   => 'Hybrid',
                'slug'   => 'digital-marketing-manager',
            ],
            [
                'num'    => '08',
                'dept'   => 'Operations',
                'tag'    => 'Operations',
                'title'  => 'Project Manager',
                'type'   => 'Full-time',
                'mode'   => 'On-site',
                'slug'   => 'project-manager',
            ],
        ];
        @endphp

            <div class="divide-y divide-zinc-200 dark:divide-zinc-800">
                @foreach ($jobs as $i => $job)
                    <a
                        href="{{ route('careers.show', $job['slug']) }}"
                        class="group flex items-center gap-4 py-5 hover:bg-zinc-50 dark:hover:bg-zinc-900/40 transition-colors duration-200 -mx-7 px-7"
                        data-animate
                        data-delay="{{ min($i + 1, 5) }}"
                    >
                        <div
                            class="font-display font-black text-3xl w-12 shrink-0 text-zinc-200 dark:text-zinc-800 group-hover:text-gold-200 dark:group-hover:text-gold-900 transition-colors duration-300 hidden md:block"
                        >
                            {{ $job['num'] }}
                        </div>

                        <div class="flex-1 min-w-0">
                            <div class="flex flex-wrap items-center gap-2 mb-1.5">
                                <span
                                    class="px-2 py-0.5 rounded text-sm font-semibold uppercase tracking-wide bg-gold-100 dark:bg-gold-950/40 text-gold-800 dark:text-gold-400 dark:text-gold-400"
                                >
                                    {{ $job['tag'] }}
                                </span>
                                <span class="text-sm text-zinc-500 dark:text-zinc-400"> {{ $job['dept'] }} </span>
                            </div>
                            <h3
                                class="font-display font-bold text-base text-zinc-900 dark:text-white group-hover:text-gold-800 dark:group-hover:text-gold-400 dark:group-hover:text-gold-400 transition-colors duration-300"
                            >
                                {{ $job['title'] }}
                            </h3>
                            <div class="flex items-center gap-3 mt-1">
                                <span class="text-sm text-zinc-500 dark:text-zinc-400"> Nairobi, Kenya </span>
                                <span class="w-1 h-1 rounded-full bg-zinc-300 dark:bg-zinc-700"></span>
                                <span class="text-sm text-zinc-500 dark:text-zinc-400">{{ $job['type'] }}</span>
                                <span class="w-1 h-1 rounded-full bg-zinc-300 dark:bg-zinc-700"></span>
                                <span class="text-sm text-zinc-500 dark:text-zinc-400">{{ $job['mode'] }}</span>
                            </div>
                        </div>

                        <div
                            class="w-9 h-9 rounded-full border border-zinc-200 dark:border-zinc-800 flex items-center justify-center shrink-0 group-hover:border-gold-300 dark:group-hover:border-gold-700 group-hover:bg-gold-50 dark:group-hover:bg-gold-950/30 transition-all duration-300"
                        >
                            <svg
                                class="w-4 h-4 text-zinc-500 dark:text-zinc-400 group-hover:text-gold-800 dark:group-hover:text-gold-400 dark:group-hover:text-gold-400 transition-colors duration-300"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                            >
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section> --}}
    {{--OPEN APPLICATION CTA  --}}
    <div class="relative border-t border-zinc-200 dark:border-zinc-800 overflow-hidden bg-zinc-900 dark:bg-zinc-950">
        <div
            class="absolute -right-8 -bottom-6 font-display font-black text-[11.25rem] leading-none text-white/3 select-none"
            aria-hidden="true"
        >
            RTC
        </div>

        <div class="relative px-7 py-16 text-center" data-animate>
            <div class="flex items-center justify-center gap-3 mb-6">
                <div class="w-8 h-px bg-gold-400"></div>
                <span class="text-sm font-semibold uppercase tracking-[0.2em] text-zinc-500">
                    Don't see your role?
                </span>
                <div class="w-8 h-px bg-gold-400"></div>
            </div>
            <h2
                class="font-display text-3xl md:text-4xl font-black text-white leading-tight tracking-tight mb-4 max-w-xl mx-auto"
            >
                Send an open application.
            </h2>
            <p class="text-base text-zinc-500 dark:text-zinc-400 leading-relaxed mb-8 max-w-md mx-auto">We hire talent first, roles second. If you're exceptional at what you do and believe in what we're building, tell us about yourself.</p>
            <a
                href="/contact?type=career"
                class="inline-flex items-center gap-2 px-7 py-3.5 rounded-xl font-display font-semibold text-sm bg-black-pearl-300 hover:bg-black-pearl-400 text-shark-900 transition-all duration-200 hover:-translate-y-0.5 hover:shadow-lg hover:shadow-black-pearl-300"
            >
                Send open application
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>

@endsection
