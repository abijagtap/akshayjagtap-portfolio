<?php require "include/header.php" ?>

<main>
    <section class="page-hero relative overflow-hidden border-b border-white/10">
        <div class="absolute hero-orb -right-24 top-16"></div>
        <div class="relative mx-auto w-full max-w-7xl px-5 pt-28 sm:px-8">
            <p class="reveal font-mono text-xs uppercase tracking-widest text-sky-300">
                Portfolio
            </p>
            <h1 class="reveal delay-1 display mt-4 max-w-4xl text-5xl font-semibold tracking-[-.04em] sm:text-7xl">
                Selected <span class="gradient-text">work.</span>
            </h1>
            <p class="reveal delay-2 mt-6 max-w-2xl text-base leading-7 text-zinc-500">
                A flexible project grid. Replace thumbnails, titles, technologies,
                descriptions and links directly in this file.
            </p>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-5 py-24 sm:px-8 lg:py-32">
        <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
            <article class="project-card card group overflow-hidden rounded-3xl reveal">
                <div class="relative aspect-[16/10] overflow-hidden bg-zinc-900">
                    <img src="images/project-01.svg" alt="Order Management System thumbnail"
                        class="project-image h-full w-full object-cover" onerror="this.style.display = 'none'" />
                    <span
                        class="absolute left-4 top-4 rounded-full border border-white/10 bg-black/50 px-3 py-1.5 font-mono text-[10px] text-zinc-300 backdrop-blur">01</span>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between gap-3">
                        <p class="font-mono text-[10px] uppercase tracking-widest text-sky-300">
                            Marketplace / Backend
                        </p>
                        <span class="text-zinc-600">↗</span>
                    </div>
                    <h2 class="mt-3 display text-2xl font-semibold">
                        Order Management System
                    </h2>
                    <p class="mt-2 text-sm leading-6 text-zinc-500">
                        Built around complex order, inventory and marketplace workflows.
                    </p>
                    <div class="mt-5 flex flex-wrap gap-2">
                        <span class="rounded-full bg-white/[.04] px-2.5 py-1 text-[10px] text-zinc-500">PHP</span><span
                            class="rounded-full bg-white/[.04] px-2.5 py-1 text-[10px] text-zinc-500">CodeIgniter</span><span
                            class="rounded-full bg-white/[.04] px-2.5 py-1 text-[10px] text-zinc-500">MySQL</span><span
                            class="rounded-full bg-white/[.04] px-2.5 py-1 text-[10px] text-zinc-500">MongoDB</span>
                    </div>
                    <a href="#"
                        class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-zinc-200 hover:text-sky-300">View
                        project <span>↗</span></a>
                </div>
            </article>
            <article class="project-card card group overflow-hidden rounded-3xl reveal">
                <div class="relative aspect-[16/10] overflow-hidden bg-zinc-900">
                    <img src="images/project-02.svg" alt="Project Management Platform thumbnail"
                        class="project-image h-full w-full object-cover" onerror="this.style.display = 'none'" />
                    <span
                        class="absolute left-4 top-4 rounded-full border border-white/10 bg-black/50 px-3 py-1.5 font-mono text-[10px] text-zinc-300 backdrop-blur">02</span>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between gap-3">
                        <p class="font-mono text-[10px] uppercase tracking-widest text-sky-300">
                            Web Application
                        </p>
                        <span class="text-zinc-600">↗</span>
                    </div>
                    <h2 class="mt-3 display text-2xl font-semibold">
                        Project Management Platform
                    </h2>
                    <p class="mt-2 text-sm leading-6 text-zinc-500">
                        A clean application for managing projects, users and activity.
                    </p>
                    <div class="mt-5 flex flex-wrap gap-2">
                        <span
                            class="rounded-full bg-white/[.04] px-2.5 py-1 text-[10px] text-zinc-500">Laravel</span><span
                            class="rounded-full bg-white/[.04] px-2.5 py-1 text-[10px] text-zinc-500">Tailwind
                            CSS</span><span
                            class="rounded-full bg-white/[.04] px-2.5 py-1 text-[10px] text-zinc-500">MySQL</span>
                    </div>
                    <a href="#"
                        class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-zinc-200 hover:text-sky-300">View
                        project <span>↗</span></a>
                </div>
            </article>
            <article class="project-card card group overflow-hidden rounded-3xl reveal">
                <div class="relative aspect-[16/10] overflow-hidden bg-zinc-900">
                    <img src="images/project-03.svg" alt="Courier / Shipping Integration thumbnail"
                        class="project-image h-full w-full object-cover" onerror="this.style.display = 'none'" />
                    <span
                        class="absolute left-4 top-4 rounded-full border border-white/10 bg-black/50 px-3 py-1.5 font-mono text-[10px] text-zinc-300 backdrop-blur">03</span>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between gap-3">
                        <p class="font-mono text-[10px] uppercase tracking-widest text-sky-300">
                            Integration
                        </p>
                        <span class="text-zinc-600">↗</span>
                    </div>
                    <h2 class="mt-3 display text-2xl font-semibold">
                        Courier / Shipping Integration
                    </h2>
                    <p class="mt-2 text-sm leading-6 text-zinc-500">
                        API integration for order creation, labels, tracking and events.
                    </p>
                    <div class="mt-5 flex flex-wrap gap-2">
                        <span class="rounded-full bg-white/[.04] px-2.5 py-1 text-[10px] text-zinc-500">PHP</span><span
                            class="rounded-full bg-white/[.04] px-2.5 py-1 text-[10px] text-zinc-500">REST
                            API</span><span
                            class="rounded-full bg-white/[.04] px-2.5 py-1 text-[10px] text-zinc-500">JSON</span>
                    </div>
                    <a href="#"
                        class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-zinc-200 hover:text-sky-300">View
                        project <span>↗</span></a>
                </div>
            </article>
            <article class="project-card card group overflow-hidden rounded-3xl reveal">
                <div class="relative aspect-[16/10] overflow-hidden bg-zinc-900">
                    <img src="images/project-04.svg" alt="Corporate Website thumbnail"
                        class="project-image h-full w-full object-cover" onerror="this.style.display = 'none'" />
                    <span
                        class="absolute left-4 top-4 rounded-full border border-white/10 bg-black/50 px-3 py-1.5 font-mono text-[10px] text-zinc-300 backdrop-blur">04</span>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between gap-3">
                        <p class="font-mono text-[10px] uppercase tracking-widest text-sky-300">
                            Business Website
                        </p>
                        <span class="text-zinc-600">↗</span>
                    </div>
                    <h2 class="mt-3 display text-2xl font-semibold">
                        Corporate Website
                    </h2>
                    <p class="mt-2 text-sm leading-6 text-zinc-500">
                        Responsive marketing website with a lightweight static
                        architecture.
                    </p>
                    <div class="mt-5 flex flex-wrap gap-2">
                        <span class="rounded-full bg-white/[.04] px-2.5 py-1 text-[10px] text-zinc-500">HTML</span><span
                            class="rounded-full bg-white/[.04] px-2.5 py-1 text-[10px] text-zinc-500">Tailwind
                            CSS</span><span
                            class="rounded-full bg-white/[.04] px-2.5 py-1 text-[10px] text-zinc-500">JavaScript</span>
                    </div>
                    <a href="#"
                        class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-zinc-200 hover:text-sky-300">View
                        project <span>↗</span></a>
                </div>
            </article>
            <article class="project-card card group overflow-hidden rounded-3xl reveal">
                <div class="relative aspect-[16/10] overflow-hidden bg-zinc-900">
                    <img src="images/project-05.svg" alt="Analytics Dashboard thumbnail"
                        class="project-image h-full w-full object-cover" onerror="this.style.display = 'none'" />
                    <span
                        class="absolute left-4 top-4 rounded-full border border-white/10 bg-black/50 px-3 py-1.5 font-mono text-[10px] text-zinc-300 backdrop-blur">05</span>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between gap-3">
                        <p class="font-mono text-[10px] uppercase tracking-widest text-sky-300">
                            Dashboard
                        </p>
                        <span class="text-zinc-600">↗</span>
                    </div>
                    <h2 class="mt-3 display text-2xl font-semibold">
                        Analytics Dashboard
                    </h2>
                    <p class="mt-2 text-sm leading-6 text-zinc-500">
                        Data-heavy dashboard with practical filters and reporting.
                    </p>
                    <div class="mt-5 flex flex-wrap gap-2">
                        <span class="rounded-full bg-white/[.04] px-2.5 py-1 text-[10px] text-zinc-500">PHP</span><span
                            class="rounded-full bg-white/[.04] px-2.5 py-1 text-[10px] text-zinc-500">JavaScript</span><span
                            class="rounded-full bg-white/[.04] px-2.5 py-1 text-[10px] text-zinc-500">MySQL</span>
                    </div>
                    <a href="#"
                        class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-zinc-200 hover:text-sky-300">View
                        project <span>↗</span></a>
                </div>
            </article>
            <article class="project-card card group overflow-hidden rounded-3xl reveal">
                <div class="relative aspect-[16/10] overflow-hidden bg-zinc-900">
                    <img src="images/project-06.svg" alt="Custom Web Solution thumbnail"
                        class="project-image h-full w-full object-cover" onerror="this.style.display = 'none'" />
                    <span
                        class="absolute left-4 top-4 rounded-full border border-white/10 bg-black/50 px-3 py-1.5 font-mono text-[10px] text-zinc-300 backdrop-blur">06</span>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between gap-3">
                        <p class="font-mono text-[10px] uppercase tracking-widest text-sky-300">
                            Freelance
                        </p>
                        <span class="text-zinc-600">↗</span>
                    </div>
                    <h2 class="mt-3 display text-2xl font-semibold">
                        Custom Web Solution
                    </h2>
                    <p class="mt-2 text-sm leading-6 text-zinc-500">
                        A custom web solution tailored around a real business workflow.
                    </p>
                    <div class="mt-5 flex flex-wrap gap-2">
                        <span class="rounded-full bg-white/[.04] px-2.5 py-1 text-[10px] text-zinc-500">PHP</span><span
                            class="rounded-full bg-white/[.04] px-2.5 py-1 text-[10px] text-zinc-500">JavaScript</span><span
                            class="rounded-full bg-white/[.04] px-2.5 py-1 text-[10px] text-zinc-500">MySQL</span>
                    </div>
                    <a href="#"
                        class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-zinc-200 hover:text-sky-300">View
                        project <span>↗</span></a>
                </div>
            </article>
        </div>
    </section>
</main>

<?php require "include/footer.php" ?>