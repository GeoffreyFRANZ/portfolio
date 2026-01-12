<?php session_start(); ?>
<!DOCTYPE html>
<html class="dark" lang="fr">
<head>
</head>
<body class="bg-background-dark font-display text-white min-h-screen flex flex-col selection:bg-primary/30">
<main class="flex-grow flex flex-col justify-center px-6 py-12">
    <div class="max-w-6xl mx-auto w-full">
        <div class="grid lg:grid-cols-12 gap-12">
            <section class="lg:col-span-7">
                <div class="glass-panel p-8 rounded-2xl border border-white/5 bg-white/[0.02] relative">
                    <h2 class="text-white text-xl font-bold mb-6">Liaison de Transmission</h2>

                    <?php if (isset($_SESSION['mail_status'])): ?>
                        <div class="mb-6 p-4 rounded-lg text-sm font-medium <?php echo $_SESSION['mail_status'] === 'success' ? 'bg-green-500/20 text-green-400 border border-green-500/50' : 'bg-red-500/20 text-red-400 border border-red-500/50'; ?>">
                            <?php
                            echo $_SESSION['mail_message'];
                            unset($_SESSION['mail_status']);
                            unset($_SESSION['mail_message']);
                            ?>
                        </div>
                    <?php endif; ?>

                    <form action="send_contact.php" method="POST" class="space-y-6">
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

                        <button type="submit" class="w-full py-4 bg-primary hover:bg-primary/90 text-white font-bold rounded-lg shadow-lg hover:-translate-y-0.5 transition-all flex items-center justify-center gap-3">
                            <span>Transmettre le Message</span>
                            <span class="material-symbols-outlined text-sm">send</span>
                        </button>
                    </form>
                </div>
            </section>
        </div>
    </div>
</main>
</body>
</html>