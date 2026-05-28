{{-- ══════════════════════════════════════════════════════════
     HOW WE WORK SECTION
     4-phase process — not boring horizontal steps
     Design: 2x2 grid with large phase numbers as design elements
     + connecting visual line
══════════════════════════════════════════════════════════ --}}

<section
    id="process"
    class="relative border-t border-shark-200 dark:border-shark-800 bg-shark-50/50 dark:bg-shark-900/20"
>
    <div class="absolute -top-1.25 -left-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700 z-10"></div>
    <div class="absolute -top-1.25 -right-1.25 w-2.5 h-2.5 rotate-45 bg-shark-300 dark:bg-shark-700 z-10"></div>

    <div class="px-7 pt-16 pb-16">
        {{-- Header --}}
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-12" data-animate>
            <div>
                <p class="font-mono text-[10px] font-semibold uppercase tracking-[0.15em] text-amber-600 dark:text-amber-500 mb-3">— How We Work</p>
                <h2
                    class="font-display text-3xl md:text-4xl font-bold tracking-tight text-shark-900 dark:text-white leading-tight"
                >
                    A process refined<br />over 340+ engagements.
                </h2>
            </div>
            <p class="text-base text-shark-500 dark:text-shark-400 max-w-xs leading-relaxed md:text-right">No surprises. No scope creep. A clear path from brief to delivered outcome.</p>
        </div>

        {{-- 4-step 2x2 grid with connecting line --}}
        <div
            class="grid grid-cols-1 md:grid-cols-2 gap-px bg-shark-200 dark:bg-shark-800 rounded-xl overflow-hidden border border-shark-200 dark:border-shark-800"
        >
            @foreach ([
                [
                    'phase' => '01',
                    'title' => 'Discovery & Alignment',
                    'color' => 'amber',
                    'icon'  => '<path d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>',
                    'desc'  => 'We start by listening. Deep-dive sessions with your leadership team to map objectives, constraints, stakeholders, and success metrics  before a single line of code or strategy doc is written.',
                    'deliverables' => ['Stakeholder interviews', 'Requirements document', 'Success metrics defined', 'Project charter signed'],
                    'duration' => '1–2 weeks',
                ],
                [
                    'phase' => '02',
                    'title' => 'Strategy & Architecture',
                    'color' => 'shark',
                    'icon'  => '<path d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z"/>',
                    'desc'  => 'We design the solution before we build it. Technical architecture, financial models, risk frameworks — whatever your engagement requires all documented and agreed upon before execution begins.',
                    'deliverables' => ['Technical blueprint', 'Financial model / roadmap', 'Risk assessment', 'Timeline & milestones'],
                    'duration' => '2–3 weeks',
                ],
                [
                    'phase' => '03',
                    'title' => 'Build & Execute',
                    'color' => 'shark',
                    'icon'  => '<path d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z"/>',
                    'desc'  => 'This is where we build. Iterative sprints, transparent progress reporting, and weekly check-ins keep you informed and in control throughout delivery  no black box.',
                    'deliverables' => ['Working product / deliverable', 'Weekly progress reports', 'QA & testing', 'Stakeholder demos'],
                    'duration' => '4–16 weeks',
                ],
                [
                    'phase' => '04',
                    'title' => 'Launch & Optimise',
                    'color' => 'amber',
                    'icon'  => '<path d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>',
                    'desc'  => 'Go-live is the beginning, not the end. We monitor, measure, and iterate post-launch with a 90-day hypercare window  then hand over full documentation and training for long-term independence.',
                    'deliverables' => ['Go-live support', '90-day hypercare', 'Knowledge transfer', 'Performance dashboard'],
                    'duration' => '4–12 weeks post-launch',
                ],
            ] as $i => $step)
                <div class="relative bg-white dark:bg-shark-950 p-7 group" data-animate data-delay="{{ $i + 1 }}">
                    {{-- Large phase number (background) --}}
                    <div
                        class="absolute top-5 right-6 font-display font-black text-[72px] leading-none text-shark-50 dark:text-shark-900 select-none pointer-events-none transition-colors duration-300"
                        aria-hidden="true"
                    >
                        {{ $step['phase'] }}
                    </div>

                    {{-- Content --}}
                    <div class="relative">
                        <div class="flex items-center gap-3 mb-5">
                            <div
                                class="w-9 h-9 rounded-lg flex items-center justify-center
                                    {{ $step['color'] === 'amber'
                                        ? 'bg-amber-100 dark:bg-amber-950/40'
                                        : 'bg-shark-100 dark:bg-shark-800' }}"
                            >
                                <svg
                                    class="w-4 h-4 {{ $step['color'] === 'amber' ? 'text-amber-600 dark:text-amber-400' : 'text-shark-500 dark:text-shark-400' }}"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    viewBox="0 0 24 24"
                                >
                                    {!! $step['icon'] !!}
                                </svg>
                            </div>
                            <span class="font-mono text-[9px] font-bold text-shark-300 dark:text-shark-700"
                                >PHASE {{ $step['phase'] }}</span
                            >
                        </div>

                        <h3 class="font-display font-bold text-lg text-shark-900 dark:text-white mb-3">
                            {{ $step['title'] }}
                        </h3>
                        <p class="text-base text-shark-500 dark:text-shark-400 leading-relaxed mb-5">{{ $step['desc'] }}</p>

                        <div class="space-y-1.5 mb-5">
                            @foreach ($step['deliverables'] as $d)
                                <div class="flex items-center gap-2 text-sm text-shark-500 dark:text-shark-400">
                                    <svg
                                        class="w-3 h-3 {{ $step['color'] === 'amber' ? 'text-amber-500' : 'text-shark-400 dark:text-shark-600' }} shrink-0"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        viewBox="0 0 24 24"
                                    >
                                        <path d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                    {{ $d }}
                                </div>
                            @endforeach
                        </div>

                        <div
                            class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-xs font-mono font-medium
                                {{ $step['color'] === 'amber'
                                    ? 'bg-amber-50 dark:bg-amber-950/30 text-amber-700 dark:text-amber-400'
                                    : 'bg-shark-50 dark:bg-shark-800 text-shark-500 dark:text-shark-400' }}"
                        >
                            <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M12 6v6l4 2m6-2a10 10 0 1 1-20 0 10 10 0 0 1 20 0Z" />
                            </svg>
                            {{ $step['duration'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Bottom note --}}
        <p class="mt-6 text-center text-xs text-shark-600 dark:text-shark-400 font-mono" data-animate>Timelines vary by scope. All engagements include a dedicated Nexus Africa project lead.</p>
    </div>
</section>
