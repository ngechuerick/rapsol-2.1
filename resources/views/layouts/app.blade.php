<!DOCTYPE html>
<html
    lang="en"
    x-data="{
        /* Seeded from the class the inline head script already applied, so
           Alpine never disagrees with what is on screen. */
        dark: document.documentElement.classList.contains('dark'),
        navOpen: false,

        init() {
            /* The `dark` class is applied imperatively, NOT via :class.
               Alpine's class binding only removes classes it added itself, and
               the pre-paint script in <head> is what puts `dark` on first, so
               a :class binding could set the theme but never unset it. */
            this.$watch('dark', (v) => {
                document.documentElement.classList.toggle('dark', v);
                this.persistTheme(v);
            });

            /* Follow the OS if, and only if, the visitor has never used the
               toggle. Once they choose, their choice wins for good. */
            window.matchMedia('(prefers-color-scheme: dark)')
                .addEventListener('change', (e) => {
                    if (this.storedTheme() === null) this.dark = e.matches;
                });
        },

        storedTheme() {
            try { return localStorage.getItem('theme') } catch (e) { return null }
        },

        /* Only store an override when the choice DIFFERS from the OS. If the
           visitor lands back on whatever their system is set to, the key is
           removed and the site goes back to following the OS. Without this,
           one stray click pins the theme forever and the OS setting is
           ignored from then on. */
        persistTheme(v) {
            try {
                var osDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                if (v === osDark) {
                    localStorage.removeItem('theme');
                } else {
                    localStorage.setItem('theme', v ? 'dark' : 'light');
                }
            } catch (e) {}
        },

        /* Held for the length of the crossfade (160ms in app.css) plus a
           little slack, then released so hover/focus transitions behave
           normally again. clearTimeout guards against rapid toggling
           stranding the attribute. A timer, not rAF: rAF does not fire in a
           hidden or backgrounded tab, which would leave the attribute stuck
           and every hover transition dead until reload. */
        toggleTheme() {
            var root = document.documentElement;

            clearTimeout(this._themeTimer);
            root.setAttribute('data-theme-switching', '');
            this.dark = !this.dark;

            this._themeTimer = setTimeout(function () {
                root.removeAttribute('data-theme-switching');
            }, 220);
        },
    }"
>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    {{-- Runs BEFORE first paint. Two jobs, both of which must happen before
         the browser draws anything:

         1. data-js  — lets the scroll-reveal system hide elements without
            risking a blank page if the bundle never loads. A data attribute,
            not a class, because Alpine's :class binding on <html> owns the
            class attribute and strips anything it did not set.

         2. theme    — resolves stored choice first, OS preference second, and
            applies `dark` here rather than waiting for Alpine. Alpine is a
            deferred module, so doing it there meant a dark-mode visitor got a
            white flash on every page load. --}}
    <script>
        (function () {
            var root = document.documentElement;
            root.setAttribute("data-js", "");

            var stored = null;
            try { stored = localStorage.getItem("theme"); } catch (e) {}

            var prefersDark =
                window.matchMedia &&
                window.matchMedia("(prefers-color-scheme: dark)").matches;

            if (stored === "dark" || (stored === null && prefersDark)) {
                root.classList.add("dark");
            }
        })();
    </script>

    <title>@yield ('title', config('app.name'))</title>

    {{-- ═══ SEO / SOCIAL ═══
         Override per page with @section('description', '...') and
         @section('og_image', asset('images/…')). --}}
    @php
        $metaDescription = trim($__env->yieldContent(
            'description',
            'Rapsoltech Consulting is a Nairobi-based technology and consulting firm. We build digital products, transform organisations, and deliver technology advisory across East Africa.',
        ));
        $metaTitle = trim($__env->yieldContent('title', config('app.name')));
        $metaImage = trim($__env->yieldContent('og_image', asset('images/logo-dark.svg')));
    @endphp

    <meta name="description" content="{{ $metaDescription }}" />
    <link rel="canonical" href="{{ url()->current() }}" />

    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta property="og:title" content="{{ $metaTitle }}" />
    <meta property="og:description" content="{{ $metaDescription }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ $metaImage }}" />
    <meta property="og:locale" content="en_KE" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ $metaTitle }}" />
    <meta name="twitter:description" content="{{ $metaDescription }}" />
    <meta name="twitter:image" content="{{ $metaImage }}" />

    <meta name="theme-color" content="#0a1628" />

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}" />
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('site.webmanifest') }}" />
    @vite (['resources/css/app.css', 'resources/js/app.js'])
</head>
<body
    class="min-h-screen font-sans antialiased transition-colors duration-300 bg-zinc-50 dark:bg-zinc-950 text-zinc-900 dark:text-zinc-300"
>
    {{-- Navigation --}}
    <x-navbar />

    {{-- ═══ PAGE BODY ═══ --}}
    <div class="px-4 md:px-6">
        {{-- Bordered content column with diamond corner accents --}}
        <div
            class="max-w-7xl mx-auto border-x border-zinc-200 dark:border-zinc-800 min-h-screen transition-colors duration-300"
        >
            @yield ('content')
        </div>
    </div>
    {{-- Floating WhatsApp enquiry button --}}
    <x-whatsapp-button />

    {{-- Cookie banner — must be outside the content column, at body level --}}
    <x-cookie-banner />

    <x-footer />
    @stack ('scripts')
</body>
</html>
