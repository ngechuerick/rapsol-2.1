<section class="relative border-t border-zinc-200 dark:border-zinc-800">
    <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
    <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>

    <div class="px-7 py-16 grid grid-cols-1 lg:grid-cols-[1.1fr_1fr] gap-10 lg:gap-14 items-center">
        <div data-animate="left">
            <div class="flex items-center gap-3 mb-5">
                <span class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400"
                    >Our Story</span
                >
            </div>
            <h2
                class="font-display text-3xl md:text-4xl font-bold tracking-tight text-zinc-900 dark:text-white leading-tight mb-6"
            >
                From a small Kenyan office to East Africa's trusted partner.
            </h2>
            <div class="space-y-4 text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed max-w-lg">
                <p>Rapsoltech Consulting was founded in 2020 by a team of consultants and financial strategists who saw a gap: businesses across East Africa were being underserved by firms that didn't understand the local market.</p>
                <p>What started as three people in a co-working space has grown into a multidisciplinary firm serving 120+ clients across six countries without ever losing our founding belief that great technology and sound strategy are inseparable.</p>
                <p>Today, we operate at the intersection of technology and consulting, helping organisations from fast-moving startups to tier-1 banks build, transform, and grow.</p>
            </div>
            {{-- <div class="flex flex-wrap gap-8 mt-8 pt-8 border-t border-zinc-200 dark:border-zinc-800">
                @foreach ([['7+','Years'],['120+','Clients'],['6','Countries']] as $s)
                    <div>
                        <div class="font-display font-black text-2xl text-zinc-900 dark:text-white">{{ $s[0] }}</div>
                        <div
                            class="text-xs font-semibold uppercase tracking-[0.15em] text-zinc-400 dark:text-zinc-600 mt-1"
                        >
                            {{ $s[1] }}
                        </div>
                    </div>
                @endforeach
            </div> --}}
        </div>

        <div class="relative" data-animate data-delay="2">
            <div class="relative aspect-4/5 rounded-2xl overflow-hidden border border-zinc-200 dark:border-zinc-800">
                {{--
                    TO ADD A REAL PHOTO:
                    1. Save image to: public/images/about-hq.jpg
                    2. Replace the placeholder div below with:
                       <img src="{{ asset('images/about-hq.jpg') }}"
                            alt="Rapsoltech Consulting Nairobi HQ"
                            class="absolute inset-0 w-full h-full object-cover">
                --}}
                <div
                    class="absolute inset-0 bg-linear-to-br from-zinc-800 to-zinc-900 flex flex-col items-center justify-center gap-4"
                >
                    <img src=" {{ asset('images/rapsoltech.jpg') }}" />
                    {{-- <div class="relative w-14 h-14 rounded-xl bg-amber-500/20 flex items-center justify-center">
                        <svg class="w-7 h-7 text-amber-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21" />
                        </svg>
                    </div>
                    <span class="relative text-xs font-medium text-amber-400/60 tracking-widest"
                        >your-team-photo.jpg</span
                    > --}}
                </div>
                <div
                    class="absolute bottom-4 left-4 right-4 z-10 bg-black/50 backdrop-blur-md border border-white/10 rounded-xl px-4 py-3"
                >
                    <div class="font-display font-bold text-sm text-white">RAPSOLTECH</div>
                    <div class="text-xs text-white/50 mt-0.5">Ruiru, Lelani</div>
                </div>
            </div>
            <div
                class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-black-pearl-900 dark:bg-amber-500 z-20"
            ></div>
            <div
                class="absolute -bottom-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-black-pearl-900 dark:bg-amber-500 z-20"
            ></div>
        </div>
    </div>
</section>
