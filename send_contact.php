<?php
// Utilisation du chemin absolu pour garantir le chargement de l'autoloader
require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

// Chargement sécurisé des variables d'environnement
try {
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();
} catch (\Exception $e) {
    header('Content-Type: application/json');
    echo json_encode(['status' => 'error', 'message' => 'Erreur de configuration système (.env manquant).']);
    exit;
}

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sécurisation des données (reprise de ton ancien système fonctionnel)
    $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email   = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
    $subject = htmlspecialchars(trim($_POST['subject'] ?? 'Sans objet'));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (!$email || empty($name) || empty($message)) {
        echo json_encode(['status' => 'error', 'message' => 'Données invalides ou manquantes.']);
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Configuration Serveur via .env
        $mail->isSMTP();
        $mail->Host       = $_ENV['SMTP_HOST'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['SMTP_USER'];
        $mail->Password   = $_ENV['SMTP_PASS'];
        $mail->SMTPSecure = 'ssl'; // Forcé en SSL pour le port 465
        $mail->Port       = $_ENV['SMTP_PORT'];
        $mail->CharSet    = 'UTF-8';

        // Expéditeur et Destinataire
        $mail->setFrom($_ENV['SMTP_FROM'], $_ENV['SMTP_FROM_NAME']);
        $mail->addAddress($_ENV['RECEIVER_EMAIL']);
        $mail->addReplyTo($email, $name);

        // Contenu du mail
        $mail->isHTML(true);
        $mail->Subject = "Nouveau message depuis le portfolio : " . $subject;
        $mail->Body    = "
            <div style='font-family: sans-serif;'>
                <h2>Nouveau message reçu</h2>
                <p><strong>Nom :</strong> {$name}</p>
                <p><strong>Email :</strong> {$email}</p>
                <p><strong>Sujet :</strong> {$subject}</p>
                <p><strong>Message :</strong><br>" . nl2br($message) . "</p>
            </div>
        ";
        $mail->AltBody = strip_tags($message);

        $mail->send();
        echo json_encode(['status' => 'success', 'message' => 'Votre message a bien été envoyé.']);

    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => "Erreur lors de l'envoi : " . $mail->ErrorInfo]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Méthode non autorisée.']);
}