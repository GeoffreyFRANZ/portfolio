<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FEDE Platform – Écosystème de Gestion Intervenants | Geoffrey Franz</title>

    <meta name="description" content="Étude technique de la plateforme FEDE par Geoffrey Franz : workflow de provisioning, backend Symfony, intégration Cloud Microsoft Entra et AWS." />
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
            <a class="text-gray-300 hover:text-white text-sm font-medium transition-colors" href="about.php">À propos</a>
            <a class="text-gray-300 hover:text-white text-sm font-medium transition-colors" href="contact.php">Contact</a>
        </nav>
    </div>
</header>

<main class="relative z-10 pt-32 pb-20 px-6 max-w-7xl mx-auto">
    <header class="text-center mb-20">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 mb-6">
            <span class="w-2 h-2 rounded-full bg-green-500 shadow-[0_0_8px_rgba(34,197,94,0.6)]"></span>
            <span class="text-xs font-semibold tracking-wider text-secondary uppercase">Mission : Orchestration & Modernisation</span>
        </div>
        <h1 class="text-4xl md:text-6xl text-white mb-6 tracking-tight leading-tight font-bold">
            FEDE — Plateforme<br /><span class="text-accent-blue text-3xl md:text-5xl">Gestion des Intervenants</span>
        </h1>
        <p class="text-lg text-secondary max-w-3xl mx-auto leading-relaxed">
            Je suis intervenu sur un projet déjà initié, mais qui peinait à rencontrer ses objectifs opérationnels.
            Le décalage entre le développement en cours et l'évolution des process internes des collaborateurs
            rendait la finalisation complexe.
            Mon travail a consisté à reprendre la main sur cet existant,
            à réaligner les fonctionnalités avec les besoins réels et à stabiliser
            l'ensemble pour une mise en production effective.
        </p>
    </header>

    <section class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 mb-24">
        <div class="lg:col-span-5 flex flex-col gap-10">
            <section>
                <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                    <span class="w-1 h-8 bg-accent-blue rounded-full"></span>
                    Impact Métier
                </h2>
                <p class="text-secondary leading-relaxed">
                    Reprise et évolution d'un système critique pour centraliser les intervenants. J'ai transformé
                    un outil fragmenté en une solution de <strong>Identity Governance</strong> automatisée, réduisant
                    drastiquement les erreurs de saisie et les délais d'accès.
                </p>
            </section>

            <section class="space-y-4">
                <h2 class="text-xs font-bold tracking-[0.2em] text-[#06b6d4] uppercase mb-2">Piliers Techniques</h2>

                <article class="glow-card bg-[#0f172a] p-5 rounded-xl flex items-start gap-4 group">
                    <div class="w-12 h-12 rounded-lg bg-blue-500/10 flex items-center justify-center shrink-0 border border-blue-500/20 text-accent-cyan">
                        <i class="fa-solid fa-wpforms"></i>
                    </div>
                    <div>
                        <h3 class="text-white font-semibold mb-1 group-hover:text-accent-cyan transition-colors">UX & Formulaires Complexes</h3>
                        <p class="text-sm text-[#94a3b8]">Tunnel multi-étapes avec validation progressive. Récapitulatif dynamique des matières et rôles avant soumission.</p>
                    </div>
                </article>

                <article class="glow-card bg-[#0f172a] p-5 rounded-xl flex items-start gap-4 group">
                    <div class="w-12 h-12 rounded-lg bg-purple-500/10 flex items-center justify-center shrink-0 border border-purple-500/20 text-accent-purple">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <div>
                        <h3 class="text-white font-semibold mb-1 group-hover:text-accent-purple transition-colors">Refonte Back-Office & Audit</h3>
                        <p class="text-sm text-[#94a3b8]">Nouveau moteur de recherche à filtres persistants. Système d'Audit Log visuel avec codes couleurs pour le suivi des mutations (Matières/Rôles).</p>
                    </div>
                </article>

                <article class="glow-card bg-[#0f172a] p-5 rounded-xl flex items-start gap-4 group">
                    <div class="w-12 h-12 rounded-lg bg-blue-600/10 flex items-center justify-center shrink-0 border border-blue-600/20 text-blue-500">
                        <i class="fa-solid fa-cloud-bolt"></i>
                    </div>
                    <div>
                        <h3 class="text-white font-semibold mb-1 group-hover:text-blue-500 transition-colors">Interconnexion Cloud</h3>
                        <p class="text-sm text-[#94a3b8]">Provisioning <strong>Entra ID</strong> via Graph API, stockage <strong>SharePoint</strong> et traitements asynchrones <strong>AWS SQS/Lambda</strong>.</p>
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
                        <div class="ml-4 px-3 py-1 bg-black/20 rounded text-[10px] text-gray-400 font-mono">admin.fede.intranet/candidates</div>
                    </div>
                    <div class="bg-slate-50 p-6 min-h-[450px]">
                        <div class="mb-6 flex gap-3 flex-wrap">
                            <div class="px-3 py-2 bg-white border border-slate-200 rounded text-xs text-slate-400 flex items-center gap-2 shadow-sm">
                                <i class="fa-solid fa-search"></i> {nom: "Franz", role: "Supervision"}
                            </div>
                            <div class="px-3 py-2 bg-blue-50 border border-blue-200 rounded text-xs text-blue-600 font-bold">Filtre Actif : Session 2024</div>
                        </div>

                        <div class="bg-white rounded-lg border border-slate-200 overflow-hidden shadow-sm">
                            <div class="p-4 border-b border-slate-100 flex justify-between items-center">
                                <span class="font-bold text-slate-800">Candidature : Geoffrey Franz</span>
                                <span class="text-[10px] bg-green-100 text-green-700 px-2 py-1 rounded">Vérifié par Admin</span>
                            </div>
                            <div class="p-4 space-y-3">
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-slate-500 italic">Audit Log: Statut modifié par J. Doe</span>
                                    <span class="text-slate-400 text-xs">il y a 2 min</span>
                                </div>
                                <div class="grid grid-cols-1 gap-2">
                                    <div class="p-2 bg-green-50 border-l-4 border-green-500 text-xs text-green-800 flex justify-between">
                                        <span>Matière : Développement Web</span>
                                        <span class="font-bold">AJOUTÉ</span>
                                    </div>
                                    <div class="p-2 bg-yellow-50 border-l-4 border-yellow-500 text-xs text-yellow-800 flex justify-between">
                                        <span>Matière : Architecture Cloud</span>
                                        <span class="font-bold">MODIFIÉ</span>
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
                        <i class="fa-solid fa-shield-halved text-xl"></i>
                    </div>
                    <div>
                        <h4 class="text-white font-bold text-sm uppercase tracking-widest">Référent Technique & Support N2</h4>
                        <p class="text-secondary text-sm mt-1">Garant de la stabilité du provisioning Cloud et résolution des blocages techniques complexes pour les équipes pédagogiques.</p>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="mt-20 border border-white/10 rounded-2xl bg-[#0a0a14] p-8 md:p-12 relative overflow-hidden">
        <h2 class="text-xl font-bold text-center mb-16 relative z-10 uppercase tracking-widest text-accent-cyan">
            Cycle de Provisioning Automatisé
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
                        <h3 class="text-sm font-semibold text-white">Candidature</h3>
                        <p class="text-[10px] text-accent-cyan mt-1">Validation JS / Twig</p>
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
                        <h3 class="text-sm font-semibold text-white">Revue Admin</h3>
                        <p class="text-[10px] text-accent-cyan mt-1">Audit Log & Filtres</p>
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
                        <h3 class="text-sm font-semibold text-white">Provisioning</h3>
                        <p class="text-[10px] text-accent-cyan mt-1">Microsoft Entra ID</p>
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
                        <h3 class="text-sm font-semibold text-white">SharePoint</h3>
                        <p class="text-[10px] text-accent-cyan mt-1">Dépôt Documentaire</p>
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
                        <h3 class="text-sm font-semibold text-white">Notif / PDF</h3>
                        <p class="text-[10px] text-accent-cyan mt-1">AWS SQS & Lambda</p>
                    </div>
                </li>
            </ol>
        </div>
    </section>
    <section class="mt-24 mb-24 border-t border-white/5 pt-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            <div class="space-y-8">
                <h2 class="text-2xl font-bold text-white flex items-center gap-3">
                    <i class="fa-solid fa-microchip text-accent-cyan"></i>
                    Ingénierie de Solution
                </h2>

                <div class="bg-[#0f172a] p-6 rounded-xl border border-white/5 hover:border-accent-cyan/30 transition-colors">
                    <h3 class="text-accent-cyan font-bold mb-3 flex items-center gap-2">
                        <i class="fa-solid fa-magnifying-glass text-xs"></i>
                        Optimisation de la Gestion Admin
                    </h3>
                    <p class="text-sm text-secondary leading-relaxed">
                        Refonte du système de recherche via un <strong>filtrage multicritères (objet JSON dynamique)</strong>.
                        J'ai implémenté la <strong>persistance des filtres</strong> pour maintenir le contexte de travail
                        lors de la navigation entre les différents
                        <strong>statuts de candidatures</strong> (En attente, Acceptées, Refusées).
                    </p>
                </div>

                <div class="bg-[#0f172a] p-6 rounded-xl border border-white/5 hover:border-accent-cyan/30 transition-colors">
                    <h3 class="text-accent-cyan font-bold mb-3 flex items-center gap-2">
                        <i class="fa-solid fa-headset text-xs"></i>
                        Support Technique Freelances
                    </h3>
                    <p class="text-sm text-secondary leading-relaxed">
                        Point de contact final pour les intervenants externes en difficulté. J'assurais le
                        <strong>déblocage des processus d'inscription</strong> en guidant les utilisateurs sur
                        le respect du workflow technique et en résolvant les <strong>erreurs de manipulation</strong>
                        ou les problèmes d'accès aux profils.
                    </p>
                </div>
            </div>

            <div class="space-y-8">
                <h2 class="text-2xl font-bold text-white flex items-center gap-3">
                    <i class="fa-solid fa-user-shield text-accent-purple"></i>
                    Stratégie & Gouvernance
                </h2>

                <div class="bg-[#0f172a] p-6 rounded-xl border border-white/5 hover:border-accent-purple/30 transition-colors">
                    <h3 class="text-accent-purple font-bold mb-3 flex items-center gap-2">
                        <i class="fa-solid fa-gavel text-xs"></i>
                        Conseil Product Owner & RGPD
                    </h3>
                    <p class="text-sm text-secondary leading-relaxed">
                        Accompagnement stratégique du PO dans la définition des besoins. J'ai apporté une expertise
                        critique sur le <strong>processus technique</strong>, notamment en alertant sur les risques
                        liés au <strong>traitement des données personnelles</strong> lors de
                        l'automatisation des flux (ex: déclenchements d'emails sous conditions d'accès).
                    </p>
                </div>
                <div class="bg-[#0f172a] p-6 rounded-xl border border-white/5 hover:border-accent-purple/30 transition-colors">
                    <h3 class="text-accent-purple font-bold mb-3 flex items-center gap-2">
                        <i class="fa-solid fa-arrow-up-right-dots text-xs"></i>
                        Évolution & Industrialisation
                    </h3>
                    <p class="text-sm text-secondary leading-relaxed">
                        "Transition d'une phase d'apprentissage guidée vers une <strong>autonomie complète</strong>
                        dans la gestion du cycle de vie du projet. J'ai pris en charge la
                        <strong>captation des besoins</strong>,
                        le reporting technique ainsi que le rôle d'alerte sur l'amélioration du workflow
                        et de l'<strong>Audit Log visuel</strong>."
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-12 p-6 rounded-xl bg-gradient-to-r from-blue-600/10 to-purple-600/10 border border-white/10 text-center">
            <p class="text-sm text-secondary italic">
                "Une approche centrée sur l'utilisateur et la donnée, garantissant un système de gestion robuste, éthique et évolutif."
            </p>
        </div>
    </section>
</main>
<footer class="border-t border-white/5 py-10 text-center">
    <p class="text-secondary text-sm">Geoffrey Franz &copy; 2026 — De l'Architecture Cloud à l'Intelligence Artificielle.</p>
</footer>
</body>
</html>