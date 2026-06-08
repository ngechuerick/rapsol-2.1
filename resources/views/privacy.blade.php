@extends ('layouts.app')
@section ('title', 'Privacy Policy | Rapsoltech Consulting')

@section ('content')
    {{-- ════════════════════════════
     HERO
════════════════════════════ --}}
    <div class="relative px-7 py-20 overflow-hidden">
        <div
            class="absolute inset-0 -z-10 bg-[linear-gradient(rgba(161,161,170,0.14)_1px,transparent_1px),linear-gradient(90deg,rgba(161,161,170,0.14)_1px,transparent_1px)] dark:bg-[linear-gradient(rgba(255,255,255,0.04)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.04)_1px,transparent_1px)] bg-size-[40px_40px]"
        ></div>
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -bottom-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -bottom-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>

        <div class="flex items-center gap-3 mb-7" data-animate>
            {{-- <div class="w-8 h-px bg-amber-500"></div> --}}
            <span class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                Legal
            </span>
        </div>

        <h1
            class="font-display text-4xl md:text-5xl font-black leading-[1.1] tracking-tight text-zinc-900 dark:text-white mb-4"
            data-animate
            data-delay="1"
        >
            Privacy Policy
        </h1>
        <p class="text-sm text-zinc-400 dark:text-zinc-600" data-animate data-delay="2">Last updated: 1 June 2025 &nbsp;·&nbsp; Effective: 1 June 2025</p>
    </div>
    {{-- ════════════════════════════
     CONTENT — two column
════════════════════════════ --}}
    <div class="relative border-t border-zinc-200 dark:border-zinc-800">
        <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>
        <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-zinc-300 dark:bg-zinc-700"></div>

        <div
            class="grid grid-cols-1 lg:grid-cols-[260px_1fr] divide-y lg:divide-y-0 lg:divide-x divide-zinc-200 dark:divide-zinc-800"
        >
            {{-- Table of contents sidebar --}}
            <div class="px-6 py-10 lg:sticky lg:top-20 lg:self-start">
                <h4 class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-400 dark:text-zinc-600 mb-4">
                    Contents
                </h4>
                <nav class="space-y-1">
                    @foreach ([
                    'Who we are',
                    'Information we collect',
                    'How we use your information',
                    'Legal basis for processing',
                    'Sharing your information',
                    'Data retention',
                    'Your rights',
                    'Cookies',
                    'Third-party links',
                    'Children\'s privacy',
                    'Changes to this policy',
                    'Contact us',
                ] as $item)
                        <a
                            href="#{{ Str::slug($item) }}"
                            class="block text-sm text-zinc-500 dark:text-zinc-400 py-1 pl-3 border-l-2 border-transparent hover:border-amber-500 hover:text-zinc-900 dark:hover:text-white transition-all duration-200 leading-snug"
                        >
                            {{ $item }}
                        </a>
                    @endforeach
                </nav>

                {{-- Legal contact card --}}
                <div
                    class="mt-8 p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-900/40"
                >
                    <p class="text-xs text-zinc-500 dark:text-zinc-400 leading-relaxed mb-2">Questions about this policy?</p>
                    <a
                        href="mailto:info@rapsoltechconsulting.co.ke"
                        class="text-xs font-semibold text-amber-600 dark:text-amber-400 hover:underline"
                    >
                        info@rapsoltechconsulting.co.ke
                    </a>
                </div>
            </div>

            {{-- Body --}}
            <div class="px-7 py-10">
                <div
                    class="prose prose-zinc dark:prose-invert max-w-none prose-headings:font-display prose-headings:font-bold prose-headings:tracking-tight prose-h2:text-xl prose-h2:mt-10 prose-h2:mb-3 prose-h2:scroll-mt-24 prose-p:text-zinc-600 dark:prose-p:text-zinc-400 prose-p:leading-relaxed prose-p:text-[15px] prose-a:text-amber-600 dark:prose-a:text-amber-400 prose-a:no-underline hover:prose-a:underline prose-strong:text-zinc-900 dark:prose-strong:text-white prose-ul:text-zinc-600 dark:prose-ul:text-zinc-400 prose-li:text-[15px] prose-hr:border-zinc-200 dark:prose-hr:border-zinc-800"
                >
                    <p>Rapsoltech Consulting ("Rapsoltech Consulting", "we", "us", or "our") is committed to protecting your personal data. This Privacy Policy explains how we collect, use, store, and protect information about you when you use our website at <strong>info@rapsoltechconsulting.co.ke</strong>, engage our services, or contact us. It is written in compliance with Kenya's <strong>Data Protection Act, 2019</strong> and applicable regulations.</p>

                    <hr />

                    <h2 id="who-we-are">Who we are</h2>
                    <p>Rapsoltech Consulting is a technology and consulting firm registered in Kenya. Our registered office is located at Westlands, Nairobi, Kenya. We are the data controller for personal data collected through this website and our client engagements.</p>

                    <h2 id="information-we-collect">Information we collect</h2>
                    <p>We collect information in the following ways:</p>
                    <ul>
                        <li>
                            <strong>Information you provide directly</strong> — when you fill in our contact form,
                            subscribe to our newsletter, apply for a position, or engage our services. This may include
                            your name, email address, phone number, company name, and the content of your messages.
                        </li>
                        <li>
                            <strong>Information collected automatically</strong> — when you visit our website, we may
                            collect technical data including your IP address, browser type, pages visited, time spent on
                            pages, and referring URL. We use cookies and similar technologies for this purpose (see our
                            <a href="/cookie-policy">Cookie Policy</a>).
                        </li>
                        <li>
                            <strong>Information from client engagements</strong> — in the course of delivering services,
                            we may process personal data relating to your employees, customers, or stakeholders. This is
                            governed by our data processing agreements with you as a client.
                        </li>
                    </ul>

                    <h2 id="how-we-use-your-information">How we use your information</h2>
                    <p>We use your personal data for the following purposes:</p>
                    <ul>
                        <li>To respond to your enquiries and provide the services you have requested</li>
                        <li>
                            To send you information about our services, insights, and events — where you have consented
                        </li>
                        <li>To improve our website and understand how visitors use it</li>
                        <li>To comply with our legal and regulatory obligations</li>
                        <li>
                            To manage our business relationship with you, including invoicing and contract management
                        </li>
                        <li>To protect our legitimate business interests and prevent fraud</li>
                    </ul>

                    <h2 id="legal-basis-for-processing">Legal basis for processing</h2>
                    <p>Under Kenya's Data Protection Act, 2019, we process your personal data on the following legal bases:</p>
                    <ul>
                        <li>
                            <strong>Consent</strong> — where you have explicitly agreed, such as subscribing to our
                            newsletter
                        </li>
                        <li>
                            <strong>Contract</strong> — where processing is necessary to fulfil a contract with you or
                            take pre-contractual steps at your request
                        </li>
                        <li>
                            <strong>Legal obligation</strong> — where we are required to process data to comply with
                            applicable law
                        </li>
                        <li>
                            <strong>Legitimate interests</strong> — where processing is necessary for our legitimate
                            business interests, provided these are not overridden by your rights
                        </li>
                    </ul>

                    <h2 id="sharing-your-information">Sharing your information</h2>
                    <p>We do not sell, trade, or rent your personal data to third parties. We may share your data with:</p>
                    <ul>
                        <li>
                            <strong>Service providers</strong> — trusted third parties who assist us in operating our
                            website and conducting our business, subject to confidentiality obligations (e.g. email
                            service providers, analytics platforms, cloud hosting providers)
                        </li>
                        <li>
                            <strong>Professional advisors</strong> — lawyers, auditors, and insurers where necessary
                        </li>
                        <li><strong>Regulatory authorities</strong> — where required by law or court order</li>
                        <li>
                            <strong>Business transfers</strong> — in the event of a merger, acquisition, or sale of all
                            or part of our business, your data may be transferred as part of that transaction
                        </li>
                    </ul>
                    <p>Any third party we engage is required to respect the security of your data and to treat it in accordance with applicable law.</p>

                    <h2 id="data-retention">Data retention</h2>
                    <p>We retain personal data only for as long as necessary for the purposes for which it was collected, or as required by applicable law. Our standard retention periods are:</p>
                    <ul>
                        <li><strong>Contact form submissions</strong> — 3 years from the date of submission</li>
                        <li>
                            <strong>Client engagement records</strong> — 7 years from the end of the engagement, in line
                            with Kenya's Limitation of Actions Act
                        </li>
                        <li><strong>Marketing preferences</strong> — until you withdraw consent</li>
                        <li>
                            <strong>Website analytics data</strong> — 26 months (in line with Google Analytics defaults)
                        </li>
                    </ul>
                    <p>When data is no longer required, we securely delete or anonymise it.</p>

                    <h2 id="your-rights">Your rights</h2>
                    <p>Under the Data Protection Act, 2019, you have the following rights:</p>
                    <ul>
                        <li>
                            <strong>Right to access</strong> — you may request a copy of the personal data we hold about
                            you
                        </li>
                        <li>
                            <strong>Right to rectification</strong> — you may request that we correct inaccurate or
                            incomplete data
                        </li>
                        <li>
                            <strong>Right to erasure</strong> — you may request deletion of your data where we no longer
                            have a legal basis to hold it
                        </li>
                        <li>
                            <strong>Right to object</strong> — you may object to processing based on our legitimate
                            interests, including for direct marketing
                        </li>
                        <li>
                            <strong>Right to restrict processing</strong> — you may request that we limit how we use
                            your data in certain circumstances
                        </li>
                        <li>
                            <strong>Right to data portability</strong> — you may request your data in a structured,
                            machine-readable format
                        </li>
                        <li>
                            <strong>Right to withdraw consent</strong> — where processing is based on consent, you may
                            withdraw it at any time
                        </li>
                    </ul>
                    <p>To exercise any of these rights, please contact us at <a href="mailto:rapsoltechconsulting.co.ke">rapsoltechconsulting.co.ke</a>. We will respond within 30 days. You also have the right to lodge a complaint with the <strong>Office of the Data Protection Commissioner of Kenya</strong>.</p>

                    <h2 id="cookies">Cookies</h2>
                    <p>Our website uses cookies and similar tracking technologies. For full details of the cookies we use and how to manage them, please see our <a href="/cookie-policy">Cookie Policy</a>.</p>

                    <h2 id="third-party-links">Third-party links</h2>
                    <p>Our website may contain links to third-party websites. We are not responsible for the privacy practices or content of those sites. We encourage you to read the privacy policies of any third-party sites you visit.</p>

                    <h2 id="childrens-privacy">Children's privacy</h2>
                    <p>Our services are not directed at persons under the age of 18. We do not knowingly collect personal data from children. If you become aware that a child has provided us with personal data without parental consent, please contact us and we will take steps to delete that information.</p>

                    <h2 id="changes-to-this-policy">Changes to this policy</h2>
                    <p>We may update this Privacy Policy from time to time to reflect changes in our practices or applicable law. We will post the revised policy on this page with an updated effective date. For material changes, we will notify you by email (where we hold your email address) or by a prominent notice on our website.</p>

                    <h2 id="contact-us">Contact us</h2>
                    <p>If you have any questions, concerns, or requests relating to this Privacy Policy or your personal data, please contact our Data Protection Officer:</p>
                    <ul>
                        <li>
                            <strong>Email:</strong>
                            <a href="mailto:rapsoltechconsulting.co.ke">rapsoltechconsulting.co.ke</a>
                        </li>
                        <li>
                            <strong>Post:</strong> Data Protection Officer, Rapsoltech consulting, Ruiru Lelani, Kenya
                        </li>
                        <li><strong>Phone:</strong> +254 700 000 000</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
