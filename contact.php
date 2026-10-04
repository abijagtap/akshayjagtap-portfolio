<?php require "include/header.php" ?>

<main>
    <section class="page-hero relative overflow-hidden border-b border-white/10">
        <div class="absolute hero-orb left-1/2 top-10 -translate-x-1/2"></div>
        <div class="relative mx-auto w-full max-w-7xl px-5 pt-20 sm:px-8">
            <p class="reveal font-mono text-xs uppercase tracking-widest text-sky-300">
                Contact
            </p>
            <h1 class="reveal delay-1 display mt-4 max-w-4xl text-5xl font-semibold tracking-[-.04em] sm:text-7xl">
                Have an idea? <span class="gradient-text">Let's talk.</span>
            </h1>
        </div>
    </section>

    <section class="mx-auto grid max-w-7xl gap-12 px-5 py-24 sm:px-8 lg:grid-cols-[.75fr_1.25fr] lg:py-32">
        <div>
            <div class="reveal">
                <p class="font-mono text-xs uppercase tracking-widest text-sky-300">
                    Get in touch
                </p>
                <h2 class="display mt-3 text-3xl font-semibold">
                    Tell me what you're building.
                </h2>
                <p class="mt-5 text-sm leading-7 text-zinc-500">
                    Have a project in mind, a position to fill, or just want to say hello? Drop me a line! I’m always open to discussing new opportunities, creative ideas, or partnerships.
                </p>
            </div>
            <div class="mt-9 space-y-3">
                <a href="mailto:jagtapabhay82@gmail.com"
                    class="reveal card block rounded-2xl p-5 transition hover:border-sky-300/30">
                    <p class="font-mono text-[10px] uppercase tracking-widest text-zinc-600">
                        Email
                    </p>
                    <p class="mt-2 text-sm text-zinc-300">jagtapabhay82@gmail.com</p>
                </a>
                <div class="reveal delay-1 card block rounded-2xl p-5 transition hover:border-sky-300/30">
                  <p class="font-mono text-[10px] uppercase tracking-widest text-zinc-600">
                      Phone
                  </p>
                  <p class="mt-2 text-sm text-zinc-300 flex flex-wrap items-center">
                      <a href="tel:+918275587326" class="hover:text-sky-400 transition">+91 82755 87326</a>
                      <span class="text-zinc-400 px-2">/</span>
                      <a href="tel:+917769060068" class="hover:text-sky-400 transition">+91 77690 60068</a>
                  </p>
              </div>

                <div class="reveal delay-2 card rounded-2xl p-5">
                    <p class="font-mono text-[10px] uppercase tracking-widest text-zinc-600">
                        Location
                    </p>
                    <p class="mt-2 text-sm text-zinc-300">Thane, India</p>
                </div>
                <div class="reveal delay-3 mt-8">
                  <a href="resume.pdf" download class="btn-primary inline-flex rounded-full px-6 py-3.5 text-sm font-semibold">Download Resume ↓</a>
              </div>
            </div>
        </div>

        <form class="reveal card rounded-[2rem] p-6 sm:p-8" action="#" method="post">
            <div class="grid gap-5 sm:grid-cols-2">
                <label class="text-sm text-zinc-400">Name<input type="text" name="name" placeholder="Your name"
                        class="mt-2 w-full rounded-xl border border-white/10 bg-white/[.03] px-4 py-3.5 text-sm text-white placeholder:text-zinc-700" /></label>
                <label class="text-sm text-zinc-400">Email<input type="email" name="email" placeholder="you@example.com"
                        class="mt-2 w-full rounded-xl border border-white/10 bg-white/[.03] px-4 py-3.5 text-sm text-white placeholder:text-zinc-700" /></label>
            </div>
            <label class="mt-5 block text-sm text-zinc-400">Subject<input type="text" name="subject"
                    placeholder="What can I help with?"
                    class="mt-2 w-full rounded-xl border border-white/10 bg-white/[.03] px-4 py-3.5 text-sm text-white placeholder:text-zinc-700" /></label>
            <label class="mt-5 block text-sm text-zinc-400">Message<textarea name="message" rows="7"
                    placeholder="Tell me a little about the project..."
                    class="mt-2 w-full resize-none rounded-xl border border-white/10 bg-white/[.03] px-4 py-3.5 text-sm text-white placeholder:text-zinc-700"></textarea>
            </label>
            <button type="submit" class="mt-6 btn-primary rounded-full px-6 py-3.5 text-sm font-semibold">
                Send message <span class="ml-2">↗</span>
            </button>
        </form>
    </section>
</main>

<?php require "include/footer.php" ?>