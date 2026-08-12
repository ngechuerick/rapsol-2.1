@extends ('layouts.app')
@section ('title', 'Home | Rapsoltech Consulting')
@section ('description', 'Rapsoltech Consulting builds digital products, transforms organisations and delivers technology advisory across East Africa. Nairobi-based, senior-led delivery.')

@section ('content')
    {{-- HERO SECTION --}}
    <div class="relative overflow-hidden" style="min-height: 36.25rem">
        {{-- Grid — adapts to both modes --}}

        {{-- Blue glow orb top right --}}
        <div
            class="absolute -top-32 -right-20 w-125 h-125 rounded-full pointer-events-none"
            style="background: radial-gradient(circle, rgba(42, 122, 205, 0.12) 0%, transparent 65%)"
        ></div>

        {{-- Ghost word --}}
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 font-display font-black leading-none whitespace-nowrap select-none pointer-events-none z-[1] text-transparent [-webkit-text-stroke:1px_rgba(0,0,0,0.05)] dark:[-webkit-text-stroke:1px_rgba(255,255,255,0.04)]"
            style="font-size: clamp(6.25rem, 16vw, 12.5rem)"
            aria-hidden="true"
        >
            RAPSOLTECH
        </div>

        {{-- Blue vertical rule --}}
        {{-- <div
            class="absolute left-7 z-[2]"
            style="
                top: 72px;
                bottom: 56px;
                width: 1px;
                background: linear-gradient(to bottom, transparent, rgba(42, 122, 205, 0.6), transparent);
            "
        ></div> --}}

        {{-- Diamond corners --}}
        <div
            class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 z-10 bg-bp-300 dark:bg-bp-800 transition-colors duration-300"
        ></div>
        <div
            class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 z-10 bg-bp-300 dark:bg-bp-800 transition-colors duration-300"
        ></div>
        <div
            class="absolute -bottom-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 z-10 bg-bp-300 dark:bg-bp-800 transition-colors duration-300"
        ></div>
        <div
            class="absolute -bottom-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 z-10 bg-bp-300 dark:bg-bp-800 transition-colors duration-300"
        ></div>

        {{-- Content --}}
        <div
            class="relative z-3 px-6 md:pl-16 md:pr-8 flex flex-col justify-center"
            style="min-height: 32.75rem; padding-top: 4.5rem; padding-bottom: 5.5rem"
        >
            {{-- Eyebrow --}}
            <div class="flex items-center gap-3 mb-7" data-animate>
                <div class="w-6 h-px bg-bp-500 shrink-0"></div>
                <span
                    class="text-sm font-medium uppercase tracking-[0.22em] text-bp-600 dark:text-bp-300/70 transition-colors duration-300"
                >
                    Technology &amp; Consulting &nbsp;·&nbsp; Nairobi
                </span>
            </div>

            {{-- Headline — the page's only <h1> --}}
            <h1 class="mb-5" data-animate data-delay="1">
                <span
                    class="block font-display font-normal leading-none tracking-tight text-zinc-700 dark:text-zinc-300 transition-colors duration-300"
                    style="font-size: clamp(2.5rem, 6.6vw, 5rem)"
                >
                    Where strategy
                </span>
                <span
                    class="block font-display font-black leading-none tracking-tight text-zinc-900 dark:text-white transition-colors duration-300"
                    style="font-size: clamp(2.5rem, 6.6vw, 5rem)"
                >
                    meets <span class="text-black-pearl-900 dark:text-gold-400">execution.</span>
                </span>
            </h1>

            {{-- Sub --}}
            <p
                class="text-base leading-relaxed max-w-xl mb-10 text-zinc-500 dark:text-bp-300/60 transition-colors duration-300"
                data-animate
                data-delay="2"
            >We build <span class="font-medium text-zinc-700 dark:text-bp-200 transition-colors duration-300">digital products</span>, transform organisations, and deliver
            <span class="font-medium text-zinc-700 dark:text-bp-200 transition-colors duration-300">Technology advisory</span>
            across East Africa.</p>

            {{-- CTAs --}}
            <div class="flex flex-wrap items-center gap-6 md:gap-8" data-animate data-delay="3">
                {{-- Primary CTA — blue circle --}}
                <a
                    href="/services"
                    class="group flex items-center gap-3 font-display font-bold text-sm text-bp-600 dark:text-bp-300 hover:text-bp-500 dark:hover:text-bp-200 transition-colors duration-200"
                >
                    <span
                        class="w-8 h-8 rounded-full border border-bp-500/50 flex items-center justify-center group-hover:bg-bp-500/10 transition-colors duration-200 shrink-0"
                    >
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </span>
                    Explore our services
                </a>

                <div class="w-1 h-1 rounded-full bg-bp-400/40 dark:bg-bp-500/40"></div>

                <a
                    href="/gallery"
                    class="text-sm text-zinc-500 dark:text-bp-300/70 hover:text-zinc-700 dark:hover:text-bp-200 transition-colors duration-200"
                >
                    See our work
                </a>

                <div class="w-1 h-1 rounded-full bg-bp-400/40 dark:bg-bp-500/40"></div>

                <a
                    href="/contact"
                    class="text-sm text-zinc-500 dark:text-bp-300/70 hover:text-zinc-700 dark:hover:text-bp-200 transition-colors duration-200"
                >
                    Book a call
                </a>
            </div>
        </div>
    </div>
    {{-- All the other sections --}}
    @include ('partials._services')
    @include ('partials._why-us')
    @include ('partials._how-we-work')
    @include ('partials._industries')
    @include ('partials._case-studies')
    @include ('partials._testimonials-partners-cta')

@endsection
