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
            <a class="text-gray-300 hover:text-white text-sm font-medium transition-colors" href="project.php">Projets</a>
            <a class="text-white text-sm font-bold border-b-2 border-primary pb-1" href="supports.php">Cours</a>
            <a class="text-gray-300 hover:text-white text-sm font-medium transition-colors" href="about.php">À propos</a>
            <a class="text-gray-300 hover:text-white text-sm font-medium transition-colors" href="contact.php">Contact</a>
        </nav>
    </div>
</header>

<main class="relative z-10 flex-grow flex flex-col items-center w-full">
    <section class="w-full max-w-[1200px] px-6 py-16 md:py-24 flex flex-col items-center text-center">
        <h1 class="text-5xl md:text-7xl font-bold tracking-tighter mb-6 bg-clip-text text-transparent bg-gradient-to-r from-white via-gray-200 to-gray-500">
            Explorer le Savoir
        </h1>
        <p class="text-gray-400 text-lg md:text-xl max-w-2xl font-light leading-relaxed mb-10">
            Je construis les briques de ma future expertise, et des supports pertinents afin de partager mes découvertes.
        </p>
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
                        Je partage ici ma progression sur la conception de réseaux neuronaux. Cette démarche me permet
                        de consolider mes connaissances tout en documentant l'évolution de mes travaux. C'est pour moi
                        l'occasion de confronter la théorie à la pratique et de démontrer ma compréhension des
                        mécanismes fondamentaux de l'IA.
                    </p>
                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-white/5">
                        <span class="text-[10px] font-mono text-gray-500 uppercase tracking-widest">
                            Python & NumPy

                        </span>
                        <a class="text-sm font-bold text-white flex items-center gap-1 hover:text-primary transition-all"
                           href="support_nnfs.php">
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