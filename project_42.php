<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Piscine C – Immersion Système & Algorithmie | Geoffrey Franz</title>

    <meta name="description" content="Analyse de l'immersion intensive en langage C : 25 jours d'algorithmie, gestion mémoire et peer-learning radical." />
    <meta name="author" content="Geoffrey Franz" />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'system-ui', 'sans-serif'] },
                    colors: {
                        background: '#050510',
                        secondary: '#a0a0b0',
                        'card-bg': '#0f0f1a',
                        'accent-blue': '#3b82f6',
                        'accent-cyan': '#06b6d4',
                        'accent-purple': '#8b5cf6',
                    },
                    backgroundImage: {
                        'glow-gradient': 'radial-gradient(circle at center, rgba(56, 189, 248, 0.08) 0%, rgba(5, 5, 16, 0) 70%)',
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background-color: #040815;
            color: #ffffff;
            overflow-x: hidden;
            background-image:
                    radial-gradient(circle at 50% 0%, rgba(56, 189, 248, 0.15) 0%, rgba(4, 8, 21, 0) 50%),
                    linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            background-size: 100% 100%, 40px 40px, 40px 40px;
        }
        .glow-card {
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.3s ease;
        }
        .glow-card:hover {
            border-color: rgba(59, 130, 246, 0.4);
            box-shadow: 0 0 15px rgba(59, 130, 246, 0.15);
            transform: translateY(-2px);
        }
        .workflow-line {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, rgba(6,182,212,0.1) 0%, rgba(6,182,212,0.5) 50%, rgba(6,182,212,0.1) 100%);
            z-index: 0;
            transform: translateY(-50%);
        }
    </style>
</head>

<body class="antialiased font-sans bg-background selection:bg-accent-cyan selection:text-background relative">
<div class="fixed top-0 left-0 w-full h-full pointer-events-none z-0 bg-glow-gradient opacity-60"></div>

<header class="fixed top-0 left-0 right-0 z-50 backdrop-blur-md bg-background/80 border-b border-white/5">
    <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
        <a href="https://geoffreyfranz.fr" class="flex items-center gap-4">
            <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-800 rounded-lg flex items-center justify-center shadow-lg shadow-blue-500/20">
                <span class="font-bold text-white">GF</span>
            </div>
            <span class="font-bold text-lg tracking-tight text-white uppercase">Geoffrey Franz</span>
        </a>
        <nav class="hidden md:flex items-center gap-8">
            <a class="text-gray-300 hover:text-white text-sm font-medium transition-colors" href="index.php">Accueil</a>
            <a class="text-white text-sm font-bold border-b-2 border-primary pb-1" href="project.php">Projets</a>
            <a class="text-gray-300 hover:text-white text-sm font-medium transition-colors"  href="supports.php">Cours</a>
            <a class="text-gray-300 hover:text-white text-sm font-medium transition-colors" href="about.php">À propos</a>
            <a class="text-gray-300 hover:text-white text-sm font-medium transition-colors" href="contact.php">Contact</a>
        </nav>
    </div>
</header>

<main class="relative z-10 pt-32 pb-20 px-6 max-w-7xl mx-auto">
    <header class="text-center mb-20">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 mb-6">
            <span class="w-2 h-2 rounded-full bg-blue-500 shadow-[0_0_8px_rgba(59,130,246,0.6)]"></span>
            <span class="text-xs font-semibold tracking-wider text-secondary uppercase">Expérience : Immersion Système (Langage C)</span>
        </div>
        <h1 class="text-4xl md:text-6xl text-white mb-6 tracking-tight leading-tight font-bold">
            25 Jours de Piscine
            <br />
            <span class="text-accent-blue text-3xl md:text-5xl">Piscine C : Immersion Pédagogique</span>
        </h1>
        <p class="text-lg text-secondary max-w-3xl mx-auto leading-relaxed">
            Plus qu'un concours, une immersion radicale. Zéro cours, zéro professeurs : seulement une documentation brute,
            un terminal et l'intelligence collective. J'ai traversé ce "crash-test" pour forger ma rigueur
            algorithmique et ma <strong>capacité de production soutenue</strong>, validant ainsi une endurance
            indispensable aux projets d'ingénierie complexes.
        </p>
    </header>

    <section class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 mb-24">
        <div class="lg:col-span-5 flex flex-col gap-10">
            <section>
                <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                    <span class="w-1 h-8 bg-accent-blue rounded-full"></span>
                    La Méthodologie
                </h2>
                <p class="text-secondary leading-relaxed">
                    Le système repose sur le <strong>Peer-learning</strong> et la validation automatisée.
                    Chaque concept est une énigme à résoudre en autonomie via la documentation brute durant la semaine,
                    avant d'enchaîner sur le <strong>"Rush" du week-end</strong> : un projet de groupe en format sprint 48h,
                    débutant le samedi à minuit avec une deadline inflexible le <strong>dimanche à 23h42</strong>.
                </p>
            </section>

            <section class="space-y-4">
                <h2 class="text-xs font-bold tracking-[0.2em] text-[#06b6d4] uppercase mb-2">Piliers de l'Épreuve</h2>

                <article class="glow-card bg-[#0f172a] p-5 rounded-xl flex items-start gap-4 group">
                    <div class="w-12 h-12 rounded-lg bg-blue-500/10 flex items-center justify-center shrink-0 border border-blue-500/20 text-accent-cyan">
                        <i class="fa-solid fa-code-merge"></i>
                    </div>
                    <div>
                        <h3 class="text-white font-semibold mb-1 group-hover:text-accent-cyan transition-colors">Économie de la Correction</h3>
                        <p class="text-sm text-[#94a3b8]">Système de points : corriger pour être corrigé. Audit mutuel de code en 15 minutes chrono pour valider la compréhension réelle.</p>
                    </div>
                </article>

                <article class="glow-card bg-[#0f172a] p-5 rounded-xl flex items-start gap-4 group">
                    <div class="w-12 h-12 rounded-lg bg-purple-500/10 flex items-center justify-center shrink-0 border border-purple-500/20 text-accent-purple">
                        <i class="fa-solid fa-microchip"></i>
                    </div>
                    <div>
                        <h3 class="text-white font-semibold mb-1 group-hover:text-accent-purple transition-colors">Gestion Mémoire Bas-Niveau</h3>
                        <p class="text-sm text-[#94a3b8]">Réécriture de la Libft. Allocation dynamique, pointeurs de pointeurs et traque obsessionnelle des leaks mémoire.</p>
                    </div>
                </article>

                <article class="glow-card bg-[#0f172a] p-5 rounded-xl flex items-start gap-4 group">
                    <div class="w-12 h-12 rounded-lg bg-blue-600/10 flex items-center justify-center shrink-0 border border-blue-600/20 text-blue-500">
                        <i class="fa-solid fa-terminal"></i>
                    </div>
                    <div>
                        <h3 class="text-white font-semibold mb-1 group-hover:text-blue-500 transition-colors">La "Moulinette" & Norme</h3>
                        <p class="text-sm text-[#94a3b8]">Zéro tolérance : 25 lignes/fonction, 5 fonctions/fichier, Un espace en trop. Non-respect des normes = Échec de L'exercice.</p>
                    </div>
                </article>
            </section>
        </div>

        <section class="lg:col-span-7">
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-accent-cyan to-accent-purple opacity-20 blur-2xl group-hover:opacity-30 transition duration-1000"></div>
                <figure class="relative rounded-xl overflow-hidden border border-white/10 bg-card-bg shadow-2xl">
                    <div class="h-9 bg-[#1e293b] border-b border-white/5 flex items-center px-4 gap-2">
                        <div class="w-3 h-3 rounded-full bg-[#ef4444]"></div>
                        <div class="w-3 h-3 rounded-full bg-[#eab308]"></div>
                        <div class="w-3 h-3 rounded-full bg-[#22c55e]"></div>
                        <div class="ml-4 px-3 py-1 bg-black/20 rounded text-[10px] text-gray-400 font-mono">piscine.42.fr/projects/c-piscine-shell-01</div>
                    </div>
                    <div class="bg-slate-900 p-6 min-h-[450px] font-mono text-sm">
                        <div class="mb-6 flex gap-3 flex-wrap">
                            <div class="px-3 py-2 bg-black border border-slate-700 rounded text-xs text-green-500 flex items-center gap-2">
                                <i class="fa-solid fa-check-circle"></i> Moulinette: OK [100%]
                            </div>
                            <div class="px-3 py-2 bg-blue-900/30 border border-blue-500/50 rounded text-xs text-blue-400 font-bold tracking-widest uppercase">Points: 4/4</div>
                        </div>

                        <div class="bg-black/40 rounded-lg border border-white/10 overflow-hidden">
                            <div class="p-4 border-b border-white/5 flex justify-between items-center">
                                <span class="text-slate-300">File: ft_split.c</span>
                                <span class="text-[10px] bg-blue-900 text-blue-200 px-2 py-1 rounded">Norminette Check</span>
                            </div>
                            <div class="p-4 space-y-3">
                                <div class="flex flex-col gap-1">
                                    <span class="text-green-400">// Allocation dynamique & split</span>
                                    <span class="text-blue-300">char **ft_split(char *str, char *charset)</span>
                                    <span class="text-gray-500">{</span>
                                    <span class="text-gray-400 pl-4">int i;</span>
                                    <span class="text-gray-400 pl-4">char **res;</span>
                                    <span class="text-gray-400 pl-4">...</span>
                                    <span class="text-gray-500">}</span>
                                </div>
                                <div class="border-t border-white/5 pt-3">
                                    <div class="flex items-center justify-between text-xs mb-2">
                                        <span class="text-slate-500">Peer Correction: "Code propre, logique optimisée."</span>
                                        <span class="text-slate-600">J. Smith</span>
                                    </div>
                                    <div class="h-1 w-full bg-slate-800 rounded-full overflow-hidden">
                                        <div class="h-full bg-accent-blue w-full"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>

            <div class="mt-8 p-6 rounded-xl border border-accent-blue/20 bg-accent-blue/5">
                <div class="flex items-center gap-4">
                    <div class="p-3 bg-accent-blue/10 rounded-full text-accent-blue">
                        <i class="fa-solid fa-bolt-lightning text-xl"></i>
                    </div>
                    <div>
                        <h4 class="text-white font-bold text-sm uppercase tracking-widest">Résilience & Mental</h4>
                        <p class="text-secondary text-sm mt-1">Capacité à maintenir un niveau de focus critique après 15 heures de code et à rebondir après un échec binaire de la machine.</p>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="mt-20 border border-white/10 rounded-2xl bg-[#0a0a14] p-8 md:p-12 relative overflow-hidden">
        <h2 class="text-xl font-bold text-center mb-16 relative z-10 uppercase tracking-widest text-accent-cyan">
            Cycle de Validation "Piscine"
        </h2>
        <div class="relative z-10">
            <div class="hidden md:block workflow-line top-12 left-10 right-10 !w-auto" style="background: linear-gradient(90deg, #06b6d4 0%, #8b5cf6 100%);"></div>
            <ol class="grid grid-cols-1 md:grid-cols-5 gap-8 text-center">
                <li class="flex flex-col items-center gap-4 group">
                    <div class="w-20 h-20 transition-transform group-hover:-translate-y-2">
                        <svg class="w-full h-full drop-shadow-[0_0_15px_rgba(6,182,212,0.4)]" viewBox="0 0 100 100">
                            <path d="M50 20L85 40V75L50 95L15 75V40L50 20Z" fill="#0f172a" stroke="#06b6d4" stroke-width="2"></path>
                            <text fill="white" font-size="24" font-weight="bold" text-anchor="middle" x="50" y="65">1</text>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-white">Production</h3>
                        <p class="text-[10px] text-accent-cyan mt-1">Codage intensif (C)</p>
                    </div>
                </li>
                <li class="flex flex-col items-center gap-4 group">
                    <div class="w-20 h-20 transition-transform group-hover:-translate-y-2">
                        <svg class="w-full h-full drop-shadow-[0_0_15px_rgba(14,165,233,0.4)]" viewBox="0 0 100 100">
                            <path d="M50 20L85 40V75L50 95L15 75V40L50 20Z" fill="#0f172a" stroke="#0ea5e9" stroke-width="2"></path>
                            <text fill="white" font-size="24" font-weight="bold" text-anchor="middle" x="50" y="65">2</text>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-white">Peer-Audit</h3>
                        <p class="text-[10px] text-accent-cyan mt-1">Échange de points</p>
                    </div>
                </li>
                <li class="flex flex-col items-center gap-4 group">
                    <div class="w-20 h-20 transition-transform group-hover:-translate-y-2">
                        <svg class="w-full h-full drop-shadow-[0_0_15px_rgba(59,130,246,0.4)]" viewBox="0 0 100 100">
                            <path d="M50 20L85 40V75L50 95L15 75V40L50 20Z" fill="#0f172a" stroke="#3b82f6" stroke-width="2"></path>
                            <text fill="white" font-size="24" font-weight="bold" text-anchor="middle" x="50" y="65">3</text>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-white">Moulinette</h3>
                        <p class="text-[10px] text-accent-cyan mt-1">Validation Binaire</p>
                    </div>
                </li>
                <li class="flex flex-col items-center gap-4 group">
                    <div class="w-20 h-20 transition-transform group-hover:-translate-y-2">
                        <svg class="w-full h-full drop-shadow-[0_0_15px_rgba(139,92,246,0.4)]" viewBox="0 0 100 100">
                            <path d="M50 20L85 40V75L50 95L15 75V40L50 20Z" fill="#0f172a" stroke="#8b5cf6" stroke-width="2"></path>
                            <text fill="white" font-size="24" font-weight="bold" text-anchor="middle" x="50" y="65">4</text>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-white">Exam (Vendredi)</h3>
                        <p class="text-[10px] text-accent-cyan mt-1">Pénalité exponentielle</p>
                    </div>
                </li>
                <li class="flex flex-col items-center gap-4 group">
                    <div class="w-20 h-20 transition-transform group-hover:-translate-y-2">
                        <svg class="w-full h-full drop-shadow-[0_0_15px_rgba(168,85,247,0.4)]" viewBox="0 0 100 100">
                            <path d="M50 20L85 40V75L50 95L15 75V40L50 20Z" fill="#0f172a" stroke="#a855f7" stroke-width="2"></path>
                            <text fill="white" font-size="24" font-weight="bold" text-anchor="middle" x="50" y="65">5</text>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-white">Progression</h3>
                        <p class="text-[10px] text-accent-cyan mt-1">Chapitre suivant</p>
                    </div>
                </li>
            </ol>
        </div>
    </section>

    <section class="mt-24 mb-24 border-t border-white/5 pt-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            <div class="space-y-8">
                <h2 class="text-2xl font-bold text-white flex items-center gap-3">
                    <i class="fa-solid fa-brain text-accent-cyan"></i>
                    Apprentissage & Rigueur
                </h2>

                <div class="bg-[#0f172a] p-6 rounded-xl border border-white/5 hover:border-accent-cyan/30 transition-colors">
                    <h3 class="text-accent-cyan font-bold mb-3 flex items-center gap-2">
                        <i class="fa-solid fa-book-open text-xs"></i>
                        Auto-pédagogie radicale
                    </h3>
                    <p class="text-sm text-secondary leading-relaxed">
                        Chaque chapitre commence par une feuille blanche. J'ai appris à lire les manuels Unix (man),
                        à expérimenter des <strong>algorithmes de tri (QuickSort, BubbleSort)</strong> et à coder des
                        fonctions de manipulation de chaînes sans aucune bibliothèque standard autorisée.
                    </p>
                </div>

                <div class="bg-[#0f172a] p-6 rounded-xl border border-white/5 hover:border-accent-cyan/30 transition-colors">
                    <h3 class="text-accent-cyan font-bold mb-3 flex items-center gap-2">
                        <i class="fa-solid fa-clock text-xs"></i>
                        Le Facteur Stress (Examens)
                    </h3>
                    <p class="text-sm text-secondary leading-relaxed">
                        Examens hebdomadaires de 4h à 8h en isolation totale. En cas d'erreur de soumission, le temps
                        d'attente avant la validation suivante devient exponentiel (jusqu'à <strong>4h d'attente cumulées</strong> lors de l'examen final).
                        Cela forge une patience et un sang-froid indispensables en production.
                    </p>
                </div>
            </div>

            <div class="space-y-8">
                <h2 class="text-2xl font-bold text-white flex items-center gap-3">
                    <i class="fa-solid fa-shield-virus text-accent-purple"></i>
                    Stratégie & Transition B3
                </h2>

                <div class="bg-[#0f172a] p-6 rounded-xl border border-white/5 hover:border-accent-purple/30 transition-colors">
                    <h3 class="text-accent-purple font-bold mb-3 flex items-center gap-2">
                        <i class="fa-solid fa-arrows-split-up-and-left text-xs"></i>
                        Choix du Modèle : Epitech vs 42
                    </h3>
                    <p class="text-sm text-secondary leading-relaxed">
                        Si 42 est un filtre binaire automatisé, j'ai choisi de capitaliser sur mon expérience à
                        <strong>Epitech</strong>. L'admission sur entretien de motivation m'a permis de valoriser
                        mon passif Fullstack/Cloud pour intégrer directement le <strong>Bachelor 3</strong> et accélérer sur l'IA.
                    </p>
                </div>
                <div class="bg-[#0f172a] p-6 rounded-xl border border-white/5 hover:border-accent-purple/30 transition-colors">
                    <h3 class="text-accent-purple font-bold mb-3 flex items-center gap-2">
                        <i class="fa-solid fa-chart-line text-xs"></i>
                        Vers l'IA & Deep Learning
                    </h3>
                    <p class="text-sm text-secondary leading-relaxed">
                        Cette immersion m'a permis d'aborder des notions que l'on ne voit pas en Web : l'utilisation
                        des <strong>pointeurs</strong> et les principes de l'<strong>allocation mémoire (malloc)</strong>.
                        Même si ces concepts restent complexes à maîtriser, cette première approche m'a sensibilisé à
                        la rigueur nécessaire pour manipuler des données. C'est cette curiosité pour "ce qui se passe
                        sous le capot" qui me pousse aujourd'hui vers l'IA.
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-12 p-6 rounded-xl bg-gradient-to-r from-blue-600/10 to-purple-600/10 border border-white/10 text-center">
            <p class="text-sm text-secondary italic">
                "La piscine m'a appris que l'intelligence ne vaut rien sans la discipline du code propre et la persévérance face à la machine."
            </p>
        </div>
    </section>
</main>
<footer class="border-t border-white/5 py-10 text-center">
    <p class="text-secondary text-sm">Geoffrey Franz &copy; 2026 — Rigueur Système & Expertise IA.</p>
</footer>
</body>
</html>