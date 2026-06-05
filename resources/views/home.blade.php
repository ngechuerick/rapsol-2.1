@extends ('layouts.app')
@section ('title', 'Home | Rapsoltech Consulting')

@section ('content')
    {{-- HERO SECTION --}}
    <div class="relative overflow-hidden" style="min-height: 580px">
        {{-- Grid — adapts to both modes --}}

        {{-- Blue glow orb top right --}}
        <div
            class="absolute -top-32 -right-20 w-125 h-125 rounded-full pointer-events-none"
            style="background: radial-gradient(circle, rgba(42, 122, 205, 0.12) 0%, transparent 65%)"
        ></div>

        {{-- Ghost word --}}
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 font-display font-black leading-none whitespace-nowrap select-none pointer-events-none z-[1] text-transparent [-webkit-text-stroke:1px_rgba(0,0,0,0.05)] dark:[-webkit-text-stroke:1px_rgba(255,255,255,0.04)]"
            style="font-size: clamp(100px, 16vw, 200px)"
            aria-hidden="true"
        >
            RAPSOLTECH
        </div>

        {{-- Blue vertical rule --}}
        <div
            class="absolute left-7 z-[2]"
            style="
                top: 72px;
                bottom: 56px;
                width: 1px;
                background: linear-gradient(to bottom, transparent, rgba(42, 122, 205, 0.6), transparent);
            "
        ></div>

        {{-- Diamond corners --}}
        <div
            class="absolute -top-[5px] -left-[5px] w-[10px] h-[10px] rotate-45 z-10 bg-bp-300 dark:bg-bp-800 transition-colors duration-300"
        ></div>
        <div
            class="absolute -top-[5px] -right-[5px] w-[10px] h-[10px] rotate-45 z-10 bg-bp-300 dark:bg-bp-800 transition-colors duration-300"
        ></div>
        <div
            class="absolute -bottom-[5px] -left-[5px] w-[10px] h-[10px] rotate-45 z-10 bg-bp-300 dark:bg-bp-800 transition-colors duration-300"
        ></div>
        <div
            class="absolute -bottom-[5px] -right-[5px] w-[10px] h-[10px] rotate-45 z-10 bg-bp-300 dark:bg-bp-800 transition-colors duration-300"
        ></div>

        {{-- Content --}}
        <div
            class="relative z-[3] pl-16 pr-8 flex flex-col justify-center"
            style="min-height: 524px; padding-top: 72px; padding-bottom: 88px"
        >
            {{-- Eyebrow --}}
            <div class="flex items-center gap-3 mb-7" data-animate>
                <div class="w-6 h-px bg-bp-500 shrink-0"></div>
                <span
                    class="text-xs font-medium uppercase tracking-[0.22em] text-bp-600 dark:text-bp-300/70 transition-colors duration-300"
                >
                    Technology &amp; Consulting &nbsp;·&nbsp; Nairobi
                </span>
            </div>

            {{-- Headline --}}
            <div class="mb-5" data-animate data-delay="1">
                <span
                    class="block font-display font-light leading-[1.0] tracking-tight text-bp-500/40 dark:text-bp-300/40 transition-colors duration-300"
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
                class="text-base leading-relaxed max-w-xl mb-10 text-zinc-500 dark:text-bp-300/60 transition-colors duration-300"
                data-animate
                data-delay="2"
            >We build <span class="font-medium text-zinc-700 dark:text-bp-200 transition-colors duration-300">digital products</span>, transform organisations, and deliver
            <span class="font-medium text-zinc-700 dark:text-bp-200 transition-colors duration-300">financial advisory</span>
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
                    href="/work"
                    class="text-sm text-zinc-400 dark:text-bp-300/40 hover:text-zinc-700 dark:hover:text-bp-200 transition-colors duration-200"
                >
                    See our work
                </a>

                <div class="w-1 h-1 rounded-full bg-bp-400/40 dark:bg-bp-500/40"></div>

                <a
                    href="/contact"
                    class="text-sm text-zinc-400 dark:text-bp-300/40 hover:text-zinc-700 dark:hover:text-bp-200 transition-colors duration-200"
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
