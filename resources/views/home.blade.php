@extends ('layouts.app')
@section ('title', 'Home')

@section ('content')
    {{-- ═══ HERO with grid background + diamond corners ═══ --}}
    {{-- <div class="relative px-7 py-18 overflow-hidden">
        {{-- Grid background pattern 
        <div
            class="absolute inset-0 -z-10 bg-[linear-gradient(rgba(161,161,170,0.2)_1px,transparent_1px),linear-gradient(90deg,rgba(161,161,170,0.2)_1px,transparent_1px)] dark:bg-[linear-gradient(rgba(255,255,255,0.04)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.04)_1px,transparent_1px)] bg-size-[40px_40px]"
        ></div>

        {{-- Diamond corner accents
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700 z-10"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700 z-10"></div>
        <div class="absolute -bottom-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700 z-10"></div>
        <div class="absolute -bottom-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700 z-10"></div>

        {{-- Pill badge 
        <div
            class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full border border-zinc-200 dark:border-zinc-800 font-medium text-zinc-500 dark:text-zinc-400 mb-5 bg-linear-to-r from-sky-100/60 via-orange-100/60 to-fuchsia-100/60 dark:from-sky-950/40 dark:via-orange-950/40 dark:to-fuchsia-950/40"
        >
            <span class="text-xs"> RAPSOLTECH CONSULTING </span>
        </div>

        {{-- Heading 
        <h1 class="text-4xl md:text-5xl font-bold leading-tight tracking-tight text-zinc-900 dark:text-white mb-4">
            <span class="bg-linear-to-r from-black-pearl-900 to-yellow-500 bg-clip-text text-transparent">
                Building something </span
            ><br />
            remarkable.
        </h1>

        <p class="text-zinc-500 dark:text-zinc-400 leading-relaxed text-base max-w-lg">We specialize in providing cutting-edge tech and consulting services, tailored to meet your business needs.</p>

        <div class="flex items-center gap-3 mt-7">
            <a
                href="#"
                class="px-5 py-2.5 rounded-full bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 text-sm font-medium hover:opacity-90 transition-opacity"
            >
                Get Started
            </a>
            <a
                href="#"
                class="px-5 py-2.5 rounded-full border border-zinc-200 dark:border-zinc-700 text-zinc-600 dark:text-zinc-300 text-sm font-medium hover:bg-zinc-50 dark:hover:bg-zinc-900 transition-colors"
            >
                Learn More
            </a>
        </div>
    </div> --}}
    {{-- ════════════════════════════════
     HERO — minimal, weight-contrast
════════════════════════════════ --}}
    {{-- ════════════════════════════════
     HERO — minimal, dark/light aware
════════════════════════════════ --}}
    <div
        class="relative overflow-hidden bg-zinc-50 dark:bg-zinc-950 transition-colors duration-300"
        style="min-height: 540px"
    >
        {{-- Ghost word --}}
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 font-display font-black leading-none whitespace-nowrap select-none pointer-events-none z-1 text-transparent [-webkit-text-stroke:1px_rgba(0,0,0,0.05)] dark:[-webkit-text-stroke:1px_rgba(255,255,255,0.04)]"
            style="font-size: clamp(100px, 16vw, 200px)"
            aria-hidden="true"
        >
            RAPSOLTECH
        </div>

        {{-- Diamond corners --}}
        <div
            class="absolute -top-[5px] -left-[5px] w-[10px] h-[10px] rotate-45 z-10 bg-zinc-300 dark:bg-zinc-800 transition-colors duration-300"
        ></div>
        <div
            class="absolute -top-[5px] -right-[5px] w-[10px] h-[10px] rotate-45 z-10 bg-zinc-300 dark:bg-zinc-800 transition-colors duration-300"
        ></div>
        <div
            class="absolute -bottom-[5px] -left-[5px] w-[10px] h-[10px] rotate-45 z-10 bg-zinc-300 dark:bg-zinc-800 transition-colors duration-300"
        ></div>
        <div
            class="absolute -bottom-[5px] -right-[5px] w-[10px] h-[10px] rotate-45 z-10 bg-zinc-300 dark:bg-zinc-800 transition-colors duration-300"
        ></div>

        {{-- Content --}}
        <div
            class="relative z-3 pl-16 pr-8 flex flex-col justify-center"
            style="min-height: 484px; padding-top: 72px; padding-bottom: 88px"
        >
            {{-- Eyebrow --}}
            <div class="flex items-center gap-3 mb-7" data-animate>
                <div class="w-6 h-px bg-amber-500 shrink-0"></div>
                <span
                    class="text-xs font-medium uppercase tracking-[0.22em] text-black/30 dark:text-white/30 transition-colors duration-300"
                >
                    Technology &amp; Consulting &nbsp;·&nbsp; Nairobi
                </span>
            </div>

            {{-- Headline: weight contrast --}}
            <div class="mb-8" data-animate data-delay="1">
                <span
                    class="block font-display font-light leading-none tracking-tight text-black/30 dark:text-white/30 transition-colors duration-300"
                    style="font-size: clamp(44px, 6vw, 72px)"
                >
                    Where strategy
                </span>
                <span
                    class="block font-display font-black leading-[1.0] tracking-tight text-zinc-900 dark:text-white transition-colors duration-300"
                    style="font-size: clamp(44px, 6vw, 72px)"
                >
                    meets <span class="text-amber-500">execution.</span>
                </span>
            </div>

            {{-- Sub --}}
            <p
                class="text-base leading-relaxed max-w-xl mb-10 text-black/45 dark:text-white/35 transition-colors duration-300"
                data-animate
                data-delay="2"
            >We build <span class="font-medium text-zinc-700 dark:text-zinc-300 transition-colors duration-300">digital products</span>, transform organisations, and deliver
            <span class="font-medium text-zinc-700 dark:text-zinc-300 transition-colors duration-300">financial advisory</span>
            across East Africa.</p>

            {{-- CTAs --}}
            <div class="flex flex-wrap items-center gap-6 md:gap-8" data-animate data-delay="3">
                <a
                    href="/services"
                    class="group flex items-center gap-3 font-display font-bold text-sm text-amber-500 hover:text-amber-400 transition-colors duration-200"
                >
                    <span
                        class="w-8 h-8 rounded-full border border-amber-500/50 flex items-center justify-center group-hover:bg-amber-500/10 transition-colors duration-200 shrink-0"
                    >
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </span>
                    Explore our services
                </a>

                <div class="w-1 h-1 rounded-full bg-zinc-300 dark:bg-zinc-700 transition-colors duration-300"></div>

                <a
                    href="/work"
                    class="text-sm text-black/30 dark:text-white/25 hover:text-zinc-700 dark:hover:text-zinc-300 transition-colors duration-200"
                >
                    See our work
                </a>

                <div class="w-1 h-1 rounded-full bg-zinc-300 dark:bg-zinc-700 transition-colors duration-300"></div>

                <a
                    href="/contact"
                    class="text-sm text-black/30 dark:text-white/25 hover:text-zinc-700 dark:hover:text-zinc-300 transition-colors duration-200"
                >
                    Book a call
                </a>
            </div>
        </div>
    </div>
    {{-- ═══ CONTENT SECTION (border-top separates sections) ═══ --}}
    {{-- <div class="relative px-7 py-10 border-t border-zinc-200 dark:border-zinc-800">
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700 z-10"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-[10px] rotate-45 bg-zinc-300 dark:bg-zinc-700 z-10"></div>

        <h2 class="text-lg font-semibold text-zinc-900 dark:text-white mb-6">Featured Work</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ([
                ['Free', 'Project One', 'A short description of this project or template.'],
                ['Premium', 'Project Two', 'A short description of this project or template.'],
                ['Free', 'Project Three', 'A short description of this project or template.'],
                ['Free', 'Project Four', 'A short description of this project or template.'],
            ] as [$tag, $title, $desc])
                <div
                    class="relative rounded-xl border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-900/50 p-5 hover:-translate-y-0.5 transition-transform duration-300"
                >
                    <span
                        class="text-[10px] font-mono tracking-widest text-zinc-400 dark:text-zinc-600 uppercase"
                        >{{ $tag }}</span
                    >
                    <h3 class="font-semibold text-zinc-900 dark:text-white mt-1 mb-2">{{ $title }}</h3>
                    <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed">{{ $desc }}</p>
                    <div class="flex gap-2 mt-4">
                        <a
                            href="#"
                            class="text-xs px-4 py-1.5 rounded-full border border-zinc-200 dark:border-zinc-700 text-zinc-600 dark:text-zinc-400 hover:bg-zinc-50 dark:hover:bg-zinc-800 transition-colors"
                            >View Details</a
                        >
                        <a
                            href="#"
                            class="text-xs px-4 py-1.5 rounded-full bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 hover:opacity-90 transition-opacity"
                            >Live Demo →</a
                        >
                    </div>
                </div>
            @endforeach
        </div>
    </div> --}}
    {{-- All the other sections --}}
    @include ('partials._services')
    @include ('partials._why-us')
    @include ('partials._how-we-work')
    @include ('partials._industries')
    @include ('partials._case-studies')
    @include ('partials._testimonials-partners-cta')

@endsection
