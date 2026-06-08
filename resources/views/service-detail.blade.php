@extends ('layouts.app')
@section ('title', $service['title'] . ' — Nexus Africa')

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

        {{-- Breadcrumb --}}
        <div class="flex items-center gap-2 mb-8 text-xs text-shark-400 dark:text-shark-600" data-animate>
            <a href="/services" class="hover:text-shark-700 dark:hover:text-shark-300 transition-colors">Services</a>
            <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
            <span class="text-shark-500 dark:text-shark-400">{{ $service['title'] }}</span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-end">
            <div>
                {{-- Number + icon --}}
                <div class="flex items-center gap-4 mb-6" data-animate>
                    <span class="font-display font-black text-5xl text-shark-200 dark:text-shark-800 leading-none">
                        {{ $service['num'] }}
                    </span>
                    <div
                        class="w-11 h-11 rounded-xl bg-black-pearl-200 dark:bg-amber-950/40 flex items-center justify-center"
                    >
                        <svg
                            class="w-5 h-5 text-black-pearl-950 dark:text-amber-400"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.5"
                            viewBox="0 0 24 24"
                        >
                            {!! $service['icon'] !!}
                        </svg>
                    </div>
                </div>

                <h1
                    class="font-display text-4xl md:text-5xl font-black leading-[1.1] tracking-tight text-shark-900 dark:text-white mb-6"
                    data-animate
                    data-delay="1"
                >
                    {{ $service['headline'] }}
                </h1>
                <p class="text-lg text-shark-500 dark:text-shark-400 leading-relaxed" data-animate data-delay="2">
                    {{ $service['intro'] }}
                </p>
            </div>

            {{-- Tags --}}
            <div data-animate data-delay="3">
                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-shark-400 dark:text-shark-600 mb-4">What's included</p>
                <div class="flex flex-wrap gap-2">
                    @foreach ($service['tags'] as $tag)
                        <span
                            class="px-3 py-1.5 rounded-lg text-sm font-medium border border-shark-200 dark:border-shark-800 bg-white dark:bg-shark-900/40 text-shark-600 dark:text-shark-400"
                        >
                            {{ $tag }}
                        </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- ════════════════════════════
     WHAT WE DELIVER
════════════════════════════ --}}
    <div class="relative border-t border-shark-200 dark:border-shark-800">
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700"></div>

        <div class="px-7 py-16">
            <div class="flex items-center gap-3 mb-12" data-animate>
                {{-- <div class="w-8 h-px bg-amber-500"></div> --}}
                <span class="text-xs font-semibold uppercase tracking-[0.2em] text-shark-500 dark:text-shark-400">
                    What We Deliver
                </span>
            </div>

            <div
                class="grid grid-cols-1 md:grid-cols-2 gap-px bg-shark-200 dark:bg-shark-800 border border-shark-200 dark:border-shark-800 rounded-xl overflow-hidden"
            >
                @foreach ($service['deliverables'] as $i => $item)
                    <div
                        class="bg-white dark:bg-shark-950 p-7 group hover:bg-shark-50 dark:hover:bg-shark-900/60 transition-colors duration-300"
                        data-animate
                        data-delay="{{ ($i % 2) + 1 }}"
                    >
                        <div
                            class="w-9 h-9 rounded-lg bg-black-pearl-100 dark:bg-amber-950/30 flex items-center justify-center mb-5 group-hover:bg-black-pearl-200 dark:group-hover:bg-amber-900/40 transition-colors duration-300"
                        >
                            <svg class="w-4 h-4 text-black-pearl-950 dark:text-amber-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                {!! $item['icon'] !!}
                            </svg>
                        </div>
                        <h3 class="font-display font-bold text-base text-shark-900 dark:text-white mb-2">
                            {{ $item['title'] }}
                        </h3>
                        <p class="text-sm text-shark-500 dark:text-shark-400 leading-relaxed">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- ════════════════════════════
     PROCESS STEPS
════════════════════════════ --}}
    <div class="relative border-t border-shark-200 dark:border-shark-800 bg-shark-50/50 dark:bg-shark-900/20">
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700"></div>

        <div class="px-7 py-16">
            <div class="flex items-center gap-3 mb-3" data-animate>
                {{-- <div class="w-8 h-px bg-amber-500"></div> --}}
                <span class="text-xs font-semibold uppercase tracking-[0.2em] text-shark-500 dark:text-shark-400">
                    Our Process
                </span>
            </div>
            <h2
                class="font-display text-3xl md:text-4xl font-bold tracking-tight text-shark-900 dark:text-white mb-12"
                data-animate
                data-delay="1"
            >
                {{ $service['process_title'] }}
            </h2>

            <div class="relative pl-2">
                <div
                    class="absolute left-2 top-2 bottom-2 w-0.5 bg-linear-to-b from-amber-500 via-amber-500/40 to-amber-500/10"
                ></div>

                @foreach ($service['process'] as $i => $step)
                    <div class="relative pl-10 pb-10 last:pb-0" data-animate data-delay="{{ min($i + 1, 5) }}">
                        <div
                            class="absolute -left-2 top-1 w-4.5 h-4.5 rounded-full border-4 border-shark-50 dark:border-shark-950 bg-black-pearl-900 dark:bg-amber-500 z-10"
                        ></div>
                        <div
                            class="text-xs font-bold text-black-pearl-950 dark:text-amber-500 mb-1 uppercase tracking-wider"
                        >
                            Step {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}
                        </div>
                        <h3 class="font-display font-bold text-lg text-shark-900 dark:text-white mb-2">
                            {{ $step['title'] }}
                        </h3>
                        <p class="text-sm text-shark-500 dark:text-shark-400 leading-relaxed max-w-2xl">{{ $step['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- ════════════════════════════
     OTHER SERVICES
════════════════════════════ --}}
    <div class="relative border-t border-shark-200 dark:border-shark-800">
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700"></div>

        <div class="px-7 py-14">
            <div class="flex items-center justify-between gap-4 mb-8" data-animate>
                <div class="flex items-center gap-3">
                    {{-- <div class="w-8 h-px bg-amber-500"></div> --}}
                    <span class="text-xs font-semibold uppercase tracking-[0.2em] text-shark-500 dark:text-shark-400">
                        Explore more
                    </span>
                </div>
                <a
                    href="/services"
                    class="text-xs font-semibold text-shark-500 dark:text-shark-400 hover:text-shark-900 dark:hover:text-white transition-colors"
                >
                    View all services →
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($related as $rel)
                    <a
                        href="{{ route('services.show', $rel['slug']) }}"
                        class="group border border-shark-200 dark:border-shark-800 rounded-xl p-5 bg-white dark:bg-shark-900/40 dark:hover:border-amber-700 hover:-translate-y-1 transition-all duration-300"
                        data-animate
                        data-delay="{{ $loop->index + 1 }}"
                    >
                        <div class="flex items-center gap-3 mb-3">
                            <div
                                class="w-8 h-8 rounded-lg bg-shark-100 dark:bg-shark-800 flex items-center justify-center transition-colors duration-300"
                            >
                                <svg
                                    class="w-4 h-4 text-shark-500 dark:text-shark-400 transition-colors"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    viewBox="0 0 24 24"
                                >
                                    {!! $rel['icon'] !!}
                                </svg>
                            </div>
                            <span class="text-xs font-bold text-shark-300 dark:text-shark-700">{{ $rel['num'] }}</span>
                        </div>
                        <h3
                            class="font-display font-semibold text-sm text-shark-900 dark:text-white mb-2 transition-colors duration-300"
                        >
                            {{ $rel['title'] }}
                        </h3>
                        <p class="text-xs text-shark-500 dark:text-shark-400 leading-relaxed line-clamp-2">{{ $rel['short'] }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    {{-- ════════════════════════════
     CTA
════════════════════════════ --}}
    <div
        class="relative border-t border-shark-200 dark:border-shark-800 overflow-hidden bg-shark-900 dark:bg-shark-950"
    >
        <div class="relative px-7 py-16 flex flex-col md:flex-row items-center justify-between gap-6" data-animate>
            <div>
                <div class="flex items-center gap-3 mb-4">
                    {{-- <div class="w-8 h-px bg-amber-500"></div> --}}
                    <span class="text-xs font-semibold uppercase tracking-[0.2em] text-shark-400">
                        Ready to get started?
                    </span>
                </div>
                <h2 class="font-display text-2xl md:text-3xl font-black text-white leading-tight">
                    Let's talk about your<br />{{ Str::lower($service['title']) }} needs.
                </h2>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 shrink-0">
                <a
                    href="/contact"
                    class="inline-flex items-center gap-2 px-7 py-3.5 rounded-xl font-display font-semibold text-sm bg-black-pearl-300 hover:bg-black-pearl-400 text-shark-900 transition-all duration-200 hover:-translate-y-0.5 hover:shadow-lg hover:shadow-black-pearl-300"
                >
                    Book a free call
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a>
                <a
                    href="/services"
                    class="inline-flex items-center gap-2 px-6 py-3 rounded-lg font-display font-semibold text-sm border border-shark-700 hover:border-shark-500 text-shark-300 hover:text-white transition-all duration-200"
                >
                    All services
                </a>
            </div>
        </div>
    </div>

@endsection
