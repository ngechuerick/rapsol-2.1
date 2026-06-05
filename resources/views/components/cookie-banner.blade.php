{{--
    resources/views/components/cookie-banner.blade.php

    Features:
    - First visit: banner slides up from bottom
    - "Accept all"  → sets all cookie categories
    - "Reject all"  → sets only strictly necessary
    - "Manage preferences" → opens a modal with granular toggles
    - Preferences stored in localStorage (nexus_cookie_consent)
    - Google Analytics only loads if analytics cookies are accepted
    - Banner never shows again once a choice is made
    - Dark/light mode aware
--}}

<div x-data="cookieBanner()" x-init="init()" x-cloak>
    {{-- ══════════════════════════════════════
         BOTTOM BANNER
    ══════════════════════════════════════ --}}
    <div
        x-show="showBanner"
        x-transition:enter="transition ease-out duration-500"
        x-transition:enter-start="opacity-0 translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-4"
        class="fixed bottom-0 left-0 right-0 z-200 p-4 md:p-6"
        style="display: none"
        role="dialog"
        aria-modal="true"
        aria-label="Cookie preferences"
    >
        <div class="max-w-5xl mx-auto">
            <div
                class="relative rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-950 shadow-2xl shadow-black/10 dark:shadow-black/40 p-5 md:p-6"
            >
                {{-- Top row: icon + text --}}
                <div class="mb-2">
                    {{-- Text --}}
                    <div class="flex-1">
                        <p class="font-display font-bold text-sm text-zinc-900 dark:text-white mb-1">We use cookies on this site</p>
                        <p class="text-xs text-zinc-500 dark:text-zinc-400 leading-relaxed">We use strictly necessary cookies to keep the site working, and optional analytics cookies to understand how you use it. Read our <a href="/cookie-policy" class="text-amber-600 dark:text-amber-400 hover:underline font-medium">Cookie Policy</a> and <a href="/privacy" class="text-amber-600 dark:text-amber-400 hover:underline font-medium">Privacy Policy</a> to learn more.</p>
                    </div>
                </div>

                {{-- Action buttons --}}
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-2">
                    <button
                        @click="acceptAll()"
                        class="flex-1 sm:flex-none px-5 py-2.5 rounded-lg font-display font-semibold text-sm bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 hover:opacity-85 transition-all duration-200 hover:-translate-y-0.5"
                    >
                        Accept all
                    </button>

                    <button
                        @click="rejectAll()"
                        class="flex-1 sm:flex-none px-5 py-2.5 rounded-lg font-display font-semibold text-sm border border-zinc-200 dark:border-zinc-700 text-zinc-700 dark:text-zinc-300 hover:bg-zinc-50 dark:hover:bg-zinc-900 transition-all duration-200"
                    >
                        Reject all
                    </button>

                    <button
                        @click="openModal()"
                        class="flex-1 sm:flex-none px-5 py-2.5 rounded-lg font-display font-semibold text-sm text-amber-600 dark:text-amber-400 underline underline-offset-2 hover:text-amber-700 dark:hover:text-amber-300 transition-colors duration-200"
                    >
                        Manage preferences
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- ══════════════════════════════════════
         PREFERENCES MODAL
    ══════════════════════════════════════ --}}
    <div
        x-show="showModal"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-300 flex items-end sm:items-center justify-center p-4"
        style="display: none"
        @keydown.escape.window="showModal = false"
        role="dialog"
        aria-modal="true"
        aria-labelledby="modal-title"
    >
        {{-- Backdrop --}}
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" @click="showModal = false"></div>

        {{-- Panel --}}
        <div
            class="relative z-10 w-full max-w-lg bg-white dark:bg-zinc-950 rounded-2xl border border-zinc-200 dark:border-zinc-800 shadow-2xl shadow-black/20 dark:shadow-black/60 max-h-[90vh] overflow-y-auto"
            @click.stop
        >
            {{-- Modal header --}}
            <div
                class="sticky top-0 bg-white dark:bg-zinc-950 border-b border-zinc-100 dark:border-zinc-900 px-6 py-4 flex items-center justify-between z-10"
            >
                <h2 id="modal-title" class="font-display font-bold text-base text-zinc-900 dark:text-white">
                    Cookie Preferences
                </h2>
                <button
                    @click="showModal = false"
                    aria-label="Close"
                    class="w-8 h-8 rounded-lg border border-zinc-200 dark:border-zinc-800 flex items-center justify-center text-zinc-400 dark:text-zinc-600 hover:bg-zinc-50 dark:hover:bg-zinc-900 transition-colors duration-200"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            {{-- Modal body --}}
            <div class="px-6 py-5 space-y-5">
                <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed">Choose which cookies you want to allow. Strictly necessary cookies cannot be disabled as they are required for the site to function.</p>

                {{-- Cookie categories --}}
                @php
                $categories = [
                    [
                        'key'       => 'necessary',
                        'label'     => 'Strictly Necessary',
                        'required'  => true,
                        'desc'      => 'Essential for the website to function — session management, CSRF protection, and your saved preferences. These cannot be disabled.',
                        'examples'  => 'Session cookie, CSRF token, dark mode preference',
                    ],
                    [
                        'key'       => 'analytics',
                        'label'     => 'Analytics',
                        'required'  => false,
                        'desc'      => 'Help us understand how visitors use the site so we can improve it. All data is aggregated and anonymous.',
                        'examples'  => 'Google Analytics (_ga, _gid, _gat)',
                    ],
                    [
                        'key'       => 'functional',
                        'label'     => 'Functional',
                        'required'  => false,
                        'desc'      => 'Enable enhanced features and personalisation. Disabling these may affect some site functionality.',
                        'examples'  => 'Theme preference, form state',
                    ],
                ];
                @endphp

                @foreach ($categories as $cat)
                    <div class="rounded-xl border border-zinc-200 dark:border-zinc-800 overflow-hidden">
                        {{-- Category header --}}
                        <div
                            class="flex items-center justify-between px-4 py-3 bg-zinc-50 dark:bg-zinc-900/60 border-b border-zinc-200 dark:border-zinc-800"
                        >
                            <div class="flex items-center gap-3">
                                <h3 class="font-display font-semibold text-sm text-zinc-900 dark:text-white">
                                    {{ $cat['label'] }}
                                </h3>
                                @if ($cat['required'])
                                    <span
                                        class="px-2 py-0.5 rounded text-xs font-medium bg-zinc-200 dark:bg-zinc-800 text-zinc-500 dark:text-zinc-400"
                                    >
                                        Always on
                                    </span>
                                @endif
                            </div>

                            {{-- Toggle --}}
                            @if ($cat['required'])
                                <div
                                    class="w-9 h-5 rounded-full bg-amber-500 flex items-center justify-end pr-0.5 opacity-60 cursor-not-allowed"
                                >
                                    <div class="w-4 h-4 rounded-full bg-white"></div>
                                </div>
                            @else
                                <button
                                    @click="preferences.{{ $cat['key'] }} = !preferences.{{ $cat['key'] }}"
                                    :aria-checked="preferences.{{ $cat['key'] }}.toString()"
                                    :aria-label="'Toggle ' + '{{ $cat['label'] }}' + ' cookies'"
                                    role="switch"
                                    class="relative w-9 h-5 rounded-full border transition-all duration-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-500 focus-visible:ring-offset-2"
                                    :class="preferences.{{ $cat['key'] }}
                                    ? 'bg-amber-500 border-amber-500'
                                    : 'bg-zinc-200 dark:bg-zinc-800 border-zinc-300 dark:border-zinc-700'"
                                >
                                    <span
                                        class="absolute top-0.75 w-3.5 h-3.5 rounded-full bg-white shadow-sm transition-all duration-300"
                                        :class="preferences.{{ $cat['key'] }} ? 'left-4.75' : 'left-0.75'"
                                    ></span>
                                </button>
                            @endif
                        </div>

                        {{-- Category details --}}
                        <div class="px-4 py-3">
                            <p class="text-xs text-zinc-500 dark:text-zinc-400 leading-relaxed mb-2">
                                {{ $cat['desc'] }}
                            </p>
                            <p class="text-xs text-zinc-400 dark:text-zinc-600">
                                <span class="font-medium">Examples:</span> {{ $cat['examples'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Modal footer --}}
            <div
                class="sticky bottom-0 bg-white dark:bg-zinc-950 border-t border-zinc-100 dark:border-zinc-900 px-6 py-4 flex flex-col sm:flex-row gap-2"
            >
                <button
                    @click="savePreferences()"
                    class="flex-1 px-5 py-2.5 rounded-lg font-display font-semibold text-sm bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 hover:opacity-85 transition-all duration-200"
                >
                    Save preferences
                </button>

                <button
                    @click="acceptAll()"
                    class="flex-1 px-5 py-2.5 rounded-lg font-display font-semibold text-sm bg-amber-500 hover:bg-amber-400 text-zinc-900 transition-all duration-200"
                >
                    Accept all
                </button>
            </div>
        </div>
    </div>

    {{-- ══════════════════════════════════════
         RE-OPEN BUTTON
         Small floating button shown after consent
         so users can change their preferences later
    ══════════════════════════════════════ --}}
    <div
        x-show="showReopenBtn"
        x-transition:enter="transition ease-out duration-300 delay-1000"
        x-transition:enter-start="opacity-0 scale-75"
        x-transition:enter-end="opacity-100 scale-100"
        class="fixed bottom-5 left-5 z-190"
        style="display: none"
    >
        <button
            @click="openModal()"
            title="Cookie preferences"
            aria-label="Manage cookie preferences"
            class="w-10 h-10 rounded-xl border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-950 shadow-lg shadow-black/10 dark:shadow-black/30 flex items-center justify-center text-zinc-400 dark:text-zinc-600 hover:text-amber-600 dark:hover:text-amber-400 hover:border-amber-300 dark:hover:border-amber-700 transition-all duration-200 hover:scale-110"
        >
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                <circle cx="9" cy="10" r=".75" fill="currentColor" stroke="none" />
                <circle cx="14" cy="9" r=".75" fill="currentColor" stroke="none" />
                <circle cx="10" cy="14.5" r=".75" fill="currentColor" stroke="none" />
                <circle cx="14.5" cy="14" r=".75" fill="currentColor" stroke="none" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.5 7.5 9 8M13 13l.5.5M8 13.5l.4.4" />
            </svg>
        </button>
    </div>
</div>

{{-- ══════════════════════════════════════
     ALPINE COMPONENT SCRIPT
══════════════════════════════════════ --}}
@push ('scripts')
    <script>
        function cookieBanner() {
            return {
                showBanner: false,
                showModal: false,
                showReopenBtn: false,

                preferences: {
                    necessary: true, // always true
                    analytics: false,
                    functional: false,
                },

                STORAGE_KEY: "nexus_cookie_consent",

                init() {
                    const saved = this.getSaved();

                    if (!saved) {
                        // First visit — show banner after short delay
                        setTimeout(() => {
                            this.showBanner = true;
                        }, 800);
                    } else {
                        // Returning visitor — apply saved preferences silently
                        this.preferences = { ...this.preferences, ...saved.preferences };
                        this.showReopenBtn = true;
                        this.applyPreferences();
                    }
                },

                getSaved() {
                    try {
                        const raw = localStorage.getItem(this.STORAGE_KEY);
                        return raw ? JSON.parse(raw) : null;
                    } catch {
                        return null;
                    }
                },

                save(prefs) {
                    try {
                        localStorage.setItem(
                            this.STORAGE_KEY,
                            JSON.stringify({
                                preferences: prefs,
                                timestamp: new Date().toISOString(),
                                version: "1",
                            }),
                        );
                    } catch {}
                },

                applyPreferences() {
                    // ── Google Analytics ──────────────────────────────
                    if (this.preferences.analytics) {
                        this.loadGoogleAnalytics();
                    } else {
                        // Disable GA if already loaded
                        if (typeof window.gtag !== "undefined") {
                            window["ga-disable-G-XXXXXXXXXX"] = true;
                        }
                    }
                },

                loadGoogleAnalytics() {
                    // Only load once
                    if (document.querySelector("script[data-ga]")) return;

                    // Replace G-XXXXXXXXXX with your actual GA4 Measurement ID
                    const GA_ID = "G-XXXXXXXXXX";

                    const script = document.createElement("script");
                    script.async = true;
                    script.src = `https://www.googletagmanager.com/gtag/js?id=${GA_ID}`;
                    script.setAttribute("data-ga", "1");
                    document.head.appendChild(script);

                    window.dataLayer = window.dataLayer || [];
                    window.gtag = function () {
                        window.dataLayer.push(arguments);
                    };
                    window.gtag("js", new Date());
                    window.gtag("config", GA_ID, { anonymize_ip: true });
                },

                acceptAll() {
                    this.preferences = { necessary: true, analytics: true, functional: true };
                    this.save(this.preferences);
                    this.applyPreferences();
                    this.showBanner = false;
                    this.showModal = false;
                    this.showReopenBtn = true;
                },

                rejectAll() {
                    this.preferences = { necessary: true, analytics: false, functional: false };
                    this.save(this.preferences);
                    this.applyPreferences();
                    this.showBanner = false;
                    this.showModal = false;
                    this.showReopenBtn = true;
                },

                savePreferences() {
                    // Necessary is always true
                    this.preferences.necessary = true;
                    this.save(this.preferences);
                    this.applyPreferences();
                    this.showBanner = false;
                    this.showModal = false;
                    this.showReopenBtn = true;
                },

                openModal() {
                    // Populate toggles from saved state
                    const saved = this.getSaved();
                    if (saved) this.preferences = { ...this.preferences, ...saved.preferences };
                    this.showBanner = false;
                    this.showModal = true;
                },
            };
        }
    </script>
@endpush
