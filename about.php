<!DOCTYPE html>
<html class="dark" lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>À propos | Geoffrey Franz - Développeur Fullstack & Futur Expert IA</title>
    <meta name="description" content="Développeur Fullstack en transition vers l'IA. Découvrez mon parcours entre rigueur algorithmique (C) et conception d'interfaces (React).">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#6211d4',
                        secondary: '#cbd5e1', // Slate-300 pour l'accessibilité
                        'background-dark': '#020617',
                        'accent-cyan': '#22d3ee',
                        'accent-violet': '#7c3aed',
                    },
                    fontFamily: {
                        display: ['Space Grotesk', 'sans-serif'],
                    },
                    animation: {
                        'pulse-slow': 'pulse 8s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1" rel="stylesheet"/>

    <style>
        .bg-grid-pattern {
            background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.05) 1px, transparent 0);
            background-size: 40px 40px;
        }
        .glass-panel {
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .glow-text {
            text-shadow: 0 0 20px rgba(98, 17, 212, 0.3);
        }
    </style>
</head>

<body class="bg-background-dark font-display text-white min-h-screen relative overflow-x-hidden selection:bg-primary/30">

<div class="fixed inset-0 z-0 pointer-events-none overflow-hidden">
    <div class="absolute inset-0 bg-grid-pattern opacity-30"></div>
    <div class="absolute top-[-10%] right-[-5%] w-[600px] h-[600px] bg-primary/10 rounded-full blur-[120px] animate-pulse-slow"></div>
    <div class="absolute bottom-[-10%] left-[-10%] w-[500px] h-[500px] bg-accent-cyan/5 rounded-full blur-[100px]"></div>
</div>

<header class="relative z-50">
    <div class="flex items-center justify-between border-b border-white/5 bg-background-dark/80 backdrop-blur-md px-6 py-4 md:px-10 sticky top-0">
        <a href="index.php" class="flex items-center gap-3 group">
            <div class="size-8 rounded-lg bg-primary/20 flex items-center justify-center border border-primary/30 text-primary group-hover:border-primary/50 transition-colors">
                <span class="material-symbols-outlined text-xl">deployed_code</span>
            </div>
            <span class="text-white text-lg font-bold tracking-tight">Geoffrey Franz</span>
        </a>
        <nav class="hidden md:flex items-center gap-8" aria-label="Navigation principale">
            <a class="text-secondary hover:text-white text-sm font-medium transition-colors" href="project.php">Projets</a>
            <a class="text-white text-sm font-medium relative" href="about.php" aria-current="page">
                À propos
                <span class="absolute -bottom-6 left-0 w-full h-[2px] bg-primary shadow-[0_0_10px_#6211d4]"></span>
            </a>
            <a href="contact.php" class="px-4 py-2 bg-primary/20 hover:bg-primary/40 border border-primary/30 rounded-lg text-sm font-bold transition-all">
                Contact
            </a>
        </nav>
    </div>
</header>

<main class="relative z-10 py-12 px-6 md:px-10 lg:px-20 max-w-7xl mx-auto">
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">

        <figure class="lg:col-span-5 relative group">
            <div class="absolute -inset-2 border border-primary/20 rounded-2xl rotate-1 group-hover:rotate-0 transition-transform duration-500"></div>
            <div class="relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 bg-slate-900">
                <div class="absolute inset-0 bg-cover bg-center" style='background-image: url("profil.png");'></div>
                <div class="absolute inset-0 bg-gradient-to-t from-background-dark via-transparent to-transparent"></div>

                <figcaption class="absolute bottom-0 left-0 right-0 p-6 backdrop-blur-md">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="h-2 w-2 rounded-full bg-accent-cyan animate-pulse"></span>
                        <span class="text-[10px] uppercase tracking-widest text-accent-cyan font-mono">Status: En transition IA</span>
                    </div>
                    <p class="text-xs text-secondary font-mono">LOCALISATION: GRAND EST, FR</p>
                </figcaption>
            </div>
        </figure>

        <article class="lg:col-span-7 space-y-10">
            <div class="space-y-4">
                <h1 class="text-5xl md:text-7xl font-bold tracking-tighter glow-text">
                    L'Ingénierie <br/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent-cyan to-primary">par la Logique.</span>
                </h1>
                <p class="text-xl text-secondary font-light max-w-xl border-l-2 border-primary/50 pl-6">
                    Développeur Fullstack de formation, je construis mon expertise vers l'Intelligence Artificielle en alliant rigueur système et vision produit.
                </p>
            </div>

            <div class="glass-panel p-8 rounded-xl space-y-6 text-secondary leading-relaxed">
                <p>
                    Mon parcours a débuté par la maîtrise des outils du Web. Avec des projets comme mon <strong>équivalence React</strong>, j'ai appris à transformer des concepts visuels en interfaces fonctionnelles, en mettant l'accent sur la clarté du code et l'autonomie de réalisation.
                </p>
                <p>
                    J'ai ensuite choisi de confronter ma pratique à la rigueur du bas-niveau via la <strong>Piscine C</strong>. Cette immersion pédagogique a validé ma capacité à appréhender des notions complexes comme la gestion mémoire et les pointeurs, renforçant ma discipline algorithmique.
                </p>
                <p>
                    Aujourd'hui, je fusionne ces deux mondes. Mon objectif pour 2026 est d'intégrer une équipe experte en <strong>IA / Machine Learning</strong> pour mettre ma logique système et ma culture produit au service de modèles intelligents.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 pt-4">
                <div class="p-4 rounded-lg bg-white/5 border-t-2 border-primary">
                    <h3 class="text-[10px] uppercase font-bold text-primary mb-2">Frontend</h3>
                    <p class="text-xs text-white">React, JS, CSS Premium</p>
                </div>
                <div class="p-4 rounded-lg bg-white/5 border-t-2 border-accent-cyan">
                    <h3 class="text-[10px] uppercase font-bold text-accent-cyan mb-2">Backend</h3>
                    <p class="text-xs text-white">PHP, Symfony, Node.js</p>
                </div>
                <div class="p-4 rounded-lg bg-white/5 border-t-2 border-accent-violet">
                    <h3 class="text-[10px] uppercase font-bold text-accent-violet mb-2">Système</h3>
                    <p class="text-xs text-white">Logique C, Docker, VPS</p>
                </div>
                <div class="p-4 rounded-lg bg-white/5 border-t-2 border-white/20">
                    <h3 class="text-[10px] uppercase font-bold text-white mb-2">AI Labs</h3>
                    <p class="text-xs text-white">NNFS, Python, ML</p>
                </div>
            </div>
        </article>
    </section>
</main>

</body>
</html>