<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Software developer portfolio — projects, experience and contact." />
    <title>Home — Akshay Jagtap</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="cursor-dot"></div>
    <div class="cursor-ring"></div>
    <header class="fixed top-0 left-0 right-0 z-40">
        <div class="border-b">
            <div class="mx-auto flex h-[72px] max-w-7xl items-center justify-between px-5 sm:px-8">
                <a href="index.php" class="display text-xl font-bold tracking-tight">
                  <span class="inline-flex leading-loose"><img src="images/me.png" alt="AJ" class="h-10 w-10 object-cover rounded-full" onerror="this.style.display = 'none'" />
                  &nbsp;&nbsp;Akshay Jagtap<span class="text-sky-300">.</span></span></a>
                <nav class="hidden items-center gap-8 text-lg md:flex">
                    <a class="nav-link" href="index.php">Home</a>
                    <a class="nav-link" href="about.php">About</a>
                    <a class="nav-link" href="portfolio.php">Portfolio</a>
                    <a class="nav-link" href="contact.php">Contact</a>
                </nav>
                <div class="hidden items-center gap-3 md:flex">
                    <a href="resume.pdf" download class="btn-ghost rounded-md px-4 py-2 text-sm font-semibold">Resume<span class="ml-1">↓</span></a>
                    <a href="contact.php" class="btn-primary rounded-md px-5 py-2.5 text-sm font-semibold">Let's talk <span class="ml-1">↗</span></a>
                </div>
                <button data-menu-button aria-expanded="false" class="grid h-10 w-10 place-items-center rounded-md border border-white/10 text-zinc-200 md:hidden" aria-label="Open menu">
                    ☰
                </button>
            </div>
        </div>
        <div data-mobile-menu class="mobile-menu border-b bg-[#0b0d10] md:hidden">
            <nav class="flex flex-col p-3 text-sm text-zinc-300">
                <a data-mobile-link class="rounded-md px-4 py-3 hover:bg-white/5" href="index.php">Home</a>
                <a data-mobile-link class="rounded-md px-4 py-3 hover:bg-white/5" href="about.php">About</a>
                <a data-mobile-link class="rounded-md px-4 py-3 hover:bg-white/5" href="portfolio.php">Portfolio</a>
                <a data-mobile-link class="rounded-md px-4 py-3 hover:bg-white/5" href="contact.php">Contact</a>
                <a data-mobile-link href="resume.pdf" download class="m-2 rounded-md btn-primary px-5 py-3 text-center font-semibold">Download Resume</a>
            </nav>
        </div>
    </header>