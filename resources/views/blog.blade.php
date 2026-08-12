@extends ('layouts.app')
@section ('title', 'Insights | Rapsoltech Consulting')
@section ('description', 'Insights from Rapsoltech Consulting on technology strategy, digital transformation and building software for African markets.')

@section ('content')
    {{-- ════════════════════════════
     HERO
════════════════════════════ --}}
    <div class="relative px-7 py-24 overflow-hidden">
        <div
            class="absolute inset-0 -z-10 bg-[linear-gradient(rgba(161,161,170,0.14)_1px,transparent_1px),linear-gradient(90deg,rgba(161,161,170,0.14)_1px,transparent_1px)] dark:bg-[linear-gradient(rgba(255,255,255,0.04)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.04)_1px,transparent_1px)] bg-size-[40px_40px]"
        ></div>
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -bottom-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -bottom-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>

        <div class="flex items-center gap-3 mb-7" data-animate>
            <span class="text-sm font-semibold uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                Rapsoltech Consulting Insights
            </span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-end">
            <div>
                <h1
                    class="font-display text-5xl md:text-6xl font-black leading-[1.05] tracking-tight text-zinc-900 dark:text-white mb-5"
                    data-animate
                    data-delay="1"
                >
                    Ideas, perspectives,<br />and
                    <span class="text-black-pearl-900 dark:text-gold-400">field notes.</span>
                </h1>
                <p
                    class="text-lg text-zinc-500 dark:text-zinc-400 leading-relaxed"
                    data-animate
                    data-delay="2"
                >Practical thinking on technology, consulting, and business from the Rapsoltech Consulting team.</p>
            </div>
            <div class="flex flex-col gap-3 lg:items-end" data-animate data-delay="3">
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">Browse by topic</p>
                <div class="flex flex-wrap gap-2 lg:justify-end">
                    @foreach (['Technology','Consulting','Finance','Industry Insights','Company News'] as $cat)
                        <a
                            href="#{{ Str::slug($cat) }}"
                            class="px-3 py-1.5 rounded-lg text-sm font-medium border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-900/40 text-zinc-500 dark:text-zinc-400 hover:border-gold-300 dark:hover:border-gold-700 hover:text-gold-800 dark:hover:text-gold-400 dark:hover:text-gold-400 transition-all duration-200"
                        >
                            {{ $cat }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- ════════════════════════════
     FEATURED POST
════════════════════════════ --}}
    @php $featured = $posts[0]; @endphp
    <div class="relative border-t border-zinc-200 dark:border-zinc-800">
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>

        <a href="{{ route('blog.show', $featured['slug']) }}" class="group block px-7 py-12" data-animate>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                {{-- Image --}}
                <div
                    class="relative aspect-16/10 rounded-xl overflow-hidden border border-zinc-200 dark:border-zinc-800 order-2 lg:order-1"
                >
                    <img
                        src="{{ $featured['image'] }}"
                        alt="{{ $featured['title'] }}"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                    />
                    <div class="absolute inset-0 bg-linear-to-t from-black/30 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="px-2.5 py-1 rounded-md text-sm font-semibold bg-gold-400 text-zinc-900">
                            Featured
                        </span>
                    </div>
                </div>

                {{-- Content --}}
                <div class="order-1 lg:order-2">
                    <div class="flex items-center gap-3 mb-5">
                        <span
                            class="px-2.5 py-1 rounded-md text-sm font-semibold uppercase tracking-wide bg-zinc-100 dark:bg-zinc-800 text-zinc-600 dark:text-zinc-400"
                        >
                            {{ $featured['category'] }}
                        </span>
                        <span class="text-sm text-zinc-500 dark:text-zinc-400"
                            >{{ $featured['read_time'] }} min read</span
                        >
                    </div>

                    <h2
                        class="font-display font-black text-2xl md:text-3xl text-zinc-900 dark:text-white leading-tight mb-4 group-hover:text-gold-800 dark:group-hover:text-gold-400 dark:group-hover:text-gold-400 transition-colors duration-300"
                    >
                        {{ $featured['title'] }}
                    </h2>

                    <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed mb-6 line-clamp-3">
                        {{ $featured['excerpt'] }}
                    </p>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-8 h-8 rounded-full bg-linear-to-br {{ $featured['author']['grad'] }}
                                    flex items-center justify-center text-white text-sm font-bold shrink-0"
                            >
                                {{ $featured['author']['initials'] }}
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-zinc-700 dark:text-zinc-300">
                                    {{ $featured['author']['name'] }}
                                </div>
                                <div class="text-sm text-zinc-500 dark:text-zinc-400">{{ $featured['date'] }}</div>
                            </div>
                        </div>
                        <span
                            class="inline-flex items-center gap-1.5 text-sm font-semibold text-gold-800 dark:text-gold-400 dark:text-gold-400 group-hover:gap-2.5 transition-all duration-300"
                        >
                            Read article
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    {{-- ════════════════════════════
     POSTS GRID
════════════════════════════ --}}
    <div class="relative border-t border-zinc-200 dark:border-zinc-800 px-7 py-14">
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>

        <div class="flex items-center gap-3 mb-10" data-animate>
            <div class="w-8 h-px bg-gold-400"></div>
            <span class="text-sm font-semibold uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                All Articles
            </span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach (array_slice($posts, 1) as $i => $post)
                <a
                    href="{{ route('blog.show', $post['slug']) }}"
                    class="group flex flex-col border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden bg-white dark:bg-zinc-900/40 hover:border-gold-300 dark:hover:border-gold-700 hover:-translate-y-1 transition-all duration-300"
                    data-animate
                    data-delay="{{ min(($i % 3) + 1, 3) }}"
                >
                    {{-- Thumbnail --}}
                    <div class="relative aspect-video overflow-hidden">
                        <img
                            src="{{ $post['image'] }}"
                            alt="{{ $post['title'] }}"
                            loading="lazy"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        />
                    </div>

                    {{-- Content --}}
                    <div class="flex flex-col flex-1 p-5">
                        <div class="flex items-center gap-2 mb-3">
                            <span
                                class="px-2 py-0.5 rounded text-sm font-semibold bg-zinc-100 dark:bg-zinc-800 text-zinc-500 dark:text-zinc-400"
                            >
                                {{ $post['category'] }}
                            </span>
                            <span class="text-sm text-zinc-500 dark:text-zinc-400">{{ $post['read_time'] }} min</span>
                        </div>

                        <h3
                            class="font-display font-bold text-base text-zinc-900 dark:text-white leading-snug mb-3 group-hover:text-gold-800 dark:group-hover:text-gold-400 dark:group-hover:text-gold-400 transition-colors duration-300 flex-1"
                        >
                            {{ $post['title'] }}
                        </h3>

                        <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed mb-5 line-clamp-2">
                            {{ $post['excerpt'] }}
                        </p>

                        <div
                            class="flex items-center justify-between pt-4 border-t border-zinc-100 dark:border-zinc-800"
                        >
                            <div class="flex items-center gap-2">
                                <div
                                    class="w-6 h-6 rounded-full bg-linear-to-br {{ $post['author']['grad'] }}
                                    flex items-center justify-center text-white text-xs font-bold shrink-0"
                                >
                                    {{ $post['author']['initials'] }}
                                </div>
                                <span
                                    class="text-sm text-zinc-500 dark:text-zinc-400"
                                    >{{ $post['author']['name'] }}</span
                                >
                            </div>
                            <span class="text-sm text-zinc-500 dark:text-zinc-400">{{ $post['date'] }}</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

@endsection
