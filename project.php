<!DOCTYPE html>
<html class="dark" lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Projets & Apprentissage | Geoffrey Franz - Développeur Fullstack & Futur Expert IA</title>

    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#1d4ed8', // Bleu Royal (FEDE)
                        'neon-cyan': '#06b6d4',
                        'surface-dark': '#0a1128',
                        'background-dark': '#02040a',
                        'border-dark': 'rgba(255,255,255,0.1)'
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="styles/common-projects.min.css">
</head>
<body class="bg-background-dark min-h-screen flex flex-col font-display text-white selection:bg-primary selection:text-white overflow-x-hidden">

<div class="fixed inset-0 pointer-events-none z-0 bg-gradient-to-b from-[#0a1128] via-[#02040a] to-[#02040a]"></div>
<div class="fixed top-20 right-0 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[100px] pointer-events-none z-0"></div>
<div class="fixed bottom-0 left-0 w-[600px] h-[600px] bg-neon-cyan/10 rounded-full blur-[120px] pointer-events-none z-0"></div>

<header class="fixed top-0 left-0 right-0 z-50 backdrop-blur-md bg-background/80 border-b border-white/5">
    <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
        <a href="index.php" class="flex items-center gap-4">
            <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-800 rounded-lg flex items-center justify-center shadow-lg shadow-blue-500/20">
                <span class="font-bold text-white">GF</span>
            </div>
            <span class="font-bold text-lg tracking-tight text-white uppercase">Geoffrey Franz</span>
        </a>
        <nav class="hidden md:flex items-center gap-8">
            <a class="text-gray-300 hover:text-white text-sm font-medium transition-colors" href="index.php">Accueil</a>
            <a class="text-white text-sm font-bold border-b-2 border-primary pb-1" href="project.php">Projets</a>
            <a class="text-gray-300 hover:text-white text-sm font-medium transition-colors" href="about.php">À propos</a>
            <a class="text-gray-300 hover:text-white text-sm font-medium transition-colors" href="contact.php">Contact</a>
        </nav>
    </div>
</header>

<main class="relative z-10 flex-grow flex flex-col items-center w-full">
    <section class="w-full max-w-[1200px] px-6 py-16 md:py-24 flex flex-col items-center text-center">
        <h1 class="text-5xl md:text-7xl font-bold tracking-tighter mb-6 bg-clip-text text-transparent bg-gradient-to-r from-white via-gray-200 to-gray-500">
            Explorer l'Intelligence
        </h1>
        <p class="text-gray-400 text-lg md:text-xl max-w-2xl font-light leading-relaxed mb-10">
            Journal de bord : Projets Fullstack et travaux de spécialisation en IA. Je construis les briques de mon futur expertise.
        </p>
    </section>
    <section class="w-full max-w-[1200px] px-6 mb-16">
        <section class="group relative rounded-2xl bg-[#0a1128]/60 backdrop-blur-xl border border-border-dark overflow-hidden hover:border-primary/50 transition-all duration-500 shadow-xl">
            <div class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-primary/20 rounded-full blur-[80px] pointer-events-none group-hover:bg-primary/30 transition-all duration-500"></div>
            <div class="grid md:grid-cols-2 gap-8 p-8 md:p-12 items-center relative z-10">
                <article class="flex flex-col gap-6 order-2 md:order-1">
                    <div class="flex items-center gap-2 text-neon-cyan font-bold tracking-widest text-xs uppercase">
                        <span class="material-symbols-outlined !text-[16px]">verified</span>
                        Déploiement Vedette
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-white leading-tight">Projets intervenants</h2>
                    <p class="text-gray-400 leading-relaxed">
                        Plateforme de gestion centralisée de la FEDE. Intégration Microsoft Entra ID, SharePoint et orchestration via AWS Lambda/SQS.
                    </p>
                    <ul class="flex flex-wrap gap-2 mb-4">
                        <li class="px-3 py-1 bg-primary/10 rounded text-xs text-blue-300 font-mono">Symfony</li>
                        <li class="px-3 py-1 bg-primary/10 rounded text-xs text-blue-300 font-mono">Entra ID</li>
                        <li class="px-3 py-1 bg-primary/10 rounded text-xs text-blue-300 font-mono">AWS</li>
                    </ul>
                    <a href="project_intervenants.php" class="w-fit flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-lg font-bold hover:bg-primary/90 transition-all shadow-lg hover:shadow-primary/40">
                        <span>Étude de Cas</span>
                        <span class="material-symbols-outlined !text-[18px]">arrow_outward</span>
                    </a>
                </article>
                <figure class="order-1 md:order-2 h-full min-h-[300px] rounded-xl overflow-hidden relative group-hover:shadow-[0_0_30px_rgba(29,78,216,0.2)] transition-all">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#02040a] via-transparent to-transparent z-10"></div>
                    <img alt="Capture FEDE" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700" src="form-step1.png"/>
                </figure>
            </div>
        </section>
    </section>

    <section class="w-full max-w-[1200px] px-6 mb-24">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <article class="group flex flex-col bg-[#0a1128]/40 border border-border-dark rounded-xl overflow-hidden hover:shadow-2xl hover:shadow-primary/10 hover:-translate-y-1 transition-all duration-300">
                <figure class="relative h-48 overflow-hidden bg-background-dark flex items-center justify-center">
                    <div class="absolute inset-0 bg-primary/5 mix-blend-overlay z-10"></div>
                    <span class="material-symbols-outlined !text-[64px] text-white/5 group-hover:text-primary/20
                    transition-all duration-500">
                        neurology
                    </span>
                    <div class="absolute top-3 right-3 z-20">
                        <span class="px-2 py-1 bg-black/60 backdrop-blur border border-white/10 rounded text-[10px] uppercase font-bold tracking-wider text-purple-400">
                            IA / ML
                        </span>
                    </div>
                </figure>
                <div class="flex flex-col flex-1 p-5">
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:text-neon-cyan transition-colors italic">
                        Réseau neuronal
                    </h3>
                    <p class="text-sm text-gray-400 mb-4 flex-1">
                        Implémentation "from scratch" d'un réseau de neurones en Python/NumPy. Focus sur la
                        rétropropagation et l'optimisation mathématique.
                    </p>
                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-white/5">
                        <span class="text-[10px] font-mono text-gray-500 uppercase tracking-widest">
                            Python & NumPy

                        </span>
                        <a class="text-sm font-bold text-white flex items-center gap-1 hover:text-primary transition-all"
                           href="project_nnfs.php">
                            Détails <span class="material-symbols-outlined !text-[16px]">chevron_right</span>
                        </a>
                    </div>
                </div>
            </article>

            <article class="group flex flex-col bg-[#0a1128]/40 border border-border-dark rounded-xl overflow-hidden
            hover:shadow-2xl hover:shadow-primary/10 hover:-translate-y-1 transition-all duration-300">
                <figure class="relative h-48 overflow-hidden bg-background-dark flex items-center justify-center">
                    <div class="absolute inset-0 bg-primary/5 mix-blend-overlay z-10"></div>
                    <span class="material-symbols-outlined !text-[64px] text-white/5 group-hover:text-red-500/20
                    transition-all duration-500">terminal</span>
                    <div class="absolute top-3 right-3 z-20">
                        <span class="px-2 py-1 bg-black/60 backdrop-blur border border-white/10 rounded text-[10px]
                        uppercase font-bold tracking-wider text-red-400">
                            Système / C
                        </span>
                    </div>
                </figure>
                <div class="flex flex-col flex-1 p-5">
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:text-red-400 transition-colors italic
                     uppercase">
                        Immersion Pédagogique
                    </h3>
                    <p class="text-sm text-gray-400 mb-4 flex-1">
                        L'épreuve de la Piscine. Géstions sur la mémoire, les pointeurs et la rigueur algorithmique en
                        Langage C.
                    </p>
                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-white/5">
                        <span class="text-[10px] font-mono text-gray-500 uppercase tracking-widest">
                            C / Résilience
                        </span>
                        <a class="text-sm font-bold text-white flex items-center gap-1 hover:text-red-400 transition-all"
                           href="project_42.php">
                            Détails
                            <span class="material-symbols-outlined !text-[16px]">
                                chevron_right
                            </span>
                        </a>
                    </div>
                </div>
            </article>
            <article class="group flex flex-col bg-[#0a1128]/40 border border-border-dark rounded-xl overflow-hidden
             hover:shadow-2xl hover:shadow-primary/10 hover:-translate-y-1 transition-all duration-300">
                <figure class="relative h-48 overflow-hidden bg-background-dark flex items-center justify-center">
                    <div class="absolute inset-0 bg-primary/5 mix-blend-overlay z-10"></div>
                    <span class="material-symbols-outlined !text-[64px] text-white/5 group-hover:text-neon-cyan/20
                     transition-all duration-500">
                        database</span>
                    <div class="absolute top-3 right-3 z-20">
                        <span class="px-2 py-1 bg-black/60 backdrop-blur border border-white/10 rounded text-[10px]
                        uppercase font-bold tracking-wider text-neon-cyan">
                            Fullstack
                        </span>
                    </div>
                </figure>
                <div class="flex flex-col flex-1 p-5">
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:text-neon-cyan transition-colors italic">
                       Equivalence
                    </h3>
                    <p class="text-sm text-gray-400 mb-4 flex-1">
                        Développement complet d'une application sous <strong>React</strong> en autonomie.
                        Sans backend, l'enjeu était de construire une interface fluide et fidèle aux maquettes
                        en organisant le code de manière propre et modulaire.
                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-white/5">
                        <span class="text-[10px] font-mono text-gray-500 uppercase tracking-widest">PHP 8 / SQL</span>
                        <a class="text-sm font-bold text-white flex items-center gap-1 hover:text-primary transition-all" href="project_equivalence.php">
                            Détails <span class="material-symbols-outlined !text-[16px]">chevron_right</span>
                        </a>
                    </div>
                </div>
            </article>

    </section>
</main>

<footer class="relative z-10 border-t border-border-dark bg-background-dark py-12">
    <div class="max-w-[1200px] mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-6">
        <div class="flex flex-col items-center md:items-start gap-2">
            <h4 class="text-white font-bold text-lg tracking-tight">Geoffrey Franz</h4>
            <p class="text-gray-500 text-sm">© 2026 All Systems Operational.</p>
        </div>
        <div class="flex gap-6">
            <a class="text-gray-400 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">data_object</span></a>
            <a class="text-gray-400 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">account_tree</span></a>
        </div>
    </div>
</footer>

</body>
</html>