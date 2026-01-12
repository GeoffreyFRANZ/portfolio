<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

try {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Nettoyage des données entrantes
        $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
        $email   = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
        $message = htmlspecialchars(trim($_POST['message'] ?? ''));

        if (!$email || empty($name) || empty($message)) {
            throw new Exception("Données du formulaire invalides.");
        }

        $mail = new PHPMailer(true);

        // Configuration SMTP (Reprise de tes paramètres fonctionnels)
        $mail->isSMTP();
        $mail->Host       = "smtp.hostinger.com";
        $mail->SMTPAuth   = true;
        $mail->Username   =  "portfolio@geoffreyfranz.fr";
        $mail->Password   =  'Tchouni.0102';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       =  465;
        $mail->CharSet    = 'UTF-8';
        // Destinataires
        $mail->setFrom($_ENV['SMTP_FROM'], $_ENV['SMTP_FROM_NAME']);
        $mail->addAddress($_ENV['RECEIVER_EMAIL']);
        $mail->addReplyTo($email, $name);

        // Contenu
        $mail->isHTML(true);
        $mail->Subject = "Nouveau message Portfolio de " . $name;
        $mail->Body    = "
            <div style='font-family: Arial, sans-serif; padding: 20px;'>
                <h2 style='color: #6211d4;'>Message reçu depuis le Portfolio</h2>
                <p><strong>De :</strong> {$name} ({$email})</p>
                <p><strong>Message :</strong></p>
                <div style='background: #f4f4f4; padding: 15px; border-radius: 5px;'>
                    " . nl2br($message) . "
                </div>
            </div>";

        $mail->send();

        $_SESSION['mail_status'] = 'success';
        $_SESSION['mail_message'] = "Votre message a été transmis avec succès.";
    }
} catch (Exception $e) {
    $_SESSION['mail_status'] = 'error';
    $_SESSION['mail_message'] = "Erreur de transmission : " . $e->getMessage();
}

// Redirection vers la page de contact pour éviter le renvoi du formulaire au refresh
header("Location: contact.php");
exit();