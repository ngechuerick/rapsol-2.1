@extends ('layouts.app')
@section ('title', 'Cookie Policy | Rapsoltech consulting')

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
            {{-- <div class="w-8 h-px bg-gold-400"></div> --}}
            <span class="text-sm font-semibold uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">Legal</span>
        </div>
        <h1
            class="font-display text-4xl md:text-5xl font-black leading-[1.1] tracking-tight text-zinc-900 dark:text-white mb-4"
            data-animate
            data-delay="1"
        >
            Cookie Policy
        </h1>
        <p class="text-sm text-zinc-500 dark:text-zinc-400" data-animate data-delay="2">Last updated: 1 June 2025 &nbsp;·&nbsp; Effective: 1 June 2025</p>
    </div>
    {{-- CONTENT --}}
    <div class="relative border-t border-zinc-200 dark:border-zinc-800">
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>

        <div
            class="grid grid-cols-1 lg:grid-cols-[260px_1fr] divide-y lg:divide-y-0 lg:divide-x divide-zinc-200 dark:divide-zinc-800"
        >
            {{-- Sidebar --}}
            <div class="px-6 py-10 lg:sticky lg:top-20 lg:self-start">
                <h4 class="text-sm font-semibold uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400 mb-4">
                    Contents
                </h4>
                <nav class="space-y-1">
                    @foreach ([
                    'What are cookies',
                    'Cookies we use',
                    'Third-party cookies',
                    'Managing cookies',
                    'Cookie consent',
                    'Changes to this policy',
                    'Contact us',
                ] as $item)
                        <a
                            href="#{{ Str::slug($item) }}"
                            class="block text-sm text-zinc-500 dark:text-zinc-400 py-1 pl-3 border-l-2 border-transparent hover:border-gold-400 hover:text-zinc-900 dark:hover:text-white transition-all duration-200 leading-snug"
                        >
                            {{ $item }}
                        </a>
                    @endforeach
                </nav>
                <div
                    class="mt-8 p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-900/40"
                >
                    <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed mb-2">Questions?</p>
                    <a
                        href="mailto:info@rapsoltechconsulting.co.ke"
                        class="text-sm font-semibold text-gold-800 dark:text-gold-400 dark:text-gold-400 hover:underline"
                    >
                        info@rapsoltechconsulting.co.ke
                    </a>
                </div>
            </div>

            {{-- Body --}}
            <div class="px-7 py-10">
                <div
                    class="prose prose-zinc dark:prose-invert max-w-none prose-headings:font-display prose-headings:font-bold prose-headings:tracking-tight prose-h2:text-xl prose-h2:mt-10 prose-h2:mb-3 prose-h2:scroll-mt-24 prose-p:text-zinc-600 dark:prose-p:text-zinc-500 dark:text-zinc-400 prose-p:leading-relaxed prose-p:text-[0.9375rem] prose-a:text-gold-800 dark:prose-a:text-gold-400 dark:prose-a:text-gold-400 prose-a:no-underline hover:prose-a:underline prose-strong:text-zinc-900 dark:prose-strong:text-white prose-ul:text-zinc-600 dark:prose-ul:text-zinc-500 dark:text-zinc-400 prose-li:text-[0.9375rem] prose-table:text-[0.875rem] prose-th:text-zinc-700 dark:prose-th:text-zinc-300 prose-th:bg-zinc-50 dark:prose-th:bg-zinc-900/60 prose-hr:border-zinc-200 dark:prose-hr:border-zinc-800"
                >
                    <p>This Cookie Policy explains how <strong>Rapsoltech consulting</strong> ("we", "us", or "our") uses cookies and similar tracking technologies on our website at <strong>rapsoltechconsulting.co.ke</strong>. It should be read alongside our <a href="/privacy">Privacy Policy</a>.</p>

                    <hr />

                    <h2 id="what-are-cookies">1. What are cookies</h2>
                    <p>Cookies are small text files placed on your device (computer, tablet, or mobile phone) when you visit a website. They allow the website to recognise your device on subsequent visits and remember your preferences. Cookies are widely used to make websites work more efficiently and to provide information to the site owner.</p>
                    <p>Similar technologies include web beacons, pixel tags, local storage, and session storage — all of which operate in comparable ways to cookies. References to "cookies" in this policy include all such technologies.</p>

                    <h2 id="cookies-we-use">2. Cookies we use</h2>
                    <p>We use the following categories of cookies on our website:</p>

                    <h3>2.1 Strictly necessary cookies</h3>
                    <p>These cookies are essential for the website to function and cannot be disabled. They are typically set in response to actions you take — such as setting your privacy preferences, logging in, or filling in forms. Without these cookies, certain parts of the website cannot be provided.</p>

                    <table>
                        <thead>
                            <tr>
                                <th>Cookie name</th>
                                <th>Purpose</th>
                                <th>Duration</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>XSRF-TOKEN</code></td>
                                <td>Cross-site request forgery protection (Laravel security)</td>
                                <td>Session</td>
                            </tr>
                            <tr>
                                <td><code>rapsoltechconsulting_session</code></td>
                                <td>Maintains your session state across pages</td>
                                <td>2 hours</td>
                            </tr>
                            <tr>
                                <td><code>cookie_consent</code></td>
                                <td>Records your cookie consent preference</td>
                                <td>12 months</td>
                            </tr>
                            <tr>
                                <td><code>dark_mode</code></td>
                                <td>Remembers your light/dark mode preference</td>
                                <td>12 months</td>
                            </tr>
                        </tbody>
                    </table>

                    <h3>2.2 Analytics cookies</h3>
                    <p>These cookies help us understand how visitors interact with our website by collecting and reporting information anonymously. We use this data to improve the website experience. These cookies are only placed with your consent.</p>

                    <table>
                        <thead>
                            <tr>
                                <th>Cookie name</th>
                                <th>Provider</th>
                                <th>Purpose</th>
                                <th>Duration</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>_ga</code></td>
                                <td>Google Analytics</td>
                                <td>Distinguishes unique users and sessions</td>
                                <td>2 years</td>
                            </tr>
                            <tr>
                                <td><code>_ga_*</code></td>
                                <td>Google Analytics</td>
                                <td>Persists session state across page requests</td>
                                <td>2 years</td>
                            </tr>
                            <tr>
                                <td><code>_gid</code></td>
                                <td>Google Analytics</td>
                                <td>Distinguishes users (short-lived)</td>
                                <td>24 hours</td>
                            </tr>
                            <tr>
                                <td><code>_gat</code></td>
                                <td>Google Analytics</td>
                                <td>Throttles request rate</td>
                                <td>1 minute</td>
                            </tr>
                        </tbody>
                    </table>

                    <h3>2.3 Functional cookies</h3>
                    <p>These cookies enable enhanced functionality and personalisation, such as remembering your preferences. They may be set by us or by third-party providers whose services we have added to our pages. If you disable these cookies, some functionality may not work as intended.</p>

                    <table>
                        <thead>
                            <tr>
                                <th>Cookie name</th>
                                <th>Purpose</th>
                                <th>Duration</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>theme_preference</code></td>
                                <td>Stores your selected UI theme (light/dark)</td>
                                <td>12 months</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2 id="third-party-cookies">3. Third-party cookies</h2>
                    <p>Some cookies on our website are set by third-party services. We do not control how these parties use cookies, and you should refer to their privacy and cookie policies for further information:</p>
                    <ul>
                        <li>
                            <strong>Google Analytics</strong> — website analytics.
                            <a href="https://policies.google.com/privacy" target="_blank" rel="noopener"
                                >Google Privacy Policy</a
                            >
                        </li>
                        <li>
                            <strong>Google Fonts</strong> — typography. Google may set cookies when fonts are loaded
                            from their servers
                        </li>
                        <li>
                            <strong>Unsplash</strong> — images (gallery page). May set cookies when images are served
                            from their CDN
                        </li>
                    </ul>

                    <h2 id="managing-cookies">4. Managing cookies</h2>
                    <p>You can control and manage cookies in several ways:</p>

                    <h3>Browser settings</h3>
                    <p>Most browsers allow you to view, manage, and delete cookies through their settings. Note that disabling cookies may affect the functionality of our website and other websites you visit. Here are links to cookie management instructions for common browsers:</p>
                    <ul>
                        <li>
                            <a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener"
                                >Google Chrome</a
                            >
                        </li>
                        <li>
                            <a
                                href="https://support.mozilla.org/en-US/kb/enhanced-tracking-protection-firefox-desktop"
                                target="_blank"
                                rel="noopener"
                                >Mozilla Firefox</a
                            >
                        </li>
                        <li>
                            <a
                                href="https://support.apple.com/en-gb/guide/safari/sfri11471/mac"
                                target="_blank"
                                rel="noopener"
                                >Apple Safari</a
                            >
                        </li>
                        <li>
                            <a
                                href="https://support.microsoft.com/en-us/microsoft-edge/delete-cookies-in-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09"
                                target="_blank"
                                rel="noopener"
                                >Microsoft Edge</a
                            >
                        </li>
                    </ul>

                    <h3>Google Analytics opt-out</h3>
                    <p>You can prevent Google Analytics from collecting data about your visits by installing the <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics opt-out browser add-on</a>.</p>

                    <h2 id="cookie-consent">5. Cookie consent</h2>
                    <p>When you first visit our website, you will be presented with a cookie consent notice. Strictly necessary cookies are placed automatically as they are essential to the website's operation. All other cookies — analytics and functional — are only placed once you have given your consent. You may withdraw or update your consent at any time by clearing your browser cookies and revisiting the site, or by contacting us.</p>

                    <h2 id="changes-to-this-policy">6. Changes to this policy</h2>
                    <p>We may update this Cookie Policy from time to time to reflect changes in the cookies we use or applicable law. When we make changes, we will update the "Last updated" date at the top of this page. We encourage you to review this policy periodically.</p>

                    <h2 id="contact-us">7. Contact us</h2>
                    <p>If you have any questions about how we use cookies, please contact:</p>
                    <ul>
                        <li>
                            <strong>Email:</strong>
                            <a href="mailto:info@rapsoltechconsulting.co.ke">info@rapsoltechconsulting.co.ke</a>
                        </li>
                        <li>
                            <strong>Post:</strong> Data Protection Officer, Rapsoltech consulting, Westlands, Nairobi,
                            Kenya
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
