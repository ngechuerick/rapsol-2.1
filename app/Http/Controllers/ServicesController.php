<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * All 8 services — single source of truth.
     * Edit content here and it reflects on both
     * the index page and individual service pages.
     */
    public static function allServices(): array
    {
        return [
            'app-development' => [
                'num'           => '01',
                'slug'          => 'app-development',
                'title'         => 'Application & System Development',
                'short'         => 'We architect and build secure, maintainable web and mobile applications that support growth, reduce operational risk, and adapt as your product evolves.',
                'headline'      => 'Build with confidence. Ship with clarity.',
                'intro'         => 'We architect and build secure, maintainable applications that support growth, reduce operational risk, and adapt as your product evolves. Our engineering prioritises clarity, performance, and long-term sustainability.',
                'tags'          => ['Web Applications', 'Mobile Apps (iOS & Android)', 'REST & GraphQL APIs', 'ERP & CRM Systems', 'E-Commerce Platforms', 'System Integration'],
                'icon'          => '<path d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5"/>',
                'deliverables'  => [
                    ['title' => 'Web & Platform Development', 'desc' => 'Reliable, scalable websites and digital platforms built for performance, usability, and long-term business growth.',
                     'icon' => '<path d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253"/>'],
                    ['title' => 'Mobile App Development', 'desc' => 'Native and cross-platform mobile applications for iOS and Android — from prototype to app store deployment.',
                     'icon' => '<path d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 8.25h3"/>'],
                    ['title' => 'Backend Systems & APIs', 'desc' => 'Secure, scalable backend systems and APIs that power your platform, enable smooth integrations, and support reliable data flow.',
                     'icon' => '<path d="M5.25 14.25h13.5m-13.5 0a3 3 0 0 1-3-3m3 3a3 3 0 1 0 6 0m-6 0H3m16.5 0a3 3 0 0 0 3-3m-3 3a3 3 0 1 1-6 0m6 0h1.5m-7.5 0V5.625"/>'],
                    ['title' => 'ERP, CRM & System Integration', 'desc' => 'Connect your tools and processes. We implement and integrate enterprise systems that reduce manual work and unify your data.',
                     'icon' => '<path d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z"/>'],
                ],
                'process_title' => 'How we build your product',
                'process'       => [
                    ['title' => 'Discovery & Requirements', 'desc' => 'We gather and analyse business requirements, user needs, and system constraints to create a clear technical roadmap aligned with your goals.'],
                    ['title' => 'Architecture & Design', 'desc' => 'We design scalable, secure, and efficient system architectures, creating wireframes, data structures, and technical specifications before a line of code is written.'],
                    ['title' => 'Development & Implementation', 'desc' => 'Iterative sprints with regular demos. We build robust applications using best practices, integrating backend logic, APIs, and frontend interfaces.'],
                    ['title' => 'Testing & Quality Assurance', 'desc' => 'Rigorous automated and manual testing across devices and environments ensures your product is stable, secure, and production-ready.'],
                    ['title' => 'Deployment & Ongoing Support', 'desc' => 'Smooth go-live with a 90-day hypercare window, full documentation, and optional ongoing maintenance retainers.'],
                ],
            ],

            'seo' => [
                'num'           => '02',
                'slug'          => 'seo',
                'title'         => 'Search Engine Optimisation',
                'short'         => 'We design SEO strategies that improve discoverability, attract qualified traffic, and convert intent into demand through technical and content-led approaches.',
                'headline'      => 'Be found by the right people at the right time.',
                'intro'         => 'We design SEO strategies that improve discoverability, attract qualified traffic, and convert intent into demand. Our approach blends technical SEO, content strategy, and performance analysis to drive sustainable growth rather than short-term spikes.',
                'tags'          => ['Technical SEO Audit', 'Keyword Strategy', 'On-Page Optimisation', 'Link Building', 'Local SEO', 'SEO Analytics'],
                'icon'          => '<path d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>',
                'deliverables'  => [
                    ['title' => 'Technical SEO Audit', 'desc' => 'A deep technical review of your website — crawlability, site speed, structured data, Core Web Vitals, and mobile performance.',
                     'icon' => '<path d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15"/>'],
                    ['title' => 'Keyword & Content Strategy', 'desc' => 'We identify the terms your ideal clients search for and build a content strategy that positions you as the authority in your space.',
                     'icon' => '<path d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776"/>'],
                    ['title' => 'On-Page Optimisation', 'desc' => 'Optimising every page for search intent — titles, meta descriptions, heading structure, internal linking, and schema markup.',
                     'icon' => '<path d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5"/>'],
                    ['title' => 'Monthly Reporting & Analysis', 'desc' => 'Clear, jargon-free monthly reports showing rankings, traffic, conversions, and the specific actions we took to move the needle.',
                     'icon' => '<path d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z"/>'],
                ],
                'process_title' => 'How we grow your organic visibility',
                'process'       => [
                    ['title' => 'SEO Audit & Baseline', 'desc' => 'We benchmark your current rankings, traffic, and technical health to understand exactly where you stand and where the biggest opportunities are.'],
                    ['title' => 'Strategy & Keyword Mapping', 'desc' => 'We build a data-driven keyword strategy mapped to your buyer journey, identifying high-intent terms that convert, not just drive traffic.'],
                    ['title' => 'On-Site & Technical Fixes', 'desc' => 'We implement all technical and on-page improvements — fixing what holds you back and optimising what will push you forward.'],
                    ['title' => 'Content Creation & Outreach', 'desc' => 'We create authoritative content and earn quality backlinks that signal to Google that you\'re the trusted answer.'],
                    ['title' => 'Monitor, Report & Iterate', 'desc' => 'SEO is ongoing. We monitor rankings monthly, report clearly, and continuously refine based on what the data tells us.'],
                ],
            ],

            'ai-integration' => [
                'num'           => '03',
                'slug'          => 'ai-integration',
                'title'         => 'AI Integration',
                'short'         => 'We develop and integrate AI-powered solutions that optimise processes, surface actionable insights, and deliver intelligent experiences your users will notice.',
                'headline'      => 'Put AI to work — intelligently.',
                'intro'         => 'We develop and integrate AI-powered solutions that optimise processes, surface actionable insights, and enhance user experiences. We focus on practical AI — solutions that solve real business problems, not technology for its own sake.',
                'tags'          => ['Machine Learning Models', 'NLP & Chatbots', 'Predictive Analytics', 'Process Automation', 'Computer Vision', 'AI Strategy'],
                'icon'          => '<path d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456Z"/>',
                'deliverables'  => [
                    ['title' => 'AI Strategy & Readiness Assessment', 'desc' => 'We evaluate your data maturity, business processes, and infrastructure to identify where AI will have the greatest practical impact.',
                     'icon' => '<path d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>'],
                    ['title' => 'Intelligent Automation (RPA + AI)', 'desc' => 'Automate repetitive processes using AI-powered workflows — freeing your team for higher-value work and reducing errors.',
                     'icon' => '<path d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z"/>'],
                    ['title' => 'Predictive Analytics & BI', 'desc' => 'Machine learning models that forecast demand, detect anomalies, and surface insights buried in your business data.',
                     'icon' => '<path d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z"/>'],
                    ['title' => 'NLP, Chatbots & Conversational AI', 'desc' => 'Intelligent chatbots and virtual assistants that understand natural language and handle customer queries around the clock.',
                     'icon' => '<path d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z"/>'],
                ],
                'process_title' => 'How we integrate AI into your business',
                'process'       => [
                    ['title' => 'Discovery & Use Case Identification', 'desc' => 'We map your workflows and data to identify the highest-value AI opportunities — prioritised by ROI and feasibility.'],
                    ['title' => 'Data Assessment & Preparation', 'desc' => 'Good AI needs good data. We audit your data sources, clean and structure them, and establish the pipelines needed for model training.'],
                    ['title' => 'Model Development & Integration', 'desc' => 'We build, train, and integrate AI models into your existing systems — APIs, dashboards, or embedded directly in your product.'],
                    ['title' => 'Testing, Validation & Bias Review', 'desc' => 'Every model is tested rigorously against real-world scenarios, validated for accuracy, and reviewed for unintended bias before deployment.'],
                    ['title' => 'Monitoring & Continuous Improvement', 'desc' => 'AI models drift over time. We monitor performance, retrain models as needed, and continuously improve accuracy post-launch.'],
                ],
            ],

            'ui-ux-design' => [
                'num'           => '04',
                'slug'          => 'ui-ux-design',
                'title'         => 'UI/UX Design & Research',
                'short'         => 'We research, prototype, and design interfaces that are intuitive, accessible, and aligned with user and business goals. Design that is intentional and measurable.',
                'headline'      => 'Design that works. Not just looks.',
                'intro'         => 'We research, prototype, and design interfaces that are intuitive, accessible, and aligned with user and business goals. Our process ensures design is not subjective — it is intentional, evidence-based, and measurable.',
                'tags'          => ['User Research', 'Wireframing', 'Prototyping', 'Usability Testing', 'Design Systems', 'Accessibility'],
                'icon'          => '<path d="M9.53 16.122a3 3 0 0 0-5.78 1.128 2.25 2.25 0 0 1-2.4 2.245 4.5 4.5 0 0 0 8.4-2.245c0-.399-.078-.78-.22-1.128Zm0 0a15.998 15.998 0 0 0 3.388-1.62m-5.043-.025a15.994 15.994 0 0 1 1.622-3.395m3.42 3.42a15.995 15.995 0 0 0 4.764-4.648l3.876-5.814a1.151 1.151 0 0 0-1.597-1.597L14.146 6.32a15.996 15.996 0 0 0-4.649 4.763m3.42 3.42a6.776 6.776 0 0 0-3.42-3.42"/>',
                'deliverables'  => [
                    ['title' => 'User Research & Interviews', 'desc' => 'We speak directly with your users — interviews, surveys, and contextual inquiry — to understand their real needs, frustrations, and mental models.',
                     'icon' => '<path d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z"/>'],
                    ['title' => 'Wireframing & Prototyping', 'desc' => 'Low and high-fidelity prototypes that validate concepts fast — before a single line of production code is written.',
                     'icon' => '<path d="M9.53 16.122a3 3 0 0 0-5.78 1.128 2.25 2.25 0 0 1-2.4 2.245 4.5 4.5 0 0 0 8.4-2.245c0-.399-.078-.78-.22-1.128Zm0 0a15.998 15.998 0 0 0 3.388-1.62m-5.043-.025a15.994 15.994 0 0 1 1.622-3.395m3.42 3.42a15.995 15.995 0 0 0 4.764-4.648l3.876-5.814a1.151 1.151 0 0 0-1.597-1.597L14.146 6.32a15.996 15.996 0 0 0-4.649 4.763m3.42 3.42a6.776 6.776 0 0 0-3.42-3.42"/>'],
                    ['title' => 'UI Design & Design Systems', 'desc' => 'Pixel-perfect visual design with a documented component library and design system — ensuring consistency at every scale.',
                     'icon' => '<path d="M4.098 19.902a3.75 3.75 0 0 0 5.304 0l6.401-6.402M6.75 21A3.75 3.75 0 0 1 3 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 0 0 3.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008Z"/>'],
                    ['title' => 'Usability Testing & Iteration', 'desc' => 'We test designs with real users, measure task completion and satisfaction, and iterate until the experience is genuinely excellent.',
                     'icon' => '<path d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>'],
                ],
                'process_title' => 'Our design process',
                'process'       => [
                    ['title' => 'Discover & Define', 'desc' => 'User interviews, competitive analysis, and stakeholder workshops to define the problem space clearly before any design begins.'],
                    ['title' => 'Information Architecture', 'desc' => 'Sitemaps, user flows, and content structure — the invisible skeleton that makes navigation feel effortless.'],
                    ['title' => 'Wireframing & Concept Design', 'desc' => 'Low-fidelity wireframes explore layout and flow. Reviewed with stakeholders before moving to visual design.'],
                    ['title' => 'Visual Design & Prototyping', 'desc' => 'High-fidelity designs in Figma, complete with interactions and transitions that communicate the full intended experience.'],
                    ['title' => 'Test, Refine & Handoff', 'desc' => 'Usability testing with real users, refinements based on findings, and developer-ready handoff with annotated specs.'],
                ],
            ],

            'asset-management' => [
                'num'           => '05',
                'slug'          => 'asset-management',
                'title'         => 'Asset Management',
                'short'         => 'Disciplined, data-driven portfolio management to grow and protect your wealth across East Africa — from real estate and equities to alternative investments.',
                'headline'      => 'Grow and protect what matters most.',
                'intro'         => 'Disciplined, data-driven portfolio management to grow and protect your wealth across East Africa and beyond. From real estate and equities to alternative investments — we manage what matters, with rigour and transparency.',
                'tags'          => ['Portfolio Construction', 'Real Estate Advisory', 'Risk Management', 'Alternative Investments', 'Wealth Planning', 'Reporting'],
                'icon'          => '<path d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75"/>',
                'deliverables'  => [
                    ['title' => 'Portfolio Construction & Review', 'desc' => 'We build diversified portfolios aligned to your risk tolerance, return objectives, and investment horizon — reviewed quarterly.',
                     'icon' => '<path d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z"/>'],
                    ['title' => 'Real Estate Asset Advisory', 'desc' => 'Independent advisory on property acquisition, valuation, development feasibility, and portfolio optimisation across East Africa.',
                     'icon' => '<path d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21"/>'],
                    ['title' => 'Risk Assessment & Management', 'desc' => 'Comprehensive risk analysis identifying concentration risk, market exposure, currency risk, and liquidity constraints in your portfolio.',
                     'icon' => '<path d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/>'],
                    ['title' => 'Investor Reporting & Dashboards', 'desc' => 'Clear, professional investor reports and real-time dashboards that give you and your stakeholders full visibility into performance.',
                     'icon' => '<path d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"/><path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>'],
                ],
                'process_title' => 'How we manage your assets',
                'process'       => [
                    ['title' => 'Investment Policy Statement', 'desc' => 'We define your objectives, risk tolerance, return targets, constraints, and liquidity needs in a formal IPS that guides every decision.'],
                    ['title' => 'Portfolio Construction', 'desc' => 'Asset allocation across equity, fixed income, real estate, and alternatives — diversified and optimised for your specific profile.'],
                    ['title' => 'Active Monitoring', 'desc' => 'Continuous monitoring of market conditions, portfolio drift, and individual holdings with proactive rebalancing when needed.'],
                    ['title' => 'Quarterly Review & Reporting', 'desc' => 'Detailed quarterly performance reports, benchmark comparisons, and face-to-face reviews with your dedicated advisor.'],
                    ['title' => 'Strategic Adjustments', 'desc' => 'As your circumstances change — income, tax, family, or market conditions — we adapt your strategy to stay aligned with your goals.'],
                ],
            ],

            'tech-consulting' => [
                'num'           => '06',
                'slug'          => 'tech-consulting',
                'title'         => 'Technology Consulting',
                'short'         => 'Strategic technology advisory to navigate digital transformation with confidence — cloud architecture, cybersecurity, systems integration, and IT governance.',
                'headline'      => 'Navigate technology with confidence.',
                'intro'         => 'Strategic technology advisory to help organisations navigate digital transformation. From cloud migration and cybersecurity to IT governance and systems integration — we provide the expertise your team needs to make better technology decisions.',
                'tags'          => ['Digital Transformation', 'Cloud Architecture', 'Cybersecurity', 'IT Governance', 'Systems Integration', 'Technology Roadmap'],
                'icon'          => '<path d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25"/>',
                'deliverables'  => [
                    ['title' => 'Digital Transformation Strategy', 'desc' => 'A structured roadmap for modernising your technology stack, processes, and culture — sequenced to minimise disruption and maximise ROI.',
                     'icon' => '<path d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>'],
                    ['title' => 'Cloud Architecture & Migration', 'desc' => 'Cloud strategy, architecture design, and managed migration — whether moving to AWS, Google Cloud, Azure, or a hybrid approach.',
                     'icon' => '<path d="M2.25 15a4.5 4.5 0 0 0 4.5 4.5H18a3.75 3.75 0 0 0 1.332-7.257 3 3 0 0 0-3.758-3.848 5.25 5.25 0 0 0-10.233 2.33A4.502 4.502 0 0 0 2.25 15Z"/>'],
                    ['title' => 'Cybersecurity Assessment', 'desc' => 'Vulnerability assessments, penetration testing, security architecture review, and a prioritised remediation roadmap.',
                     'icon' => '<path d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/>'],
                    ['title' => 'IT Governance & Policy', 'desc' => 'Frameworks, policies, and governance structures that align IT with business strategy — from ITIL implementation to board-level reporting.',
                     'icon' => '<path d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15"/>'],
                ],
                'process_title' => 'How we advise on technology',
                'process'       => [
                    ['title' => 'Current State Assessment', 'desc' => 'A thorough review of your existing technology landscape — systems, infrastructure, skills, processes, and vendor relationships.'],
                    ['title' => 'Gap Analysis & Opportunity Mapping', 'desc' => 'We identify the gaps between where you are and where you need to be, and map specific technology interventions to business outcomes.'],
                    ['title' => 'Roadmap & Business Case', 'desc' => 'A phased technology roadmap with clear priorities, effort estimates, and a business case for each initiative.'],
                    ['title' => 'Implementation Support', 'desc' => 'We stay involved through execution — reviewing vendor proposals, overseeing delivery, and ensuring the strategy translates to real outcomes.'],
                    ['title' => 'Review & Governance', 'desc' => 'Regular technology governance reviews to keep the roadmap current as your business and the technology landscape evolve.'],
                ],
            ],

            'business-consulting' => [
                'num'           => '07',
                'slug'          => 'business-consulting',
                'title'         => 'Business Consulting',
                'short'         => 'Strategic business guidance to unlock growth, improve operations, and make better decisions — from financial modelling and M&A to market entry and SME scale-up.',
                'headline'      => 'Strategy that translates to results.',
                'intro'         => 'Strategic business guidance to unlock growth, improve operations, and make better decisions. From financial modelling and M&A advisory to market entry strategy and SME scale-up programmes — we combine analytical rigour with practical execution.',
                'tags'          => ['Business Strategy', 'Financial Modelling', 'M&A Advisory', 'Market Entry', 'Operational Improvement', 'SME Scale-Up'],
                'icon'          => '<path d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5"/>',
                'deliverables'  => [
                    ['title' => 'Corporate Strategy', 'desc' => 'Competitive analysis, strategic options evaluation, and a clear strategic plan that aligns leadership and directs resources effectively.',
                     'icon' => '<path d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5"/>'],
                    ['title' => 'Financial Modelling & Valuation', 'desc' => 'Three-statement models, DCF valuations, scenario analysis, and board-ready financial presentations for investors and lenders.',
                     'icon' => '<path d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z"/>'],
                    ['title' => 'M&A & Transaction Advisory', 'desc' => 'Buy-side and sell-side M&A support — from target identification and due diligence to deal structuring and post-merger integration.',
                     'icon' => '<path d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/>'],
                    ['title' => 'Operational Improvement', 'desc' => 'Process mapping, bottleneck identification, and redesign of key operational processes to reduce cost and improve throughput.',
                     'icon' => '<path d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z"/>'],
                ],
                'process_title' => 'How we approach business consulting',
                'process'       => [
                    ['title' => 'Diagnostic & Situation Analysis', 'desc' => 'We start with deep listening — stakeholder interviews, financial analysis, and market research to build a clear picture of your situation.'],
                    ['title' => 'Problem Definition & Framing', 'desc' => 'We define the core strategic challenge precisely. A well-framed problem is half solved.'],
                    ['title' => 'Options Development & Analysis', 'desc' => 'We develop a range of strategic options, evaluate each against your criteria, and model the financial implications.'],
                    ['title' => 'Recommendation & Roadmap', 'desc' => 'A clear recommendation with supporting rationale, an implementation roadmap, and the change management considerations.'],
                    ['title' => 'Implementation Support', 'desc' => 'We don\'t just hand over a slide deck. We stay engaged through implementation, tracking progress and adapting the plan as reality unfolds.'],
                ],
            ],

            'hardware-consulting' => [
                'num'           => '08',
                'slug'          => 'hardware-consulting',
                'title'         => 'Hardware Consulting & Maintenance',
                'short'         => 'End-to-end hardware advisory — from infrastructure procurement and network setup to preventive maintenance and on-site support across your organisation.',
                'headline'      => 'Infrastructure that works. Support when it matters.',
                'intro'         => 'End-to-end hardware consulting and maintenance — from infrastructure procurement and network design to scheduled preventive maintenance and rapid on-site support. We keep your systems running so your team can focus on what they do best.',
                'tags'          => ['Infrastructure Design', 'Hardware Procurement', 'Network Setup', 'Preventive Maintenance', 'On-Site Support', 'Asset Tracking'],
                'icon'          => '<path d="M5.25 14.25h13.5m-13.5 0a3 3 0 0 1-3-3m3 3a3 3 0 1 0 6 0m-6 0H3m16.5 0a3 3 0 0 0 3-3m-3 3a3 3 0 1 1-6 0m6 0h1.5m-7.5 0V5.625m0 8.625a3 3 0 0 1-3-3V5.625m6 8.625V5.625m0 8.625a3 3 0 0 0 3-3V5.625M9.75 5.625A2.625 2.625 0 0 1 12.375 3h-.75A2.625 2.625 0 0 1 14.25 5.625m-4.5 0h4.5"/>',
                'deliverables'  => [
                    ['title' => 'Infrastructure Assessment & Design', 'desc' => 'We assess your current infrastructure, identify gaps and risks, and design a fit-for-purpose solution covering servers, networking, and workstations.',
                     'icon' => '<path d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25"/>'],
                    ['title' => 'Hardware Procurement Advisory', 'desc' => 'Vendor-neutral procurement guidance — we recommend the right equipment at the right price, and manage the procurement process on your behalf.',
                     'icon' => '<path d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"/>'],
                    ['title' => 'Network Setup & Configuration', 'desc' => 'LAN, WAN, Wi-Fi, and VPN setup for offices of any size — including firewall configuration, VLAN segmentation, and remote access.',
                     'icon' => '<path d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253"/>'],
                    ['title' => 'Preventive Maintenance & Support', 'desc' => 'Scheduled maintenance contracts to keep your hardware performing reliably — plus priority on-site response when issues arise.',
                     'icon' => '<path d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75"/>'],
                ],
                'process_title' => 'How we support your hardware needs',
                'process'       => [
                    ['title' => 'Site Survey & Audit', 'desc' => 'A physical audit of your existing hardware, network topology, and infrastructure — identifying risks, redundancy gaps, and upgrade priorities.'],
                    ['title' => 'Design & Specification', 'desc' => 'We produce a detailed infrastructure design and equipment specification tailored to your organisation\'s size, usage patterns, and budget.'],
                    ['title' => 'Procurement & Delivery', 'desc' => 'Vendor management, pricing negotiation, order management, and coordinated delivery — you get the right equipment at the right time.'],
                    ['title' => 'Installation & Configuration', 'desc' => 'Professional on-site installation, configuration, testing, and staff orientation — zero disruption to your operations.'],
                    ['title' => 'Maintenance Contract & Support', 'desc' => 'Ongoing scheduled maintenance, remote monitoring, and priority on-site support to protect your investment and keep systems running.'],
                ],
            ],
        ];
    }

    /**
     * Show the services index page.
     */
    public function index()
    {
        return view('services');
    }

    /**
     * Show an individual service detail page.
     */
    public function show(string $slug)
    {
        $all     = self::allServices();
        $service = $all[$slug] ?? null;

        if (!$service) {
            abort(404);
        }

        // Pick up to 3 related services (all except the current one)
        $related = collect($all)
            ->filter(fn($s) => $s['slug'] !== $slug)
            ->take(3)
            ->values()
            ->toArray();

        return view('service-detail', compact('service', 'related'));
    }
}