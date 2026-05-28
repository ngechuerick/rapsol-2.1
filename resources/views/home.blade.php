@extends ('layouts.app')
@section ('title', 'Home')

@section ('content')
    {{-- ═══ HERO with grid background + diamond corners ═══ --}}
    <div class="relative px-7 py-18 overflow-hidden">
        {{-- Grid background pattern --}}
        <div
            class="absolute inset-0 -z-10 bg-[linear-gradient(rgba(161,161,170,0.2)_1px,transparent_1px),linear-gradient(90deg,rgba(161,161,170,0.2)_1px,transparent_1px)] dark:bg-[linear-gradient(rgba(255,255,255,0.04)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.04)_1px,transparent_1px)] bg-size-[40px_40px]"
        ></div>

        {{-- Diamond corner accents --}}
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700 z-10"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700 z-10"></div>
        <div class="absolute -bottom-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700 z-10"></div>
        <div class="absolute -bottom-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700 z-10"></div>

        {{-- Pill badge --}}
        <div
            class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full border border-zinc-200 dark:border-zinc-800 font-medium text-zinc-500 dark:text-zinc-400 mb-5 bg-linear-to-r from-sky-100/60 via-orange-100/60 to-fuchsia-100/60 dark:from-sky-950/40 dark:via-orange-950/40 dark:to-fuchsia-950/40"
        >
            <span class="text-xs"> RAPSOLTECH CONSULTING </span>
        </div>

        {{-- Heading --}}
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
