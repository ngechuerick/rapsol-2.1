import "./bootstrap";

import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();

// ── Scroll Reveal Animation System ──────────────────────────
// Watches elements with [data-animate] and adds .is-visible
// when they enter the viewport. Stagger via data-delay="1-5"
//
// The hidden state lives behind `html[data-js]` (set by an inline script in
// the head, before paint). If anything here throws, or IntersectionObserver
// is missing, we drop the attribute so every [data-animate] element falls
// back to its natural visible state instead of leaving the page blank.
//
// It is an attribute rather than a class because <html> carries Alpine's
// :class dark-mode binding, which overwrites the class attribute.
function revealAll() {
    document.documentElement.removeAttribute("data-js");
}

function initScrollReveal() {
    if (!("IntersectionObserver" in window)) {
        revealAll();
        return;
    }

    try {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("is-visible");
                        observer.unobserve(entry.target);
                    }
                });
            },
            {
                threshold: 0.08,
                rootMargin: "0px 0px -48px 0px",
            },
        );

        document.querySelectorAll("[data-animate]").forEach((el) => {
            observer.observe(el);
        });
    } catch (e) {
        revealAll();
    }
}

// The bundle is a deferred module, so DOMContentLoaded may already have
// fired by the time this runs. Cover both cases.
if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initScrollReveal);
} else {
    initScrollReveal();
}

// Last-resort safety net: if for any reason elements are still hidden well
// after load, reveal them rather than showing an empty page.
window.addEventListener("load", () => {
    setTimeout(() => {
        const stuck = document.querySelectorAll(
            "[data-animate]:not(.is-visible)",
        );
        if (stuck.length && stuck.length === document.querySelectorAll("[data-animate]").length) {
            revealAll();
        }
    }, 3000);
});
