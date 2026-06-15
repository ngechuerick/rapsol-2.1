@extends ('layouts.app')
@section ('title', $post['title'] . ' | Rapsoltech Consulting')

@section ('content')
    {{-- ════════════════════════════
     HERO / POST HEADER
════════════════════════════ --}}
    <div class="relative px-7 pt-14 pb-0 overflow-hidden">
        <div
            class="absolute inset-0 -z-10 bg-[linear-gradient(rgba(161,161,170,0.14)_1px,transparent_1px),linear-gradient(90deg,rgba(161,161,170,0.14)_1px,transparent_1px)] dark:bg-[linear-gradient(rgba(255,255,255,0.04)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.04)_1px,transparent_1px)] bg-size-[40px_40px]"
        ></div>
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>

        {{-- Breadcrumb --}}
        <div class="flex items-center gap-2 mb-8 text-xs text-zinc-400 dark:text-zinc-600" data-animate>
            <a href="/blog" class="hover:text-zinc-700 dark:hover:text-zinc-300 transition-colors">Insights</a>
            <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
            <span>{{ $post['category'] }}</span>
        </div>

        {{-- Category + meta --}}
        <div class="flex flex-wrap items-center gap-3 mb-6" data-animate>
            <span
                class="px-2.5 py-1 rounded-md text-xs font-semibold uppercase tracking-wide bg-amber-100 dark:bg-amber-950/40 text-amber-700 dark:text-amber-400"
            >
                {{ $post['category'] }}
            </span>
            <span class="text-xs text-zinc-400 dark:text-zinc-600">{{ $post['date'] }}</span>
            <span class="text-xs text-zinc-400 dark:text-zinc-600">·</span>
            <span class="text-xs text-zinc-400 dark:text-zinc-600">{{ $post['read_time'] }} min read</span>
        </div>

        {{-- Title --}}
        <h1
            class="font-display text-3xl md:text-4xl lg:text-5xl font-black leading-[1.1] tracking-tight text-zinc-900 dark:text-white mb-6 max-w-3xl"
            data-animate
            data-delay="1"
        >
            {{ $post['title'] }}
        </h1>

        {{-- Excerpt --}}
        <p class="text-lg text-zinc-500 dark:text-zinc-400 leading-relaxed max-w-2xl mb-10" data-animate data-delay="2">
            {{ $post['excerpt'] }}
        </p>

        {{-- Author row --}}
        <div
            class="flex items-center justify-between flex-wrap gap-4 pb-10 border-b border-zinc-200 dark:border-zinc-800"
            data-animate
            data-delay="3"
        >
            <div class="flex items-center gap-3">
                <div
                    class="w-10 h-10 rounded-full bg-linear-to-br {{ $post['author']['grad'] }}
                        flex items-center justify-center text-white text-sm font-bold shrink-0"
                >
                    {{ $post['author']['initials'] }}
                </div>
                <div>
                    <div class="text-sm font-semibold text-zinc-900 dark:text-white">{{ $post['author']['name'] }}</div>
                    <div class="text-xs text-zinc-400 dark:text-zinc-600">{{ $post['author']['role'] }}</div>
                </div>
            </div>
            {{-- Share --}}
            <div class="flex items-center gap-2">
                <span class="text-xs text-zinc-400 dark:text-zinc-600 mr-1">Share</span>
                @foreach ([
                ['Twitter / X',  'M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z'],
                ['LinkedIn',     'M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z'],
            ] as [$label, $path])
                    <button
                        aria-label="Share on {{ $label }}"
                        class="w-8 h-8 rounded-lg border border-zinc-200 dark:border-zinc-800 flex items-center justify-center text-zinc-400 dark:text-zinc-600 hover:border-zinc-300 dark:hover:border-zinc-600 hover:text-zinc-700 dark:hover:text-zinc-300 transition-all duration-200"
                    >
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="{{ $path }}" />
                        </svg>
                    </button>
                @endforeach
            </div>
        </div>
    </div>
    {{-- ════════════════════════════
     COVER IMAGE
════════════════════════════ --}}
    <div class="px-7 pt-8" data-animate>
        <div class="aspect-21/9 rounded-xl overflow-hidden border border-zinc-200 dark:border-zinc-800">
            <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover" />
        </div>
    </div>
    {{-- ════════════════════════════
     ARTICLE BODY
     Two-column: content + sidebar
════════════════════════════ --}}
    <div class="relative border-t border-zinc-200 dark:border-zinc-800 mt-8">
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>

        <div
            class="grid grid-cols-1 lg:grid-cols-[1fr_260px] divide-y lg:divide-y-0 lg:divide-x divide-zinc-200 dark:divide-zinc-800"
        >
            {{-- Article content --}}
            <div class="px-7 py-12">
                <div
                    class="prose prose-zinc dark:prose-invert max-w-none prose-headings:font-display prose-headings:font-bold prose-headings:tracking-tight prose-h2:text-2xl prose-h2:mt-10 prose-h2:mb-4 prose-h3:text-lg prose-h3:mt-8 prose-h3:mb-3 prose-p:text-zinc-600 dark:prose-p:text-zinc-400 prose-p:leading-relaxed prose-p:text-[15px] prose-a:text-amber-600 dark:prose-a:text-amber-400 prose-a:no-underline hover:prose-a:underline prose-strong:text-zinc-900 dark:prose-strong:text-white prose-blockquote:border-amber-500 prose-blockquote:bg-amber-50/50 dark:prose-blockquote:bg-amber-950/10 prose-blockquote:px-5 prose-blockquote:py-1 prose-blockquote:rounded-r-lg prose-blockquote:not-italic prose-li:text-zinc-600 dark:prose-li:text-zinc-400 prose-li:text-[15px] prose-code:text-amber-700 dark:prose-code:text-amber-400 prose-hr:border-zinc-200 dark:prose-hr:border-zinc-800"
                >
                    {!! $post['body'] !!}
                </div>

                {{-- Tags --}}
                @if (!empty($post['tags']))
                    <div class="mt-10 pt-8 border-t border-zinc-200 dark:border-zinc-800">
                        <div class="flex flex-wrap gap-2">
                            @foreach ($post['tags'] as $tag)
                                <span
                                    class="px-3 py-1.5 rounded-lg text-xs font-medium border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-900/40 text-zinc-500 dark:text-zinc-400"
                                >
                                    {{ $tag }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- Author bio --}}
                <div
                    class="mt-10 p-6 rounded-xl border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-900/40"
                >
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-linear-to-br {{ $post['author']['grad'] }}
                                flex items-center justify-center text-white font-bold shrink-0"
                        >
                            {{ $post['author']['initials'] }}
                        </div>
                        <div>
                            <div class="font-display font-bold text-sm text-zinc-900 dark:text-white mb-0.5">
                                {{ $post['author']['name'] }}
                            </div>
                            <div
                                class="text-xs text-amber-600 dark:text-amber-500 mb-2 font-semibold uppercase tracking-wide"
                            >
                                {{ $post['author']['role'] }}
                            </div>
                            <p class="text-xs text-zinc-500 dark:text-zinc-400 leading-relaxed">
                                {{ $post['author']['bio'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Sidebar --}}
            <div class="px-6 py-12 space-y-8">
                {{-- Table of contents --}}
                <div>
                    <h4 class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-400 dark:text-zinc-600 mb-4">
                        In this article
                    </h4>
                    <nav class="space-y-1">
                        @foreach ($post['toc'] as $item)
                            <a
                                href="#{{ Str::slug($item) }}"
                                class="block text-sm text-zinc-500 dark:text-zinc-400 py-1 pl-3 border-l-2 border-transparent hover:border-amber-500 hover:text-zinc-900 dark:hover:text-white transition-all duration-200 leading-snug"
                            >
                                {{ $item }}
                            </a>
                        @endforeach
                    </nav>
                </div>

                {{-- Divider --}}
                <div class="h-px bg-zinc-200 dark:bg-zinc-800"></div>

                {{-- CTA card --}}
                <div
                    class="p-5 rounded-xl border border-amber-200 dark:border-amber-800/40 bg-amber-50 dark:bg-amber-950/20"
                >
                    <h4 class="font-display font-bold text-sm text-zinc-900 dark:text-white mb-2">
                        Work with Rapsoltech Consulting
                    </h4>
                    <p class="text-xs text-zinc-500 dark:text-zinc-400 leading-relaxed mb-4">Need help with {{ Str::lower($post['category']) }}? Let's talk about your project.</p>
                    <a
                        href="/contact"
                        class="inline-flex items-center gap-1.5 text-xs font-semibold text-amber-600 dark:text-amber-400 hover:gap-2.5 transition-all duration-200"
                    >
                        Book a free call
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>

                {{-- Divider --}}
                <div class="h-px bg-zinc-200 dark:bg-zinc-800"></div>

                {{-- Meta --}}
                <div class="space-y-3">
                    <div>
                        <div
                            class="text-xs font-semibold uppercase tracking-[0.15em] text-zinc-400 dark:text-zinc-600 mb-1"
                        >
                            Published
                        </div>
                        <div class="text-sm text-zinc-700 dark:text-zinc-300">{{ $post['date'] }}</div>
                    </div>
                    <div>
                        <div
                            class="text-xs font-semibold uppercase tracking-[0.15em] text-zinc-400 dark:text-zinc-600 mb-1"
                        >
                            Reading time
                        </div>
                        <div class="text-sm text-zinc-700 dark:text-zinc-300">{{ $post['read_time'] }} minutes</div>
                    </div>
                    <div>
                        <div
                            class="text-xs font-semibold uppercase tracking-[0.15em] text-zinc-400 dark:text-zinc-600 mb-1"
                        >
                            Category
                        </div>
                        <div class="text-sm text-zinc-700 dark:text-zinc-300">{{ $post['category'] }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ════════════════════════════
     RELATED POSTS
════════════════════════════ --}}
    @if (!empty($related))
        <div class="relative border-t border-zinc-200 dark:border-zinc-800">
            <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
            <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>

            <div class="px-7 py-12">
                <div class="flex items-center justify-between gap-4 mb-8" data-animate>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-px bg-amber-500"></div>
                        <span class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                            More from Rapsoltech Consulting
                        </span>
                    </div>
                    <a
                        href="/blog"
                        class="text-xs font-semibold text-zinc-500 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white transition-colors"
                    >
                        All articles →
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    @foreach ($related as $i => $rel)
                        <a
                            href="{{ route('blog.show', $rel['slug']) }}"
                            class="group flex flex-col border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden bg-white dark:bg-zinc-900/40 hover:border-amber-300 dark:hover:border-amber-700 hover:-translate-y-1 transition-all duration-300"
                            data-animate
                            data-delay="{{ $i + 1 }}"
                        >
                            <div class="aspect-video overflow-hidden">
                                <img
                                    src="{{ $rel['image'] }}"
                                    alt="{{ $rel['title'] }}"
                                    loading="lazy"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                />
                            </div>
                            <div class="p-5 flex-1 flex flex-col">
                                <div class="flex items-center gap-2 mb-2">
                                    <span
                                        class="text-xs font-medium text-zinc-500 dark:text-zinc-400"
                                        >{{ $rel['category'] }}</span
                                    >
                                    <span class="text-zinc-300 dark:text-zinc-700">·</span>
                                    <span class="text-xs text-zinc-400 dark:text-zinc-600"
                                        >{{ $rel['read_time'] }} min</span
                                    >
                                </div>
                                <h3
                                    class="font-display font-bold text-sm text-zinc-900 dark:text-white leading-snug flex-1 group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors duration-300"
                                >
                                    {{ $rel['title'] }}
                                </h3>
                                <div
                                    class="mt-4 pt-4 border-t border-zinc-100 dark:border-zinc-800 text-xs text-zinc-400 dark:text-zinc-600"
                                >
                                    {{ $rel['date'] }}
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    {{-- ════════════════════════════
     NEWSLETTER CTA
════════════════════════════ --}}
    <div class="relative border-t border-zinc-200 dark:border-zinc-800 overflow-hidden bg-zinc-900 dark:bg-zinc-950">
        <div
            class="absolute inset-0 opacity-[0.04]"
            style="
                background-image:
                    linear-gradient(rgba(255, 255, 255, 0.8) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(255, 255, 255, 0.8) 1px, transparent 1px);
                background-size: 40px 40px;
            "
            aria-hidden="true"
        ></div>
        <div class="relative px-7 py-16 flex flex-col md:flex-row items-center justify-between gap-6" data-animate>
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-8 h-px bg-amber-500"></div>
                    <span class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-400">Stay informed</span>
                </div>
                <h2 class="font-display text-2xl md:text-3xl font-black text-white">Get new articles in your inbox.</h2>
                <p class="text-sm text-zinc-400 mt-2">No spam. Just practical thinking from our team — twice a month.</p>
            </div>
            <form class="flex flex-col sm:flex-row gap-2 w-full md:w-auto shrink-0" action="/newsletter" method="POST">
                @csrf
                <input
                    type="email"
                    name="email"
                    placeholder="your@email.com"
                    required
                    class="px-4 py-3 rounded-lg text-sm border border-zinc-700 bg-zinc-800 text-white placeholder-zinc-500 focus:outline-none focus:border-amber-500 transition-colors w-full sm:w-64"
                />
                <button
                    type="submit"
                    class="px-5 py-3 rounded-lg text-sm font-semibold font-display shrink-0 bg-amber-500 hover:bg-amber-400 text-zinc-900 transition-colors duration-200"
                >
                    Subscribe
                </button>
            </form>
        </div>
    </div>

@endsection
