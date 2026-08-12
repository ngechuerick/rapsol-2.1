{{--
    resources/views/components/whatsapp-button.blade.php

    Floating WhatsApp enquiry button.
    - Number and prefilled message come from config/services.php
      (override with WHATSAPP_NUMBER / WHATSAPP_MESSAGE in .env)
    - Sits at z-190, below the cookie banner's z-200, and lifts itself
      above the banner until a cookie choice has been made
    - Label expands on hover/focus at md+; icon-only on mobile
    - 56px hit area, so it clears the 44px minimum tap target
--}}

@php
    $waNumber = preg_replace('/\D/', '', config('services.whatsapp.number'));
    $waMessage = config('services.whatsapp.message');
    $waHref = 'https://wa.me/' . $waNumber . '?text=' . rawurlencode($waMessage);
@endphp

@if ($waNumber)
    <div
        x-data="{
            consented: (() => {
                try {
                    return !!localStorage.getItem('rapsoltech_cookie_consent');
                } catch (e) {
                    return true;
                }
            })(),
        }"
        class="fixed right-5 z-190 transition-[bottom] duration-300"
        :class="consented ? 'bottom-5' : 'bottom-40 md:bottom-32'"
    >
        <a
            href="{{ $waHref }}"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="Chat with Rapsoltech on WhatsApp"
            {{-- Glyph and label are near-black green, not white: white on
                 #25D366 is only 1.98:1. Dark-on-green is 8:1 and keeps the
                 instantly recognisable WhatsApp colour. --}}
            class="group flex items-center gap-0 md:hover:gap-2.5 md:focus-visible:gap-2.5 h-14 w-14 md:hover:w-auto md:focus-visible:w-auto md:hover:pl-4 md:hover:pr-5 md:focus-visible:pl-4 md:focus-visible:pr-5 rounded-full bg-[#25D366] text-[#04291F] shadow-lg shadow-black/20 items-center justify-center ring-1 ring-black/10 dark:ring-white/10 hover:bg-[#1FBE5B] focus-visible:bg-[#1FBE5B] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-[#25D366] focus-visible:ring-offset-white dark:focus-visible:ring-offset-shark-950 transition-all duration-200 ease-out"
        >
            <svg
                class="w-7 h-7 shrink-0 mx-auto md:group-hover:mx-0 md:group-focus-visible:mx-0"
                viewBox="0 0 24 24"
                fill="currentColor"
                aria-hidden="true"
            >
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.149-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884a9.82 9.82 0 0 1 6.99 2.896 9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488" />
            </svg>

            <span
                class="hidden md:inline-block max-w-0 overflow-hidden whitespace-nowrap text-sm font-semibold md:group-hover:max-w-xs md:group-focus-visible:max-w-xs transition-[max-width] duration-200 ease-out"
            >
                Chat with us
            </span>
        </a>
    </div>
@endif
