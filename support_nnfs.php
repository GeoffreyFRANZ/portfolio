<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Technical Documentation - Geoffrey Franz</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#516dfb",
                        "background-light": "#f5f6f8",
                        "background-dark": "#0d0f1a",
                        "cosmic-accent": "#8b5cf6",
                    },
                    fontFamily: {
                        "display": ["Space Grotesk", "sans-serif"],
                        "mono": ["JetBrains Mono", "monospace"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
    <style>
        :root {
            --grid-color: rgba(81, 109, 251, 0.05);
        }
        .cosmic-glow {
            box-shadow: 0 0 15px rgba(81, 109, 251, 0.3);
        }
        .tech-grid {
            background-image: linear-gradient(var(--grid-color) 1px, transparent 1px),
            linear-gradient(90deg, var(--grid-color) 1px, transparent 1px);
            background-size: 40px 40px;
        }
        pre {
            background-color: #161a2e !important;
            border: 1px solid #2d324d;
        }
        .hud-accent {
            position: relative;
        }
        .hud-accent::before {
            content: '';
            position: absolute;
            left: -1rem;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, transparent, #516dfb, transparent);
        }
        .toc-link.active {
            color: #516dfb;
            font-weight: 700;
        }
        .toc-link.active::before {
            content: '';
            position: absolute;
            left: -18px;
            top: 50%;
            transform: translateY(-50%);
            width: 8px;
            height: 8px;
            background-color: #516dfb;
            border-radius: 50%;
            box-shadow: 0 0 12px #516dfb;
            z-index: 10;
        }
        .toc-sidebar {
            scrollbar-width: none;
        }
        .toc-sidebar::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 min-h-screen">
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden tech-grid">
    <header class="fixed top-0 left-0 right-0 z-50 backdrop-blur-md bg-slate-900/80 border-b border-white/5">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="https://geoffreyfranz.fr" class="flex items-center gap-4">
                <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-800 rounded-lg flex items-center justify-center shadow-lg shadow-blue-500/20">
                    <span class="font-bold text-white">GF</span>
                </div>
                <span class="font-bold text-lg tracking-tight text-white uppercase">Geoffrey Franz</span>
            </a>
            <nav class="hidden md:flex items-center gap-8">
                <a class="text-gray-300 hover:text-white text-sm font-medium transition-colors" href="index.php">Accueil</a>
                <a class="text-gray-300 hover:text-white text-sm font-medium transition-colors" href="project.php">Projets</a>
                <a class="text-white text-sm font-bold border-b-2 border-primary pb-1" href="supports.php">Cours</a>
                <a class="text-gray-300 hover:text-white text-sm font-medium transition-colors" href="about.php">À propos</a>
                <a class="text-gray-300 hover:text-white text-sm font-medium transition-colors" href="contact.php">Contact</a>
            </nav>
        </div>
    </header>
    <div class="max-w-[1400px] mx-auto w-full flex gap-16 px-8 relative">
        <aside class="hidden lg:block w-80 shrink-0">
            <nav class="sticky top-28 h-[calc(100vh-160px)] flex flex-col p-8 bg-slate-50/40 dark:bg-[#161a2e]/60 backdrop-blur-xl border-x border-slate-200 dark:border-[#2d324d] overflow-y-auto toc-sidebar">
                <h3 class="font-mono text-[11px] uppercase tracking-[0.3em] text-slate-400 dark:text-[#5a5f7e] mb-8 flex items-center gap-2">
                    <span class="w-2 h-2 bg-primary/40 rounded-full animate-pulse"></span>
                    Table des matières
                </h3>
                <div class="relative">
                    <div class="absolute left-[-15px] top-0 bottom-0 w-px bg-slate-200 dark:bg-[#2d324d]"></div>
                    <ul class="space-y-6 font-mono text-sm tracking-wide">
                        <li>
                            <a class="toc-link active relative flex items-center text-slate-600 dark:text-slate-400 hover:text-primary transition-all duration-300 py-1" href="#strategic-foundations">
                                01. L'IA ?
                            </a>
                        </li>
                        <li>
                            <a class="toc-link relative flex items-center text-slate-600 dark:text-slate-400 hover:text-primary transition-all duration-300 py-1" href="#technical-implementation">
                                02. RÉSEAU NEURONAL
                            </a>
                        </li>
                        <li class="pl-6 relative">
                            <div class="absolute left-[-15px] top-1/2 -translate-y-1/2 w-4 h-px bg-slate-200 dark:bg-[#2d324d]"></div>
                            <a class="toc-link relative flex items-center text-slate-500 dark:text-slate-500 hover:text-primary transition-all duration-300 py-1 opacity-80" href="#technical-implementation-layers">
                                COUCHES
                            </a>
                        </li>
                        <li>
                            <a class="toc-link relative flex items-center text-slate-600 dark:text-slate-400 hover:text-primary transition-all duration-300 py-1" href="#creation-reseau">
                                03. CRÉATION DU RÉSEAU
                            </a>
                        </li>
                        <li class="pl-6 relative">
                            <div class="absolute left-[-15px] top-1/2 -translate-y-1/2 w-4 h-px bg-slate-200 dark:bg-[#2d324d]"></div>
                            <a class="toc-link relative flex items-center text-slate-500 dark:text-slate-500 hover:text-primary transition-all duration-300 py-1 opacity-80" href="#entree-biais-poids">
                                BIAIS & POIDS
                            </a>
                        </li>
                        <li class="pl-6 relative">
                            <div class="absolute left-[-15px] top-1/2 -translate-y-1/2 w-4 h-px bg-slate-200 dark:bg-[#2d324d]"></div>
                            <a class="toc-link relative flex items-center text-slate-500 dark:text-slate-500 hover:text-primary transition-all duration-300 py-1 opacity-80" href="#pratique">
                                PRATIQUE
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="mt-auto pt-10">
                    <div class="p-4 rounded-lg bg-primary/5 border border-primary/10">
                        <div class="flex items-center gap-3 text-[10px] font-mono text-slate-500 dark:text-slate-400 mb-2">
                            <span class="size-2 rounded-full bg-green-500 shadow-[0_0_8px_rgba(34,197,94,0.6)]"></span>
                            SYSTEM STATUS: OPERATIONAL
                        </div>
                        <div class="text-[9px] font-mono text-slate-400 dark:text-slate-600 leading-tight">
                            LATENCY: 12ms<br/>
                            UPTIME: 99.98%
                        </div>
                    </div>
                </div>
            </nav>
        </aside>
        <main class="flex-1 w-full min-w-0 py-16">
            <header class="mb-16 border-b border-slate-200 dark:border-[#1e2235] pb-12">
                <nav class="flex items-center gap-2 mb-8 font-mono text-xs uppercase tracking-widest text-slate-500 dark:text-[#5a5f7e]">
                    <a class="hover:text-primary transition-colors" href="#">Repo</a>
                    <span class="opacity-30">/</span>
                    <a class="hover:text-primary transition-colors" href="#">Architecture</a>
                    <span class="opacity-30">/</span>
                    <span class="text-primary">Technical-Module-04-X</span>
                </nav>
                <h1 class="text-slate-900 dark:text-white text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.1] mb-8 tracking-tight">
                    Réseau neuronal
                </h1>
                <div class="flex flex-wrap items-center gap-8 text-xs font-mono text-slate-500 dark:text-[#9ba0bb] uppercase tracking-wider">
                    <div class="flex items-center gap-2">
                        <span class="text-primary font-bold">DATE:</span>
                        <span>Février 2025</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-primary font-bold">CATÉGORIE:</span>
                        <span>Intelligence artificielle </span>
                    </div>
                </div>
            </header>
            <article class="space-y-12">
                <div class="prose prose-slate dark:prose-invert max-w-none text-lg leading-[1.8] text-slate-700 dark:text-slate-300">
                    <p class="text-xl font-normal text-slate-800 dark:text-slate-200 leading-relaxed italic border-l-2 border-primary/30 pl-6 py-2 mb-12">
                        Résumé : L'article ci-dessous parlera des concepts de l'intelligence artificielle :
                        ce qu'est un réseau neuronal, comment il est construit, comment on crée et gère l'apprentissage.
                    </p>
                    <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-16 mb-8 flex items-center gap-4 scroll-mt-32" id="strategic-foundations">
                        <span class="font-mono text-primary text-sm">01.0</span>
                        L'intelligence artificielle ?
                    </h2>
                    <p class="leading-relaxed text-slate-700 dark:text-slate-300">
                        Si vous ne connaissez pas Alan Turing, je vous invite vivement à découvrir son histoire à travers le film
                        <a class="text-primary hover:underline font-medium"
                           href="https://www.allocine.fr/film/fichefilm_gen_cfilm=198371.html" target="_blank">
                            Imitation Game
                        </a>.
                        Considéré comme le père de l'informatique moderne, Turing a conçu durant la Seconde Guerre
                        mondiale les bases logiques de nos machines actuelles.
                        Quelques années plus tard, il posait cette question fondamentale :
                        <span class="italic font-semibold text-slate-900 dark:text-white">
                            « Une machine est-elle capable de réfléchir ?»
                        </span>
                    </p>

                    <p class="mt-4 leading-relaxed text-slate-700 dark:text-slate-300">
                        Dès 1951, les premières réponses concrètes apparaissent : Christopher Strachey développe un programme permettant de faire jouer un ordinateur aux dames, tandis que Dietrich Prinz conçoit un algorithme capable de résoudre des problèmes d'échecs.
                        Mais qu'en est-il aujourd'hui ? Nos ordinateurs nous répondent, génèrent des images, des vidéos et exécutent des tâches d'une complexité fascinante.
                    </p>

                    <p class="mt-4 leading-relaxed text-slate-700 dark:text-slate-300 font-medium">
                        C’est ce que nous allons explorer ensemble. Je m'appelle <strong>Geoffrey FRANZ</strong>,
                        et j'étudie l'intelligence artificielle au moment même où j'écris ces lignes.
                        Mon objectif est de vulgariser ces concepts pour vous aider à comprendre comment, derrière le
                        code, un programme parvient aujourd'hui à prendre des décisions et à répondre à des besoins
                        de plus en plus exigeants.
                    </p>
                    <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-16 mb-8 flex items-center gap-4 scroll-mt-32" id="technical-implementation">
                        <span class="font-mono text-primary text-sm">02.0</span>
                        Le réseau neuronal
                    </h2>
                    <p class="mt-4 leading-relaxed text-slate-700 dark:text-slate-300 font-medium">
                        Le réseau neuronal est la représentation schématique et mathématique d'un cerveau humain.
                        Bien que le cerveau biologique soit d'une complexité infinie et que nous ne sachions probablement
                        pas encore exactement comment il fonctionne dans sa totalité, les chercheurs en intelligence
                        artificielle s'en inspirent pour bâtir leurs modèles. Le but est de reproduire, via un
                        programme informatique, le mécanisme de raisonnement et de réflexion qu'un humain pourrait
                        avoir après avoir acquis de la connaissance et du savoir.
                        Contrairement à un programme classique qui suit des ordres fixes, le réseau neuronal "apprend"
                        à partir d'exemples pour devenir capable de prendre des décisions de manière autonome face
                        à de nouvelles situations. Ci-dessous, vous pourrez voir la représentation d'un réseau neuronal :
                    </p>
                    <div class="mt-8 flex justify-center bg-slate-50 dark:bg-slate-800/50 rounded-xl p-8 border border-slate-200 dark:border-slate-700">
                        <svg width="500" height="300" viewBox="0 0 500 300" xmlns="http://www.w3.org/2000/svg">
                            <style>
                                .line { stroke: #475569; stroke-width: 1.2; opacity: 0.4; }
                                .node { stroke: #1e293b; stroke-width: 2; }
                            </style>
                            <g id="connections-1">
                                <line x1="80" y1="110" x2="180" y2="60" class="line" />
                                <line x1="80" y1="110" x2="180" y2="110" class="line" />
                                <line x1="80" y1="110" x2="180" y2="160" class="line" />
                                <line x1="80" y1="110" x2="180" y2="210" class="line" />
                                <line x1="80" y1="110" x2="180" y2="260" class="line" />
                                <line x1="80" y1="190" x2="180" y2="60" class="line" />
                                <line x1="80" y1="190" x2="180" y2="110" class="line" />
                                <line x1="80" y1="190" x2="180" y2="160" class="line" />
                                <line x1="80" y1="190" x2="180" y2="210" class="line" />
                                <line x1="80" y1="190" x2="180" y2="260" class="line" />
                            </g>
                            <g id="connections-2">
                                <line x1="180" y1="60" x2="280" y2="60" class="line" />
                                <line x1="180" y1="60" x2="280" y2="110" class="line" />
                                <line x1="180" y1="60" x2="280" y2="160" class="line" />
                                <line x1="180" y1="60" x2="280" y2="210" class="line" />
                                <line x1="180" y1="60" x2="280" y2="260" class="line" />
                                <line x1="180" y1="110" x2="280" y2="60" class="line" />
                                <line x1="180" y1="110" x2="280" y2="110" class="line" />
                                <line x1="180" y1="110" x2="280" y2="160" class="line" />
                                <line x1="180" y1="110" x2="280" y2="210" class="line" />
                                <line x1="180" y1="110" x2="280" y2="260" class="line" />
                                <line x1="180" y1="160" x2="280" y2="60" class="line" />
                                <line x1="180" y1="160" x2="280" y2="110" class="line" />
                                <line x1="180" y1="160" x2="280" y2="160" class="line" />
                                <line x1="180" y1="160" x2="280" y2="210" class="line" />
                                <line x1="180" y1="160" x2="280" y2="260" class="line" />
                                <line x1="180" y1="210" x2="280" y2="60" class="line" />
                                <line x1="180" y1="210" x2="280" y2="110" class="line" />
                                <line x1="180" y1="210" x2="280" y2="160" class="line" />
                                <line x1="180" y1="210" x2="280" y2="210" class="line" />
                                <line x1="180" y1="210" x2="280" y2="260" class="line" />
                                <line x1="180" y1="260" x2="280" y2="60" class="line" />
                                <line x1="180" y1="260" x2="280" y2="110" class="line" />
                                <line x1="180" y1="260" x2="280" y2="160" class="line" />
                                <line x1="180" y1="260" x2="280" y2="210" class="line" />
                                <line x1="180" y1="260" x2="280" y2="260" class="line" />
                            </g>
                            <g id="connections-3">
                                <line x1="280" y1="60" x2="400" y2="150" class="line" />
                                <line x1="280" y1="110" x2="400" y2="150" class="line" />
                                <line x1="280" y1="160" x2="400" y2="150" class="line" />
                                <line x1="280" y1="210" x2="400" y2="150" class="line" />
                                <line x1="280" y1="260" x2="400" y2="150" class="line" />
                            </g>
                            <circle cx="80" cy="110" r="14" fill="#bbf7d0" class="node" />
                            <circle cx="80" cy="190" r="14" fill="#bbf7d0" class="node" />
                            <circle cx="180" cy="60" r="14" fill="#bfdbfe" class="node" />
                            <circle cx="180" cy="110" r="14" fill="#bfdbfe" class="node" />
                            <circle cx="180" cy="160" r="14" fill="#bfdbfe" class="node" />
                            <circle cx="180" cy="210" r="14" fill="#bfdbfe" class="node" />
                            <circle cx="180" cy="260" r="14" fill="#bfdbfe" class="node" />
                            <circle cx="280" cy="60" r="14" fill="#bfdbfe" class="node" />
                            <circle cx="280" cy="110" r="14" fill="#bfdbfe" class="node" />
                            <circle cx="280" cy="160" r="14" fill="#bfdbfe" class="node" />
                            <circle cx="280" cy="210" r="14" fill="#bfdbfe" class="node" />
                            <circle cx="280" cy="260" r="14" fill="#bfdbfe" class="node" />
                            <circle cx="400" cy="150" r="14" fill="#fef08a" class="node" />
                        </svg>
                    </div>
                    <p class="mt-6 leading-relaxed text-slate-700 dark:text-slate-300">
                        Vous verrez souvent, dans différents tutoriels ou supports, que le réseau neuronal est toujours présenté de cette manière.
                        Parfois avec plus de cercles ou plus de colonnes, ou à l'inverse, avec moins de neurones. En réalité, chaque colonne représente
                        une <strong>couche</strong> de neurones.
                    </p>
                    <h3 class="text-2xl font-bold text-slate-700 dark:text-white mt-16 mb-8 flex items-center gap-4 scroll-mt-32"
                        id="technical-implementation-layers">
                        <span class="font-mono text-primary text-sm">02.1</span>
                        Les couches de neurones
                    </h3>
                    <p class="mt-6 leading-relaxed text-slate-700 dark:text-slate-300">
                        Avant de continuer, j'ai mentionné les couches, mais concrètement, c'est quoi ?
                        Imaginez que le réseau neuronal est une usine et que chaque neurone est un ouvrier.
                        Chaque colonne (voir le schéma ci-dessus) représente un atelier :
                    </p>
                    <p class="mt-4 leading-relaxed text-slate-700 dark:text-slate-300">
                        La 1ère colonne est la <strong>couche d'entrée</strong> : elle prend la matière brute et fait
                        une première transformation. La seconde couche, qui est une <strong>couche interne</strong>,
                        prend la pièce transformée pour la retravailler ou l'assembler avec d'autres matières brutes.
                        La 3ème couche sur le schéma est aussi une couche interne, mais au lieu de prendre la matière
                        première de notre couche d'entrée, elle prend la sortie de la seconde couche. Autrement dit,
                        elle travaille les pièces créées par cette dernière pour les transformer encore une fois.
                        Après que la 3ème couche a terminé son travail, on arrive sur la dernière couche, la
                        <strong>couche de sortie</strong>, qui délivre le produit fini.
                    </p>
                    <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-16 mb-8 flex items-center gap-4 scroll-mt-32" id="creation-reseau">
                        <span class="font-mono text-primary text-sm">03.0</span>
                        La création du réseau neuronal
                    </h2>
                    <h3 class="text-2xl font-bold text-slate-700 dark:text-white mt-16 mb-8 flex items-center gap-4 scroll-mt-32" id="notes-importantes">
                        <span class="font-mono text-primary text-sm">03.1</span>
                        À noter
                    </h3>
                    <p class="mt-4 leading-relaxed text-slate-700 dark:text-slate-300">
                        Avant de continuer, sachez que le code utilisé ici provient du tutoriel
                        <a class="text-primary hover:underline font-medium" href="https://github.com/Sentdex/nnfs" target="_blank">NNFS</a>.
                        Si vous souhaitez consulter le livre et le tutoriel complet en anglais, vous pouvez les retrouver sur
                        <a class="text-primary hover:underline font-medium" href="https://nnfs.io/" target="_blank">nnfs.io</a>.
                    </p>
                    <p class="mt-4 leading-relaxed text-slate-700 dark:text-slate-300">
                        Si le code est libre de droit, le contenu pédagogique original appartient à l'auteur.
                        L'article que j'écris ici s'inspire uniquement de ce que j'ai appris et compris de ces concepts ;
                        il est donc normal d'y trouver des similitudes. Le livre sera bien évidemment plus complet :
                        de mon côté, je ne traiterai pas des formules mathématiques complexes.
                        Pour ceux qui recherchent une plus grande profondeur théorique, je vous invite vivement à vous procurer son ouvrage.
                    </p>
                    <h3 class="text-2xl font-bold text-slate-700 dark:text-white mt-16 mb-8 flex items-center gap-4 scroll-mt-32" id="entree-biais-poids">
                        <span class="font-mono text-primary text-sm">03.2</span>
                        L'entrée, le biais et le poids
                    </h3>
                    <p class="mt-4 leading-relaxed text-slate-700 dark:text-slate-300">
                        Comme dans une usine, il y a la matière première qui doit entrer : chez nous, c'est la <strong>donnée</strong> ou l'information.
                        Comme toute information, elle possède une importance plus ou moins grande, que l'on appelle ici un <strong>poids</strong>.
                    </p>

                    <p class="mt-4 leading-relaxed text-slate-700 dark:text-slate-300">
                        Il y a aussi le <strong>biais</strong>. En programmation, si une variable ne contient aucune
                        valeur (zéro ou nulle), la fonction peut tout simplement ne pas s'activer. Dans notre réseau
                        neuronal, cela poserait un problème : nous avons besoin que le neurone puisse transmettre
                        quelque chose malgré tout. Si un neurone ne produit rien en sortie, il faut que le suivant
                        puisse quand même s'activer pour éviter tout blocage de notre chaîne de production. Le biais
                        sert donc de "valeur de base" pour garantir ce flux.
                    </p>
                    <p class="mt-4 leading-relaxed text-slate-700 dark:text-slate-300">
                        Je m'explique : imaginez une usine qui fabrique des voitures. Un client veut l'option climatisation,
                        mais un autre ne la souhaite pas. Il ne faut pas que la construction de la voiture de ce second client
                        soit bloquée chez l'ouvrier chargé d'installer la climatisation. Il doit pouvoir passer la main
                        au suivant (souvenez-vous de mon explication précédente : un neurone est un ouvrier).
                        Le biais permet de s'assurer que le travail continue, même en l'absence de certaines données d'entrée.
                    </p>
                    <p class="mt-4 leading-relaxed text-slate-700 dark:text-slate-300">
                        Le poids c'est quoi ? C'est en réalité l'importance que l'intelligence artificielle va donner
                        à l'information entrée. Pour continuer avec la production de voiture, vous imaginez bien que toutes
                        les pièces qui sont données n'ont pas la même importance pour le fonctionnement de la voiture.
                        Le moteur c'est l'une des pièces les plus importantes pour son fonctionnement et le logo par exemple,
                        qui est mis à l'avant ou à l'arrière, n'a pas du tout d'importance pour le bon fonctionnement
                        de la voiture.
                    </p>
                    <div class="mt-8 flex flex-col items-center bg-slate-900 rounded-xl p-8 border border-slate-800">
                        <span class="text-emerald-400 font-mono text-sm mb-4">LOGIQUE DU BIAIS : Le point de départ</span>
                        <svg width="500" height="300" viewBox="0 0 500 300" xmlns="http://www.w3.org/2000/svg">
                            <g stroke="#334155" stroke-width="1"><line x1="0" y1="250" x2="500" y2="250" /><line x1="50" y1="0" x2="50" y2="300" /></g>

                            <line x1="50" y1="200" x2="450" y2="100" stroke="#10b981" stroke-width="3" stroke-dasharray="5 5">
                                <animate attributeName="y1" values="230;130;230" dur="4s" repeatCount="indefinite" />
                                <animate attributeName="y2" values="130;30;130" dur="4s" repeatCount="indefinite" />
                            </line>

                            <circle cx="50" cy="200" r="6" fill="#10b981">
                                <animate attributeName="cy" values="230;130;230" dur="4s" repeatCount="indefinite" />
                            </circle>

                            <text x="70" y="200" fill="#10b981" font-family="monospace" font-size="12" font-weight="bold">
                                BIAIS
                                <animate attributeName="y" values="235;135;235" dur="4s" repeatCount="indefinite" />
                            </text>
                        </svg>
                        <span>le biais déplace le point de départ.</span>
                    </div>
                    <div class="mt-8 flex flex-col items-center bg-slate-900 rounded-xl p-8 border border-slate-800">
                        <span class="text-amber-400 font-mono text-sm mb-4">LOGIQUE DU POIDS : L'angle d'influence</span>
                        <svg width="500" height="300" viewBox="0 0 500 300" xmlns="http://www.w3.org/2000/svg">
                            <g stroke="#334155" stroke-width="1"><line x1="0" y1="250" x2="500" y2="250" /><line x1="50" y1="0" x2="50" y2="300" /></g>

                            <line x1="250" y1="250" x2="250" y2="50" stroke="#475569" stroke-width="1" stroke-dasharray="2 2" />
                            <circle cx="250" cy="250" r="4" fill="#06b6d4" />

                            <line x1="50" y1="200" x2="450" y2="100" stroke="#f59e0b" stroke-width="3">
                                <animate attributeName="y2" values="200;50;200" dur="4s" repeatCount="indefinite" />
                            </line>

                            <circle cx="250" cy="150" r="6" fill="#3b82f6">
                                <animate attributeName="cy" values="200;125;200" dur="4s" repeatCount="indefinite" />
                            </circle>

                            <text x="265" y="150" fill="#3b82f6" font-family="monospace" font-size="12" font-weight="bold">
                                RÉSULTAT
                                <animate attributeName="y" values="205;130;205" dur="4s" repeatCount="indefinite" />
                            </text>
                        </svg>
                        <span>le poids définis l'angle de la pente, plus le poids est grand plus l'angle le seras</span>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-700 dark:text-white mt-16 mb-8 flex items-center gap-4 scroll-mt-32" id="pratique">
                        <span class="font-mono text-primary text-sm">03.3</span>
                        Un peu de pratique ?
                    </h3>
                    <p class="mt-4 leading-relaxed text-slate-700 dark:text-slate-300">
                        Bien que ce soit des vulgarisations théoriques, voici la pratique. Il faudra donc les bases
                        de la programmation en Python.
                    </p>
                </div>
                <div class="mt-10 overflow-hidden rounded-lg border border-slate-700 bg-[#0d1117] shadow-2xl" style="text-align: left;">
                    <div class="flex items-center justify-between bg-[#161b22] px-4 py-2 border-b border-slate-700">
                        <div class="flex items-center gap-2">
                            <svg style="color: #8b949e;" viewBox="0 0 16 16" width="16" height="16" fill="currentColor">
                                <path d="M4 1.75C4 .784 4.784 0 5.75 0h5.5c.966 0 1.75.784 1.75 1.75v12.5a1.75 1.75 0 0 1-1.75 1.75h-5.5a1.75 1.75 0 0 1-1.75-1.75V1.75Zm1.75-.25a.25.25 0 0 0-.25.25v12.5c0 .138.112.25.25.25h5.5a.25.25 0 0 0 .25-.25V1.75a.25.25 0 0 0-.25-.25h-5.5Z"></path>
                            </svg>
                            <span style="font-family: ui-monospace, monospace; font-size: 12px; color: #c9d1d9;">dense_layer.py</span>
                        </div>
                    </div>

                    <div style="padding: 1.5rem; background-color: #0d1117; overflow-x: auto;">
                        <pre style="margin: 0; font-family: ui-monospace, monospace; font-size: 14px; line-height: 1.6; color: #c9d1d9; white-space: pre;">
                            <code style="font-family: inherit;">
                                <span style="color: #ff7b72;">import</span> numpy <span style="color: #ff7b72;">as</span> np

                                <span style="color: #ff7b72;">class</span> <span style="color: #d2a8ff;">Layer_Dense</span>:
                                    <span style="color: #ff7b72;">def</span> <span style="color: #d2a8ff;">__init__</span>(<span style="color: #ffa657;">self</span>, n_inputs, n_neurons):
                                        <span style="color: #8b949e;"># Initialisation des poids (W) et des biais (b)</span>
                                        <span style="color: #ffa657;">self</span>.weights = <span style="color: #79c0ff;">0.10</span> * np.random.randn(n_inputs, n_neurons)
                                        <span style="color: #ffa657;">self</span>.biases = np.zeros((<span style="color: #79c0ff;">1</span>, n_neurons))
                                    <span style="color: #ff7b72;">def</span> <span style="color: #d2a8ff;">forward</span>(<span style="color: #ffa657;">self</span>, inputs):
                                        <span style="color: #8b949e;"># Stockage des entrées pour la suite</span>
                                        <span style="color: #ffa657;">self</span>.inputs = inputs
                                        <span style="color: #8b949e;"># Calcul de la sortie : Y = (X . W) + b</span>
                                        <span style="color: #ffa657;">self</span>.output = np.dot(inputs,
                                        <span style="color: #ffa657;">self</span>.weights) + <span style="color: #ffa657;">self</span>.biases</code></pre>
                    </div>                </div>
                <div class="mt-8 space-y-6 text-slate-700 dark:text-slate-300">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">
                        Concrètement, on fait quoi là-dedans ?
                    </h3>


                    <p>
                        Ici, nous avons créé une <strong>classe Layer_Dense</strong>. Pour faire court : à chaque fois
                        que nous allons créer une couche (que ce soit notre couche d'entrée, nos couches internes ou
                        notre couche de sortie), nous allons l'appeler.
                    </p>
                    <p>
                        Dans cette classe, on initie deux paramètres essentiels : <code>n_inputs</code> et
                        <code>n_neurons</code>.
                    </p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>
                            <strong>n_inputs :</strong> C'est le nombre d'entrées que l'on va recevoir. Pour reprendre
                            le fonctionnement de l'usine, c'est le nombre de matières premières qui entrent pour être
                            transformées.
                        </li>
                        <li>
                            <strong>n_neurons :</strong> C'est le nombre d'ouvriers qui vont travailler ensemble dans
                            l'atelier.
                        </li>
                    </ul>

                    <p>
                        Si vous voulez aller plus loin, il faudra vous pencher sur ce que sont les
                        <strong>matrices</strong> et les <strong>vecteurs</strong>. Personnellement, comme je veux
                        m'adresser à un public large, je ne vais pas rentrer dans le détail mathématique pur.
                    </p>

                    <p>
                        Dans ce code, le <strong>poids</strong> possède déjà une valeur de base (0,1) qui est multipliée
                        par un chiffre pris au hasard. Cela permet de créer une distinction entre chaque ouvrier dès le
                        départ.
                        Le <strong>biais</strong>, quant à lui, génère un tableau de zéros. Selon la configuration, il
                        contiendra au minimum un seul zéro et au maximum autant de zéros qu'il y a d'ouvriers
                        (<strong>n_neurons</strong>).
                    </p>
                </div>
            </article>
        </main>
    </div>
</div>
</body>
</html>