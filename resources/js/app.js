import "./bootstrap";

import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();

// / ── Scroll Reveal Animation System ──────────────────────────
// Watches elements with [data-animate] and adds .is-visible
// when they enter the viewport. Stagger via data-delay="1-5"
document.addEventListener("DOMContentLoaded", () => {
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
});
