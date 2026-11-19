<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="theme-color" content="#07060d">
<title>Ilham Marten Largetto — Forkt Dev · Full-stack Developer</title>
<meta name="description" content="Ilham Marten Largetto (Forkt Dev) — full-stack developer from Indonesia. Laravel, PHP, JavaScript, TypeScript, Python, Lua and more.">
<meta property="og:title" content="Ilham Marten Largetto — Forkt Dev">
<meta property="og:description" content="Full-stack developer building web experiences, reliable systems and Roblox creator tools.">
<meta property="og:type" content="website">
<script type="application/ld+json">{"<?php $__contextArgs = [];
if (context()->has($__contextArgs[0])) :
if (isset($value)) { $__contextPrevious[] = $value; }
$value = context()->get($__contextArgs[0]); ?>":"https://schema.org","@type":"Person","name":"Ilham Marten Largetto","alternateName":"Forkt Dev","jobTitle":"Full-stack Developer","email":"ilhamarten07@gmail.com","address":{"@type":"PostalAddress","addressCountry":"ID"},"sameAs":["https://github.com/HamZyy4","https://discord.gg/wCVUTHgsQV"]}</script>
<script src="https://cdn.tailwindcss.com"></script>
<script>tailwind.config={theme:{extend:{fontFamily:{sans:['Inter','sans-serif'],display:['Space Grotesk','sans-serif'],mono:['JetBrains Mono','monospace']}}}}</script>
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo e(asset('css/portfolio.css')); ?>">
</head>
<body class="font-sans text-white antialiased">
<div id="progress"></div><div class="bg-grid"></div><div class="noise"></div>


<header class="fixed top-0 z-50 w-full px-4 sm:px-8">
<nav id="nav" class="glass mx-auto mt-4 flex max-w-7xl items-center justify-between rounded-2xl px-4 py-3 transition-shadow sm:px-5">
<a href="#home" class="flex items-center gap-3" aria-label="Ilham Marten Largetto — home">
<span class="grid h-10 w-10 place-items-center rounded-xl bg-gradient-to-br from-[#6b55c9] to-[#8f4aa6] font-display text-sm font-bold shadow-lg shadow-[#6b55c9]/30">IML</span>
<span class="leading-tight"><b class="block font-display text-sm tracking-tight">Ilham Marten Largetto</b><span class="block font-mono text-[10px] uppercase tracking-[.2em] text-white/40">Forkt Dev</span></span></a>
<div class="hidden items-center gap-8 text-sm font-semibold md:flex">
<a class="nav-link" href="#about" data-en="About" data-id="Tentang">About</a>
<a class="nav-link" href="#stack" data-en="Stack" data-id="Teknologi">Stack</a>
<a class="nav-link" href="#work" data-en="Projects" data-id="Proyek">Projects</a>
<a class="nav-link" href="#process" data-en="Process" data-id="Proses">Process</a>
<a class="nav-link" href="#contact" data-en="Contact" data-id="Kontak">Contact</a></div>
<div class="flex items-center gap-2 sm:gap-3">
<button class="lang-btn rounded-full border border-white/10 px-3 py-2 font-mono text-[11px] font-semibold text-white/70 transition hover:bg-white/10" aria-label="Switch language"><span class="lang-label">EN · ID</span></button>
<a href="#contact" class="btn btn-primary hidden !px-5 !py-2.5 !text-xs sm:inline-flex"><span data-en="Let's talk" data-id="Hubungi saya">Let's talk</span> ↗</a>
<button id="menuToggle" class="rounded-lg border border-white/10 px-3 py-2 md:hidden" aria-label="Open menu" aria-expanded="false">Menu</button></div>
</nav>
<div id="mobileMenu" class="glass mx-auto mt-2 hidden max-w-7xl rounded-2xl p-5 md:hidden"><div class="grid gap-4 text-sm font-semibold">
<a href="#about">About</a><a href="#stack">Stack</a><a href="#work">Projects</a><a href="#process">Process</a><a href="#contact">Contact</a></div></div>
</header>

<main id="home">

<section class="relative mx-auto grid min-h-screen max-w-7xl items-center gap-12 px-5 pb-16 pt-32 sm:px-8 lg:grid-cols-[1.15fr_.85fr] lg:pt-36">
<div class="relative z-10">
<div class="reveal glass mb-8 inline-flex items-center gap-2 rounded-full px-4 py-2 text-xs font-semibold text-white/70"><i class="relative flex h-2 w-2"><i class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-75"></i><i class="relative inline-flex h-2 w-2 rounded-full bg-emerald-400"></i></i><span data-en="Available for projects · Indonesia" data-id="Terbuka untuk proyek · Indonesia">Available for projects · Indonesia</span></div>
<p class="reveal mb-5 font-mono text-xs font-semibold uppercase tracking-[.3em] text-violet-300" style="--d:.05s">Hello, world — I'm</p>
<h1 class="reveal wordmark text-[clamp(4rem,9vw,7.2rem)]" style="--d:.1s" aria-label="Ilham Marten Largetto"><span class="block">Ilham</span><span class="grad-text block">Marten</span><span class="outline-text block">Largetto</span></h1>
<div class="reveal mt-8 flex flex-wrap items-center gap-x-4 gap-y-2" style="--d:.2s"><span class="rounded-lg bg-white/10 px-3 py-1.5 font-mono text-xs font-semibold tracking-widest text-violet-200">@FORKT.DEV</span><p class="font-display text-xl font-medium text-white/85 sm:text-2xl"><span id="typed"></span><span class="cursor"></span></p></div>
<p class="reveal mt-6 max-w-xl text-base leading-8 text-white/55 sm:text-lg" style="--d:.28s" data-en="Building useful web experiences, reliable backend systems and creator tools — in PHP, JavaScript, Lua, Python and a dozen more languages." data-id="Membangun pengalaman web yang berguna, sistem backend yang andal, dan creator tools — dengan PHP, JavaScript, Lua, Python, dan lusinan bahasa lainnya.">Building useful web experiences, reliable backend systems and creator tools — in PHP, JavaScript, Lua, Python and a dozen more languages.</p>
<div class="reveal mt-9 flex flex-wrap gap-3" style="--d:.34s"><a href="#work" class="btn btn-primary"><span data-en="Explore projects" data-id="Lihat proyek">Explore projects</span> ↗</a><a href="#stack" class="btn btn-ghost"><span data-en="View tech stack" data-id="Lihat teknologi">View tech stack</span></a></div>
<div class="reveal mt-14 grid max-w-xl grid-cols-3 gap-4 border-t border-white/10 pt-7" style="--d:.4s">
<div><b class="font-display text-4xl tracking-tight" data-count="20" data-suffix="+">20+</b><p class="mt-1 text-[11px] uppercase tracking-widest text-white/40" data-en="Languages" data-id="Bahasa">Languages</p></div>
<div><b class="font-display text-4xl tracking-tight" data-count="40" data-suffix="+">40+</b><p class="mt-1 text-[11px] uppercase tracking-widest text-white/40" data-en="Technologies" data-id="Teknologi">Technologies</p></div>
<div><b class="font-display text-4xl tracking-tight" data-count="5" data-suffix="">5</b><p class="mt-1 text-[11px] uppercase tracking-widest text-white/40" data-en="Live projects" data-id="Proyek aktif">Live projects</p></div></div>
</div>

<div class="reveal relative z-10 mx-auto w-full max-w-lg" style="--d:.2s">
<div class="absolute -inset-6 -z-10 rounded-[3rem] bg-gradient-to-br from-[#6b55c9]/20 via-[#8f4aa6]/8 to-[#5f9ab5]/12 blur-3xl"></div>
<div class="float rounded-[1.8rem] border border-white/10 bg-[#0d0b18]/90 p-3 shadow-2xl shadow-[#2a1f60]/40 backdrop-blur-xl">
<div class="rounded-[1.3rem] border border-white/5 bg-gradient-to-b from-[#15122a] to-[#0b0916] p-6 sm:p-7">
<div class="mb-7 flex items-center justify-between"><div class="flex gap-1.5"><i class="h-2.5 w-2.5 rounded-full bg-red-400"></i><i class="h-2.5 w-2.5 rounded-full bg-yellow-300"></i><i class="h-2.5 w-2.5 rounded-full bg-green-400"></i></div><span class="font-mono text-[10px] text-white/35">ilham.config.ts</span></div>
<div class="mb-6 flex items-center gap-4"><div class="grid h-16 w-16 place-items-center rounded-2xl bg-gradient-to-br from-[#6b55c9] via-[#8f4aa6] to-[#5f9ab5] font-display text-xl font-bold shadow-lg shadow-[#8f4aa6]/20">IML</div><div><p class="font-display text-lg font-semibold">Ilham Marten Largetto</p><p class="font-mono text-[11px] text-white/40">aka Forkt Dev · Indonesia</p></div></div>
<pre class="overflow-x-auto font-mono text-[11.5px] leading-6 sm:text-xs"><code><span class="text-[#b88ad0]">export const</span> <span class="text-cyan-300">developer</span> <span class="text-white/50">=</span> {
  <span class="text-violet-300">name</span>:    <span class="text-emerald-300">'Ilham Marten Largetto'</span>,
  <span class="text-violet-300">brand</span>:   <span class="text-emerald-300">'Forkt Dev'</span>,
  <span class="text-violet-300">langs</span>:   [<span class="text-emerald-300">'PHP'</span>, <span class="text-emerald-300">'JS'</span>, <span class="text-emerald-300">'TS'</span>,
            <span class="text-emerald-300">'Python'</span>, <span class="text-emerald-300">'Lua'</span>, <span class="text-emerald-300">'Go'</span>, <span class="text-white/40">…</span>],
  <span class="text-violet-300">focus</span>:   <span class="text-emerald-300">'Web · Backend · Tools'</span>,
  <span class="text-violet-300">mindset</span>: <span class="text-emerald-300">'Build. Refine. Repeat.'</span>,
}</code></pre>
<div class="mt-6 flex items-center justify-between border-t border-white/10 pt-4 font-mono text-[10px] text-white/35"><span>STATUS: READY_TO_BUILD</span><span class="text-emerald-400/90">ONLINE</span></div>
</div></div>
<div class="glass float absolute -bottom-6 -left-4 hidden items-center gap-3 rounded-2xl px-4 py-3 sm:flex" style="animation-delay:-2s"><span class="grid h-9 w-9 place-items-center rounded-xl bg-violet-500/20 text-violet-300">&lt;/&gt;</span><div><p class="text-xs font-bold">Clean code</p><p class="text-[10px] text-white/40">maintainable &amp; fast</p></div></div>
<div class="glass float absolute -right-3 -top-5 hidden items-center gap-3 rounded-2xl px-4 py-3 sm:flex" style="animation-delay:-4s"><span class="grid h-9 w-9 place-items-center rounded-xl bg-fuchsia-500/20 font-display text-sm font-bold text-fuchsia-200">F.</span><div><p class="text-xs font-bold">Forkt Dev</p><p class="text-[10px] text-white/40">independent studio</p></div></div>
</div>
</section>

<?php
$techs=[
// [name, devicon, category, tier(3=primary,2=working,1=exploring)]
['PHP','php','lang',3],['JavaScript','javascript','lang',3],['TypeScript','typescript','lang',3],['Python','python','lang',3],
['Lua / Luau','lua','lang',3],['HTML5','html5','lang',3],['CSS3','css3','lang',3],['SQL','mysql','lang',3],
['Java','java','lang',2],['Kotlin','kotlin','lang',2],['C#','csharp','lang',2],['C++','cplusplus','lang',2],
['Go','go','lang',2],['Bash','bash','lang',2],['C','c','lang',1],['Rust','rust','lang',1],
['Dart','dart','lang',1],['Ruby','ruby','lang',1],['Swift','swift','lang',1],
['Laravel','laravel','backend',3],['Node.js','nodejs','backend',3],['Express','express','backend',2],['GraphQL','graphql','backend',1],
['React','react','frontend',3],['Tailwind CSS','tailwindcss','frontend',3],['Sass','sass','frontend',2],['Bootstrap','bootstrap','frontend',2],['Vue.js','vuejs','frontend',1],['Next.js','nextjs','frontend',1],['Flutter','flutter','frontend',1],
['MySQL','mysql','data',3],['SQLite','sqlite','data',2],['PostgreSQL','postgresql','data',2],['MongoDB','mongodb','data',1],['Redis','redis','data',1],['Firebase','firebase','data',1],
['Cloudflare','cloudflare','tools',3],['Git','git','tools',3],['GitHub','github','tools',3],['Linux','linux','tools',2],['Docker','docker','tools',2],['Nginx','nginx','tools',2],['Composer','composer','tools',2],['npm','npm','tools',2],['VS Code','vscode','tools',2],['Figma','figma','tools',1],
];
$cats=['all'=>['All','Semua'],'lang'=>['Languages','Bahasa'],'backend'=>['Backend','Backend'],'frontend'=>['Frontend','Frontend'],'data'=>['Databases','Database'],'tools'=>['Tools & Cloud','Tools & Cloud']];
$ticker=array_slice(array_filter($techs,fn($t)=>$t[2]==='lang'),0,19);
?>


<section aria-label="Languages" class="border-y border-white/5 bg-white/[.02] py-6"><div class="marquee"><div class="marquee-track">
<?php $__currentLoopData = [1,2]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loop2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php $__currentLoopData = $ticker; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><span class="chip" <?php echo $loop2===2 ? 'aria-hidden="true"' : ''; ?>><img loading="lazy" src="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.16.0/icons/<?php echo e($t[1]); ?>/<?php echo e($t[1]); ?>-original.svg" alt="" onerror="this.onerror=null;this.src='https://cdn.jsdelivr.net/gh/devicons/devicon@v2.16.0/icons/<?php echo e($t[1]); ?>/<?php echo e($t[1]); ?>-plain.svg'"><?php echo e($t[0]); ?></span><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div></div></section>



<section aria-hidden="true" class="overflow-hidden border-b border-white/5 py-10">
<div class="run run-l"><div class="run-track"><?php $__currentLoopData = [1,2]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><span class="run-item">Ilham Marten Largetto</span><i class="run-dot"></i><span class="run-item run-out">Forkt Dev</span><i class="run-dot"></i><span class="run-item">Full-stack Developer</span><i class="run-dot"></i><span class="run-item run-out">Laravel · PHP · Lua</span><i class="run-dot"></i><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div></div>
<div class="run run-r mt-4"><div class="run-track"><?php $__currentLoopData = [1,2]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><span class="run-item run-sm">JavaScript</span><i class="run-dot"></i><span class="run-item run-sm run-out">TypeScript</span><i class="run-dot"></i><span class="run-item run-sm">Python</span><i class="run-dot"></i><span class="run-item run-sm run-out">Luau</span><i class="run-dot"></i><span class="run-item run-sm">Go</span><i class="run-dot"></i><span class="run-item run-sm run-out">Rust</span><i class="run-dot"></i><span class="run-item run-sm">Kotlin</span><i class="run-dot"></i><span class="run-item run-sm run-out">C#</span><i class="run-dot"></i><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div></div>
</section>


<section id="about" class="mx-auto max-w-7xl px-5 py-28 sm:px-8"><div class="grid gap-12 lg:grid-cols-[.8fr_1.2fr]">
<div class="reveal"><p class="kicker">01 / <span data-en="The person" data-id="Tentang saya">The person</span></p><h2 class="heading mt-5"><span data-en="Meet" data-id="Kenalan dengan">Meet</span><br><span class="grad-text">Ilham Marten</span><br>Largetto<span class="text-[#b88ad0]">.</span></h2>
<div class="glass mt-10 inline-flex items-center gap-4 rounded-2xl p-4"><span class="grid h-12 w-12 place-items-center rounded-xl bg-gradient-to-br from-[#6b55c9] to-[#8f4aa6] font-display font-bold">F.</span><div><p class="text-sm font-bold">Forkt Dev</p><p class="text-xs text-white/45" data-en="Independent developer brand" data-id="Brand developer independen">Independent developer brand</p></div></div></div>
<div class="reveal" style="--d:.1s"><p class="font-display text-2xl font-medium leading-relaxed tracking-tight sm:text-3xl" data-en="I turn ideas into practical digital products — from clean interfaces to the systems that power them." data-id="Saya mengubah ide menjadi produk digital yang praktis — mulai dari antarmuka yang rapi hingga sistem yang menjalankannya.">I turn ideas into practical digital products — from clean interfaces to the systems that power them.</p>
<p class="mt-6 leading-8 text-white/55" data-en="I'm Ilham Marten Largetto, an independent developer from Indonesia working under the Forkt Dev name. My approach combines thoughtful design, maintainable code and a focus on how people actually use technology — across web apps, backend systems, Roblox creator tools and community platforms." data-id="Saya Ilham Marten Largetto, developer independen dari Indonesia yang berkarya dengan nama Forkt Dev. Pendekatan saya menggabungkan desain yang matang, kode yang mudah dirawat, dan fokus pada cara orang menggunakan teknologi — mulai dari web app, sistem backend, creator tools Roblox, hingga platform komunitas.">I'm Ilham Marten Largetto, an independent developer from Indonesia working under the Forkt Dev name. My approach combines thoughtful design, maintainable code and a focus on how people actually use technology — across web apps, backend systems, Roblox creator tools and community platforms.</p>
<div class="mt-10 grid gap-4 sm:grid-cols-3">
<?php $__currentLoopData = [['01','Curiosity first','Selalu ingin tahu','Exploring new languages and tools keeps my work sharp.','Menjelajahi bahasa dan tools baru menjaga kualitas kerja saya.'],['02','Build with intent','Bangun dengan tujuan','Every feature earns its place by solving a real problem.','Setiap fitur hadir untuk menyelesaikan masalah nyata.'],['03','Always improving','Terus berkembang','Ship, learn, refine — then ship something better.','Rilis, belajar, sempurnakan — lalu rilis yang lebih baik.']]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="glass spot rounded-2xl p-6"><span class="step-n"><?php echo e($v[0]); ?></span><b class="mt-4 block font-display text-lg" data-en="<?php echo e($v[1]); ?>" data-id="<?php echo e($v[2]); ?>"><?php echo e($v[1]); ?></b><p class="mt-2 text-xs leading-6 text-white/45" data-en="<?php echo e($v[3]); ?>" data-id="<?php echo e($v[4]); ?>"><?php echo e($v[3]); ?></p></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div></div></div></section>


<section id="stack" class="relative border-y border-white/5 bg-white/[.015] py-28"><div class="mx-auto max-w-7xl px-5 sm:px-8">
<div class="reveal flex flex-wrap items-end justify-between gap-6"><div><p class="kicker">02 / <span data-en="My toolbox" data-id="Perangkat saya">My toolbox</span></p><h2 class="heading mt-5"><span data-en="Languages &amp;" data-id="Bahasa &amp;">Languages &amp;</span><br><span class="grad-text" data-en="technologies" data-id="teknologi">technologies</span><span class="text-[#b88ad0]">.</span></h2></div>
<p class="max-w-sm text-sm leading-7 text-white/50" data-en="From everyday production languages to ones I'm actively exploring. The bars show how deep I go with each." data-id="Dari bahasa produksi harian hingga yang sedang saya eksplorasi. Bar menunjukkan seberapa dalam saya menguasainya.">From everyday production languages to ones I'm actively exploring. The bars show how deep I go with each.</p></div>

<div class="reveal mt-10 flex flex-wrap items-center gap-2" style="--d:.05s" role="tablist">
<?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><button class="filter <?php echo e($loop->first?'on':''); ?>" data-cat="<?php echo e($k); ?>" role="tab" data-en="<?php echo e($c[0]); ?>" data-id="<?php echo e($c[1]); ?>"><?php echo e($c[0]); ?></button><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<span class="ml-auto font-mono text-xs text-white/40"><b id="count" class="text-white"><?php echo e(count($techs)); ?></b> <span data-en="technologies" data-id="teknologi">technologies</span></span></div>

<div class="mt-8 grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
<?php $__currentLoopData = $techs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="tech-card glass spot group flex items-center gap-3 rounded-2xl p-3.5 sm:gap-4 sm:p-4" data-cat="<?php echo e($t[2]); ?>">
<div class="ico"><img loading="lazy" src="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.16.0/icons/<?php echo e($t[1]); ?>/<?php echo e($t[1]); ?>-original.svg" alt="<?php echo e($t[0]); ?> logo" onerror="if(!this.dataset.f){this.dataset.f=1;this.src='https://cdn.jsdelivr.net/gh/devicons/devicon@v2.16.0/icons/<?php echo e($t[1]); ?>/<?php echo e($t[1]); ?>-plain.svg'}else{this.replaceWith(document.createTextNode('<?php echo e(strtoupper(substr($t[0],0,2))); ?>'))}"></div>
<div class="min-w-0"><p class="truncate text-sm font-bold"><?php echo e($t[0]); ?></p>
<div class="mt-2 flex items-center gap-2"><span class="tier" title="<?php echo e(['','Exploring','Working knowledge','Primary'][$t[3]]); ?>"><?php echo str_repeat('<i class="f"></i>',$t[3]).str_repeat('<i></i>',3-$t[3]); ?></span><span class="text-[10px] text-white/35"><?php echo e(['','Exploring','Working','Primary'][$t[3]]); ?></span></div></div></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div></div></section>


<section id="work" class="mx-auto max-w-7xl px-5 py-28 sm:px-8">
<div class="reveal flex flex-wrap items-end justify-between gap-6"><div><p class="kicker">03 / <span data-en="Selected work" data-id="Karya pilihan">Selected work</span></p><h2 class="heading mt-5"><span data-en="Things I've" data-id="Yang pernah">Things I've</span><br><span class="grad-text" data-en="worked on" data-id="saya kerjakan">worked on</span><span class="text-[#b88ad0]">.</span></h2></div>
<p class="max-w-sm text-sm leading-7 text-white/50" data-en="Projects and experiments built around real use cases and ideas." data-id="Proyek dan eksperimen yang dibangun dari kebutuhan dan ide nyata.">Projects and experiments built around real use cases and ideas.</p></div>

<?php
$projects=[
['01 — CREATOR TOOLKIT','Forkt Studio','A creator-focused workspace for managing Roblox assets, tools and publishing workflows.','Workspace untuk creator yang mengelola aset, tools, dan alur publish Roblox.','art-1',['Laravel','JavaScript','Cloudflare Workers','D1']],
['02 — DIGITAL PLATFORM','FORKTHUBX','A streamlined hub with script cards, executor list and loadstring codeboxes — responsive and fast.','Hub ringkas dengan kartu script, daftar executor, dan codebox loadstring — responsif dan cepat.','art-2',['HTML','CSS','JavaScript','D1']],
['03 — COMMUNITY PLATFORM','GODDOG CIRCLE','A guild community site with member management, team organization and competitive leaderboards.','Situs komunitas guild dengan manajemen member, pengelolaan tim, dan leaderboard kompetitif.','art-3',['Cloudflare Workers','D1','JavaScript']],
['04 — E-COMMERCE','Forkt Store','A top-up storefront with admin panel and WhatsApp checkout for premium apps, Robux and game services.','Toko top-up dengan admin panel dan checkout WhatsApp untuk aplikasi premium, Robux, dan layanan game.','art-4',['JavaScript','Cloudflare','Admin Panel']],
['05 — DEVELOPER TOOL','RBXM / RBXL Importer','A Luau importer that parses Roblox RBXM, RBXL and RBXLX files straight into Studio with a clean branded UI.','Importer Luau yang mem-parse file RBXM, RBXL, dan RBXLX langsung ke Studio dengan UI bermerek yang rapi.','art-5',['Lua','XML','Roblox Studio']],
];
?>
<div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
<?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i=>$p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<article class="reveal project glass spot flex flex-col overflow-hidden rounded-[1.7rem] <?php echo e($i===0?'lg:col-span-2':''); ?>" style="--d:<?php echo e(($i%3)*.08); ?>s">
<div class="art <?php echo e($p[4]); ?>"><span class="absolute left-6 top-5 font-mono text-[10px] tracking-widest text-white/50"><?php echo e($p[0]); ?></span>
<div class="mock <?php echo e($i%2?'rotate-3':'-rotate-3'); ?> rounded-2xl border border-white/15 bg-[#0d0b18]/90 p-5 shadow-2xl"><div class="mb-4 flex gap-1.5"><i class="h-2 w-2 rounded-full bg-white/25"></i><i class="h-2 w-2 rounded-full bg-white/25"></i><i class="h-2 w-2 rounded-full bg-white/25"></i></div><b class="font-display tracking-wider"><?php echo e(strtoupper($p[1])); ?></b><div class="mt-4 grid grid-cols-3 gap-2"><i class="h-12 w-16 rounded-lg bg-white/10"></i><i class="h-12 w-16 rounded-lg bg-gradient-to-br from-[#6b55c9] to-[#8f4aa6]"></i><i class="h-12 w-16 rounded-lg bg-white/10"></i></div><div class="mt-3 h-2 w-2/3 rounded bg-white/15"></div></div></div>
<div class="flex flex-1 flex-col p-6 sm:p-7"><h3 class="font-display text-2xl font-semibold tracking-tight"><?php echo e($p[1]); ?></h3><p class="mt-3 flex-1 text-sm leading-7 text-white/50" data-en="<?php echo e($p[2]); ?>" data-id="<?php echo e($p[3]); ?>"><?php echo e($p[2]); ?></p><div class="mt-6 flex flex-wrap gap-2"><?php $__currentLoopData = $p[5]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><span class="tag"><?php echo e($tag); ?></span><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div></div></article>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<a href="https://github.com/HamZyy4" target="_blank" rel="noreferrer" class="reveal glass spot group flex flex-col items-start justify-between gap-6 rounded-[1.7rem] border-dashed p-7 transition hover:border-violet-400/50 sm:flex-row sm:items-center md:col-span-2 lg:col-span-3 sm:p-9"><div><h3 class="font-display text-2xl font-semibold" data-en="More on GitHub" data-id="Lainnya di GitHub">More on GitHub</h3><p class="mt-2 text-sm text-white/50" data-en="Open-source experiments and side projects." data-id="Eksperimen open-source dan proyek sampingan.">Open-source experiments and side projects.</p></div><span class="text-4xl transition group-hover:translate-x-2">→</span></a>
</div></section>


<section id="process" class="border-y border-white/5 bg-white/[.015] py-28"><div class="mx-auto max-w-7xl px-5 sm:px-8">
<div class="reveal max-w-2xl"><p class="kicker">04 / <span data-en="How I work" data-id="Cara kerja">How I work</span></p><h2 class="heading mt-5"><span data-en="From idea to" data-id="Dari ide hingga">From idea to</span><br><span class="grad-text" data-en="production" data-id="produksi">production</span><span class="text-[#b88ad0]">.</span></h2></div>
<div class="mt-14 grid gap-4 md:grid-cols-2 lg:grid-cols-4">
<?php $__currentLoopData = [['Discover','Pahami','Understand the goal, the users and the constraints before writing a line.','Memahami tujuan, pengguna, dan batasan sebelum menulis kode.'],['Design','Rancang','Sketch the flow and UI, pick the right stack for the job.','Merancang alur dan UI, memilih stack yang tepat untuk kebutuhan.'],['Build','Bangun','Write clean, tested, maintainable code in small, shippable steps.','Menulis kode bersih dan mudah dirawat dalam langkah kecil yang siap rilis.'],['Ship','Rilis','Deploy, monitor, gather feedback and keep refining.','Deploy, pantau, kumpulkan masukan, dan terus sempurnakan.']]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i=>$s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="reveal glass spot relative rounded-2xl p-7" style="--d:<?php echo e($i*.08); ?>s"><span class="font-display text-6xl font-bold text-white/[.06]">0<?php echo e($i+1); ?></span><b class="mt-3 block font-display text-xl" data-en="<?php echo e($s[0]); ?>" data-id="<?php echo e($s[1]); ?>"><?php echo e($s[0]); ?></b><p class="mt-3 text-sm leading-7 text-white/50" data-en="<?php echo e($s[2]); ?>" data-id="<?php echo e($s[3]); ?>"><?php echo e($s[2]); ?></p></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div></div></section>


<section id="contact" class="mx-auto max-w-7xl px-5 py-28 sm:px-8"><div class="reveal relative overflow-hidden rounded-[2rem] bg-gradient-to-br from-[#3a2a78] via-[#43286c] to-[#1c1a45] p-8 sm:p-14">
<div class="absolute -right-24 -top-24 h-80 w-80 rounded-full bg-white/10 blur-3xl"></div>
<div class="relative grid gap-12 lg:grid-cols-[1.1fr_.9fr]"><div><p class="font-mono text-xs font-semibold uppercase tracking-[.25em] text-white/60">05 / <span data-en="Get in touch" data-id="Hubungi saya">Get in touch</span></p>
<h2 class="mt-6 font-display text-5xl font-bold leading-[.98] tracking-[-.05em] sm:text-7xl"><span data-en="Have an idea?" data-id="Punya ide?">Have an idea?</span><br><span data-en="Let's build it" data-id="Mari wujudkan">Let's build it</span><span class="text-violet-200">.</span></h2>
<p class="mt-7 max-w-md text-sm leading-7 text-white/75" data-en="Have a project in mind, want to collaborate, or just want to say hello? Ilham is one message away." data-id="Punya proyek, ingin berkolaborasi, atau sekadar menyapa? Ilham hanya sebuah pesan jauhnya.">Have a project in mind, want to collaborate, or just want to say hello? Ilham is one message away.</p>
<div class="mt-9 flex flex-wrap gap-3"><a href="mailto:ilhamarten07@gmail.com" class="btn bg-white text-[#150a2b]">ilhamarten07@gmail.com ↗</a><button id="copyMail" class="btn border border-white/30 bg-white/10" type="button">Copy email</button></div></div>
<div class="flex flex-col justify-end"><a class="contact" href="https://github.com/HamZyy4" target="_blank" rel="noreferrer"><b>GitHub</b><span>github.com/HamZyy4 ↗</span></a><a class="contact" href="https://discord.gg/wCVUTHgsQV" target="_blank" rel="noreferrer"><b>Discord</b><span>Forkt Community ↗</span></a><a class="contact" href="mailto:ilhamarten07@gmail.com"><b>Email</b><span>ilhamarten07@gmail.com</span></a><div class="contact"><b data-en="Based in" data-id="Berdomisili">Based in</b><span>Indonesia</span></div></div></div></div></section>
</main>


<footer class="relative overflow-hidden border-t border-white/10 px-5 pb-8 pt-16 sm:px-8"><div class="mx-auto max-w-7xl">
<p class="wordmark outline-text select-none text-[clamp(2.4rem,9.4vw,9rem)]" aria-hidden="true">Ilham Marten Largetto</p>
<div class="mt-10 flex flex-wrap items-center justify-between gap-4 text-xs text-white/45"><p>© <span id="year"></span> <b class="text-white/80">Ilham Marten Largetto</b> · Forkt Dev · <span data-en="All rights reserved." data-id="Hak cipta dilindungi.">All rights reserved.</span></p><div class="flex items-center gap-5"><a class="hover:text-white" href="https://github.com/HamZyy4" target="_blank" rel="noreferrer">GitHub</a><a class="hover:text-white" href="https://discord.gg/wCVUTHgsQV" target="_blank" rel="noreferrer">Discord</a><a href="#home" class="font-bold text-white" data-en="Back to top ↑" data-id="Ke atas ↑">Back to top ↑</a></div></div></div></footer>
<script src="<?php echo e(asset('js/portfolio.js')); ?>"></script>
</body></html>
<?php /**PATH /data/data/com.termux/files/home/forkt-dev-laravel/resources/views/portfolio.blade.php ENDPATH**/ ?>