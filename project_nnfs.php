<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NNFS – Neural Networks From Scratch | Geoffrey Franz</title>

    <meta name="description" content="Déconstruction mathématique du Deep Learning par Geoffrey Franz : implémentation d'un moteur de neurones en Python et NumPy." />
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
        .glow-card { border: 1px solid rgba(255, 255, 255, 0.05); transition: all 0.3s ease; }
        .glow-card:hover {
            border-color: rgba(59, 130, 246, 0.4);
            box-shadow: 0 0 15px rgba(59, 130, 246, 0.15);
            transform: translateY(-2px);
        }
        .workflow-line {
            position: absolute; top: 50%; left: 0; width: 100%; height: 2px;
            background: linear-gradient(90deg, rgba(6,182,212,0.1) 0%, rgba(6,182,212,0.5) 50%, rgba(6,182,212,0.1) 100%);
            z-index: 0; transform: translateY(-50%);
        }
    </style>
</head>

<body class="antialiased font-sans bg-background selection:bg-accent-cyan selection:text-background relative">
<div class="fixed top-0 left-0 w-full h-full pointer-events-none z-0 bg-glow-gradient opacity-60"></div>

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
            <a class="text-gray-300 hover:text-white text-sm font-medium transition-colors" href="supports.php">Cours</a>
            <a class="text-gray-300 hover:text-white text-sm font-medium transition-colors" href="about.php">À propos</a>
            <a class="px-5 py-2 text-sm font-medium text-white bg-blue-600/10 border border-blue-500/50 rounded-full hover:bg-blue-600/20 transition-all" href="#">Contact</a>
        </nav>
    </div>
</header>
<main class="relative z-10 pt-32 pb-20 px-6 max-w-7xl mx-auto">
    <header class="text-center mb-20">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 mb-6">
            <span class="w-2 h-2 rounded-full bg-accent-purple shadow-[0_0_8px_rgba(139,92,246,0.6)]"></span>
            <span class="text-xs font-semibold tracking-wider text-secondary uppercase">Recherche : Fondamentaux du Deep Learning</span>
        </div>
        <h1 class="text-4xl md:text-6xl text-white mb-6 tracking-tight leading-tight font-bold">
            NNFS — Neural Networks<br /><span class="text-accent-blue text-3xl md:text-5xl italic">From Scratch</span>
        </h1>
        <p class="text-lg text-secondary max-w-3xl mx-auto leading-relaxed">
            Maîtrise de la mécanique interne des réseaux de neurones. J'ai reconstruit un moteur d'apprentissage profond complet en <strong>Python & NumPy</strong>, incluant la <strong>Backpropagation</strong> manuelle et l'optimisation par descente de gradient.
        </p>
    </header>

    <section class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 mb-24">
        <div class="lg:col-span-8 space-y-8">
            <h2 class="text-2xl font-bold italic flex items-center gap-3">
                <span class="text-accent-cyan font-mono text-base">01/</span> Implementation & Backprop
            </h2>

            <figure class="relative rounded-xl overflow-hidden border border-white/10 bg-card-bg shadow-2xl">
                <figcaption class="h-9 bg-[#1e293b] border-b border-white/5 flex items-center px-4 justify-between">
                    <div class="flex gap-2">
                        <div class="w-3 h-3 rounded-full bg-[#ef4444]"></div>
                        <div class="w-3 h-3 rounded-full bg-[#eab308]"></div>
                        <div class="w-3 h-3 rounded-full bg-[#22c55e]"></div>
                    </div>
                    <span class="text-[10px] text-gray-400 font-mono italic">nnfs_engine.py</span>
                </figcaption>
                <div class="p-6 bg-[#050510] font-mono text-[13px] leading-relaxed overflow-x-auto border-b border-white/5">
<pre><code class="text-gray-300"><span class="text-accent-cyan">class</span> <span class="text-white">Layer_Dense</span>:
    <span class="text-accent-cyan">def</span> <span class="text-accent-blue">forward</span>(self, inputs):
        self.inputs = inputs
        self.output = np.dot(inputs, self.weights) + self.biases

    <span class="text-accent-cyan">def</span> <span class="text-accent-blue">backward</span>(self, d_out):
        <span class="text-gray-500"># Calcul des gradients par produit matriciel (Transpose)</span>
        self.dweights = np.dot(self.inputs.T, d_out)
        self.dbiases = np.sum(d_out, axis=<span class="text-accent-purple">0</span>, keepdims=<span class="text-accent-purple">True</span>)
        self.dinputs = np.dot(d_out, self.weights.T)
        <span class="text-accent-cyan">return</span> self.dinputs</code></pre>
                </div>
                <div class="p-4 bg-black/20 text-[11px] text-secondary italic">
                    <i class="fa-solid fa-code-branch mr-2"></i> Extrait de la logique de rétropropagation pour la mise à jour des poids.
                </div>
            </figure>


        </div>

        <div class="lg:col-span-4 flex flex-col gap-10 pt-14">
            <section class="glow-card p-8 rounded-3xl border-l-4 border-l-accent-cyan">
                <h3 class="text-[10px] font-bold text-accent-cyan uppercase tracking-widest mb-4 italic">Logique Algorithmique</h3>
                <p class="text-secondary text-sm leading-relaxed">
                    Contrairement aux approches haut-niveau, ce projet m'a permis d'implémenter l'<strong>Optimizer SGD</strong> et la <strong>Categorical Crossentropy</strong>. L'utilisation de <strong>NumPy</strong> permet une manipulation directe des matrices pour des performances optimales.
                </p>
            </section>

            <section class="space-y-4">
                <h2 class="text-xs font-bold tracking-[0.2em] text-[#06b6d4] uppercase mb-2">Composants du Système</h2>
                <article class="glow-card bg-[#0f172a] p-5 rounded-xl flex items-start gap-4 group">
                    <div class="w-12 h-12 rounded-lg bg-blue-500/10 flex items-center justify-center shrink-0 border border-blue-500/20 text-accent-cyan text-lg">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <div>
                        <h3 class="text-white font-semibold mb-1 group-hover:text-accent-cyan transition-colors text-sm italic">Convergence</h3>
                        <p class="text-[11px] text-[#94a3b8]">Boucle d'entraînement sur 1M d'epochs pour valider la réduction de la Loss.</p>
                    </div>
                </article>
                <article class="glow-card bg-[#0f172a] p-5 rounded-xl flex items-start gap-4 group">
                    <div class="w-12 h-12 rounded-lg bg-purple-500/10 flex items-center justify-center shrink-0 border border-purple-500/20 text-accent-purple text-lg">
                        <i class="fa-solid fa-calculator"></i>
                    </div>
                    <div>
                        <h3 class="text-white font-semibold mb-1 group-hover:text-accent-purple transition-colors text-sm italic">Optimisation Adam/SGD</h3>
                        <p class="text-[11px] text-[#94a3b8]">Mise à jour dynamique des paramètres basée sur le calcul des gradients.</p>
                    </div>
                </article>
            </section>
        </div>
    </section>

    <section class="mt-20 border border-white/10 rounded-2xl bg-[#0a0a14] p-8 md:p-12 relative overflow-hidden">
        <h2 class="text-xl font-bold text-center mb-16 relative z-10 uppercase tracking-widest text-accent-cyan italic">
            Architecture du Network
        </h2>
        <div class="relative z-10">
            <div class="hidden md:block workflow-line top-12 left-10 right-10 !w-auto" style="background: linear-gradient(90deg, #3b82f6 0%, #8b5cf6 100%);"></div>
            <ol class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                <li class="flex flex-col items-center gap-4 group">
                    <div class="w-20 h-20 transition-transform group-hover:-translate-y-2">
                        <svg class="w-full h-full drop-shadow-[0_0_15px_rgba(6,182,212,0.4)]" viewBox="0 0 100 100">
                            <path d="M50 20L85 40V75L50 95L15 75V40L50 20Z" fill="#0f172a" stroke="#06b6d4" stroke-width="2"></path>
                            <text fill="white" font-size="22" font-weight="bold" text-anchor="middle" x="50" y="65">In</text>
                        </svg>
                    </div>
                    <h3 class="text-xs font-semibold text-white uppercase italic">Spiral Data</h3>
                </li>
                <li class="flex flex-col items-center gap-4 group">
                    <div class="w-20 h-20 transition-transform group-hover:-translate-y-2">
                        <svg class="w-full h-full drop-shadow-[0_0_15px_rgba(14,165,233,0.4)]" viewBox="0 0 100 100">
                            <path d="M50 20L85 40V75L50 95L15 75V40L50 20Z" fill="#0f172a" stroke="#0ea5e9" stroke-width="2"></path>
                            <text fill="white" font-size="22" font-weight="bold" text-anchor="middle" x="50" y="65">L1</text>
                        </svg>
                    </div>
                    <h3 class="text-xs font-semibold text-white uppercase italic">ReLU Layer</h3>
                </li>
                <li class="flex flex-col items-center gap-4 group">
                    <div class="w-20 h-20 transition-transform group-hover:-translate-y-2">
                        <svg class="w-full h-full drop-shadow-[0_0_15px_rgba(59,130,246,0.4)]" viewBox="0 0 100 100">
                            <path d="M50 20L85 40V75L50 95L15 75V40L50 20Z" fill="#0f172a" stroke="#3b82f6" stroke-width="2"></path>
                            <text fill="white" font-size="22" font-weight="bold" text-anchor="middle" x="50" y="65">L2</text>
                        </svg>
                    </div>
                    <h3 class="text-xs font-semibold text-white uppercase italic">Softmax Out</h3>
                </li>
                <li class="flex flex-col items-center gap-4 group">
                    <div class="w-20 h-20 transition-transform group-hover:-translate-y-2">
                        <svg class="w-full h-full drop-shadow-[0_0_15px_rgba(139,92,246,0.4)]" viewBox="0 0 100 100">
                            <path d="M50 20L85 40V75L50 95L15 75V40L50 20Z" fill="#0f172a" stroke="#8b5cf6" stroke-width="2"></path>
                            <text fill="white" font-size="22" font-weight="bold" text-anchor="middle" x="50" y="65">Lss</text>
                        </svg>
                    </div>
                    <h3 class="text-xs font-semibold text-white uppercase italic">Cross-Entropy</h3>
                </li>
            </ol>
        </div>
    </section>
</main>
    <footer class="mt-24 mb-2 border-t border-white/5 pt-16 text-center">
        <p class="text-secondary text-sm">Geoffrey Franz &copy; 2026 — De l'Architecture Cloud à l'Intelligence Artificielle.</p>
    </footer>
</body>
</html>