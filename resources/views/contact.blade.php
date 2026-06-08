@extends ('layouts.app')
@section ('title', 'Contact | Rapsoltech Consulting')

@section ('content')
    {{-- HERO --}}
    <div class="relative px-7 py-20 overflow-hidden">
        <div
            class="absolute inset-0 -z-10 bg-[linear-gradient(rgba(161,161,170,0.14)_1px,transparent_1px),linear-gradient(90deg,rgba(161,161,170,0.14)_1px,transparent_1px)] dark:bg-[linear-gradient(rgba(255,255,255,0.04)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.04)_1px,transparent_1px)] bg-size-[40px_40px]"
        ></div>

        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700"></div>
        <div class="absolute -bottom-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700"></div>
        <div class="absolute -bottom-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700"></div>

        <div class="flex items-center gap-3 mb-7" data-animate>
            {{-- <div class="w-8 h-px bg-amber-500"></div> --}}
            <span class="text-xs font-semibold uppercase tracking-[0.2em] text-shark-500 dark:text-shark-400">
                Get In Touch
            </span>
        </div>

        <h1
            class="font-display text-5xl md:text-6xl font-black leading-[1.05] tracking-tight text-shark-900 dark:text-white mb-5 max-w-2xl"
            data-animate
            data-delay="1"
        >
            Let's build something<br />
            <span class="text-black-pearl-900 dark:text-amber-500">great together.</span>
        </h1>

        <p
            class="text-lg text-shark-500 dark:text-shark-400 leading-relaxed max-w-lg"
            data-animate
            data-delay="2"
        >Tell us about your project, your goals, or simply say hello. We respond to every inquiry as quickly as possible.</p>
    </div>
    {{--  MAIN CONTENT — split layout --}}
    <div class="relative border-t border-shark-200 dark:border-shark-800">
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700"></div>

        <div
            class="grid grid-cols-1 lg:grid-cols-[1fr_1.4fr] divide-y lg:divide-y-0 lg:divide-x divide-shark-200 dark:divide-shark-800"
        >
            {{-- LEFT — Info panel --}}
            <div class="px-7 py-14 space-y-10" data-animate>
                {{-- What happens next --}}
                <div>
                    <h2 class="font-display font-bold text-md text-shark-900 dark:text-white mb-6">
                        What happens next
                    </h2>
                    <div class="space-y-5">
                        @foreach ([
                        ['01', 'We review your inquiry', 'Your message goes directly to our team. We read every submission carefully before responding.'],
                        ['02', 'We reach out within 24h', 'A senior Nexus Africa team member will contact you within one business day to discuss your needs.'],
                        ['03', 'We schedule a call', 'If there\'s a fit, we set up a 30-minute discovery call  free, no obligation, no sales pressure.'],
                    ] as [$num, $title, $desc])
                            <div class="flex gap-4">
                                <div
                                    class="w-7 h-7 rounded-full border border-black-pearl-800 dark:border-amber-700 bg-black-pearl-200 dark:bg-amber-950/30 flex items-center justify-center shrink-0 mt-0.5"
                                >
                                    <span
                                        class="text-xs font-bold text-black-pearl-950 dark:text-amber-400"
                                        >{{ $num }}</span
                                    >
                                </div>
                                <div>
                                    <div
                                        class="font-display font-semibold text-base text-shark-900 dark:text-white mb-1"
                                    >
                                        {{ $title }}
                                    </div>
                                    <p class="text-sm text-shark-500 dark:text-shark-400 leading-relaxed">{{ $desc }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Divider --}}
                <div class="h-px bg-shark-200 dark:bg-shark-800"></div>

                {{-- Direct contact --}}
                <div>
                    <h2 class="font-display font-bold text-lg text-shark-900 dark:text-white mb-5">
                        Prefer to reach us directly?
                    </h2>
                    <div class="space-y-4">
                        @foreach ([
                        ['Email', 'hello@nexusafrica.co.ke',
                         '<path d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>',
                         'mailto:info@rapsoltechconsulting.co.ke'],
                        ['Phone', '+254 103184092',
                         '<path d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 6.75Z"/>',
                         'tel:+254103184092'],
                        ['Office', 'Ruiru Lelani, Kenya',
                         '<path d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/>',
                         'https://maps.google.com'],
                    ] as [$label, $value, $icon, $href])
                            <a href="{{ $href }}" class="flex items-start gap-3 group">
                                <div
                                    class="w-9 h-9 rounded-lg bg-shark-100 dark:bg-shark-800 flex items-center justify-center shrink-0 group-hover:bg-amber-50 dark:group-hover:bg-amber-950/30 transition-colors duration-200"
                                >
                                    <svg
                                        class="w-4 h-4 text-shark-500 dark:text-shark-400 group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors duration-200"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        viewBox="0 0 24 24"
                                    >
                                        {!! $icon !!}
                                    </svg>
                                </div>
                                <div>
                                    <div
                                        class="text-xs font-semibold uppercase tracking-[0.15em] text-shark-400 dark:text-shark-600 mb-0.5"
                                    >
                                        {{ $label }}
                                    </div>
                                    <div
                                        class="text-sm font-medium text-shark-700 dark:text-shark-300 group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors duration-200"
                                    >
                                        {{ $value }}
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                {{-- Divider --}}
                <div class="h-px bg-shark-200 dark:bg-shark-800"></div>

                {{-- Response time badge --}}
                <div
                    class="flex items-center gap-3 p-4 rounded-xl border border-shark-200 dark:border-shark-800 bg-shark-50 dark:bg-shark-900/40"
                >
                    <p class="text-xs text-shark-500 dark:text-shark-400">
                        <span class="font-semibold text-shark-700 dark:text-shark-300"
                            >Average response time: 4 hours</span
                        >
                        &nbsp;&mdash;&nbsp;Monday to Friday, 9am – 6pm EAT
                    </p>
                </div>
            </div>

            {{-- RIGHT — Contact form --}}
            <div class="px-7 py-14" data-animate data-delay="1">
                @if (session('success'))
                    <div
                        class="mb-6 flex items-start gap-3 p-4 rounded-xl border border-emerald-200 dark:border-emerald-800 bg-emerald-50 dark:bg-emerald-950/30"
                    >
                        <svg class="w-5 h-5 text-emerald-600 dark:text-emerald-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <div>
                            <div class="font-display font-semibold text-sm text-emerald-800 dark:text-emerald-300">
                                Message sent successfully
                            </div>
                            <p class="text-xs text-emerald-700 dark:text-emerald-400 mt-0.5">Thank you — we'll be in touch within one business day.</p>
                        </div>
                    </div>
                @endif

                @if ($errors->any())
                    <div
                        class="mb-6 flex items-start gap-3 p-4 rounded-xl border border-red-200 dark:border-red-800 bg-red-50 dark:bg-red-950/30"
                    >
                        <svg class="w-5 h-5 text-red-600 dark:text-red-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                        </svg>
                        <div>
                            <div class="font-display font-semibold text-sm text-red-800 dark:text-red-300">
                                Please fix the following
                            </div>
                            <ul class="text-xs text-red-700 dark:text-red-400 mt-1 space-y-0.5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST" class="space-y-5">
                    @csrf

                    {{-- Name + Email --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label
                                class="block text-xs font-semibold uppercase tracking-[0.15em] text-shark-500 dark:text-shark-400 mb-2"
                                for="name"
                            >
                                Full Name <span class="text-amber-500">*</span>
                            </label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                placeholder="Your name"
                                required
                                class="w-full px-4 py-3 rounded-lg border text-sm
                                      bg-white dark:bg-shark-900/40
                                      border-shark-200 dark:border-shark-800
                                      text-shark-900 dark:text-shark-100
                                      placeholder-shark-400 dark:placeholder-shark-600
                                      focus:outline-none focus:border-amber-400 dark:focus:border-amber-600
                                      focus:ring-2 focus:ring-amber-400/20 dark:focus:ring-amber-600/20
                                      transition-all duration-200
                                      @error('name') @enderror"
                            />
                        </div>
                        <div>
                            <label
                                class="block text-xs font-semibold uppercase tracking-[0.15em] text-shark-500 dark:text-shark-400 mb-2"
                                for="email"
                            >
                                Email Address <span class="text-amber-500">*</span>
                            </label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="email@youremail.com"
                                required
                                class="w-full px-4 py-3 rounded-lg border text-sm
                                      bg-white dark:bg-shark-900/40
                                      border-shark-200 dark:border-shark-800
                                      text-shark-900 dark:text-shark-100
                                      placeholder-shark-400 dark:placeholder-shark-600
                                      focus:outline-none focus:border-amber-400 dark:focus:border-amber-600
                                      focus:ring-2 focus:ring-amber-400/20 dark:focus:ring-amber-600/20
                                      transition-all duration-200
                                      @error('email') @enderror"
                            />
                        </div>
                    </div>

                    {{-- Company + Phone --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label
                                class="block text-xs font-semibold uppercase tracking-[0.15em] text-shark-500 dark:text-shark-400 mb-2"
                                for="company"
                            >
                                Company / Organisation
                            </label>
                            <input
                                type="text"
                                id="company"
                                name="company"
                                value="{{ old('company') }}"
                                placeholder="Your company/Individual"
                                class="w-full px-4 py-3 rounded-lg border text-sm bg-white dark:bg-shark-900/40 border-shark-200 dark:border-shark-800 text-shark-900 dark:text-shark-100 placeholder-shark-400 dark:placeholder-shark-600 focus:outline-none focus:border-amber-400 dark:focus:border-amber-600 focus:ring-2 focus:ring-amber-400/20 dark:focus:ring-amber-600/20 transition-all duration-200"
                            />
                        </div>
                        <div>
                            <label
                                class="block text-xs font-semibold uppercase tracking-[0.15em] text-shark-500 dark:text-shark-400 mb-2"
                                for="phone"
                            >
                                Phone Number
                            </label>
                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                value="{{ old('phone') }}"
                                placeholder="+254 700 000 000"
                                class="w-full px-4 py-3 rounded-lg border text-sm bg-white dark:bg-shark-900/40 border-shark-200 dark:border-shark-800 text-shark-900 dark:text-shark-100 placeholder-shark-400 dark:placeholder-shark-600 focus:outline-none focus:border-amber-400 dark:focus:border-amber-600 focus:ring-2 focus:ring-amber-400/20 dark:focus:ring-amber-600/20 transition-all duration-200"
                            />
                        </div>
                    </div>

                    {{-- Service interest --}}
                    <div>
                        <label
                            class="block text-xs font-semibold uppercase tracking-[0.15em] text-shark-500 dark:text-shark-400 mb-2"
                        >
                            I'm interested in <span class="text-amber-500">*</span>
                        </label>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                            @foreach ([
                            'Web & App Development',
                            'IT & Digital Consulting',
                            'Data Analytics & AI',
                            'Asset Management',
                            'Financial Advisory',
                            'SME Growth Program',
                        ] as $service)
                                <label
                                    class="relative flex items-center gap-2.5 px-3 py-2.5 rounded-lg border cursor-pointer border-shark-200 dark:border-shark-800 bg-white dark:bg-shark-900/40 hover:border-amber-300 dark:hover:border-amber-700 has-checked:border-amber-400 dark:has-checked:border-amber-600 has-checked:bg-amber-50 dark:has-checked:bg-amber-950/30 transition-all duration-200"
                                >
                                    <input
                                        type="checkbox"
                                        name="services[]"
                                        value="{{ $service }}"
                                        {{ in_array($service, old('services', [])) ? 'checked' : '' }}
                                        class="w-3.5 h-3.5 rounded accent-amber-500 shrink-0"
                                    />
                                    <span
                                        class="text-xs font-medium text-shark-600 dark:text-shark-400 leading-tight"
                                        >{{ $service }}</span
                                    >
                                </label>
                            @endforeach
                        </div>
                    </div>

                    {{-- Budget --}}
                    <div>
                        <label
                            class="block text-xs font-semibold uppercase tracking-[0.15em] text-shark-500 dark:text-shark-400 mb-2"
                            for="budget"
                        >
                            Estimated Budget
                        </label>
                        <select
                            id="budget"
                            name="budget"
                            class="w-full px-4 py-3 rounded-lg border text-sm appearance-none bg-white dark:bg-shark-900/40 border-shark-200 dark:border-shark-800 text-shark-900 dark:text-shark-100 focus:outline-none focus:border-amber-400 dark:focus:border-amber-600 focus:ring-2 focus:ring-amber-400/20 dark:focus:ring-amber-600/20 transition-all duration-200"
                        >
                            <option value="" disabled {{ old('budget') ? '' : 'selected' }}>Select a range...</option>
                            <option
                                value="Under KES 500K"
                                {{ old('budget') === 'Under KES 500K'       ? 'selected' : '' }}
                                >Under KES 500,000
                            </option>
                            <option
                                value="KES 500K – 1M"
                                {{ old('budget') === 'KES 500K – 1M'        ? 'selected' : '' }}
                                >KES 500,000 – 1,000,000
                            </option>
                            <option value="KES 1M – 5M" {{ old('budget') === 'KES 1M – 5M'          ? 'selected' : '' }}
                                >KES 1,000,000 – 5,000,000
                            </option>
                            <option
                                value="KES 5M – 10M"
                                {{ old('budget') === 'KES 5M – 10M'         ? 'selected' : '' }}
                                >KES 5,000,000 – 10,000,000
                            </option>
                            <option
                                value="Over KES 10M"
                                {{ old('budget') === 'Over KES 10M'         ? 'selected' : '' }}
                                >Over KES 10,000,000
                            </option>
                            <option
                                value="Not sure yet"
                                {{ old('budget') === 'Not sure yet'         ? 'selected' : '' }}
                                >Not sure yet
                            </option>
                        </select>
                    </div>

                    {{-- Message --}}
                    <div>
                        <label
                            class="block text-xs font-semibold uppercase tracking-[0.15em] text-shark-500 dark:text-shark-400 mb-2"
                            for="message"
                        >
                            Your Message <span class="text-amber-500">*</span>
                        </label>
                        <textarea
                            id="message"
                            name="message"
                            rows="5"
                            placeholder="Tell us about your project, goals, timeline, or any questions you have..."
                            required
                            class="w-full px-4 py-3 rounded-lg border text-sm resize-none
                                     bg-white dark:bg-shark-900/40
                                     border-shark-200 dark:border-shark-800
                                     text-shark-900 dark:text-shark-100
                                     placeholder-shark-400 dark:placeholder-shark-600
                                     focus:outline-none focus:border-amber-400 dark:focus:border-amber-600
                                     focus:ring-2 focus:ring-amber-400/20 dark:focus:ring-amber-600/20
                                     transition-all duration-200
                                     @error('message') @enderror"
                            >{{ old('message') }}</textarea
                        >
                    </div>

                    {{-- Submit row --}}
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pt-1">
                        <p class="text-xs text-shark-400 dark:text-shark-600 leading-relaxed max-w-xs">By submitting this form you agree to our <a href="/privacy" class="underline underline-offset-2 hover:text-shark-700 dark:hover:text-shark-300 transition-colors">privacy policy</a>. We never share your data.</p>
                        <button
                            type="submit"
                            class="inline-flex items-center gap-2 px-7 py-3.5 rounded-lg font-display font-semibold text-sm shrink-0 bg-shark-900 dark:bg-white text-white dark:text-shark-900 hover:opacity-85 hover:-translate-y-0.5 transition-all duration-200"
                        >
                            Send Message
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- ════════════════════════════════
     FAQ STRIP
════════════════════════════════ --}}
    <div
        class="relative border-t border-shark-200 dark:border-shark-800 bg-shark-50/50 dark:bg-shark-900/20"
        x-data="{ open: null }"
    >
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700"></div>

        <div class="px-7 py-14">
            <div class="grid grid-cols-1 md:grid-cols-[1fr_2fr] gap-10">
                <div data-animate>
                    <div class="flex items-center gap-3 mb-4">
                        {{-- <div class="w-8 h-px bg-amber-500"></div> --}}
                        <span
                            class="text-xs font-semibold uppercase tracking-[0.2em] text-shark-500 dark:text-shark-400"
                            >FAQ</span
                        >
                    </div>
                    <h2 class="font-display text-2xl font-bold text-shark-900 dark:text-white leading-tight">
                        Common questions
                    </h2>
                </div>

                <div class="divide-y divide-shark-200 dark:divide-shark-800" data-animate data-delay="1">
                    @foreach ([
                    ['How quickly will you respond to my inquiry?',
                     'We aim to respond to all inquiries within one business day. For urgent matters, call us directly at +254 103184092.'],
                    ['Do you work with clients outside Kenya?',
                     'Yes. We serve clients across East Africa  Kenya, Uganda, Tanzania, Rwanda, and Ethiopia  and can work with international clients on a remote basis.'],
                    ['Is the initial consultation free?',
                     'Absolutely. The first discovery call is complimentary with no obligation. It\'s an opportunity for both sides to see if there\'s a good fit before any commitment is made.'],
                ] as $i => [$q, $a])
                        <div>
                            <button
                                class="w-full flex items-center justify-between py-4 text-left"
                                @click="open = open === {{ $i }} ? null : {{ $i }}"
                            >
                                <span
                                    class="font-display font-semibold text-sm text-shark-900 dark:text-white pr-4"
                                    >{{ $q }}</span
                                >
                                <span
                                    class="shrink-0 w-5 h-5 rounded-full border border-shark-300 dark:border-shark-700 flex items-center justify-center transition-transform duration-300"
                                    :class="open === {{ $i }} ? 'rotate-45 border-amber-500 bg-amber-50 dark:bg-amber-950/30' : ''"
                                >
                                    <svg
                                        class="w-2.5 h-2.5 text-shark-500 dark:text-shark-400"
                                        :class="open === {{ $i }} ? 'text-amber-600 dark:text-amber-400' : ''"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2.5"
                                        viewBox="0 0 24 24"
                                    >
                                        <path d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                </span>
                            </button>
                            <div
                                x-show="open === {{ $i }}"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 -translate-y-1"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="pb-4 text-sm text-shark-500 dark:text-shark-400 leading-relaxed max-w-xl"
                            >
                                {{ $a }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
