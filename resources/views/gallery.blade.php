@extends ('layouts.app')
@section ('title', 'Gallery | Rapsoltech Consulting')

@section ('content')
    {{-- HERO --}}
    <div class="relative px-7 py-20 overflow-hidden">
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
                Our Gallery
            </span>
        </div>

        <h1
            class="font-display text-5xl md:text-6xl font-black leading-[1.05] tracking-tight text-zinc-900 dark:text-white mb-5 max-w-2xl"
            data-animate
            data-delay="1"
        >
            Inside <span class="text-amber-500">Rapsoltech Consulting</span>
        </h1>

        <p
            class="text-lg text-zinc-500 dark:text-zinc-400 leading-relaxed max-w-lg"
            data-animate
            data-delay="2"
        >A look at our people, workspaces, events, and the projects we're proud to have delivered.</p>
    </div>
    {{-- GALLERY WITH FILTERS + LIGHTBOX --}}
    <div class="relative border-t border-zinc-200 dark:border-zinc-800" x-data="gallery()">
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>

        <div class="px-7 pt-10 pb-16">
            {{-- Filter tabs --}}
            <div class="flex flex-wrap gap-2 mb-10" data-animate>
                @foreach (['All', 'Office & Team', 'Projects', 'Events', 'Culture'] as $tab)
                    <button
                        @click="setFilter('{{ $tab }}')"
                        class="px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200"
                        :class="filter === '{{ $tab }}'
                        ? 'bg-zinc-900 dark:bg-white text-white dark:text-zinc-900'
                        : 'border border-zinc-200 dark:border-zinc-800 text-zinc-500 dark:text-zinc-400 hover:border-zinc-300 dark:hover:border-zinc-600 hover:text-zinc-900 dark:hover:text-white bg-white dark:bg-zinc-900/40'"
                    >
                        {{ $tab }}
                    </button>
                @endforeach
            </div>

            {{-- Masonry / CSS Grid gallery --}}
            <div class="columns-1 sm:columns-2 lg:columns-3 gap-4 space-y-4" data-animate data-delay="1">
                @php
            $items = [
                // Office & Team
                [
                    'category' => 'Office & Team',
                    'src'      => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80',
                    'alt'      => 'Nexus Africa Westlands office',
                    'caption'  => 'Our Westlands HQ',
                    'span'     => 'tall',
                ],
                [
                    'category' => 'Office & Team',
                    'src'      => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&q=80',
                    'alt'      => 'Team collaboration session',
                    'caption'  => 'Engineering team standup',
                    'span'     => 'normal',
                ],
                [
                    'category' => 'Office & Team',
                    'src'      => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=800&q=80',
                    'alt'      => 'Consulting team meeting',
                    'caption'  => 'Strategy session with the consulting team',
                    'span'     => 'normal',
                ],
                [
                    'category' => 'Office & Team',
                    'src'      => 'https://images.unsplash.com/photo-1556761175-4b46a572b786?w=800&q=80',
                    'alt'      => 'Leadership team',
                    'caption'  => 'Leadership offsite — Naivasha 2024',
                    'span'     => 'wide',
                ],
                [
                    'category' => 'Office & Team',
                    'src'      => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=800&q=80',
                    'alt'      => 'Team member working',
                    'caption'  => 'Building for East Africa\'s future',
                    'span'     => 'normal',
                ],

                // Projects
                [
                    'category' => 'Projects',
                    'src'      => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&q=80',
                    'alt'      => 'Data dashboard project',
                    'caption'  => 'KCB Group — Analytics Dashboard',
                    'span'     => 'normal',
                ],
                [
                    'category' => 'Projects',
                    'src'      => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&q=80',
                    'alt'      => 'Financial platform',
                    'caption'  => 'Digital banking platform — go-live',
                    'span'     => 'tall',
                ],
                [
                    'category' => 'Projects',
                    'src'      => 'https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?w=800&q=80',
                    'alt'      => 'Tech project delivery',
                    'caption'  => 'Actis Real Estate — Property Portal',
                    'span'     => 'normal',
                ],
                [
                    'category' => 'Projects',
                    'src'      => 'https://images.unsplash.com/photo-1587560699334-cc4ff634909a?w=800&q=80',
                    'alt'      => 'Mobile app development',
                    'caption'  => 'Mobile App — TurboSave FinTech',
                    'span'     => 'normal',
                ],

                // Events
                [
                    'category' => 'Events',
                    'src'      => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800&q=80',
                    'alt'      => 'Tech conference Nairobi',
                    'caption'  => 'Nairobi Tech Week 2024 — Panel Speaker',
                    'span'     => 'wide',
                ],
                [
                    'category' => 'Events',
                    'src'      => 'https://images.unsplash.com/photo-1515187029135-18ee286d815b?w=800&q=80',
                    'alt'      => 'Workshop session',
                    'caption'  => 'SME Digital Transformation Workshop',
                    'span'     => 'normal',
                ],
                [
                    'category' => 'Events',
                    'src'      => 'https://images.unsplash.com/photo-1475721027785-f74eccf877e2?w=800&q=80',
                    'alt'      => 'Awards ceremony',
                    'caption'  => 'East Africa Tech Awards 2024',
                    'span'     => 'normal',
                ],
                [
                    'category' => 'Events',
                    'src'      => 'https://images.unsplash.com/photo-1528605248644-14dd04022da1?w=800&q=80',
                    'alt'      => 'Team celebration',
                    'caption'  => 'Year-end celebration — Nairobi 2023',
                    'span'     => 'normal',
                ],

                // Culture
                [
                    'category' => 'Culture',
                    'src'      => 'https://images.unsplash.com/photo-1531482615713-2afd69097998?w=800&q=80',
                    'alt'      => 'Team brainstorm',
                    'caption'  => 'Friday brainstorm sessions',
                    'span'     => 'normal',
                ],
                [
                    'category' => 'Culture',
                    'src'      => 'https://images.unsplash.com/photo-1559136555-9303baea8ebd?w=800&q=80',
                    'alt'      => 'Office culture',
                    'caption'  => 'The space where ideas happen',
                    'span'     => 'tall',
                ],
                [
                    'category' => 'Culture',
                    'src'      => 'https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=800&q=80',
                    'alt'      => 'Team lunch',
                    'caption'  => 'Every Wednesday — team lunch',
                    'span'     => 'normal',
                ],
                [
                    'category' => 'Culture',
                    'src'      => 'https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?w=800&q=80',
                    'alt'      => 'Remote team call',
                    'caption'  => 'Cross-country team sync',
                    'span'     => 'normal',
                ],
            ];
            @endphp

                @foreach ($items as $i => $item)
                    <div
                        class="break-inside-avoid mb-4 group relative overflow-hidden rounded-xl border border-zinc-200 dark:border-zinc-800 cursor-pointer transition-transform duration-300 hover:-translate-y-1"
                        x-show="filter === 'All' || filter === '{{ $item['category'] }}'"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-95"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                        @click="openLightbox({{ $i }})"
                    >
                        {{-- Image --}}
                        <img
                            src="{{ $item['src'] }}"
                            alt="{{ $item['alt'] }}"
                            loading="lazy"
                            class="w-full object-cover transition-transform duration-500 group-hover:scale-105
                            {{ $item['span'] === 'tall' ? 'h-80' : ($item['span'] === 'wide' ? 'h-52' : 'h-56') }}"
                        />

                        {{-- Hover overlay --}}
                        <div
                            class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4"
                        >
                            <div class="translate-y-3 group-hover:translate-y-0 transition-transform duration-300">
                                <span
                                    class="text-xs font-semibold uppercase tracking-[0.15em] text-amber-400 block mb-1"
                                >
                                    {{ $item['category'] }}
                                </span>
                                <p class="text-sm font-semibold text-white leading-tight">{{ $item['caption'] }}</p>
                            </div>
                        </div>

                        {{-- Zoom icon --}}
                        <div
                            class="absolute top-3 right-3 w-8 h-8 rounded-lg bg-black/40 backdrop-blur-sm flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                        >
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607ZM10.5 7.5v6m3-3h-6" />
                            </svg>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Empty state --}}
            <div x-show="isEmpty()" class="py-20 text-center">
                <p class="text-zinc-400 dark:text-zinc-600 text-sm">No photos in this category yet.</p>
            </div>
        </div>

        {{-- ══════════════════════════════
         LIGHTBOX
    ══════════════════════════════ --}}
        <div
            x-show="lightbox.open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-100 flex items-center justify-center p-4 md:p-8"
            style="display: none"
            @keydown.escape.window="closeLightbox()"
            @click.self="closeLightbox()"
        >
            {{-- Backdrop --}}
            <div class="absolute inset-0 bg-black/90 backdrop-blur-sm" @click="closeLightbox()"></div>

            {{-- Panel --}}
            <div class="relative z-10 w-full max-w-4xl" @click.stop>
                {{-- Close --}}
                <button
                    @click="closeLightbox()"
                    class="absolute -top-12 right-0 w-9 h-9 rounded-lg border border-white/20 flex items-center justify-center text-white/70 hover:text-white hover:bg-white/10 transition-all duration-200"
                    aria-label="Close"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>

                {{-- Image --}}
                <div class="rounded-xl overflow-hidden border border-white/10">
                    <img
                        :src="currentItem().src"
                        :alt="currentItem().alt"
                        class="w-full max-h-[70vh] object-contain bg-zinc-950"
                    />
                </div>

                {{-- Caption + nav --}}
                <div class="flex items-center justify-between mt-4 px-1">
                    <div>
                        <span
                            class="text-xs font-semibold uppercase tracking-[0.15em] text-amber-400 block mb-1"
                            x-text="currentItem().category"
                        ></span>
                        <p class="text-sm font-medium text-white" x-text="currentItem().caption"></p>
                    </div>

                    {{-- Prev / Next --}}
                    <div class="flex items-center gap-2">
                        <button
                            @click="prev()"
                            class="w-9 h-9 rounded-lg border border-white/20 flex items-center justify-center text-white/70 hover:text-white hover:bg-white/10 transition-all duration-200"
                            aria-label="Previous"
                        >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>
                        </button>
                        <span
                            class="text-xs text-white/40 w-12 text-center"
                            x-text="lightbox.index + 1 + ' / ' + visibleItems().length"
                        ></span>
                        <button
                            @click="next()"
                            class="w-9 h-9 rounded-lg border border-white/20 flex items-center justify-center text-white/70 hover:text-white hover:bg-white/10 transition-all duration-200"
                            aria-label="Next"
                        >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ════════════════════════════════
     BOTTOM CTA
════════════════════════════════ --}}
    <div class="relative border-t border-zinc-200 dark:border-zinc-800 overflow-hidden bg-zinc-900 dark:bg-zinc-950">
        <div class="relative px-7 py-16 flex flex-col md:flex-row items-center justify-between gap-6" data-animate>
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-8 h-px bg-amber-500"></div>
                    <span class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-400"
                        >Want to work here?</span
                    >
                </div>
                <h2 class="font-display text-2xl md:text-3xl font-black text-white leading-tight">
                    Be part of the story.
                </h2>
                <p class="text-sm text-zinc-400 mt-2 max-w-md leading-relaxed">We're building East Africa's most trusted technology and consulting firm. If that excites you, we want to hear from you.</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 shrink-0">
                <a
                    href="/careers"
                    class="inline-flex items-center gap-2 px-6 py-3 rounded-lg font-display font-semibold text-sm bg-amber-500 hover:bg-amber-400 text-zinc-900 transition-all duration-200 hover:-translate-y-0.5"
                >
                    View open roles
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a>
                <a
                    href="/contact"
                    class="inline-flex items-center gap-2 px-6 py-3 rounded-lg font-display font-semibold text-sm border border-zinc-700 hover:border-zinc-500 text-zinc-300 hover:text-white transition-all duration-200 hover:-translate-y-0.5"
                >
                    Get in touch
                </a>
            </div>
        </div>
    </div>

@endsection

@push ('scripts')
    <script>
        function gallery() {
            const allItems = @json ($items);

            return {
                filter: "All",
                lightbox: { open: false, index: 0 },

                setFilter(tab) {
                    this.filter = tab;
                },

                visibleItems() {
                    if (this.filter === "All") return allItems;
                    return allItems.filter((i) => i.category === this.filter);
                },

                isEmpty() {
                    return this.visibleItems().length === 0;
                },

                openLightbox(globalIndex) {
                    const visible = this.visibleItems();
                    // find position within visible items
                    const item = allItems[globalIndex];
                    const visIndex = visible.findIndex((v) => v.src === item.src);
                    this.lightbox.index = visIndex >= 0 ? visIndex : 0;
                    this.lightbox.open = true;
                    document.body.style.overflow = "hidden";
                },

                closeLightbox() {
                    this.lightbox.open = false;
                    document.body.style.overflow = "";
                },

                currentItem() {
                    const visible = this.visibleItems();
                    return visible[this.lightbox.index] || visible[0] || allItems[0];
                },

                next() {
                    const len = this.visibleItems().length;
                    this.lightbox.index = (this.lightbox.index + 1) % len;
                },

                prev() {
                    const len = this.visibleItems().length;
                    this.lightbox.index = (this.lightbox.index - 1 + len) % len;
                },
            };
        }
    </script>
@endpush
