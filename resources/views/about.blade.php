@extends ('layouts.app')
@section ('title', 'About | Rapsoltech Consulting')

@section ('content')
    <div class="relative px-7 py-24 overflow-hidden">
        <div
            class="absolute inset-0 -z-10 bg-[linear-gradient(rgba(161,161,170,0.14)_1px,transparent_1px),linear-gradient(90deg,rgba(161,161,170,0.14)_1px,transparent_1px)] dark:bg-[linear-gradient(rgba(255,255,255,0.04)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.04)_1px,transparent_1px)] bg-size-[40px_40px]"
        ></div>
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -bottom-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -bottom-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>

        <div class="flex items-center gap-3 mb-7" data-animate>
            <div class="w-8 h-px bg-amber-500"></div>
            <span class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                About Rapsoltech Consulting &mdash; Established 2020
            </span>
        </div>

        <h1
            class="font-display text-5xl md:text-6xl xl:text-7xl font-black leading-[1.05] tracking-tight text-zinc-900 dark:text-white mb-7 max-w-3xl"
            data-animate
            data-delay="1"
        >
            We're building<br />Africa's <em class="not-italic text-amber-500">digital</em> future.
        </h1>

        <p
            class="text-lg text-zinc-500 dark:text-zinc-400 leading-relaxed max-w-xl"
            data-animate
            data-delay="2"
        >A Nairobi-rooted technology and consulting firm on a mission to bridge world-class capability with deep local understanding.</p>
    </div>
    @include ('partials._about-story')
    @include ('partials._about-values')
    @include ('partials._about-timeline')
    @include ('partials._about-team')
    @include ('partials._about-cta')

@endsection
