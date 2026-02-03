<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Équivalences FEDE – Plateforme Cloud Native | Geoffrey Franz</title>

    <meta name="description" content="Développement de la plateforme Équivalences par Geoffrey Franz : React from scratch, API Node.js, paiement sécurisé et CI/CD sur AWS Amplify." />
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
            <a class="text-gray-300 hover:text-white text-sm font-medium transition-colors" href="supports.php">Cours</a>
            <a class="text-gray-300 hover:text-white text-sm font-medium transition-colors" href="about.php">À propos</a>
            <a class="text-gray-300 hover:text-white text-sm font-medium transition-colors" href="contact.php">Contact</a>
        </nav>
    </div>
</header>

<main class="relative z-10 pt-32 pb-20 px-6 max-w-7xl mx-auto">
    <header class="text-center mb-20">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 mb-6">
            <span class="w-2 h-2 rounded-full bg-blue-500 shadow-[0_0_8px_rgba(59,130,246,0.6)]"></span>
            <span class="text-xs font-semibold tracking-wider text-secondary uppercase">Stack : React From Scratch & AWS Amplify</span>
        </div>
        <h1 class="text-4xl md:text-6xl text-white mb-6 tracking-tight leading-tight font-bold">
            FEDE — Plateforme<br /><span class="text-accent-blue text-3xl md:text-5xl">Équivalences de Diplômes</span>
        </h1>
        <p class="text-lg text-secondary max-w-3xl mx-auto leading-relaxed">
            Afin d'optimiser le traitement des dossiers et de garantir la qualité des candidatures, j'ai piloté la transition vers un
            service qualifié.
            J'ai développé une application <strong>React from scratch</strong> introduisant un <strong>verrou transactionnel</strong>
            et une validation documentaire automatisée, assurant l'intégrité des flux financiers et la conformité des justificatifs avant
            toute instruction.
        </p>
    </header>

    <section class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 mb-24">
        <div class="lg:col-span-5 flex flex-col gap-10">
            <section>
                <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                    <span class="w-1 h-8 bg-accent-blue rounded-full"></span>
                    Challenge Technique
                </h2>
                <p class="text-secondary leading-relaxed">
                    Conception en autonomie d'une architecture transactionnelle cloud. L'enjeu résidait dans l'orchestration asynchrone entre le <strong>paiement sécurisé</strong>,
                    le stockage des justificatifs sur <strong>AWS S3</strong> et le moteur de notification,
                    tout en garantissant une <strong>isolation totale des données</strong> et une persistance éphémère pour le traitement de l'emailing.
                </p>
            </section>

            <section class="space-y-4">
                <h2 class="text-xs font-bold tracking-[0.2em] text-[#06b6d4] uppercase mb-2">Composants Clés</h2>

                <article class="glow-card bg-[#0f172a] p-5 rounded-xl flex items-start gap-4 group">
                    <div class="w-12 h-12 rounded-lg bg-blue-500/10 flex items-center justify-center shrink-0 border border-blue-500/20 text-accent-cyan">
                        <i class="fa-brands fa-react"></i>
                    </div>
                    <div>
                        <h3 class="text-white font-semibold mb-1 group-hover:text-accent-cyan transition-colors">Frontend SPA From Scratch</h3>
                        <p class="text-sm text-[#94a3b8]">Développement d'un formulaire multi-étapes réactif. Gestion d'état complexe pour la validation progressive des dossiers étudiants.</p>
                    </div>
                </article>

                <article class="glow-card bg-[#0f172a] p-5 rounded-xl flex items-start gap-4 group">
                    <div class="w-12 h-12 rounded-lg bg-purple-500/10 flex items-center justify-center shrink-0 border border-purple-500/20 text-accent-purple">
                        <i class="fa-solid fa-credit-card"></i>
                    </div>
                    <div>
                        <h3 class="text-white font-semibold mb-1 group-hover:text-accent-purple transition-colors">Tunnel de Paiement & Webhooks</h3>
                        <p class="text-sm text-[#94a3b8]">API Node.js sécurisée traitant les notifications de paiement en temps réel pour débloquer automatiquement le workflow de traitement.</p>
                    </div>
                </article>

                <article class="glow-card bg-[#0f172a] p-5 rounded-xl flex items-start gap-4 group">
                    <div class="w-12 h-12 rounded-lg bg-blue-600/10 flex items-center justify-center shrink-0 border border-blue-600/20 text-blue-500">
                        <i class="fa-solid fa-sync"></i>
                    </div>
                    <div>
                        <h3 class="text-white font-semibold mb-1 group-hover:text-blue-500 transition-colors">CI/CD & DevOps</h3>
                        <p class="text-sm text-[#94a3b8]">Automatisation du cycle de vie via <strong>AWS Amplify</strong> : déploiement continu depuis la branche main pour une production agile.</p>
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
                        <div class="ml-4 px-3 py-1 bg-black/20 rounded text-[10px] text-gray-400 font-mono">equivalences.fede.education/checkout</div>
                    </div>
                    <div class="bg-slate-50 p-6 min-h-[450px] flex flex-col items-center justify-center">
                        <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-sm border border-slate-200">
                            <div class="flex justify-between items-center mb-8">
                                <div class="h-2 w-16 bg-blue-500 rounded-full"></div>
                                <div class="h-2 w-16 bg-slate-200 rounded-full"></div>
                                <div class="h-2 w-16 bg-slate-200 rounded-full"></div>
                            </div>
                            <h4 class="font-bold text-slate-800 mb-2">Finalisation de la demande</h4>
                            <p class="text-xs text-slate-400 mb-6">Étape 3 : Paiement et justificatifs</p>

                            <div class="space-y-4 mb-6">
                                <div class="p-3 border-2 border-blue-100 rounded-xl bg-blue-50 flex items-center gap-3">
                                    <i class="fa-solid fa-file-pdf text-blue-500"></i>
                                    <div class="flex-1 text-[10px] text-blue-800">diplome_master.pdf <span class="text-blue-400 italic">(Uploadé vers SharePoint)</span></div>
                                    <i class="fa-solid fa-check-circle text-blue-500"></i>
                                </div>
                                <div class="p-3 border border-slate-100 rounded-xl flex items-center justify-between">
                                    <span class="text-xs text-slate-600 font-medium italic">Frais d'équivalence</span>
                                    <span class="text-xs font-bold text-slate-800">145.00 €</span>
                                </div>
                            </div>
                            <button class="w-full py-3 bg-blue-600 rounded-xl text-white text-xs font-bold shadow-lg shadow-blue-500/20">PROCÉDER AU PAIEMENT</button>
                        </div>
                        <div class="mt-6 flex items-center gap-2 text-[10px] text-slate-400">
                            <i class="fa-solid fa-lock"></i> Transaction sécurisée par Webhook Node.js
                        </div>
                    </div>
                </figure>
            </div>

            <div class="mt-8 p-6 rounded-xl border border-accent-blue/20 bg-accent-blue/5">
                <div class="flex items-center gap-4">
                    <div class="p-3 bg-accent-blue/10 rounded-full text-accent-blue">
                        <i class="fa-solid fa-share-nodes text-xl"></i>
                    </div>
                    <div>
                        <h4 class="text-white font-bold text-sm uppercase tracking-widest">Intégration API AWS </h4>
                        <p class="text-secondary text-sm mt-1">
                            L'application pilote nativement les services <strong>AWS S3</strong> via le SDK pour le stockage des pièces jointes.
                            Ce pont technique garantit un flux de données sans persistance serveur et une purge automatisée, alignant performance et sécurité.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="mt-20 border border-white/10 rounded-2xl bg-[#0a0a14] p-8 md:p-12 relative overflow-hidden">
        <h2 class="text-xl font-bold text-center mb-16 relative z-10 uppercase tracking-widest text-accent-cyan">
            Workflow Asynchrone & Cloud
        </h2>
        <div class="relative z-10">
            <div class="hidden md:block workflow-line top-12 left-10 right-10 !w-auto" style="background: linear-gradient(90deg, #3b82f6 0%, #8b5cf6 100%);"></div>
            <ol class="grid grid-cols-1 md:grid-cols-5 gap-8 text-center">
                <li class="flex flex-col items-center gap-4 group">
                    <div class="w-20 h-20 transition-transform group-hover:-translate-y-2">
                        <svg class="w-full h-full drop-shadow-[0_0_15px_rgba(6,182,212,0.4)]" viewBox="0 0 100 100">
                            <path d="M50 20L85 40V75L50 95L15 75V40L50 20Z" fill="#0f172a" stroke="#06b6d4" stroke-width="2"></path>
                            <text fill="white" font-size="24" font-weight="bold" text-anchor="middle" x="50" y="65">1</text>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-white">React SPA</h3>
                        <p class="text-[10px] text-accent-cyan mt-1">Tunnel multi-étapes</p>
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
                        <h3 class="text-sm font-semibold text-white">SharePoint</h3>
                        <p class="text-[10px] text-accent-cyan mt-1">Upload via Graph API</p>
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
                        <h3 class="text-sm font-semibold text-white">Stripe webhook</h3>
                        <p class="text-[10px] text-accent-cyan mt-1">Consommé via API Node.js</p>
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
                        <h3 class="text-sm font-semibold text-white">Mailing Engine</h3>
                        <p class="text-[10px] text-accent-cyan mt-1">Notifications</p>
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
                        <h3 class="text-sm font-semibold text-white">AWS Amplify</h3>
                        <p class="text-[10px] text-accent-cyan mt-1">Hébergement & CI/CD</p>
                    </div>
                </li>
            </ol>
        </div>
    </section>

    <section class="mt-24 mb-24 border-t border-white/5 pt-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            <div class="space-y-8">
                <h2 class="text-2xl font-bold text-white flex items-center gap-3">
                    <i class="fa-solid fa-code text-accent-cyan"></i>
                    Ingénierie Frontend & UX
                </h2>

                <div class="bg-[#0f172a] p-6 rounded-xl border border-white/5 hover:border-accent-cyan/30 transition-colors">
                    <h3 class="text-accent-cyan font-bold mb-3 flex items-center gap-2">
                        <i class="fa-brands fa-react text-xs"></i>
                        Architecture React "From Scratch"
                    </h3>
                    <p class="text-sm text-secondary leading-relaxed">
                        Développement d'une application sans boilerplate, centrée sur la performance. J'ai conçu un
                        <strong>state manager personnalisé</strong> pour gérer les données du tunnel de paiement et
                        les validations complexes de formulaires en temps réel.
                    </p>
                </div>

                <div class="bg-[#0f172a] p-6 rounded-xl border border-white/5 hover:border-accent-cyan/30 transition-colors">
                    <h3 class="text-accent-cyan font-bold mb-3 flex items-center gap-2">
                        <i class="fa-solid fa-envelope-open-text text-xs"></i>
                        Mailing Hybride & Rétro-compatibilité
                    </h3>
                    <p class="text-sm text-secondary leading-relaxed">
                        Optimisation du système de mailing pour inclure des pièces jointes dynamiques. J'ai implémenté
                        un <strong>moteur conditionnel</strong> (Attachement vs Inline) pour moderniser les notifications
                        sans casser les anciens process de réception.
                    </p>
                </div>
            </div>

            <div class="space-y-8">
                <h2 class="text-2xl font-bold text-white flex items-center gap-3">
                    <i class="fa-solid fa-server text-accent-purple"></i>
                    Back-office & Cloud Logic
                </h2>

                <div class="bg-[#0f172a] p-6 rounded-xl border border-white/5 hover:border-accent-purple/30 transition-colors">
                    <h3 class="text-accent-purple font-bold mb-3 flex items-center gap-2">
                        <i class="fa-solid fa-terminal text-xs"></i>
                        Déploiement Continu (CI/CD)
                    </h3>
                    <p class="text-sm text-secondary leading-relaxed">
                        Mise en place d'un pipeline de livraison automatisé sur <strong>AWS Amplify</strong>.
                        L'intégration du dépôt GitHub (branche main) permet des mises à jour instantanées et
                        une gestion fluide des environnements de staging et production.
                    </p>
                </div>
                <div class="bg-[#0f172a] p-6 rounded-xl border border-white/5 hover:border-accent-purple/30 transition-colors">
                    <h3 class="text-accent-purple font-bold mb-3 flex items-center gap-2">
                        <i class="fa-solid fa-shield-check text-xs"></i>
                        Sécurisation des Flux de Données
                    </h3>
                    <p class="text-sm text-secondary leading-relaxed">
                        Mise en place d'un pont sécurisé entre le front React et <strong>AWS S3</strong>.
                        Le stockage des justificatifs est géré de manière éphémère : les fichiers sont hébergés temporairement avec une
                        <strong>politique de suppression automatique sous 48h</strong>, garantissant qu'aucune donnée sensible
                        ne persiste au-delà du temps nécessaire au traitement administratif.
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-12 p-6 rounded-xl bg-gradient-to-r from-blue-600/10 to-purple-600/10 border border-white/10 text-center">
            <p class="text-sm text-secondary italic">
                "Une plateforme robuste, agile et sécurisée, démontrant ma capacité à orchestrer des services tiers complexes dans un environnement moderne."
            </p>
        </div>
    </section>
</main>
<footer class="border-t border-white/5 py-10 text-center">
    <p class="text-secondary text-sm">Geoffrey Franz &copy; 2026 — De l'Architecture Cloud à l'Intelligence Artificielle.</p>
</footer>
</body>
</html>