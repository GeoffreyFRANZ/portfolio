<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

// Charger .env
try {
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();
} catch (\Exception $e) {
    die("Erreur critique : Fichier .env introuvable.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Nettoyage des données (ton ancienne logique fiable)
    $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email   = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
    $subject = htmlspecialchars(trim($_POST['subject'] ?? 'Sans sujet'));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (!$email || empty($name) || empty($message)) {
        $_SESSION['mail_status'] = 'error';
        $_SESSION['mail_message'] = "Veuillez remplir correctement tous les champs.";
        header("Location: contact.php");
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Config SMTP depuis le .env
        $mail->isSMTP();
        $mail->Host       = $_ENV['SMTP_HOST'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['SMTP_USER'];
        $mail->Password   = $_ENV['SMTP_PASS'];
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = $_ENV['SMTP_PORT'];
        $mail->CharSet    = 'UTF-8';

        // Destinataires
        $mail->setFrom($_ENV['SMTP_FROM'], $_ENV['SMTP_FROM_NAME']);
        $mail->addAddress($_ENV['RECEIVER_EMAIL']);
        $mail->addReplyTo($email, $name);

        // Contenu
        $mail->isHTML(true);
        $mail->Subject = "Contact Portfolio : $subject";
        $mail->Body    = "<h2>Message de $name</h2><p><strong>Email:</strong> $email</p><p>".nl2br($message)."</p>";

        $mail->send();

        $_SESSION['mail_status'] = 'success';
        $_SESSION['mail_message'] = "Votre connexion a été établie avec succès.";

    } catch (Exception $e) {
        $_SESSION['mail_status'] = 'error';
        $_SESSION['mail_message'] = "Erreur de transmission : {$mail->ErrorInfo}";
    }
}

// Redirection finale vers le formulaire
header("Location: contact.php");
exit;