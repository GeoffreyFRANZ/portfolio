<!DOCTYPE html>
<html class="dark" lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Contact | Geoffrey Franz - Alternance IA & Fullstack</title>
    <meta name="description" content="Contactez Geoffrey Franz, développeur Fullstack en recherche d'alternance en IA avec Epitech. Étudions ensemble vos projets d'innovation.">

    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1" rel="stylesheet"/>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#6211d4',
                        secondary: '#cbd5e1',
                        'background-dark': '#020617',
                        'surface-dark': '#0f172a',
                        'accent-cyan': '#22d3ee',
                        'border-dark': 'rgba(255, 255, 255, 0.1)',
                    },
                    fontFamily: {
                        display: ['Space Grotesk', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        .bg-grid-pattern {
            background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.05) 1px, transparent 0);
            background-size: 40px 40px;
        }
        .glow-input:focus {
            box-shadow: 0 0 15px rgba(98, 17, 212, 0.2);
            border-color: #6211d4;
        }
    </style>
</head>

<body class="bg-background-dark font-display text-white min-h-screen flex flex-col selection:bg-primary/30">

<div class="fixed inset-0 pointer-events-none z-0">
    <div class="absolute inset-0 bg-grid-pattern opacity-30"></div>
    <div class="absolute top-[-10%] right-[-10%] w-[500px] h-[500px] bg-primary/10 rounded-full blur-[120px]"></div>
</div>

<div class="relative z-10 flex flex-col flex-grow w-full max-w-7xl mx-auto">
    <header class="flex items-center justify-between border-b border-white/5 bg-background-dark/80 backdrop-blur-md px-6 py-4 sticky top-0 z-50">
        <a href="index.php" class="flex items-center gap-3 group">
            <div class="size-8 rounded-lg bg-primary/20 flex items-center justify-center border border-primary/30 text-primary">
                <span class="material-symbols-outlined text-xl">deployed_code</span>
            </div>
            <span class="text-white text-lg font-bold tracking-tight">Geoffrey Franz</span>
        </a>
        <nav class="hidden md:flex items-center gap-8 text-sm font-medium">
            <a class="text-secondary hover:text-white transition-colors" href="project.php">Projets</a>
            <a class="text-secondary hover:text-white transition-colors" href="about.php">À propos</a>
            <a class="text-white relative after:content-[''] after:absolute after:-bottom-6 after:left-0 after:w-full after:h-0.5 after:bg-primary" href="contact.php">Contact</a>
        </nav>
    </header>

    <main class="flex-grow flex flex-col justify-center px-6 py-12">
        <div class="max-w-6xl mx-auto w-full">
            <header class="mb-12">
                <div class="flex items-center gap-2 mb-4">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                    </span>
                    <span class="text-accent-cyan text-[10px] font-bold tracking-[0.2em] uppercase">Status : Transmission Active</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-bold tracking-tighter leading-none mb-4">
                    Initialiser la <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent-cyan">Connexion</span>
                </h1>
                <p class="text-secondary text-lg max-w-xl font-light">
                    À la recherche d'une alternance en <strong>IA pour 2026</strong>. Étudions comment ma double culture Web/Système peut servir vos projets.
                </p>
            </header>

            <div class="grid lg:grid-cols-12 gap-12">
                <section class="lg:col-span-5 space-y-6">
                    <h2 class="text-white text-xl font-bold flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">hub</span>
                        Canaux Directs
                    </h2>

                    <div class="space-y-4">
                        <a href="https://linkedin.com/in/geoffreyfranz" target="_blank" class="flex items-center gap-4 p-4 rounded-xl border border-white/5 bg-white/[0.02] hover:bg-white/[0.05] transition-all group">
                            <div class="size-10 rounded-lg bg-background-dark border border-white/10 flex items-center justify-center text-secondary group-hover:text-primary transition-colors">
                                <span class="material-symbols-outlined">badge</span>
                            </div>
                            <div>
                                <h3 class="text-white font-bold text-sm">LinkedIn</h3>
                                <p class="text-xs text-secondary">Geoffrey Franz</p>
                            </div>
                        </a>

                        <a href="https://github.com/geoffreyfranz" target="_blank" class="flex items-center gap-4 p-4 rounded-xl border border-white/5 bg-white/[0.02] hover:bg-white/[0.05] transition-all group">
                            <div class="size-10 rounded-lg bg-background-dark border border-white/10 flex items-center justify-center text-secondary group-hover:text-accent-cyan transition-colors">
                                <span class="material-symbols-outlined">terminal</span>
                            </div>
                            <div>
                                <h3 class="text-white font-bold text-sm">GitHub</h3>
                                <p class="text-xs text-secondary">@geoffreyfranz</p>
                            </div>
                        </a>
                    </div>

                    <div class="p-6 rounded-xl bg-gradient-to-br from-primary/10 to-transparent border border-primary/20">
                        <p class="text-white font-medium text-sm mb-1">Disponibilité Alternance</p>
                        <p class="text-secondary text-xs">Ouvert aux opportunités pour le cycle Master Epitech (Septembre 2026).</p>
                    </div>
                </section>

                <section class="lg:col-span-7">
                    <div class="glass-panel p-8 rounded-2xl border border-white/5 bg-white/[0.02] relative">
                        <h2 class="text-white text-xl font-bold mb-6">Liaison de Transmission</h2>

                        <div id="form-status" class="hidden mb-6 p-4 rounded-lg text-sm font-medium"></div>

                        <form id="contact-form" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-[10px] uppercase tracking-widest text-secondary font-bold ml-1">Nom / Identité</label>
                                    <input name="name" class="glow-input w-full bg-background-dark border border-white/10 text-white rounded-lg px-4 py-3 focus:outline-none transition-all" placeholder="Geoffrey" type="text" required/>
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] uppercase tracking-widest text-secondary font-bold ml-1">Email de retour</label>
                                    <input name="email" class="glow-input w-full bg-background-dark border border-white/10 text-white rounded-lg px-4 py-3 focus:outline-none transition-all" placeholder="nom@entreprise.com" type="email" required/>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="text-[10px] uppercase tracking-widest text-secondary font-bold ml-1">Sujet du Message</label>
                                <input type="text" name="subject" class="glow-input w-full bg-background-dark border border-white/10 text-white rounded-lg px-4 py-3 focus:outline-none transition-all appearance-none"/>
                            </div>

                            <div class="space-y-2">
                                <label class="text-[10px] uppercase tracking-widest text-secondary font-bold ml-1">Payload (Message)</label>
                                <textarea name="message" class="glow-input w-full bg-background-dark border border-white/10 text-white rounded-lg px-4 py-3 focus:outline-none transition-all resize-none" rows="5" placeholder="Paramètres de votre projet..." required></textarea>
                            </div>

                            <button id="submit-btn" class="w-full py-4 bg-primary hover:bg-primary/90 text-white font-bold rounded-lg shadow-lg hover:-translate-y-0.5 transition-all flex items-center justify-center gap-3">
                                <span id="btn-text">Transmettre</span>
                                <span class="material-symbols-outlined text-sm">send</span>
                            </button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <footer class="py-8 text-center border-t border-white/5">
        <p class="text-secondary text-[10px] uppercase tracking-[0.3em]">© 2026 Geoffrey Franz • All Systems Operational</p>
    </footer>
</div>

<script src="js/contact.js"></script>
</body>
</html>