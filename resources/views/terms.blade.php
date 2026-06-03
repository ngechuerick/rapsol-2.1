@extends ('layouts.app')
@section ('title', 'Terms of Service — Nexus Africa')

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
            <div class="w-8 h-px bg-amber-500"></div>
            <span class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">Legal</span>
        </div>
        <h1
            class="font-display text-4xl md:text-5xl font-black leading-[1.1] tracking-tight text-zinc-900 dark:text-white mb-4"
            data-animate
            data-delay="1"
        >
            Terms of Service
        </h1>
        <p class="text-sm text-zinc-400 dark:text-zinc-600" data-animate data-delay="2">Last updated: 1 June 2025 &nbsp;·&nbsp; Effective: 1 June 2025</p>
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
                <h4 class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-400 dark:text-zinc-600 mb-4">
                    Contents
                </h4>
                <nav class="space-y-1">
                    @foreach ([
                    'Acceptance of terms',
                    'Our services',
                    'Eligibility',
                    'Client obligations',
                    'Fees and payment',
                    'Intellectual property',
                    'Confidentiality',
                    'Limitation of liability',
                    'Warranties and disclaimers',
                    'Indemnification',
                    'Term and termination',
                    'Governing law',
                    'Dispute resolution',
                    'General provisions',
                    'Contact',
                ] as $item)
                        <a
                            href="#{{ Str::slug($item) }}"
                            class="block text-sm text-zinc-500 dark:text-zinc-400 py-1 pl-3 border-l-2 border-transparent hover:border-amber-500 hover:text-zinc-900 dark:hover:text-white transition-all duration-200 leading-snug"
                        >
                            {{ $item }}
                        </a>
                    @endforeach
                </nav>
                <div
                    class="mt-8 p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-900/40"
                >
                    <p class="text-xs text-zinc-500 dark:text-zinc-400 leading-relaxed mb-2">Legal queries?</p>
                    <a
                        href="mailto:legal@nexusafrica.co.ke"
                        class="text-xs font-semibold text-amber-600 dark:text-amber-400 hover:underline"
                    >
                        legal@nexusafrica.co.ke
                    </a>
                </div>
            </div>

            {{-- Body --}}
            <div class="px-7 py-10">
                <div
                    class="prose prose-zinc dark:prose-invert max-w-none prose-headings:font-display prose-headings:font-bold prose-headings:tracking-tight prose-h2:text-xl prose-h2:mt-10 prose-h2:mb-3 prose-h2:scroll-mt-24 prose-p:text-zinc-600 dark:prose-p:text-zinc-400 prose-p:leading-relaxed prose-p:text-[15px] prose-a:text-amber-600 dark:prose-a:text-amber-400 prose-a:no-underline hover:prose-a:underline prose-strong:text-zinc-900 dark:prose-strong:text-white prose-ul:text-zinc-600 dark:prose-ul:text-zinc-400 prose-li:text-[15px] prose-hr:border-zinc-200 dark:prose-hr:border-zinc-800"
                >
                    <p>These Terms of Service ("Terms") govern your access to and use of the website at <strong>nexusafrica.co.ke</strong> and any services provided by <strong>Nexus Africa Limited</strong> ("Nexus Africa", "we", "us", or "our"), a company incorporated in Kenya. By accessing our website or engaging our services, you agree to be bound by these Terms.</p>

                    <hr />

                    <h2 id="acceptance-of-terms">1. Acceptance of terms</h2>
                    <p>By using our website or engaging our services, you confirm that you have read, understood, and agree to these Terms. If you are entering into these Terms on behalf of an organisation, you represent that you have the authority to do so. If you do not agree, please do not use our website or services.</p>

                    <h2 id="our-services">2. Our services</h2>
                    <p>Nexus Africa provides technology development, digital consulting, financial advisory, asset management, and related professional services to business clients across East Africa. The specific scope, deliverables, timelines, and fees applicable to any engagement are set out in a separate Statement of Work or Service Agreement ("Engagement Agreement") entered into between Nexus Africa and the client. These Terms apply in addition to any Engagement Agreement. In the event of a conflict, the Engagement Agreement shall prevail.</p>

                    <h2 id="eligibility">3. Eligibility</h2>
                    <p>Our services are intended for business use only. By engaging our services, you represent that you are a legal entity or an individual acting in a professional or business capacity, and that you are at least 18 years of age.</p>

                    <h2 id="client-obligations">4. Client obligations</h2>
                    <p>In order for us to deliver services effectively, you agree to:</p>
                    <ul>
                        <li>Provide accurate, complete, and timely information and access as reasonably required</li>
                        <li>Designate a primary point of contact with authority to make decisions</li>
                        <li>Review and respond to deliverables, questions, and requests within agreed timescales</li>
                        <li>
                            Not use our services for any unlawful purpose or in a manner that violates applicable law
                        </li>
                        <li>Ensure that any data or materials provided to us do not infringe third-party rights</li>
                    </ul>
                    <p>Delays or failures caused by your non-compliance with these obligations shall not constitute a breach by Nexus Africa and may result in revised timelines or additional fees.</p>

                    <h2 id="fees-and-payment">5. Fees and payment</h2>
                    <p>Fees for services are as set out in the applicable Engagement Agreement. Unless otherwise agreed:</p>
                    <ul>
                        <li>Invoices are payable within <strong>30 days</strong> of the invoice date</li>
                        <li>
                            Late payments attract interest at <strong>2% per month</strong> on the outstanding balance
                        </li>
                        <li>We reserve the right to suspend services where invoices are more than 14 days overdue</li>
                        <li>All fees are quoted exclusive of applicable taxes including VAT</li>
                        <li>
                            Expenses reasonably incurred in delivering services (travel, accommodation, third-party
                            tools) will be invoiced at cost with prior approval
                        </li>
                    </ul>

                    <h2 id="intellectual-property">6. Intellectual property</h2>
                    <p><strong>Your materials:</strong> You retain all intellectual property rights in materials, data, and information you provide to us ("Client Materials"). You grant us a licence to use Client Materials solely to deliver the services.</p>
                    <p><strong>Deliverables:</strong> Upon receipt of full payment, and unless otherwise agreed in the Engagement Agreement, ownership of bespoke deliverables created specifically for you transfers to you. Nexus Africa retains ownership of all pre-existing intellectual property, tools, frameworks, methodologies, and general know-how, including any improvements thereto developed during the engagement.</p>
                    <p><strong>Website content:</strong> All content on this website — including text, graphics, logos, and design — is the property of Nexus Africa and is protected by applicable intellectual property law. You may not reproduce, distribute, or create derivative works without our prior written consent.</p>

                    <h2 id="confidentiality">7. Confidentiality</h2>
                    <p>Each party agrees to keep confidential any non-public information disclosed by the other party in the course of an engagement ("Confidential Information") and to use it solely for the purpose of the engagement. This obligation does not apply to information that is publicly available, independently developed, or required to be disclosed by law. Confidentiality obligations survive termination of the engagement for a period of <strong>3 years</strong>.</p>

                    <h2 id="limitation-of-liability">8. Limitation of liability</h2>
                    <p>To the fullest extent permitted by applicable law:</p>
                    <ul>
                        <li>
                            Our total liability to you for any claim arising from or related to our services shall not
                            exceed the total fees paid by you to us in the <strong>12 months</strong> preceding the
                            event giving rise to the claim
                        </li>
                        <li>
                            We shall not be liable for any indirect, consequential, incidental, special, or punitive
                            damages, including loss of profits, loss of data, or business interruption, even if advised
                            of the possibility of such damages
                        </li>
                        <li>
                            We are not responsible for outcomes dependent on third-party services, platforms, or factors
                            outside our reasonable control
                        </li>
                    </ul>

                    <h2 id="warranties-and-disclaimers">9. Warranties and disclaimers</h2>
                    <p>We warrant that our services will be provided with reasonable skill and care, consistent with professional standards applicable in Kenya. We do not warrant that deliverables will be error-free or uninterrupted, or that specific business outcomes will be achieved. The website is provided on an "as is" basis without warranty of any kind.</p>

                    <h2 id="indemnification">10. Indemnification</h2>
                    <p>You agree to indemnify, defend, and hold harmless Nexus Africa and its directors, employees, and agents from any claims, losses, liabilities, damages, and expenses (including reasonable legal fees) arising from: your use of our services in violation of these Terms; your breach of applicable law; or any claim that Client Materials infringe third-party intellectual property rights.</p>

                    <h2 id="term-and-termination">11. Term and termination</h2>
                    <p>These Terms apply from the date you first use our website or engage our services and continue until terminated. Either party may terminate an engagement as set out in the Engagement Agreement. We may suspend or terminate your access to our website or services immediately if you breach these Terms or applicable law. On termination, any provisions that by their nature should survive (including payment obligations, confidentiality, and intellectual property) will continue to apply.</p>

                    <h2 id="governing-law">12. Governing law</h2>
                    <p>These Terms are governed by and construed in accordance with the laws of Kenya. Both parties submit to the exclusive jurisdiction of the courts of Kenya for the resolution of any disputes.</p>

                    <h2 id="dispute-resolution">13. Dispute resolution</h2>
                    <p>In the event of a dispute, the parties agree first to attempt resolution through good-faith negotiation. If unresolved within 30 days, the parties may refer the matter to mediation before the Nairobi Centre for International Arbitration. If mediation fails, the dispute shall be resolved through litigation in the Kenyan courts.</p>

                    <h2 id="general-provisions">14. General provisions</h2>
                    <ul>
                        <li>
                            <strong>Entire agreement:</strong> These Terms, together with any Engagement Agreement,
                            constitute the entire agreement between the parties on the subject matter and supersede all
                            prior agreements
                        </li>
                        <li>
                            <strong>Severability:</strong> If any provision is found unenforceable, the remaining
                            provisions continue in full force
                        </li>
                        <li>
                            <strong>Waiver:</strong> Failure to enforce any provision shall not constitute a waiver of
                            that right
                        </li>
                        <li>
                            <strong>Assignment:</strong> You may not assign your rights or obligations without our prior
                            written consent
                        </li>
                        <li>
                            <strong>Amendments:</strong> We may update these Terms at any time. Continued use of our
                            website or services after changes constitutes acceptance
                        </li>
                    </ul>

                    <h2 id="contact">15. Contact</h2>
                    <p>For legal enquiries relating to these Terms, please contact:</p>
                    <ul>
                        <li>
                            <strong>Email:</strong> <a href="mailto:legal@nexusafrica.co.ke">legal@nexusafrica.co.ke</a>
                        </li>
                        <li>
                            <strong>Post:</strong> Legal Department, Nexus Africa Limited, Westlands, Nairobi, Kenya
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
