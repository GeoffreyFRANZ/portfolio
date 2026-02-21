<!DOCTYPE html>
<html class="dark" lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="description" content="Portfolio de Geoffrey Franz, développeur Fullstack en recherche d'alternance en IA avec Epitech. Découvrez mes projets et mon parcours.">
    <meta name="keywords" content="Geoffrey Franz, Développeur Fullstack, IA, Intelligence Artificielle, Epitech, Alternance IA, React, Portfolio">

    <title>Geoffrey Franz - Développeur Fullstack</title>
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://geoffreyfranz.fr/">
    <meta property="og:title" content="Geoffrey Franz - Développeur Fullstack & IA (Alternance Epitech)">
    <meta property="og:description" content="Développeur Fullstack passionné par l'IA, en quête d'une alternance avec Epitech. Explorez mon univers technologique.">
    <meta property="og:image" content="https://geoffreyfranz.fr/og-image.jpg">

    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script src="js/index-config.js"></script>
    <link rel="stylesheet" href="styles/index.min.css">
</head>
<body class="bg-background-dark min-h-screen flex flex-col font-display text-white selection:bg-primary selection:text-white overflow-x-hidden">
<div class="relative flex min-h-screen w-full flex-col overflow-hidden">
    <div class="fixed inset-0 z-0 pointer-events-none">
        <div class="absolute inset-0 bg-gradient-to-b from-[#0a1128] via-[#02040a] to-[#02040a]"></div>
        <div class="absolute top-[-10%] left-[20%] w-[500px] h-[500px] bg-cyan-500/15 rounded-full blur-[120px] mix-blend-screen opacity-60"></div>
        <div class="absolute bottom-[-10%] right-[-5%] w-[600px] h-[600px] bg-blue-600/15 rounded-full blur-[100px] mix-blend-screen opacity-50"></div>
        <div class="absolute top-[40%] left-[-10%] w-[400px] h-[400px] bg-blue-900/10 rounded-full blur-[100px] mix-blend-screen"></div>
        <div class="absolute inset-0 opacity-20 mix-blend-overlay bg-[url('https://placeholder.pics/svg/1920x1080/000000/FFFFFF')] bg-cover"></div>
    </div>

    <div class="relative z-10 flex h-full grow flex-col">
        <header class="flex items-center justify-between whitespace-nowrap px-6 py-6 lg:px-12 w-full max-w-[1440px] mx-auto">
            <a href="index.php" class="flex items-center gap-3 group" aria-label="Accueil Geoffrey Franz Systems">
                <div class="flex items-center justify-center size-8 rounded-lg bg-white/5 border border-white/10 shadow-[0_0_15px_rgba(29,78,216,0.3)] group-hover:border-neon-cyan/50 transition-colors">
                    <span class="material-symbols-outlined text-white text-lg" aria-hidden="true">all_inclusive</span>
                </div>
                <span class="text-white text-lg font-bold tracking-wider">GF_SYSTEMS</span>
            </a>
            <div class="hidden md:flex flex-1 justify-end gap-8 items-center">
                <nav class="flex items-center gap-8 bg-white/5 backdrop-blur-md px-6 py-2 rounded-full border border-white/10" aria-label="Navigation principale">
                    <a class="text-white/70 hover:text-white hover:shadow-[0_0_10px_rgba(255,255,255,0.3)] transition-all text-sm font-medium" href="project.php">Projets</a>
                    <a class="text-white/70 hover:text-white hover:shadow-[0_0_10px_rgba(255,255,255,0.3)] transition-all text-sm font-medium" href="supports.php">Cours</a>
                    <a class="text-white/70 hover:text-white hover:shadow-[0_0_10px_rgba(255,255,255,0.3)] transition-all text-sm font-medium" href="about.php">À propos</a>
                    <a class="text-white/70 hover:text-white hover:shadow-[0_0_10px_rgba(255,255,255,0.3)] transition-all text-sm font-medium" href="contact.php">Contact</a>
                </nav>
                <a href="cv.pdf" class="relative group overflow-hidden rounded-lg bg-primary-blue/90 px-5 py-2 transition-all hover:bg-primary-blue hover:shadow-[0_0_20px_rgba(29,78,216,0.6)] inline-block">
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700"></div>
                    <span class="relative text-white text-sm font-bold tracking-wide">CV_V2.0</span>
                </a>
            </div>
            <div class="md:hidden">
                <button class="text-white p-2" aria-label="Ouvrir le menu">
                    <span class="material-symbols-outlined" aria-hidden="true">menu</span>
                </button>
            </div>
        </header>
        <main class="flex flex-1 flex-col items-center justify-center px-4 md:px-10 py-12 relative w-full max-w-[1440px] mx-auto">
            <section id="work" class="layout-content-container flex flex-col max-w-[960px] items-center text-center gap-8 relative">
                <div class="animate-float" style="animation-duration: 5s;">
                    <div class="inline-flex items-center gap-x-2 rounded-full bg-white/5 backdrop-blur-md pl-2 pr-4 py-1.5 border border-neon-cyan/20 shadow-[0_0_15px_rgba(6,182,212,0.1)]">
                        <span class="relative flex h-2.5 w-2.5">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-neon-cyan opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-neon-cyan"></span>
                        </span>
                        <p class="text-white text-xs font-medium tracking-wide uppercase">Recherche d'Alternance IA avec Epitech</p>
                    </div>
                </div>
                <div class="flex flex-col gap-4 relative z-10">
                    <h1 class="text-white text-5xl md:text-7xl lg:text-8xl font-bold leading-[0.9] tracking-tighter drop-shadow-2xl">
                        <span class="bg-clip-text text-transparent bg-gradient-to-b from-white via-gray-200 to-gray-500">GEOFFREY</span><br>
                        <span class="bg-clip-text text-transparent bg-gradient-to-b from-white via-gray-300 to-gray-600">FRANZ</span>
                    </h1>
                    <hr class="h-[1px] w-32 bg-gradient-to-r from-transparent via-primary-blue to-transparent mx-auto my-2" aria-hidden="true">
                    <p class="text-xl md:text-2xl font-light tracking-widest text-gray-300">
                        DÉVELOPPEUR <span class="text-primary-blue font-medium">FULLSTACK</span> &amp; ASPIRANT <span class="text-neon-cyan font-medium">EXPERT IA</span>
                    </p>
                    <p class="mt-4 text-gray-400 max-w-lg mx-auto text-base md:text-lg font-body leading-relaxed">
                        Développeur Fullstack confirmé, je me spécialise aujourd'hui dans l'Intelligence Artificielle. En recherche d'une alternance avec Epitech pour fusionner ingénierie logicielle et modèles neuronaux.
                    </p>
                </div>

                <nav class="flex flex-wrap gap-4 justify-center mt-6" aria-label="Actions rapides">
                    <a href="project.php" class="flex min-w-[160px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-primary-blue text-white text-base font-bold shadow-[0_0_20px_rgba(29,78,216,0.4)] hover:shadow-[0_0_30px_rgba(29,78,216,0.6)] hover:-translate-y-0.5 transition-all duration-300 border border-white/10">
                        <span class="mr-2 material-symbols-outlined text-sm" aria-hidden="true">rocket_launch</span>
                        <span>Voir mes projets</span>
                    </a>
                    <a href="contact.php" class="flex min-w-[160px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-white/5 backdrop-blur-md text-white text-base font-bold border border-white/10 hover:bg-white/10 hover:border-neon-cyan/50 transition-all duration-300 group">
                        <span class="truncate">Me contacter</span>
                        <span class="ml-2 material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform" aria-hidden="true">arrow_forward</span>
                    </a>
                </nav>

                <div class="mt-16 w-full">
                    <ul class="flex flex-wrap justify-center gap-4 md:gap-8 opacity-80 hover:opacity-100 transition-opacity">
                        <li class="flex flex-col items-center gap-2 group cursor-default" title="Architecture de Code">
                            <div class="rounded-full bg-white/5 p-3 border border-white/5 group-hover:border-primary-blue/50 group-hover:shadow-[0_0_15px_rgba(29,78,216,0.3)] transition-all duration-300">
                                <span class="material-symbols-outlined text-gray-400 group-hover:text-white" style="font-size: 24px;">code</span>
                            </div>
                            <span class="text-[10px] uppercase tracking-widest text-gray-500 font-bold group-hover:text-primary-blue transition-colors">Code</span>
                        </li>
                        <li class="flex flex-col items-center gap-2 group cursor-default" title="Intelligence Artificielle">
                            <div class="rounded-full bg-white/5 p-3 border border-white/5 group-hover:border-neon-cyan/50 group-hover:shadow-[0_0_15px_rgba(6,182,212,0.3)] transition-all duration-300">
                                <span class="material-symbols-outlined text-gray-400 group-hover:text-white" style="font-size: 24px;">neurology</span>
                            </div>
                            <span class="text-[10px] uppercase tracking-widest text-gray-500 font-bold group-hover:text-neon-cyan transition-colors">AI/ML</span>
                        </li>
                        <li class="flex flex-col items-center gap-2 group cursor-default" title="DevOps & Infrastructure">
                            <div class="rounded-full bg-white/5 p-3 border border-white/5 group-hover:border-white/50 group-hover:shadow-[0_0_15px_rgba(255,255,255,0.2)] transition-all duration-300">
                                <span class="material-symbols-outlined text-gray-400 group-hover:text-white" style="font-size: 24px;">terminal</span>
                            </div>
                            <span class="text-[10px] uppercase tracking-widest text-gray-500 font-bold group-hover:text-white transition-colors">DevOps</span>
                        </li>
                    </ul>
                </div>
            </section>
        </main>

        <footer class="absolute bottom-6 left-0 right-0 px-6 flex justify-between items-end pointer-events-none opacity-20 hover:opacity-100 transition-opacity">
            <address class="text-[10px] text-white font-mono hidden md:block not-italic">
                COORDS: 45.92° N, 12.34° E <br/>
                SECURE_CONNECTION: TRUE
            </address>
            <div class="text-[10px] text-white font-mono hidden md:block text-right">
                VERSION 3.0.1 <br/>
                <time datetime="2026-01-10">LAST_UPDATE: 2026-01-10</time>
            </div>
        </footer>
    </div>
</div>
</body>
</html>