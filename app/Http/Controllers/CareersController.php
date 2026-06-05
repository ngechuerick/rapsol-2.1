<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class CareersController extends Controller
{
    /**
     * All open positions — single source of truth.
     * Add / remove jobs here. Slug becomes the URL.
     */
    private function allJobs(): array
    {
        return [
            'senior-fullstack-engineer' => [
                'num'    => '01',
                'slug'   => 'senior-fullstack-engineer',
                'dept'   => 'Engineering',
                'tag'    => 'Technology',
                'title'  => 'Senior Full-Stack Engineer',
                'type'   => 'Full-time',
                'mode'   => 'On-site',
                'salary' => 'KES 250,000 – 350,000 / month',
                'description' => '
<p>We are looking for a Senior Full-Stack Engineer to join our growing engineering team. You will work across client engagements — building everything from FinTech platforms and government portals to SME tools and data dashboards — with full ownership from architecture to deployment.</p>

<h2>What you will do</h2>
<ul>
    <li>Design and build scalable web applications and APIs for client engagements across East Africa</li>
    <li>Lead technical architecture decisions and communicate trade-offs clearly to non-technical stakeholders</li>
    <li>Mentor mid-level and junior engineers, conducting code reviews and establishing engineering best practices</li>
    <li>Collaborate closely with our UX team, project managers, and consulting principals</li>
    <li>Own the full deployment pipeline — CI/CD, cloud infrastructure, monitoring, and incident response</li>
</ul>

<h2>What we are looking for</h2>
<ul>
    <li>5+ years of professional software engineering experience, including at least 2 in a senior role</li>
    <li>Strong proficiency in at least one backend language (PHP/Laravel, Python, Node.js) and a modern frontend framework (React, Vue)</li>
    <li>Solid understanding of relational databases (PostgreSQL/MySQL), REST API design, and cloud infrastructure (AWS or GCP)</li>
    <li>Experience leading technical delivery on multi-month client projects</li>
    <li>Excellent written and verbal communication — you can explain technical concepts to any audience</li>
    <li>A portfolio or GitHub showing your best work</li>
</ul>

<h2>Nice to have</h2>
<ul>
    <li>Experience working with financial systems, regulated APIs, or government platforms in East Africa</li>
    <li>Mobile development experience (React Native or Flutter)</li>
    <li>Familiarity with data engineering or ML deployment pipelines</li>
</ul>

<h2>What success looks like</h2>
<p>In your first 90 days, you will have shipped a feature to production on a live client engagement, contributed meaningfully to at least one architecture review, and established a working relationship with the rest of the engineering team. Within six months, you will be leading your own workstream on a client project.</p>
',
            ],

            'ai-ml-engineer' => [
                'num'    => '02',
                'slug'   => 'ai-ml-engineer',
                'dept'   => 'Engineering',
                'tag'    => 'Technology',
                'title'  => 'AI / ML Engineer',
                'type'   => 'Full-time',
                'mode'   => 'Hybrid',
                'salary' => 'KES 220,000 – 320,000 / month',
                'description' => '
<p>Our AI practice is growing fast. We are looking for an AI/ML Engineer who can bridge the gap between data science research and production deployment — helping our clients in banking, agriculture, healthcare, and government unlock real value from machine learning.</p>

<h2>What you will do</h2>
<ul>
    <li>Design, train, and deploy machine learning models across client engagements — credit scoring, NLP, demand forecasting, computer vision</li>
    <li>Build data pipelines that clean, transform, and prepare raw client data for modelling</li>
    <li>Integrate AI capabilities into existing client products and platforms via APIs</li>
    <li>Evaluate and advise clients on AI readiness, use case prioritisation, and build vs buy decisions</li>
    <li>Contribute to internal tooling and frameworks to accelerate future AI engagements</li>
</ul>

<h2>What we are looking for</h2>
<ul>
    <li>3+ years of hands-on ML engineering experience — model development, training, evaluation, and production deployment</li>
    <li>Strong Python skills; proficiency with scikit-learn, PyTorch, or TensorFlow</li>
    <li>Experience with data engineering — SQL, ETL pipelines, data warehouses</li>
    <li>Track record of deploying models that are actually used in production, not just notebooks</li>
    <li>Ability to communicate clearly with non-technical clients about what AI can and cannot do</li>
</ul>

<h2>Nice to have</h2>
<ul>
    <li>Experience with alternative credit scoring or financial ML models</li>
    <li>Familiarity with low-resource NLP for African languages (Swahili, Kikuyu)</li>
    <li>Cloud ML experience (AWS SageMaker, GCP Vertex AI)</li>
    <li>MLOps experience (model monitoring, drift detection, retraining pipelines)</li>
</ul>
',
            ],

            'senior-uiux-designer' => [
                'num'    => '03',
                'slug'   => 'senior-uiux-designer',
                'dept'   => 'Product',
                'tag'    => 'Design',
                'title'  => 'Senior UI/UX Designer',
                'type'   => 'Full-time',
                'mode'   => 'Hybrid',
                'salary' => 'KES 180,000 – 260,000 / month',
                'description' => '
<p>We are looking for a Senior UI/UX Designer to lead design across our client engagements. You will work on products that real East African users depend on daily — banking apps, government portals, agricultural platforms, and healthcare systems. You will bring rigour, empathy, and craft to everything you touch.</p>

<h2>What you will do</h2>
<ul>
    <li>Lead design from discovery through to handoff on client engagements</li>
    <li>Conduct user research — interviews, contextual inquiry, usability testing — with real users across East Africa</li>
    <li>Create wireframes, user flows, and high-fidelity prototypes in Figma</li>
    <li>Build and maintain design systems that scale across products</li>
    <li>Work closely with engineering to ensure designs are implemented accurately</li>
    <li>Advocate for user needs in client meetings and product discussions</li>
</ul>

<h2>What we are looking for</h2>
<ul>
    <li>4+ years of professional product design experience, including shipped mobile and web products</li>
    <li>Strong Figma skills — components, variables, interactive prototypes</li>
    <li>Experience conducting user research with diverse populations, including low-literacy and low-bandwidth contexts</li>
    <li>A portfolio that demonstrates both visual craft and strong UX thinking</li>
    <li>Ability to explain design decisions clearly and handle client feedback constructively</li>
</ul>
',
            ],

            'mobile-developer' => [
                'num'    => '04',
                'slug'   => 'mobile-developer',
                'dept'   => 'Engineering',
                'tag'    => 'Technology',
                'title'  => 'Mobile Developer (React Native)',
                'type'   => 'Full-time',
                'mode'   => 'On-site',
                'salary' => 'KES 180,000 – 260,000 / month',
                'description' => '
<p>We build mobile applications that work in the real world — on mid-range Android devices, in low-bandwidth environments, and for users who may be encountering digital products for the first time. We need a Mobile Developer who cares as much about performance and reliability as about UI.</p>

<h2>What you will do</h2>
<ul>
    <li>Build cross-platform mobile applications using React Native for iOS and Android</li>
    <li>Integrate with REST APIs, mobile money platforms (M-Pesa, Airtel Money), and third-party SDKs</li>
    <li>Optimise app performance for low-end devices and slow connections</li>
    <li>Implement offline-first architectures for users with intermittent connectivity</li>
    <li>Manage app store submissions, release cycles, and OTA updates</li>
</ul>

<h2>What we are looking for</h2>
<ul>
    <li>3+ years of React Native experience with shipped apps on both iOS and Android</li>
    <li>Strong JavaScript/TypeScript skills</li>
    <li>Experience with mobile money API integrations is a significant advantage</li>
    <li>Passion for building apps that work well on low-end hardware and poor networks</li>
</ul>
',
            ],

            'business-strategy-consultant' => [
                'num'    => '05',
                'slug'   => 'business-strategy-consultant',
                'dept'   => 'Strategy',
                'tag'    => 'Consulting',
                'title'  => 'Business Strategy Consultant',
                'type'   => 'Full-time',
                'mode'   => 'On-site',
                'salary' => 'KES 200,000 – 300,000 / month',
                'description' => '
<p>We are looking for a Business Strategy Consultant to join our consulting practice. You will work directly with CEOs, CFOs, and boards of East African organisations on their most important strategic decisions — from market entry and competitive positioning to financial restructuring and M&A.</p>

<h2>What you will do</h2>
<ul>
    <li>Lead strategy engagements from diagnostic through to recommendation and implementation support</li>
    <li>Build financial models, market analyses, and business cases that drive real decisions</li>
    <li>Facilitate workshops, interviews, and leadership alignment sessions with senior client stakeholders</li>
    <li>Work alongside technology and finance colleagues to deliver integrated client solutions</li>
    <li>Contribute to business development — thought leadership, proposals, and client relationships</li>
</ul>

<h2>What we are looking for</h2>
<ul>
    <li>4+ years of strategy consulting or corporate strategy experience</li>
    <li>Strong financial modelling and quantitative analysis skills</li>
    <li>Experience managing senior stakeholder relationships independently</li>
    <li>Deep familiarity with the East African business environment — regulatory, competitive, and cultural</li>
    <li>An MBA or equivalent professional qualification is preferred but not required</li>
</ul>
',
            ],

            'financial-analyst' => [
                'num'    => '06',
                'slug'   => 'financial-analyst',
                'dept'   => 'Finance',
                'tag'    => 'Finance',
                'title'  => 'Financial Analyst',
                'type'   => 'Full-time',
                'mode'   => 'On-site',
                'salary' => 'KES 120,000 – 180,000 / month',
                'description' => '
<p>Our financial advisory practice needs a sharp Financial Analyst to support client engagements across corporate finance, asset management, and M&A. You will build the models, run the analysis, and help our principals produce the work that influences major financial decisions in East Africa.</p>

<h2>What you will do</h2>
<ul>
    <li>Build and maintain financial models (three-statement, DCF, LBO, scenario analysis)</li>
    <li>Conduct market research, competitive analysis, and industry benchmarking</li>
    <li>Prepare client-ready reports, presentations, and investment memos</li>
    <li>Support due diligence processes on M&A and investment transactions</li>
    <li>Assist with portfolio reporting for asset management clients</li>
</ul>

<h2>What we are looking for</h2>
<ul>
    <li>2+ years of experience in investment banking, private equity, management consulting, or corporate finance</li>
    <li>Advanced Excel / financial modelling skills — proven ability to build complex models from scratch</li>
    <li>CFA Level 1 passed or actively pursuing is a strong advantage</li>
    <li>Strong written and verbal communication skills in English</li>
    <li>Attention to detail that borders on obsessive — accuracy matters</li>
</ul>
',
            ],

            'digital-marketing-manager' => [
                'num'    => '07',
                'slug'   => 'digital-marketing-manager',
                'dept'   => 'Marketing',
                'tag'    => 'Growth',
                'title'  => 'Digital Marketing Manager',
                'type'   => 'Full-time',
                'mode'   => 'Hybrid',
                'salary' => 'KES 140,000 – 200,000 / month',
                'description' => '
<p>We have built our reputation through referrals and word of mouth. Now we want to grow our digital presence in a way that is consistent with who we are — authoritative, honest, and useful. We are looking for a Digital Marketing Manager who will build that presence strategically, not just tactically.</p>

<h2>What you will do</h2>
<ul>
    <li>Develop and execute Nexus Africa\'s content and digital marketing strategy</li>
    <li>Own our SEO — technical, on-page, and content — with a focus on sustainable organic growth</li>
    <li>Manage our blog, LinkedIn, and other channels with high-quality, original content</li>
    <li>Run performance campaigns on Google and LinkedIn to generate qualified leads</li>
    <li>Track and report on marketing performance with clear attribution to business outcomes</li>
    <li>Collaborate with our consulting and technology teams to turn expertise into content</li>
</ul>

<h2>What we are looking for</h2>
<ul>
    <li>4+ years of B2B digital marketing experience, ideally in professional services or technology</li>
    <li>Strong SEO knowledge — technical and content — with demonstrable results</li>
    <li>Experience running and optimising paid campaigns on Google Ads and LinkedIn</li>
    <li>Exceptional writing skills — you can turn complex ideas into clear, compelling copy</li>
    <li>Data-driven approach with strong analytical skills</li>
</ul>
',
            ],

            'project-manager' => [
                'num'    => '08',
                'slug'   => 'project-manager',
                'dept'   => 'Operations',
                'tag'    => 'Operations',
                'title'  => 'Project Manager',
                'type'   => 'Full-time',
                'mode'   => 'On-site',
                'salary' => 'KES 160,000 – 220,000 / month',
                'description' => '
<p>Our Project Manager role is one of the most important in the firm. You are the person who turns ambiguous client engagements into structured, well-executed deliveries — keeping teams aligned, clients informed, and projects on track from kick-off to handoff.</p>

<h2>What you will do</h2>
<ul>
    <li>Own end-to-end delivery of 3–5 concurrent client engagements across technology and consulting</li>
    <li>Define project scope, timelines, resource plans, and risk registers in collaboration with technical leads</li>
    <li>Run weekly status calls with clients and produce clear, honest progress reports</li>
    <li>Identify and resolve blockers early — before they become issues</li>
    <li>Manage scope changes, budget tracking, and client expectations through the project lifecycle</li>
    <li>Contribute to improving our internal project delivery processes and templates</li>
</ul>

<h2>What we are looking for</h2>
<ul>
    <li>4+ years of project management experience on technology or consulting engagements</li>
    <li>PMP, PRINCE2, or equivalent certification is an advantage</li>
    <li>Experience managing senior stakeholders and navigating difficult client conversations</li>
    <li>Comfort working across technical and non-technical teams simultaneously</li>
    <li>Exceptional organisation and communication — you thrive on structure and clarity</li>
</ul>
',
            ],
        ];
    }

    /**
     * Careers index — show all open roles.
     */
    public function index()
    {
        $jobs = $this->allJobs();
        return view('careers', compact('jobs'));
    }

    /**
     * Individual job detail page.
     */
    public function show(string $slug)
    {
        $jobs = $this->allJobs();
        $job  = $jobs[$slug] ?? null;

        if (!$job) abort(404);

        return view('career-detail', compact('job'));
    }

    /**
     * Handle job application form submission.
     * Validates, saves CV, sends email notification.
     */
    public function apply(Request $request, string $slug)
    {
        $jobs = $this->allJobs();
        $job  = $jobs[$slug] ?? null;

        if (!$job) abort(404);

        $validated = $request->validate([
            'name'      => ['required', 'string', 'min:2', 'max:100'],
            'email'     => ['required', 'email', 'max:150'],
            'phone'     => ['nullable', 'string', 'max:30'],
            'linkedin'  => ['nullable', 'url', 'max:200'],
            'portfolio' => ['nullable', 'url', 'max:200'],
            'cv'        => ['required', 'file', 'mimes:pdf,doc,docx', 'max:5120'],
            'cover'     => ['required', 'string', 'min:50', 'max:3000'],
            'role'      => ['required', 'string'],
        ], [
            'name.required'  => 'Please enter your full name.',
            'email.required' => 'Please enter your email address.',
            'cv.required'    => 'Please attach your CV.',
            'cv.mimes'       => 'CV must be a PDF, DOC, or DOCX file.',
            'cv.max'         => 'CV must be under 5MB.',
            'cover.required' => 'Please tell us why you want to join.',
            'cover.min'      => 'Please write at least 50 characters.',
        ]);

        // Store CV in private storage
        $cvPath = $request->file('cv')->store(
            'applications/' . $slug . '/' . date('Y-m'),
            'local'
        );

        // Send notification email to hiring team
        Mail::send([], [], function ($message) use ($validated, $cvPath, $job) {
            $message
                ->to(config('mail.contact_address'))
                ->replyTo($validated['email'], $validated['name'])
                ->subject("New Application: {$job['title']} — {$validated['name']}")
                ->html("
                    <h2>New Job Application</h2>
                    <p><strong>Role:</strong> {$job['title']}</p>
                    <p><strong>Name:</strong> {$validated['name']}</p>
                    <p><strong>Email:</strong> {$validated['email']}</p>
                    <p><strong>Phone:</strong> " . ($validated['phone'] ?? 'Not provided') . "</p>
                    <p><strong>LinkedIn:</strong> " . ($validated['linkedin'] ?? 'Not provided') . "</p>
                    <p><strong>Portfolio:</strong> " . ($validated['portfolio'] ?? 'Not provided') . "</p>
                    <hr>
                    <p><strong>Cover note:</strong></p>
                    <p>" . nl2br(e($validated['cover'])) . "</p>
                    <hr>
                    <p><strong>CV stored at:</strong> {$cvPath}</p>
                ");
        });

        return redirect()
            ->route('careers.show', $slug)
            ->with('applied', true);
    }
}