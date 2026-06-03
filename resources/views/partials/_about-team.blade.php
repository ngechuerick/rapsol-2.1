<section class="relative border-t border-zinc-200 dark:border-zinc-800 bg-zinc-50/50 dark:bg-zinc-900/20">
    <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
    <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>

    <div class="px-7 py-16">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-10" data-animate>
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-8 h-px bg-amber-500"></div>
                    <span class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400"
                        >Leadership</span
                    >
                </div>
                <h2
                    class="font-display text-3xl md:text-4xl font-bold tracking-tight text-zinc-900 dark:text-white leading-tight"
                >
                    The people behind Nexus
                </h2>
            </div>
            <p class="text-sm text-zinc-500 dark:text-zinc-400 max-w-xs md:text-right">A multidisciplinary team of engineers, strategists, and financial experts.</p>
        </div>

        {{--
            TO ADD REAL PHOTOS:
            Add 'photo' => 'images/team/name.jpg' to each member.
            Save images to public/images/team/.
            The card auto-swaps the gradient avatar for the image.
        --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach ([
                ['JN','from-amber-500 to-amber-700',   'John Njoroge', 'Co-Founder & CEO',        'Former banking technologist with 15 years building financial systems across Africa.', null],
                ['GW','from-sky-500 to-sky-700',        'Grace Wanjiku','Co-Founder & CTO',        'Software architect who has led engineering teams from startup to scale across three continents.', null],
                ['DM','from-emerald-500 to-emerald-700','David Mutua',  'Head of Consulting',      'Strategy consultant and CFA charterholder specialising in digital transformation.', null],
                ['AA','from-violet-500 to-violet-700',  'Aisha Ahmed',  'Head of Finance',         'Financial strategist with deep expertise in M&A and corporate restructuring.', null],
            ] as $i => [$initials, $grad, $name, $role, $bio, $photo])
                <div
                    class="group border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden bg-white dark:bg-zinc-950 hover:-translate-y-1 transition-all duration-300"
                    data-animate
                    data-delay="{{ $i + 1 }}"
                >
                    <div class="relative aspect-square overflow-hidden">
                        @if ($photo)
                            <img
                                src="{{ asset($photo) }}"
                                alt="{{ $name }}"
                                class="absolute inset-0 w-full h-full object-cover"
                            />
                        @else
                            <div class="absolute inset-0 bg-linear-to-br {{ $grad }} flex items-center justify-center">
                                <span class="font-display font-black text-3xl text-white/90">{{ $initials }}</span>
                            </div>
                        @endif
                        <div
                            class="absolute inset-0 bg-black/75 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-5"
                        >
                            <p class="text-xs text-white/90 leading-relaxed text-center">{{ $bio }}</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="font-display font-semibold text-sm text-zinc-900 dark:text-white">{{ $name }}</div>
                        <div
                            class="text-xs font-semibold uppercase tracking-widest text-amber-600 dark:text-amber-500 mt-1"
                        >
                            {{ $role }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
