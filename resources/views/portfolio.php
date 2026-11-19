<?php
/**
 * Portfolio view (plain PHP, no Blade).
 * Edit the arrays below, then re-render public/portfolio.html with:  php render.php
 */
$logo  = 'https://www.image2url.com/r2/default/images/1795058823421-8b3cac38-0d63-4477-bac8-2bbb61f03a81.png';
$photo = 'https://www.image2url.com/r2/default/images/1795058746289-bf702801-7b5a-417b-8462-4958c7ed582d.jpg';
$site  = 'https://ilhamarten.my.id';
$icon  = fn(string $slug) => "https://cdn.jsdelivr.net/gh/devicons/devicon@v2.16.0/icons/$slug/$slug-original.svg";
$h = fn($s) => htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
// bilingual attributes: first arg = English (shown by default), second = Indonesian
$tr = fn($en, $id) => 'data-en="' . $h($en) . '" data-id="' . $h($id) . '"';

// [name, devicon slug, group]
$techs = [
    ['JavaScript', 'javascript', 'lang'], ['TypeScript', 'typescript', 'lang'], ['Python', 'python', 'lang'],
    ['PHP', 'php', 'lang'], ['Lua / Luau', 'lua', 'lang'], ['Java', 'java', 'lang'],
    ['C#', 'csharp', 'lang'], ['Go', 'go', 'lang'], ['HTML5', 'html5', 'lang'],
    ['CSS3', 'css3', 'lang'], ['MySQL', 'mysql', 'lang'],
    ['Laravel', 'laravel', 'tool'], ['Node.js', 'nodejs', 'tool'], ['React', 'react', 'tool'],
    ['Tailwind CSS', 'tailwindcss', 'tool'], ['Cloudflare', 'cloudflare', 'tool'],
    ['Git', 'git', 'tool'], ['Linux', 'linux', 'tool'],
];
$services = [
    ['01', 'Website Development', 'Pengembangan Website',
     'Fast, responsive websites and web apps built with Laravel, PHP, JavaScript and Cloudflare — from landing pages to full admin panels.',
     'Website dan aplikasi web yang cepat dan responsif dengan Laravel, PHP, JavaScript, dan Cloudflare — dari landing page hingga admin panel lengkap.'],
    ['02', 'Roblox Map Development', 'Pengembangan Map Roblox',
     'Maps and game worlds for Roblox, with careful layout, scripting and optimisation so they run smoothly on every device.',
     'Map dan dunia game untuk Roblox dengan tata letak, scripting, dan optimasi yang matang agar berjalan mulus di semua perangkat.'],
    ['03', 'Luau Executor Development', 'Pengembangan Executor Luau',
     'Luau scripts, loaders and executor tooling for Roblox. Structured, readable and built to be maintained over time.',
     'Script Luau, loader, dan tools executor untuk Roblox. Terstruktur, mudah dibaca, dan dirancang agar mudah dirawat.'],
];
$values = [
    ['Clean code', 'Kode yang rapi', 'Readable, consistent and easy to extend.', 'Mudah dibaca, konsisten, dan mudah dikembangkan.'],
    ['Smooth by default', 'Mulus sejak awal', 'Performance is part of the design, not an afterthought.', 'Performa adalah bagian dari desain, bukan tambahan di akhir.'],
    ['Built to last', 'Dibuat untuk bertahan', 'Simple structures that stay maintainable as projects grow.', 'Struktur sederhana yang tetap mudah dirawat saat proyek berkembang.'],
];
?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="theme-color" content="#0a0910">
<title>Ilham Marten Largetto — Website, Roblox Map &amp; Luau Executor Developer | Forkt Dev</title>
<meta name="description" content="Ilham Marten Largetto (Forkt Dev) is an independent developer from Indonesia — website developer, Roblox map developer and Roblox Luau executor developer. Creator of FORKTHUBX.">
<meta property="og:title" content="Ilham Marten Largetto — Forkt Dev">
<meta property="og:description" content="Website developer, Roblox map developer and Luau executor developer from Indonesia.">
<meta property="og:image" content="<?= $h($photo) ?>">
<meta property="og:type" content="website">
<link rel="icon" href="<?= $h($logo) ?>">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://www.image2url.com" crossorigin>
<link rel="preload" as="image" href="<?= $h($photo) ?>" fetchpriority="high">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/tailwind.css">
<link rel="stylesheet" href="/css/portfolio.css">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Person","name":"Ilham Marten Largetto","alternateName":"Forkt Dev","jobTitle":"Website, Roblox Map & Luau Executor Developer","url":"<?= $site ?>","image":"<?= $photo ?>","email":"ilhamarten07@gmail.com","address":{"@type":"PostalAddress","addressCountry":"ID"},"sameAs":["https://github.com/HamZyy4","https://discord.gg/wCVUTHgsQV"]}</script>
</head>
<body class="font-sans text-white antialiased">
<div id="progress"></div><div class="bg-fx"></div>

<header class="fixed top-0 z-50 w-full px-4 sm:px-8">
<nav id="nav" class="glass frost mx-auto mt-4 flex max-w-7xl items-center justify-between rounded-2xl px-4 py-3 sm:px-5">
<a href="#home" class="flex items-center gap-3" aria-label="Ilham Marten Largetto — Forkt Dev">
<img src="<?= $h($logo) ?>" alt="Forkt Dev logo" width="40" height="40" class="h-10 w-10 rounded-xl object-cover" onerror="this.outerHTML='<span class=&quot;grid h-10 w-10 place-items-center rounded-xl bg-[#54449f] font-display text-sm font-bold&quot;>IML</span>'">
<span class="leading-tight"><b class="block font-display text-sm tracking-tight">Ilham Marten Largetto</b><span class="block font-mono text-[10px] uppercase tracking-[.2em] text-white/40">Forkt Dev</span></span></a>
<div class="hidden items-center gap-8 text-sm font-semibold md:flex">
<a class="nav-link" href="#about" <?= $tr('About', 'Tentang') ?>>About</a>
<a class="nav-link" href="#expertise" <?= $tr('Expertise', 'Keahlian') ?>>Expertise</a>
<a class="nav-link" href="#stack" <?= $tr('Stack', 'Teknologi') ?>>Stack</a>
<a class="nav-link" href="#work" <?= $tr('Project', 'Proyek') ?>>Project</a>
<a class="nav-link" href="#contact" <?= $tr('Contact', 'Kontak') ?>>Contact</a></div>
<div class="flex items-center gap-2 sm:gap-3">
<button class="lang-btn whitespace-nowrap rounded-full border border-white/10 px-3 py-2 font-mono text-[11px] font-semibold text-white/70 transition hover:bg-white/10" aria-label="Switch language"><span class="lang-label">EN · ID</span></button>
<a href="#contact" class="btn btn-primary hidden sm:inline-flex" style="padding:10px 18px;font-size:12px"><span <?= $tr("Let's talk", 'Hubungi saya') ?>>Let's talk</span></a>
<button id="menuToggle" class="rounded-lg border border-white/10 px-3 py-2 text-xs font-semibold md:hidden" aria-label="Open menu" aria-expanded="false">Menu</button></div>
</nav>
<div id="mobileMenu" class="glass frost mx-auto mt-2 hidden max-w-7xl rounded-2xl p-5 md:hidden"><div class="grid gap-4 text-sm font-semibold">
<a href="#about" <?= $tr('About', 'Tentang') ?>>About</a><a href="#expertise" <?= $tr('Expertise', 'Keahlian') ?>>Expertise</a><a href="#stack" <?= $tr('Stack', 'Teknologi') ?>>Stack</a><a href="#work" <?= $tr('Project', 'Proyek') ?>>Project</a><a href="#contact" <?= $tr('Contact', 'Kontak') ?>>Contact</a></div></div>
</header>

<main id="home">
<!-- HERO -->
<section class="hero">
<div class="hero-photo" aria-hidden="true"><img src="<?= $h($photo) ?>" alt="" fetchpriority="high" decoding="async"></div>
<div class="mx-auto flex min-h-screen max-w-7xl flex-col justify-center px-5 pb-20 pt-32 sm:px-8">
<div class="max-w-3xl">
<div class="reveal glass mb-8 inline-flex items-center gap-2 rounded-full px-4 py-2 text-xs font-semibold text-white/70"><i class="relative flex h-2 w-2"><i class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400/70"></i><i class="relative inline-flex h-2 w-2 rounded-full bg-emerald-400"></i></i><span <?= $tr('Open to new projects · Indonesia', 'Terbuka untuk proyek baru · Indonesia') ?>>Open to new projects · Indonesia</span></div>
<p class="reveal mb-5 font-mono text-xs font-semibold uppercase tracking-[.3em] text-[#a79bdc]" style="--d:.05s" <?= $tr("Hello, I'm", 'Halo, saya') ?>>Hello, I'm</p>
<h1 class="reveal wordmark wm-hero" style="--d:.1s" aria-label="Ilham Marten Largetto"><span class="block">Ilham</span><span class="grad-text block">Marten</span><span class="outline-text block">Largetto</span></h1>
<div class="reveal mt-8 flex flex-wrap items-center gap-x-4 gap-y-3" style="--d:.2s"><span class="rounded-lg border border-white/10 bg-white/5 px-3 py-1.5 font-mono text-xs font-semibold tracking-widest text-[#cfc8f0]">FORKT DEV</span><p class="font-display text-xl font-medium text-white/90 sm:text-2xl"><span id="typed" aria-live="off"></span><span class="cursor"></span></p></div>
<p class="reveal mt-6 max-w-xl text-base leading-8 text-white/60 sm:text-lg" style="--d:.28s" <?= $tr(
    'I design and build websites, Roblox maps and Luau executor tools, with a focus on clean code, smooth performance and the small details people actually notice.',
    'Saya merancang dan membangun website, map Roblox, serta tools executor Luau, dengan fokus pada kode yang rapi, performa yang mulus, dan detail kecil yang benar-benar terasa.') ?>>I design and build websites, Roblox maps and Luau executor tools, with a focus on clean code, smooth performance and the small details people actually notice.</p>
<div class="reveal mt-9 flex flex-wrap gap-3" style="--d:.34s"><a href="#work" class="btn btn-primary"><span <?= $tr('See my project', 'Lihat proyek saya') ?>>See my project</span></a><a href="#contact" class="btn btn-ghost"><span <?= $tr('Get in touch', 'Hubungi saya') ?>>Get in touch</span></a></div>
<ul class="reveal mt-14 flex flex-wrap gap-x-8 gap-y-3 border-t border-white/10 pt-6 font-mono text-[11px] uppercase tracking-[.18em] text-white/45" style="--d:.4s"><li <?= $tr('Website Developer', 'Developer Website') ?>>Website Developer</li><li <?= $tr('Roblox Map Developer', 'Developer Map Roblox') ?>>Roblox Map Developer</li><li <?= $tr('Luau Executor Developer', 'Developer Executor Luau') ?>>Luau Executor Developer</li></ul>
</div></div>
</section>

<!-- RUNNING TEXT -->
<section aria-hidden="true" class="overflow-hidden border-y border-white/5 py-10">
<div class="run run-l"><div class="run-track"><?php for ($r = 0; $r < 2; $r++): ?><span class="run-item">Ilham Marten Largetto</span><i class="run-dot"></i><span class="run-item run-out">Forkt Dev</span><i class="run-dot"></i><span class="run-item">Website Developer</span><i class="run-dot"></i><span class="run-item run-out">Roblox Map Developer</span><i class="run-dot"></i><span class="run-item">Luau Executor</span><i class="run-dot"></i><?php endfor; ?></div></div>
<div class="run run-r mt-4"><div class="run-track"><?php for ($r = 0; $r < 2; $r++): foreach (['JavaScript', 'TypeScript', 'Python', 'PHP', 'Luau', 'Go', 'Java', 'C#'] as $i => $w): ?><span class="run-item run-sm<?= $i % 2 ? ' run-out' : '' ?>"><?= $h($w) ?></span><i class="run-dot"></i><?php endforeach; endfor; ?></div></div>
</section>

<!-- ABOUT -->
<section id="about" class="mx-auto max-w-7xl px-5 py-28 sm:px-8"><div class="grid gap-12 lg:grid-cols-[.8fr_1.2fr]">
<div class="reveal"><p class="kicker">01 / <span <?= $tr('About', 'Tentang') ?>>About</span></p>
<h2 class="heading mt-5"><span <?= $tr('The developer behind', 'Developer di balik') ?>>The developer behind</span><br><span class="grad-text">Forkt Dev</span><span class="text-[#b88ad0]">.</span></h2>
<div class="glass mt-10 inline-flex items-center gap-4 rounded-2xl p-4"><img src="<?= $h($logo) ?>" alt="" width="48" height="48" loading="lazy" class="h-12 w-12 rounded-xl object-cover" onerror="this.style.display='none'"><div><p class="text-sm font-bold">Ilham Marten Largetto</p><p class="text-xs text-white/45" <?= $tr('Independent developer · Indonesia', 'Developer independen · Indonesia') ?>>Independent developer · Indonesia</p></div></div></div>
<div class="reveal" style="--d:.1s"><p class="font-display text-2xl font-medium leading-relaxed tracking-tight sm:text-3xl" <?= $tr(
    'I build the things I would want to use: fast websites, well-made Roblox maps and reliable Luau tools.',
    'Saya membangun hal-hal yang ingin saya pakai sendiri: website yang cepat, map Roblox yang digarap serius, dan tools Luau yang andal.') ?>>I build the things I would want to use: fast websites, well-made Roblox maps and reliable Luau tools.</p>
<p class="mt-6 leading-8 text-white/55" <?= $tr(
    "I'm Ilham Marten Largetto, an independent developer from Indonesia working under the name Forkt Dev. My work covers three areas: websites, Roblox maps and Luau executors. Every project starts with a real need and ends with something that is quick, tidy and easy to maintain.",
    'Saya Ilham Marten Largetto, developer independen dari Indonesia yang berkarya dengan nama Forkt Dev. Pekerjaan saya mencakup tiga bidang: website, map Roblox, dan executor Luau. Setiap proyek dimulai dari kebutuhan nyata dan diselesaikan dengan hasil yang cepat, rapi, dan mudah dirawat.') ?>>I'm Ilham Marten Largetto, an independent developer from Indonesia working under the name Forkt Dev. My work covers three areas: websites, Roblox maps and Luau executors. Every project starts with a real need and ends with something that is quick, tidy and easy to maintain.</p>
<div class="mt-10 grid gap-4 sm:grid-cols-3"><?php foreach ($values as $v): ?>
<div class="glass spot rounded-2xl p-6"><b class="block font-display text-lg" <?= $tr($v[0], $v[1]) ?>><?= $h($v[0]) ?></b><p class="mt-2 text-xs leading-6 text-white/45" <?= $tr($v[2], $v[3]) ?>><?= $h($v[2]) ?></p></div>
<?php endforeach; ?></div></div></div></section>

<!-- EXPERTISE -->
<section id="expertise" class="border-y border-white/5 bg-white/[.012] py-28"><div class="mx-auto max-w-7xl px-5 sm:px-8">
<div class="reveal max-w-2xl"><p class="kicker">02 / <span <?= $tr('Expertise', 'Keahlian') ?>>Expertise</span></p><h2 class="heading mt-5"><span <?= $tr('What I', 'Yang saya') ?>>What I</span> <span class="grad-text" <?= $tr('do best', 'kerjakan') ?>>do best</span><span class="text-[#b88ad0]">.</span></h2></div>
<div class="mt-14 grid gap-4 lg:grid-cols-3"><?php foreach ($services as $i => $s): ?>
<article class="reveal glass spot rounded-3xl p-8" style="--d:<?= $i * .08 ?>s"><span class="font-display text-6xl font-bold text-white/[.06]"><?= $s[0] ?></span><h3 class="mt-4 font-display text-xl font-semibold tracking-tight" <?= $tr($s[1], $s[2]) ?>><?= $h($s[1]) ?></h3><p class="mt-3 text-sm leading-7 text-white/50" <?= $tr($s[3], $s[4]) ?>><?= $h($s[3]) ?></p></article>
<?php endforeach; ?></div></div></section>

<!-- STACK -->
<section id="stack" class="mx-auto max-w-7xl px-5 py-28 sm:px-8">
<div class="reveal flex flex-wrap items-end justify-between gap-6"><div><p class="kicker">03 / <span <?= $tr('Toolbox', 'Perangkat') ?>>Toolbox</span></p><h2 class="heading mt-5"><span <?= $tr('Languages &', 'Bahasa &') ?>>Languages &amp;</span><br><span class="grad-text" <?= $tr('tools I rely on', 'tools andalan') ?>>tools I rely on</span><span class="text-[#b88ad0]">.</span></h2></div>
<p class="max-w-sm text-sm leading-7 text-white/50" <?= $tr('A focused set of proven technologies that I use every day to ship reliable work.', 'Kumpulan teknologi pilihan yang terbukti dan saya pakai setiap hari untuk menghasilkan karya yang andal.') ?>>A focused set of proven technologies that I use every day to ship reliable work.</p></div>
<div class="reveal mt-10 flex flex-wrap items-center gap-2" style="--d:.05s" role="tablist">
<button class="filter on" data-cat="all" role="tab" <?= $tr('All', 'Semua') ?>>All</button><button class="filter" data-cat="lang" role="tab" <?= $tr('Languages', 'Bahasa') ?>>Languages</button><button class="filter" data-cat="tool" role="tab" <?= $tr('Frameworks & Tools', 'Framework & Tools') ?>>Frameworks &amp; Tools</button></div>
<div class="mt-8 grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6"><?php foreach ($techs as $t): ?>
<div class="tech-card glass spot flex items-center gap-3 rounded-2xl p-3.5 sm:p-4" data-cat="<?= $t[2] ?>"><div class="ico"><img loading="lazy" decoding="async" src="<?= $h($icon($t[1])) ?>" alt="<?= $h($t[0]) ?> logo" onerror="this.onerror=null;this.replaceWith(document.createTextNode('<?= strtoupper(substr($t[0], 0, 2)) ?>'))"></div><p class="min-w-0 truncate text-sm font-bold"><?= $h($t[0]) ?></p></div>
<?php endforeach; ?></div></section>

<!-- PROJECT -->
<section id="work" class="border-t border-white/5 bg-white/[.012] py-28"><div class="mx-auto max-w-7xl px-5 sm:px-8">
<div class="reveal max-w-2xl"><p class="kicker">04 / <span <?= $tr('Featured project', 'Proyek unggulan') ?>>Featured project</span></p><h2 class="heading mt-5"><span <?= $tr('My flagship', 'Karya utama') ?>>My flagship</span> <span class="grad-text" <?= $tr('platform', 'saya') ?>>platform</span><span class="text-[#b88ad0]">.</span></h2></div>
<a href="<?= $h($site) ?>" target="_blank" rel="noopener noreferrer" class="reveal proj glass spot mt-12 grid overflow-hidden rounded-[2rem] lg:grid-cols-[1.1fr_.9fr]" style="--d:.08s" aria-label="FORKTHUBX — ilhamarten.my.id">
<div class="art relative grid min-h-[300px] place-items-center overflow-hidden p-10"><span class="absolute left-7 top-6 font-mono text-[10px] tracking-widest text-white/45">FORKT DEV · 01</span>
<div class="shot w-full max-w-sm rounded-2xl border border-white/12 bg-[#0d0b18]/90 p-5 shadow-2xl"><div class="mb-4 flex items-center justify-between"><div class="flex gap-1.5"><i class="h-2 w-2 rounded-full bg-white/25"></i><i class="h-2 w-2 rounded-full bg-white/25"></i><i class="h-2 w-2 rounded-full bg-white/25"></i></div><span class="font-mono text-[10px] text-white/35">ilhamarten.my.id</span></div>
<div class="flex items-center gap-3"><img src="<?= $h($logo) ?>" alt="" width="36" height="36" loading="lazy" class="h-9 w-9 rounded-lg object-cover" onerror="this.style.display='none'"><b class="font-display tracking-[.2em]">FORKTHUBX</b></div>
<div class="mt-5 grid grid-cols-2 gap-2"><i class="h-14 rounded-lg bg-white/[.07]"></i><i class="h-14 rounded-lg bg-white/[.07]"></i></div><div class="mt-2 h-9 rounded-lg bg-gradient-to-r from-[#54449f] to-[#7b4a98]"></div></div></div>
<div class="flex flex-col justify-center p-8 sm:p-12"><p class="font-mono text-[11px] uppercase tracking-[.2em] text-[#a79bdc]" <?= $tr('Script hub · Roblox', 'Script hub · Roblox') ?>>Script hub · Roblox</p>
<h3 class="mt-4 font-display text-4xl font-bold tracking-tight">FORKTHUBX</h3>
<p class="mt-4 text-sm leading-7 text-white/55" <?= $tr(
    'A script hub for Roblox players. Browse game scripts as clear cards, copy loadstring code from tidy code boxes, and find a compatible executor from a curated download list. Built to stay fast and easy to use on mobile.',
    'Script hub untuk pemain Roblox. Jelajahi script game lewat kartu yang jelas, salin kode loadstring dari code box yang rapi, dan temukan executor yang cocok dari daftar unduhan pilihan. Dibangun agar tetap cepat dan nyaman di ponsel.') ?>>A script hub for Roblox players. Browse game scripts as clear cards, copy loadstring code from tidy code boxes, and find a compatible executor from a curated download list. Built to stay fast and easy to use on mobile.</p>
<div class="mt-6 flex flex-wrap gap-2"><span class="tag">HTML</span><span class="tag">CSS</span><span class="tag">JavaScript</span><span class="tag">Cloudflare D1</span></div>
<span class="mt-8 inline-flex items-center gap-3 text-sm font-bold"><span <?= $tr('Visit ilhamarten.my.id', 'Kunjungi ilhamarten.my.id') ?>>Visit ilhamarten.my.id</span><span class="arrow grid h-9 w-9 place-items-center rounded-full border border-white/20">↗</span></span></div></a>
</div></section>

<!-- CONTACT -->
<section id="contact" class="mx-auto max-w-7xl px-5 py-28 sm:px-8"><div class="reveal relative overflow-hidden rounded-[2rem] bg-gradient-to-br from-[#2f2468] via-[#3a2360] to-[#171638] p-8 sm:p-14">
<div class="relative grid gap-12 lg:grid-cols-[1.1fr_.9fr]"><div><p class="font-mono text-xs font-semibold uppercase tracking-[.25em] text-white/55">05 / <span <?= $tr('Contact', 'Kontak') ?>>Contact</span></p>
<h2 class="mt-6 font-display text-5xl font-bold leading-[1] tracking-[-.045em] sm:text-7xl"><span <?= $tr('Have a project in mind?', 'Punya proyek di pikiran?') ?>>Have a project in mind?</span><br><span class="text-[#cfc8f0]" <?= $tr("Let's talk", 'Ayo diskusikan') ?>>Let's talk</span><span class="text-[#cfc8f0]">.</span></h2>
<p class="mt-7 max-w-md text-sm leading-7 text-white/70" <?= $tr('Whether it is a website, a Roblox map or a Luau tool, send me a message and I will reply as soon as I can.', 'Entah itu website, map Roblox, atau tools Luau, kirim pesan kepada saya dan akan saya balas secepatnya.') ?>>Whether it is a website, a Roblox map or a Luau tool, send me a message and I will reply as soon as I can.</p>
<div class="mt-9 flex flex-wrap gap-3"><a href="mailto:ilhamarten07@gmail.com" class="btn bg-white text-[#150f2e]">ilhamarten07@gmail.com</a><button id="copyMail" class="btn border border-white/25 bg-white/10" type="button" <?= $tr('Copy email', 'Salin email') ?>>Copy email</button></div></div>
<div class="flex flex-col justify-end"><a class="contact" href="<?= $h($site) ?>" target="_blank" rel="noopener noreferrer"><b>Website</b><span>ilhamarten.my.id ↗</span></a><a class="contact" href="https://github.com/HamZyy4" target="_blank" rel="noopener noreferrer"><b>GitHub</b><span>github.com/HamZyy4 ↗</span></a><a class="contact" href="https://discord.gg/wCVUTHgsQV" target="_blank" rel="noopener noreferrer"><b>Discord</b><span>Forkt Community ↗</span></a><div class="contact"><b <?= $tr('Based in', 'Berdomisili') ?>>Based in</b><span>Indonesia</span></div></div></div></div></section>
</main>

<footer class="overflow-hidden border-t border-white/10 px-5 pb-8 pt-16 sm:px-8"><div class="mx-auto max-w-7xl">
<p class="wordmark outline-text select-none wm-foot" aria-hidden="true">Ilham Marten Largetto</p>
<div class="mt-10 flex flex-wrap items-center justify-between gap-4 text-xs text-white/45"><p>© <span id="year"></span> <b class="text-white/80">Ilham Marten Largetto</b> · Forkt Dev · <span <?= $tr('All rights reserved.', 'Hak cipta dilindungi.') ?>>All rights reserved.</span></p><div class="flex items-center gap-5"><a class="hover:text-white" href="https://github.com/HamZyy4" target="_blank" rel="noopener noreferrer">GitHub</a><a class="hover:text-white" href="https://discord.gg/wCVUTHgsQV" target="_blank" rel="noopener noreferrer">Discord</a><a href="#home" class="font-bold text-white" <?= $tr('Back to top', 'Ke atas') ?>>Back to top</a></div></div></div></footer>
<script src="/js/portfolio.js" defer></script>
</body></html>
