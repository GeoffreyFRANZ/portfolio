<!DOCTYPE html>
<html class="dark" lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Génération PDF Serverless – FEDE Platform | Geoffrey Franz</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'system-ui', 'sans-serif'] },
                    colors: {
                        background: '#040815',
                        secondary: '#a0a0b0',
                        'card-bg': '#0f0f1a',
                        'accent-blue': '#3b82f6',
                        'accent-cyan': '#06b6d4',
                        'accent-purple': '#8b5cf6',
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
            background: rgba(15, 15, 26, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }
        .glow-card:hover {
            border-color: rgba(6, 182, 212, 0.4);
            box-shadow: 0 0 20px rgba(6, 182, 212, 0.1);
        }
    </style>
</head>

<body class="antialiased font-sans">

<header class="fixed top-0 left-0 right-0 z-50 backdrop-blur-md bg-[#040815]/80 border-b border-white/5">
    <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
        <a href="index.php" class="flex items-center gap-4 group">
            <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-lg flex items-center justify-center shadow-lg shadow-blue-500/20">
                <span class="font-bold text-white uppercase text-xs">GF</span>
            </div>
            <span class="font-bold text-lg tracking-tight text-white uppercase group-hover:text-accent-cyan transition-colors">GF_SYSTEMS</span>
        </a>
        <nav class="hidden md:flex items-center gap-8 font-mono text-[10px] uppercase tracking-widest">
            <a class="text-secondary hover:text-white transition-colors" href="project.php">Retour aux Projets</a>
            <a class="px-5 py-2 text-white bg-blue-600/10 border border-blue-500/50 rounded-full hover:bg-blue-600/20 transition-all" href="#">Contact</a>
        </nav>
    </div>
</header>

<main class="relative z-10 w-full max-w-6xl mx-auto px-6 pt-32 pb-16">
    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-accent-cyan/10 border border-accent-cyan/20 text-accent-cyan text-[10px] font-bold uppercase tracking-widest mb-8">
        <i class="fa-solid fa-bolt-lightning animate-pulse"></i> Service Cloud Opérationnel
    </div>

    <section class="mb-20">
        <h1 class="text-5xl md:text-8xl font-bold mb-8 tracking-tighter">
            Générations de PDF <br/>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-cyan-400 to-purple-500 italic uppercase">FEDE Platform</span>
        </h1>
        <p class="text-xl text-gray-400 max-w-3xl leading-relaxed font-light">
            Développement d'un service de génération programmatique en <strong>autonomie totale</strong>. Bridge entre un monolithe legacy et une architecture <strong>Serverless Python</strong>.
        </p>
    </section>

    <section class="grid md:grid-cols-12 gap-12 mb-24">
        <div class="md:col-span-8 space-y-6">
            <h2 class="text-2xl font-bold italic flex items-center gap-3">
                <span class="text-accent-cyan font-mono text-base">01/</span> Le Challenge Métier
            </h2>
            <div class="space-y-4 text-gray-400 leading-relaxed font-light text-lg">
                <p>
                    J’ai développé un service complet de génération de documents PDF automatisés pour la <strong>Fédération Européenne des Écoles</strong>. L’objectif était de produire des documents complexes à partir de données métier, avec une mise en page dynamique et une pagination intelligente.
                </p>
                <p>
                    Le cœur du système repose sur une <strong>Lambda AWS</strong> écrite en <strong>Python</strong>, utilisant <strong>ReportLab</strong> pour la génération et <strong>PyPDF2</strong> pour la manipulation des pages. Le service récupère les données, applique les règles métier, puis stocke le PDF final dans un <strong>S3</strong> via des URLs pré‑signées.
                </p>
            </div>
        </div>
        <div class="md:col-span-4">
            <div class="glow-card p-8 rounded-3xl">
                <h3 class="text-[10px] font-bold text-accent-cyan uppercase tracking-widest mb-6 italic">Deep Dive Technique</h3>
                <ul class="space-y-4 text-sm font-light">
                    <li class="flex items-center gap-3 text-gray-300">
                        <i class="fa-brands fa-python text-accent-blue"></i> Python 3.9 (Serverless)
                    </li>
                    <li class="flex items-center gap-3 text-gray-300">
                        <i class="fa-solid fa-file-pdf text-accent-blue"></i> ReportLab / PyPDF2
                    </li>
                    <li class="flex items-center gap-3 text-gray-300">
                        <i class="fa-brands fa-aws text-accent-blue"></i> AWS Lambda & S3
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <section class="mb-24">
        <h2 class="text-2xl font-bold italic flex items-center gap-3 mb-12">
            <span class="text-accent-blue font-mono text-base">02/</span> Data Journey : Interopérabilité
        </h2>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="glow-card p-8 rounded-3xl border-b-2 border-b-accent-purple">
                <h4 class="text-white font-bold mb-4 uppercase text-xs tracking-tighter italic">1. Legacy Hub (PHP 5.2)</h4>
                <p class="text-[11px] text-gray-500 leading-relaxed italic">
                    Compilation des données métier et émission d'un <strong>Payload JSON</strong> structuré. Orchestration de l'ordre de génération.
                </p>
            </div>
            <div class="glow-card p-8 rounded-3xl border-b-2 border-b-accent-cyan">
                <h4 class="text-white font-bold mb-4 uppercase text-xs tracking-tighter italic">2. Cloud Engine (Python)</h4>
                <p class="text-[11px] text-gray-500 leading-relaxed italic">
                    Traitement asynchrone sur <strong>AWS Lambda</strong>. Génération vectorielle et fusion de documents en isolation totale.
                </p>
            </div>
            <div class="glow-card p-8 rounded-3xl border-b-2 border-b-accent-blue">
                <h4 class="text-white font-bold mb-4 uppercase text-xs tracking-tighter italic">3. Secure Storage (S3)</h4>
                <p class="text-[11px] text-gray-500 leading-relaxed italic">
                    Stockage persistant. Délivrance sécurisée via <strong>Presigned URLs</strong> liées aux droits <strong>Microsoft Entra ID</strong>.
                </p>
            </div>
        </div>
    </section>

    <section class="grid md:grid-cols-2 gap-12 mb-24">
        <div class="space-y-8">
            <h2 class="text-2xl font-bold italic flex items-center gap-3">
                <span class="text-accent-purple font-mono text-base">03/</span> Autonomie & Apprentissage
            </h2>
            <div class="space-y-4 text-gray-400 leading-relaxed font-light">
                <p>
                    Ce projet a été réalisé en <strong>autonomie guidée</strong>. Sans connaissances préalables de l'écosystème Python PDF, j'ai dû mener une phase de R&D rapide pour maîtriser les bibliothèques ReportLab et PyPDF2.
                </p>
                <p>
                    J'ai pris la responsabilité de l'analyse, de l'implémentation du service et de son intégration dans un écosystème complexe où les environnements (AWS, Entra ID) étaient déjà imposés par la structure.
                </p>
            </div>
        </div>
        <div class="glow-card p-8 rounded-3xl bg-gradient-to-br from-card-bg to-background">
            <h3 class="text-xs font-bold text-accent-cyan uppercase tracking-widest mb-8 italic">Compétences acquises sur le tas</h3>
            <div class="space-y-6">
                <div>
                    <div class="flex justify-between text-[10px] uppercase mb-2">
                        <span class="text-gray-400">Logique Python Serverless</span>
                        <span class="text-accent-cyan italic">100% Autonome</span>
                    </div>
                    <div class="h-1 w-full bg-white/5 rounded-full overflow-hidden">
                        <div class="h-full bg-accent-cyan w-full"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between text-[10px] uppercase mb-2">
                        <span class="text-gray-400">Rendu ReportLab (X/Y)</span>
                        <span class="text-accent-blue italic">Maitrisé</span>
                    </div>
                    <div class="h-1 w-full bg-white/5 rounded-full overflow-hidden">
                        <div class="h-full bg-accent-blue w-[90%]"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between text-[10px] uppercase mb-2">
                        <span class="text-gray-400">Cloud Integration (AWS/Entra)</span>
                        <span class="text-accent-purple italic">Opérationnel</span>
                    </div>
                    <div class="h-1 w-full bg-white/5 rounded-full overflow-hidden">
                        <div class="h-full bg-accent-purple w-[85%]"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-12 rounded-3xl bg-white/[0.02] border border-white/5 text-center">
        <p class="text-lg text-gray-400 italic font-light">
            "Le résultat est un service robuste et automatisé, qui a permis de réduire significativement le temps de production documentaire tout en garantissant une cohérence parfaite sur des milliers de documents."
        </p>
    </section>
</main>

<footer class="p-12 border-t border-white/5 text-center opacity-40">
    <p class="text-[10px] font-mono tracking-[0.5em] uppercase">
        Geoffrey Franz // Architecte d'Intégration // 2026
    </p>
</footer>

</body>
</html>