<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

$success = null;
$error = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Sécurisation des données
    $name    = htmlspecialchars(trim($_POST['name']));
    $email   = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    if (!$email) {
        $error = "Adresse email invalide.";
    } else {
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'portfolio@geoffreyfranz.fr';
            $mail->Password = 'Tchouni.0102';
            $mail->SMTPSecure = 'ssl'; // ou 'ssl'
            $mail->Port = 465;
            $mail->CharSet = 'UTF-8';
            $mail->isHTML(true);

            // EXPÉDITEUR
            $mail->setFrom('portfolio@geoffreyfranz.fr', 'Portfolio'); // identique aussi
            $mail->addReplyTo('portfolio@geoffreyfranz.fr', 'Portfolio'); // optionnel
            $mail->addAddress('franz.geoffrey@hotmail.fr'); //
            // CONTENU
            $mail->isHTML(true);
            $mail->Subject = "Nouveau message depuis le portfolio";
            $mail->Body    = "
                <h2>Nouveau message reçu</h2>
                <p><strong>Nom :</strong> {$name}</p>
                <p><strong>Email :</strong> {$email}</p>
                <p><strong>Message :</strong><br>{$message}</p>
            ";
            $mail->send();
            $success = "Votre message a bien été envoyé.";
        } catch (Exception $e) {
            $error = "Erreur lors de l'envoi : " . $mail->ErrorInfo;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Développeur back‑end spécialisé en PHP, Node.js, Docker et AWS.
     Découvrez mes projets professionnels, mon parcours et ma transition vers l’IA.
     Disponible pour une alternance en 2026.">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,300;9..144,400;9..144,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.min.css">
</head>
<body>
<div id="container">
    <nav class="sidebar" aria-label="Navigation principale">
        <div class="nav-links">
            <a href="#" data-target="header">Introduction</a>
            <a href="#" data-target="skills">Compétences</a>
            <a href="#" data-target="projects">Projets</a>
            <a href="CV.pdf" target="_blank">CV</a>
            <a href="#" data-target="contact">Contact</a>
        </div>
    </nav>
    <section id="header" class="section container active">
        <header class="header-content">
            <h1 class="header-title">Geoffrey FRANZ</h1>
            <div class="holo-divider big" aria-hidden="true"></div>
            <h2 class="header-tagline">
                Développeur Web – en recherche d'alternance IA
            </h2>
        </header>
        <article class="intro-content">
            <div class="intro-layout">
                <figure class="intro-figure">
                    <img src="profil.png" alt="Portrait de Geoffrey Franz" class="intro-photo">
                </figure>
                <div class="intro-description">
                    <h3>À propos</h3>
                    <p>Je m’appelle <strong>Geoffrey Franz</strong>, développeur web avec une solide expérience sur des projets front et back. J’aime construire des applications claires, fiables et bien structurées, avec une attention particulière portée à l’expérience utilisateur et à la qualité du code.</p>
                    <p>Aujourd’hui, je fais évoluer mon parcours vers <strong>l’intelligence artificielle</strong>. Je me forme activement aux concepts et aux outils modernes de l’IA afin d’enrichir mon profil de développeur et d’apporter une dimension plus intelligente et automatisée aux projets que je construis.</p>
                    <p>Mon objectif est simple : combiner mes compétences web avec l’IA pour créer des solutions plus efficaces, plus utiles et plus ambitieuses.</p>
                </div>
            </div>
        </article>
        <article class="intro-text-block highlight-block">
            <h3>Alternance IA – EPITECH</h3>
            <p>Actuellement inscrit à <strong>EPITECH</strong> pour intégrer le bachelor, je recherche une alternance orientée <strong>IA</strong> afin de me spécialiser et d’apprendre au contact de projets concrets. Mon objectif est clair : rejoindre une équipe où je peux progresser, contribuer et monter en compétence sur des technologies d’intelligence artificielle à fort impact.</p>
            <p>Si vous recherchez un profil sérieux, autonome, capable d’apprendre vite et de s’investir pleinement, je serais heureux d’échanger avec vous.</p>
        </article>
    </section>
    <main>
        <section id="skills" class="container">
            <header>
                <h2>Compétences</h2>
                <div class="holo-divider small"></div>
            </header>
            <article>
                <section class="skills-grid">
                    <article class="concept-card">
                        <h4>Back-end</h4>
                        <ul>
                            <li>PHP</li>
                            <li>Symfony</li>
                            <li>Node.js</li>
                            <li>SQL</li>
                            <li>API</li>
                            <li>Sécurité & authentification (JWT, rôles)</li>
                            <li>Tests & qualité (PHPUnit, clean code)</li>
                        </ul>
                    </article>
                    <article class="concept-card">
                        <h4>Front-end</h4>
                        <ul>
                            <li>Html</li>
                            <li>Css</li>
                            <li>Bootstrap</li>
                            <li>React</li>
                            <li>Javascript</li>
                            <li>Intégration</li>
                        </ul>
                    </article>
                    <article class="concept-card">
                        <h4>Cloud/Devops</h4>
                        <ul>
                            <li>AWS (Lambda, S3, CloudFront, IAM)</li>
                            <li>Microsoft Entra</li>
                            <li>Docker</li>
                            <li>Postman</li>
                            <li>CI/CD (GitHub Actions)</li>
                            <li>Monitoring & logs</li>
                            <li>Déploiements automatisés</li>
                        </ul>
                    </article>
                    <article class="concept-card">
                        <h4>Soft Skill</h4>
                        <ul>
                            <li>Autonomie</li>
                            <li>Organisation rigoureuse</li>
                            <li>Communication claire</li>
                            <li>Résolution de problèmes complexes</li>
                            <li>Pensée critique & logique</li>
                        </ul>
                    </article>
                </section>
            </article>
            <article>
                <header>
                    <h2 class="header-title">Montée en compétences</h2>
                    <div class="holo-divider small"></div>
                </header>
                <h3 class="learning-block-title">les concepts du réseaux néuronal </h3>
                <section class="skills-grid">
                    <article class="concept-card">
                        <h4>Neurone artificiel</h4>
                        <p>Entrées → poids → somme → activation. C’est l’unité de base du réseau.</p>
                    </article>
                    <article class="concept-card">
                        <h4>Poids & biais</h4>
                        <p>Paramètres appris par le modèle. Les poids contrôlent l’influence,
                            le biais décale la sortie.
                        </p>
                    </article>
                    <article class="concept-card">
                        <h4>Fonction d’activation</h4>
                        <p>ReLU utilisée pour introduire de la non-linéarité et stabiliser l’apprentissage.</p>
                    </article>
                    <article class="concept-card">
                        <h4>Forward pass</h4>
                        <p>Calcul de la prédiction du réseau avant comparaison à la vérité terrain.</p>
                    </article>
                    <article class="concept-card">
                        <h4>Backpropagation</h4>
                        <p>Mécanisme d’ajustement des poids basé sur le gradient de la fonction de perte.</p>
                    </article>
                    <article class="concept-card">
                        <h4>Fonction de perte</h4>
                        <p>Mesure de l’erreur du modèle (MSE, Cross-Entropy selon la tâche).</p>
                    </article>
                    <article class="concept-card">
                        <h4>Optimiseur</h4>
                        <p>Algorithmes comme SGD ou Adam pour mettre à jour les poids efficacement.</p>
                    </article> <article class="concept-card">
                        <h4>Architecture dense</h4>
                        <p>Réseau composé de couches fully connected (Dense), nombre de couches et de neurones
                            par couche.</p>
                    </article>
                </section>
                <span style="color: white; margin: 0.5rem; font-size: smaller; font-style: italic">
                    * Le réseau neuronal est dispo dans la section compétences et sur mon Github
                </span>
            </article>
            <article>
                <header>
                    <h3>Étape suivante de mon apprentissage</h3>
                    <div class="holo-divider small"></div>
                </header>
                <section class="roadmap-steps">
                    <article class="roadmap-step">
                        <span class="step-tag">Étape 1</span>
                        <h4>Premier MLP complet</h4>
                        <p>Construire un réseau fully connected avec plusieurs couches denses et
                            ReLU entre chaque couche.</p>
                    </article>
                    <article class="roadmap-step">
                        <span class="step-tag">Étape 2</span>
                        <h4>Pipeline d’entraînement</h4>
                        <p>Mettre en place une boucle d’entraînement complète : forward, perte, backpropagation, optimisation.</p>
                    </article>
                    <article class="roadmap-step">
                        <span class="step-tag">Étape 3</span>
                        <h4>Projet concret</h4>
                        <p>Entraîner ce MLP sur un dataset simple (ex : classification MNIST ou binaire) et analyser les résultats.</p>
                    </article>
                </section>
            </article>
        </section>
        <section id="projects" class="container">
            <header class="projects-header">
                <h2>Projets</h2>
                <div class="holo-divider small"></div>
            </header>
            <article>
                <header class="project-header">
                    <h3>Plateforme de gestion des intervenants – FEDE</h3>
                    <a class="project-link" href="https://intervenants.fede.education" target="_blank">
                        https://intervenants.fede.education
                    </a>
                </header>
                <section class="project-content">
                    <figure>
                        <img src="form-step1.png" alt="Formulaire intervenants – Étape 1">
                    </figure>
                    <article class="project-story">
                        <h4>Présentation du projet</h4>
                        <p>
                            J’ai développé une plateforme complète permettant de gérer les candidatures des intervenants
                            de la Fédération Européenne des Écoles. Ce projet s’inscrit au cœur du système d’information
                            de la FEDE : il centralise les demandes, automatise les validations et crée les comptes
                            intervenants directement dans Microsoft Entra (Azure AD), afin de permettre l’accès aux
                            différentes applications internes.
                        </p>
                        <p>
                            Le système repose sur un formulaire multi‑étapes avancé, un workflow métier structuré,
                            un audit log détaillé, une gestion fine des rôles et des permissions, ainsi qu’une intégration
                            profonde avec les services Microsoft (Entra, SharePoint) et les services AWS déjà en place.
                            Les documents (CV, pièces justificatives) sont automatiquement envoyés dans SharePoint,
                            tandis que les comptes intervenants sont créés et configurés via l’API Entra.
                        </p>
                        <p>
                            Ce projet a été réalisé en autonomie quasi totale, en collaboration directe avec les équipes
                            pédagogiques et administratives. J’ai conçu l’architecture, développé le front et le back,
                            mis en place les intégrations cloud, sécurisé les endpoints, et déployé l’ensemble sur le VPS OVH
                            via un environnement Docker. Le résultat est une application robuste, maintenable et utilisée
                            quotidiennement pour gérer les intervenants du réseau FEDE.
                        </p>
                    </article>
                    <article class="project-features">
                        <section>
                            <h4>Frontend</h4>
                            <ul>
                                <li>Twig + JavaScript pur</li>
                                <li>Formulaire multi‑étapes dynamique (validation progressive)</li>
                                <li>Affichage intelligent des catégories de matières</li>
                                <li>Gestion des rôles intervenants (UI dédiée)</li>
                                <li>Récapitulatif complet avant validation</li>
                                <li>UX claire, structurée et pensée pour les équipes pédagogiques</li>
                            </ul>
                        </section>
                        <section>
                            <h4>Infra & Cloud</h4>
                            <ul>
                                <li>Déploiement sur VPS OVH</li>
                                <li>Environnement Docker (multi‑services)</li>
                                <li>Microsoft Entra (authentification + provisioning utilisateurs)</li>
                                <li>SharePoint (stockage documentaire)</li>
                                <li>Intégration AWS Lambda / SQS pour les tâches asynchrones</li>
                                <li>Gestion des permissions et sécurité des endpoints</li>
                            </ul>
                        </section>
                        <section>
                            <h4>Backend</h4>
                            <ul>
                                <li>Workflow multi‑étapes (soumission → validation → création compte)</li>
                                <li>SQL : candidatures + pièces jointes</li>
                                <li>Provisioning automatique via Microsoft Entra (Azure AD)</li>
                                <li>Rôles & permissions dynamiques</li>
                                <li>Endpoints sécurisés (intégrations internes)</li>
                                <li>Statuts : à traiter / accepté / refusé / modifié</li>
                                <li>Audit log complet (actions & transitions)</li>
                                <li>SharePoint : stockage CV & documents</li>
                                <li>AWS : Lambda / SQS (automatisations)</li>
                            </ul>
                        </section>
                    </article>
                </section>
            </article>
            <article>
                <header class="project-header">
                    <h3>Générations de PDF  – FEDE</h3>
                </header>
                <section class="project-content">
                    <article class="project-story">
                        <h4>Présentation du projet</h4>
                        <p>
                            J’ai développé un service complet de génération de documents PDF automatisés pour la Fédération
                            Européenne des Écoles. L’objectif était de produire des documents complexes à partir de données
                            métier, avec une mise en page dynamique, des sections conditionnelles, des tableaux, des fusions
                            de pages et une pagination intelligente.
                        </p>
                        <p>
                            Le cœur du système repose sur une Lambda AWS écrite en Python, utilisant ReportLab pour la
                            génération programmatique et PyPDF2 pour la fusion et la manipulation des pages. Le service
                            récupère les données, construit le document, applique les règles métier, puis stocke le PDF
                            final dans un bucket S3 via des URLs pré‑signées.
                        </p>
                        <p>
                            Ce projet m’a demandé d’apprendre rapidement un nouvel environnement technique, de comprendre
                            un workflow métier complet et de livrer un outil fiable utilisé quotidiennement par les équipes
                            internes. J’ai travaillé en autonomie guidée : accompagné lorsque nécessaire, mais responsable
                            de l’analyse et de l’implémentation du service, ainsi que de son intégration avec l’intranet
                            existant.
                        </p>
                        <p>
                            Le résultat est un service robuste, maintenable et automatisé, qui a permis de réduire
                            significativement le temps de production documentaire tout en améliorant la qualité et la
                            cohérence des documents générés.
                        </p>
                    </article>
                    <article class="project-features">
                        <section>
                            <h4>Frontend</h4>
                            <ul>
                                <li>Interface interne pour déclencher la génération</li>
                                <li>Formulaire de sélection des données à intégrer</li>
                                <li>Affichage des documents générés</li>
                                <li>Intégration dans l’écosystème FEDE existant</li>
                            </ul>
                        </section>
                        <section>
                            <h4>Infra & Cloud</h4>
                            <ul>
                                <li>AWS Lambda (serverless)</li>
                                <li>AWS S3 (stockage des PDF)</li>
                                <li>IAM (permissions minimales)</li>
                                <li>CloudWatch (logs & monitoring)</li>
                                <li>Intégration avec les API internes FEDE</li>
                                <li>Déploiement automatisé via pipeline interne</li>
                            </ul>
                        </section>
                        <section>
                            <h4>Backend</h4>
                            <ul>
                                <li>Lambda AWS en Python</li>
                                <li>Génération PDF avancée (ReportLab)</li>
                                <li>Fusion et manipulation de pages (PyPDF2)</li>
                                <li>Règles métier complexes (sections conditionnelles)</li>
                                <li>Pagination dynamique</li>
                                <li>Stockage S3 via presigned URLs</li>
                                <li>Gestion des erreurs et logs structurés</li>
                                <li>Documentation technique complète</li>
                            </ul>
                        </section>
                    </article>
                </section>
            </article>
            <article>
                <header class="project-header">
                    <h3>Equivalences – FEDE</h3>
                    <a class="project-link" href="https://equivalences.fede.education" target="_blank">
                        https://equivalences.fede.education
                    </a>
                </header>
                <section class="project-content">
                    <figure>
                        <img src="img.png" alt="Formulaire intervenants – Étape 1">
                    </figure>
                    <article class="project-story">
                        <h4>Présentation du projet</h4>
                        <p>
                            J’ai développé une plateforme complète permettant de gérer les candidatures des intervenants
                            de la Fédération Européenne des Écoles. Ce projet s’inscrit au cœur du système d’information
                            de la FEDE : il centralise les demandes, automatise les validations et crée les comptes
                            intervenants directement dans Microsoft Entra (Azure AD), afin de permettre l’accès aux
                            différentes applications internes.
                        </p>
                        <p>
                            Le système repose sur un formulaire multi‑étapes avancé, un workflow métier structuré,
                            un audit log détaillé, une gestion fine des rôles et des permissions, ainsi qu’une intégration
                            profonde avec les services Microsoft (Entra, SharePoint) et les services AWS déjà en place.
                            Les documents (CV, pièces justificatives) sont automatiquement envoyés dans SharePoint,
                            tandis que les comptes intervenants sont créés et configurés via l’API Entra.
                        </p>
                        <p>
                            Ce projet a été réalisé en autonomie quasi totale, en collaboration directe avec les équipes
                            pédagogiques et administratives. J’ai conçu l’architecture, développé le front et le back,
                            mis en place les intégrations cloud, sécurisé les endpoints, et déployé l’ensemble sur le VPS OVH
                            via un environnement Docker. Le résultat est une application robuste, maintenable et utilisée
                            quotidiennement pour gérer les intervenants du réseau FEDE.
                        </p>
                    </article>
                    <article class="project-features">
                        <section>
                            <h4>Frontend</h4>
                            <ul>
                                <li>Twig + JavaScript pur</li>
                                <li>Formulaire multi‑étapes dynamique (validation progressive)</li>
                                <li>Affichage intelligent des catégories de matières</li>
                                <li>Gestion des rôles intervenants (UI dédiée)</li>
                                <li>Récapitulatif complet avant validation</li>
                                <li>UX claire, structurée et pensée pour les équipes pédagogiques</li>
                            </ul>
                        </section>
                        <section>
                            <h4>Infra & Cloud</h4>
                            <ul>
                                <li>Déploiement sur VPS OVH</li>
                                <li>Environnement Docker (multi‑services)</li>
                                <li>Microsoft Entra (authentification + provisioning utilisateurs)</li>
                                <li>SharePoint (stockage documentaire)</li>
                                <li>Intégration AWS Lambda / SQS pour les tâches asynchrones</li>
                                <li>Gestion des permissions et sécurité des endpoints</li>
                            </ul>
                        </section>
                        <section>
                            <h4>Backend</h4>
                            <ul>
                                <li>Workflow multi‑étapes (soumission → validation → création compte)</li>
                                <li>SQL : candidatures + pièces jointes</li>
                                <li>Provisioning automatique via Microsoft Entra (Azure AD)</li>
                                <li>Rôles & permissions dynamiques</li>
                                <li>Endpoints sécurisés (intégrations internes)</li>
                                <li>Statuts : à traiter / accepté / refusé / modifié</li>
                                <li>Audit log complet (actions & transitions)</li>
                                <li>SharePoint : stockage CV & documents</li>
                                <li>AWS : Lambda / SQS (automatisations)</li>
                            </ul>
                        </section>
                    </article>
                </section>
            </article>
        </section>
        <section id="contact" class="container">
            <?php if ($success): ?>
                <div class="alert success"><?= $success ?></div>
            <?php endif; ?>

            <?php if ($error): ?>
                <div class="alert error"><?= $error ?></div>
            <?php endif; ?>
            <form action="" method="POST" class="contact-form">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="name" required />
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required />
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn">Envoyer</button>
        </section>
    </main>
</div>
<script src="scripts.min.js"></script>
</body>
</html>