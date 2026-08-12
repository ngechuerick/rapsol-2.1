@extends ('layouts.app')
@section ('title', $job['title'] . ' | Rapsoltech Consulting')

@section ('content')
    {{-- ════════════════════════════
     HERO
════════════════════════════ --}}
    <div class="relative px-7 pt-14 pb-10 overflow-hidden">
        <div
            class="absolute inset-0 -z-10 [background-image:linear-gradient(rgba(0,0,0,0.06)_1px,transparent_1px),linear-gradient(90deg,rgba(0,0,0,0.06)_1px,transparent_1px)] dark:[background-image:linear-gradient(rgba(255,255,255,0.04)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.04)_1px,transparent_1px)] [background-size:40px_40px]"
        ></div>
        <div class="absolute -top-[5px] -left-[5px] w-[10px] h-[10px] rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -top-[5px] -right-[5px] w-[10px] h-[10px] rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -bottom-[5px] -left-[5px] w-[10px] h-[10px] rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -bottom-[5px] -right-[5px] w-[10px] h-[10px] rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>

        {{-- Breadcrumb --}}
        <div class="flex items-center gap-2 mb-8 text-sm text-zinc-500 dark:text-zinc-400" data-animate>
            <a href="/careers" class="hover:text-zinc-700 dark:hover:text-zinc-300 transition-colors">Careers</a>
            <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
            <span>{{ $job['dept'] }}</span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
            <div>
                {{-- Tag + dept --}}
                <div class="flex items-center gap-3 mb-4" data-animate>
                    <span
                        class="px-2.5 py-1 rounded-md text-sm font-semibold uppercase tracking-wide bg-gold-100 dark:bg-gold-950/40 text-gold-800 dark:text-gold-400 dark:text-gold-400"
                    >
                        {{ $job['tag'] }}
                    </span>
                    <span class="text-sm text-zinc-500 dark:text-zinc-400">{{ $job['dept'] }}</span>
                </div>

                <h1
                    class="font-display text-3xl md:text-4xl font-black tracking-tight text-zinc-900 dark:text-white leading-tight mb-4"
                    data-animate
                    data-delay="1"
                >
                    {{ $job['title'] }}
                </h1>

                <div
                    class="flex flex-wrap items-center gap-4 text-sm text-zinc-500 dark:text-zinc-400"
                    data-animate
                    data-delay="2"
                >
                    @foreach ([
                    ['📍', 'Nairobi, Kenya'],
                    ['🕐', $job['type']],
                    ['🏢', $job['mode']],
                ] as [$icon, $val])
                        <span class="flex items-center gap-1.5">
                            <span>{{ $icon }}</span>
                            {{ $val }}
                        </span>
                    @endforeach
                </div>
            </div>

            {{-- Apply CTA --}}
            <div class="lg:text-right" data-animate data-delay="3">
                <a
                    href="#apply"
                    class="inline-flex items-center gap-2 px-7 py-3.5 rounded-lg font-display font-semibold text-sm bg-gold-400 hover:bg-gold-400 text-zinc-900 transition-all duration-200 hover:-translate-y-0.5"
                >
                    Apply for this role
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a>
                <p class="text-sm text-zinc-500 dark:text-zinc-400 mt-2">Applications reviewed within 5 working days</p>
            </div>
        </div>
    </div>
    {{-- ════════════════════════════
     BODY — two column
════════════════════════════ --}}
    <div class="relative border-t border-zinc-200 dark:border-zinc-800">
        <div class="absolute -top-[5px] -left-[5px] w-[10px] h-[10px] rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -top-[5px] -right-[5px] w-[10px] h-[10px] rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>

        <div
            class="grid grid-cols-1 lg:grid-cols-[1fr_260px] divide-y lg:divide-y-0 lg:divide-x divide-zinc-200 dark:divide-zinc-800"
        >
            {{-- Main content --}}
            <div class="px-7 py-12">
                <div
                    class="prose prose-zinc dark:prose-invert max-w-none prose-headings:font-display prose-headings:font-bold prose-headings:tracking-tight prose-h2:text-xl prose-h2:mt-10 prose-h2:mb-4 prose-p:text-zinc-600 dark:prose-p:text-zinc-500 dark:text-zinc-400 prose-p:leading-relaxed prose-p:text-[0.9375rem] prose-li:text-zinc-600 dark:prose-li:text-zinc-500 dark:text-zinc-400 prose-li:text-[0.9375rem] prose-strong:text-zinc-900 dark:prose-strong:text-white prose-hr:border-zinc-200 dark:prose-hr:border-zinc-800"
                >
                    {!! $job['description'] !!}
                </div>
            </div>

            {{-- Sidebar --}}
            <div class="px-6 py-12 space-y-8">
                {{-- Role summary --}}
                <div>
                    <h4 class="text-sm font-semibold uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400 mb-4">
                        Role details
                    </h4>
                    <div class="space-y-3">
                        @foreach ([
                        ['Department',  $job['dept']],
                        ['Location',    'Nairobi, Kenya'],
                        ['Employment',  $job['type']],
                        ['Work mode',   $job['mode']],
                        ['Salary',      $job['salary'] ?? 'Competitive'],
                        ['Start date',  'ASAP'],
                    ] as [$label, $val])
                            <div>
                                <div
                                    class="text-sm font-semibold uppercase tracking-[0.1em] text-zinc-500 dark:text-zinc-400 mb-0.5"
                                >
                                    {{ $label }}
                                </div>
                                <div class="text-sm text-zinc-700 dark:text-zinc-300">{{ $val }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="h-px bg-zinc-200 dark:bg-zinc-800"></div>

                {{-- Benefits --}}
                <div>
                    <h4 class="text-sm font-semibold uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400 mb-4">
                        Benefits
                    </h4>
                    <ul class="space-y-2">
                        @foreach ([
                        'Competitive salary',
                        'Medical insurance',
                        'KES 50K learning budget',
                        'Flexible hours',
                        'Annual team retreat',
                        '21 days annual leave',
                    ] as $benefit)
                            <li class="flex items-center gap-2 text-sm text-zinc-500 dark:text-zinc-400">
                                <svg class="w-3.5 h-3.5 text-gold-800 dark:text-gold-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                                {{ $benefit }}
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="h-px bg-zinc-200 dark:bg-zinc-800"></div>

                {{-- Share --}}
                <div>
                    <h4 class="text-sm font-semibold uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400 mb-3">
                        Share this role
                    </h4>
                    <div class="flex gap-2">
                        @foreach (['Twitter','LinkedIn','WhatsApp'] as $platform)
                            <button
                                class="flex-1 py-2 rounded-lg border border-zinc-200 dark:border-zinc-800 text-sm font-medium text-zinc-500 dark:text-zinc-400 hover:border-zinc-300 dark:hover:border-zinc-700 hover:text-zinc-900 dark:hover:text-white transition-all duration-200"
                            >
                                {{ $platform }}
                            </button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ════════════════════════════
     APPLICATION FORM
════════════════════════════ --}}
    <section
        id="apply"
        class="relative border-t border-zinc-200 dark:border-zinc-800 bg-zinc-50/50 dark:bg-zinc-900/20"
    >
        <div class="absolute -top-[5px] -left-[5px] w-[10px] h-[10px] rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -top-[5px] -right-[5px] w-[10px] h-[10px] rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>

        <div class="px-7 py-14">
            <div class="flex items-center gap-3 mb-3" data-animate>
                <div class="w-8 h-px bg-gold-400"></div>
                <span class="text-sm font-semibold uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                    Apply
                </span>
            </div>
            <h2 class="font-display text-2xl font-bold text-zinc-900 dark:text-white mb-8" data-animate data-delay="1">
                Apply for {{ $job['title'] }}
            </h2>

            @if (session('applied'))
                <div
                    class="mb-6 flex items-start gap-3 p-4 rounded-xl border border-emerald-200 dark:border-emerald-800 bg-emerald-50 dark:bg-emerald-950/30"
                >
                    <svg class="w-5 h-5 text-emerald-600 dark:text-emerald-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <div>
                        <div class="font-semibold text-sm text-emerald-800 dark:text-emerald-300">
                            Application received
                        </div>
                        <p class="text-sm text-emerald-700 dark:text-emerald-400 mt-0.5">Thanks for applying! We'll be in touch within 5 working days.</p>
                    </div>
                </div>
            @endif

            <form
                action="{{ route('careers.apply', $job['slug']) }}"
                method="POST"
                enctype="multipart/form-data"
                class="max-w-2xl space-y-5"
                data-animate
                data-delay="2"
            >
                @csrf
                <input type="hidden" name="role" value="{{ $job['title'] }}" />

                {{-- Name + Email --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label
                            class="block text-sm font-semibold uppercase tracking-[0.15em] text-zinc-500 dark:text-zinc-400 mb-2"
                            for="name"
                        >
                            Full name <span class="text-gold-800 dark:text-gold-400">*</span>
                        </label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Jane Wanjiru"
                            required
                            class="w-full px-4 py-3 rounded-lg border text-sm bg-white dark:bg-zinc-900/40
                                  border-zinc-200 dark:border-zinc-800 text-zinc-900 dark:text-zinc-100
                                  placeholder-zinc-400 dark:placeholder-zinc-600
                                  focus:outline-none focus:border-gold-400 dark:focus:border-gold-600
                                  focus:ring-2 focus:ring-gold-400/20 transition-all duration-200
                                  @error('name') border-red-400 @enderror"
                        />
                    </div>
                    <div>
                        <label
                            class="block text-sm font-semibold uppercase tracking-[0.15em] text-zinc-500 dark:text-zinc-400 mb-2"
                            for="email"
                        >
                            Email address <span class="text-gold-800 dark:text-gold-400">*</span>
                        </label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="jane@company.com"
                            required
                            class="w-full px-4 py-3 rounded-lg border text-sm bg-white dark:bg-zinc-900/40
                                  border-zinc-200 dark:border-zinc-800 text-zinc-900 dark:text-zinc-100
                                  placeholder-zinc-400 dark:placeholder-zinc-600
                                  focus:outline-none focus:border-gold-400 dark:focus:border-gold-600
                                  focus:ring-2 focus:ring-gold-400/20 transition-all duration-200
                                  @error('email') border-red-400 @enderror"
                        />
                    </div>
                </div>

                {{-- Phone + LinkedIn --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label
                            class="block text-sm font-semibold uppercase tracking-[0.15em] text-zinc-500 dark:text-zinc-400 mb-2"
                            for="phone"
                        >
                            Phone number
                        </label>
                        <input
                            type="tel"
                            id="phone"
                            name="phone"
                            value="{{ old('phone') }}"
                            placeholder="+254 700 000 000"
                            class="w-full px-4 py-3 rounded-lg border text-sm bg-white dark:bg-zinc-900/40 border-zinc-200 dark:border-zinc-800 text-zinc-900 dark:text-zinc-100 placeholder-zinc-400 dark:placeholder-zinc-600 focus:outline-none focus:border-gold-400 dark:focus:border-gold-600 focus:ring-2 focus:ring-gold-400/20 transition-all duration-200"
                        />
                    </div>
                    <div>
                        <label
                            class="block text-sm font-semibold uppercase tracking-[0.15em] text-zinc-500 dark:text-zinc-400 mb-2"
                            for="linkedin"
                        >
                            LinkedIn profile
                        </label>
                        <input
                            type="url"
                            id="linkedin"
                            name="linkedin"
                            value="{{ old('linkedin') }}"
                            placeholder="https://linkedin.com/in/..."
                            class="w-full px-4 py-3 rounded-lg border text-sm bg-white dark:bg-zinc-900/40 border-zinc-200 dark:border-zinc-800 text-zinc-900 dark:text-zinc-100 placeholder-zinc-400 dark:placeholder-zinc-600 focus:outline-none focus:border-gold-400 dark:focus:border-gold-600 focus:ring-2 focus:ring-gold-400/20 transition-all duration-200"
                        />
                    </div>
                </div>

                {{-- Portfolio / website --}}
                <div>
                    <label
                        class="block text-sm font-semibold uppercase tracking-[0.15em] text-zinc-500 dark:text-zinc-400 mb-2"
                        for="portfolio"
                    >
                        Portfolio / GitHub / Website
                    </label>
                    <input
                        type="url"
                        id="portfolio"
                        name="portfolio"
                        value="{{ old('portfolio') }}"
                        placeholder="https://..."
                        class="w-full px-4 py-3 rounded-lg border text-sm bg-white dark:bg-zinc-900/40 border-zinc-200 dark:border-zinc-800 text-zinc-900 dark:text-zinc-100 placeholder-zinc-400 dark:placeholder-zinc-600 focus:outline-none focus:border-gold-400 dark:focus:border-gold-600 focus:ring-2 focus:ring-gold-400/20 transition-all duration-200"
                    />
                </div>

                {{-- CV Upload --}}
                <div>
                    <label
                        class="block text-sm font-semibold uppercase tracking-[0.15em] text-zinc-500 dark:text-zinc-400 mb-2"
                        for="cv"
                    >
                        CV / Resume <span class="text-gold-800 dark:text-gold-400">*</span>
                    </label>
                    <div class="relative">
                        <input
                            type="file"
                            id="cv"
                            name="cv"
                            accept=".pdf,.doc,.docx"
                            required
                            class="w-full px-4 py-3 rounded-lg border text-sm bg-white dark:bg-zinc-900/40 border-zinc-200 dark:border-zinc-800 text-zinc-500 dark:text-zinc-400 focus:outline-none focus:border-gold-400 dark:focus:border-gold-600 focus:ring-2 focus:ring-gold-400/20 transition-all duration-200 file:mr-4 file:py-1 file:px-3 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-zinc-100 dark:file:bg-zinc-800 file:text-zinc-600 dark:file:text-zinc-500 dark:text-zinc-400 hover:file:bg-zinc-200 dark:hover:file:bg-zinc-700"
                        />
                    </div>
                    <p class="text-sm text-zinc-500 dark:text-zinc-400 mt-1">PDF, DOC, or DOCX · Max 5MB</p>
                </div>

                {{-- Cover note --}}
                <div>
                    <label
                        class="block text-sm font-semibold uppercase tracking-[0.15em] text-zinc-500 dark:text-zinc-400 mb-2"
                        for="cover"
                    >
                        Why Rapsoltech Consulting? <span class="text-gold-800 dark:text-gold-400">*</span>
                    </label>
                    <textarea
                        id="cover"
                        name="cover"
                        rows="5"
                        required
                        placeholder="Tell us why you want to join, what excites you about the role, and what you'd bring to the team. Be yourself — we read every word."
                        class="w-full px-4 py-3 rounded-lg border text-sm resize-none
                                 bg-white dark:bg-zinc-900/40
                                 border-zinc-200 dark:border-zinc-800
                                 text-zinc-900 dark:text-zinc-100
                                 placeholder-zinc-400 dark:placeholder-zinc-600
                                 focus:outline-none focus:border-gold-400 dark:focus:border-gold-600
                                 focus:ring-2 focus:ring-gold-400/20 transition-all duration-200
                                 @error('cover') border-red-400 @enderror"
                        >{{ old('cover') }}</textarea
                    >
                </div>

                {{-- Submit --}}
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pt-2">
                    <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed max-w-xs">Your data is handled in accordance with our <a href="/privacy" class="text-gold-800 dark:text-gold-400 dark:text-gold-400 hover:underline">Privacy Policy</a>. We never share applications with third parties.</p>
                    <button
                        type="submit"
                        class="inline-flex items-center gap-2 px-7 py-3.5 rounded-lg font-display font-semibold text-sm shrink-0 bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 hover:opacity-85 hover:-translate-y-0.5 transition-all duration-200"
                    >
                        Submit application
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </section>

@endsection
