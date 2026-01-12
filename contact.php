<?php
session_start();

// --- LOGIQUE D'ENVOI (Tout dans le même fichier) ---
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_contact'])) {

    // On force l'affichage des erreurs au cas où il manque PHPMailer dans vendor
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    try {
        // L'autoloader est quand même nécessaire pour charger les classes PHPMailer
        if (!file_exists(__DIR__ . '/vendor/autoload.php')) {
            throw new Exception("Le dossier 'vendor' est introuvable. Lancez 'composer install' ou vérifiez le chemin.");
        }
        require_once __DIR__ . '/vendor/autoload.php';

        // Nettoyage des données
        $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
        $email   = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
        $message = htmlspecialchars(trim($_POST['message'] ?? ''));

        if (!$email || empty($name) || empty($message)) {
            throw new Exception("Données invalides. Veuillez remplir tous les champs.");
        }

        // Configuration PHPMailer avec tes variables EN DUR
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);

        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'portfolio@geoffreyfranz.fr';
        $mail->Password   = 'Tchouni.0102'; // Tes identifiants en dur
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->CharSet    = 'UTF-8';

        $mail->setFrom('portfolio@geoffreyfranz.fr', 'Portfolio - Geoffrey Franz');
        $mail->addAddress('portfolio@geoffreyfranz.fr'); // Envoi à toi-même
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = "Nouveau contact de : " . $name;
        $mail->Body    = "
            <div style='font-family: sans-serif; border: 1px solid #6211d4; padding: 20px; border-radius: 10px;'>
                <h2 style='color: #6211d4;'>Message de $name</h2>
                <p><strong>Email :</strong> $email</p>
                <p><strong>Message :</strong></p>
                <p style='white-space: pre-wrap; background: #f4f4f4; padding: 15px;'>$message</p>
            </div>";

        $mail->send();

        $_SESSION['mail_status'] = 'success';
        $_SESSION['mail_message'] = "Connexion établie avec succès !";

    } catch (Exception $e) {
        $_SESSION['mail_status'] = 'error';
        $_SESSION['mail_message'] = "Erreur de transmission : " . $e->getMessage();
    }

    // Redirection pour éviter le double envoi au rafraîchissement
    header("Location: contact.php");
    exit();
}
?>
<!DOCTYPE html>
<html class="dark" lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Contact | Geoffrey Franz</title>
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
                    },
                    fontFamily: { display: ['Space Grotesk', 'sans-serif'] }
                }
            }
        }
    </script>
    <style>
        .bg-grid-pattern { background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.05) 1px, transparent 0); background-size: 40px 40px; }
        .glow-input:focus { box-shadow: 0 0 15px rgba(98, 17, 212, 0.2); border-color: #6211d4; }
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
                <h1 class="text-5xl md:text-7xl font-bold tracking-tighter leading-none mb-4">
                    Initialiser la <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent-cyan">Connexion</span>
                </h1>
            </header>

            <div class="grid lg:grid-cols-12 gap-12">
                <section class="lg:col-span-5 space-y-6">
                    <h2 class="text-white text-xl font-bold flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">hub</span> Canaux Directs
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
                    </div>
                </section>

                <section class="lg:col-span-7">
                    <div class="glass-panel p-8 rounded-2xl border border-white/5 bg-white/[0.02] relative">
                        <h2 class="text-white text-xl font-bold mb-6">Liaison de Transmission</h2>

                        <?php if (isset($_SESSION['mail_status'])): ?>
                            <div class="mb-6 p-4 rounded-lg text-sm font-medium <?php echo $_SESSION['mail_status'] === 'success' ? 'bg-green-500/20 text-green-400 border border-green-500/50' : 'bg-red-500/20 text-red-400 border border-red-500/50'; ?>">
                                <?php echo $_SESSION['mail_message']; unset($_SESSION['mail_status']); unset($_SESSION['mail_message']); ?>
                            </div>
                        <?php endif; ?>

                        <form action="contact.php" method="POST" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-[10px] uppercase tracking-widest text-secondary font-bold ml-1">Nom</label>
                                    <input name="name" class="glow-input w-full bg-background-dark border border-white/10 text-white rounded-lg px-4 py-3 focus:outline-none transition-all" type="text" required/>
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] uppercase tracking-widest text-secondary font-bold ml-1">Email</label>
                                    <input name="email" class="glow-input w-full bg-background-dark border border-white/10 text-white rounded-lg px-4 py-3 focus:outline-none transition-all" type="email" required/>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] uppercase tracking-widest text-secondary font-bold ml-1">Payload (Message)</label>
                                <textarea name="message" class="glow-input w-full bg-background-dark border border-white/10 text-white rounded-lg px-4 py-3 focus:outline-none transition-all resize-none" rows="5" required></textarea>
                            </div>
                            <button type="submit" name="submit_contact" class="w-full py-4 bg-primary hover:bg-primary/90 text-white font-bold rounded-lg shadow-lg hover:-translate-y-0.5 transition-all flex items-center justify-center gap-3">
                                <span>Transmettre</span>
                                <span class="material-symbols-outlined text-sm">send</span>
                            </button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </main>
</div>
</body>
</html>