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
    <title>Cosmic Background</title>
    <link rel="stylesheet" href="newstyle.css">
</head>

<body>

<canvas id="cosmic-bg"></canvas>
<aside class="sidebar">
    <nav>
        <a href="#" data-target="header">Introduction</a>
        <a href="#" data-target="skills">Compétences</a>
        <a href="#" data-target="projects">Projets</a>
        <a href="CV.pdf" target="_blank">CV</a>
        <a href="#" data-target="contact">Contact</a>
    </nav>
</aside>
<section id="header" class="header-section section active">
    <div class="header-content">
        <h1 class="header-title">Geoffrey FRANZ</h1>
        <div class="holo-divider big"></div>
        <h2 class="header-name">Développeur Web – en recherche d'alternance IA (EPITECH)</h2>
    </div>
    <div class="intro-layout">
        <!-- Colonne gauche -->
        <div class="intro-col">
            <div class="intro-photo-wrapper">
                <img src="profil.png"
                     alt="Portrait de Geoffrey Franz"
                     class="intro-photo">
            </div>
        </div>
        <!-- Colonne droite -->
        <div class="intro-text-block">
            <h2>À propos</h2>

            <p>Je m’appelle Geoffrey Franz, développeur web avec une solide expérience sur des projets front et back. J’aime construire des applications claires, fiables et bien structurées, avec une attention particulière portée à l’expérience utilisateur et à la qualité du code.</p>

            <p>Aujourd’hui, je fais évoluer mon parcours vers l’intelligence artificielle. Je me forme activement aux concepts et aux outils modernes de l’IA afin d’enrichir mon profil de développeur et d’apporter une dimension plus intelligente et automatisée aux projets que je construis.</p>

            <p>Mon objectif est simple : combiner mes compétences web avec l’IA pour créer des solutions plus efficaces, plus utiles et plus ambitieuses.</p>
        </div>
    </div>
    <div class="intro-text-block">
        <h2>Alternance IA – EPITECH</h2>

        <p>Actuellement étudiant à EPITECH, je suis en recherche d’une alternance orientée <strong>IA</strong>, afin de me spécialiser et d’apprendre au contact de projets concrets. Je souhaite rejoindre une équipe où je peux progresser, contribuer, et monter en compétence sur les technologies d’intelligence artificielle.</p>

        <p>Je suis motivé par les environnements où l’on peut expérimenter, comprendre les enjeux métier, et transformer des idées en outils réels. Je suis autonome, rigoureux, et à l’aise pour documenter, communiquer et travailler en équipe.</p>

        <p>Si vous recherchez un profil sérieux, capable d’apprendre vite et de s’investir pleinement dans une alternance IA, je serais ravi d’échanger avec vous.</p>
    </div>
</section>

<section id="projects" class="section">

    <div class="project-header">
        <h2 class="project-title">Plateforme de gestion des intervenants – FEDE</h2>

        <a class="project-link" href="https://intervenants.fede.education" target="_blank">
            https://intervenants.fede.education
        </a>
        <div class="project-tags">
            <span class="tag">Symfony</span>
            <span class="tag">JavaScript</span>
            <span class="tag">MySQL</span>
            <span class="tag">Microsoft Entra</span>
            <span class="tag">SharePoint</span>
            <span class="tag">Docker</span>
            <span class="tag">OVH</span>
        </div>

        <div class="holo-divider"></div>
    </div>
    <div class="project-content">
        <div class="project-image">
            <img src="form-step1.png" alt="Formulaire intervenants – Étape 1">
        </div>
        <div class="project-story">
            <h3>Présentation du projet</h3>

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
        </div>

        <div class="d-column">
            <div class="project-columns">

                <div class="project-col">
                    <h3>Frontend</h3>
                    <ul>
                        <li>Twig + JavaScript pur</li>
                        <li>Formulaire multi‑étapes dynamique (validation progressive)</li>
                        <li>Affichage intelligent des catégories de matières</li>
                        <li>Gestion des rôles intervenants (UI dédiée)</li>
                        <li>Récapitulatif complet avant validation</li>
                        <li>UX claire, structurée et pensée pour les équipes pédagogiques</li>
                    </ul>
                </div>
                <div class="project-col">
                    <h3>Infra & Cloud</h3>
                    <ul>
                        <li>Déploiement sur VPS OVH</li>
                        <li>Environnement Docker (multi‑services)</li>
                        <li>Microsoft Entra (authentification + provisioning utilisateurs)</li>
                        <li>SharePoint (stockage documentaire)</li>
                        <li>Intégration AWS Lambda / SQS pour les tâches asynchrones</li>
                        <li>Gestion des permissions et sécurité des endpoints</li>
                    </ul>
                </div>

                <div class="project-col">
                    <h3>Backend</h3>
                    <ul>
                        <li>Workflow multi‑étapes complet (soumission → validation → création compte)</li>
                        <li>Stockage SQL des candidatures et des pièces jointes</li>
                        <li>Création automatique des comptes via Microsoft Entra (Azure AD)</li>
                        <li>Attribution dynamique des rôles et permissions</li>
                        <li>Endpoints sécurisés pour connecter d’autres applications internes</li>
                        <li>Système de statuts : à traiter, accepté, refusé, modifié</li>
                        <li>Audit log complet (actions, transitions, modifications)</li>
                        <li>Intégration SharePoint pour le stockage des CV et documents</li>
                        <li>Intégration AWS existante (Lambda / SQS) pour certaines automatisations</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="project-header">
        <h2 class="project-title">Générations de PDF  – FEDE</h2>

        <div class="project-tags">
            <span class="tag">Python</span>
            <span class="tag">AWS</span>
            <span class="tag">Lambda</span>
        </div>
        <div class="holo-divider"></div>
    </div>
    <div class="project-content">
        <div class="project-image">
        </div>
        <div class="project-story">
            <h3>Présentation du projet</h3>

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
        </div>
        <div class="d-column">
            <div class="project-columns">

                <div class="project-col">
                    <h3>Frontend</h3>
                    <ul>
                        <li>Interface interne pour déclencher la génération</li>
                        <li>Formulaire de sélection des données à intégrer</li>
                        <li>Affichage des documents générés</li>
                        <li>Gestion des erreurs et retours utilisateur</li>
                        <li>Intégration dans l’écosystème FEDE existant</li>
                    </ul>
                </div>
                <div class="project-col">
                    <h3>Infra & Cloud</h3>
                    <ul>
                        <li>AWS Lambda (serverless)</li>
                        <li>AWS S3 (stockage des PDF)</li>
                        <li>IAM (permissions minimales)</li>
                        <li>CloudWatch (logs & monitoring)</li>
                        <li>Intégration avec les API internes FEDE</li>
                        <li>Déploiement automatisé via pipeline interne</li>
                    </ul>
                </div>
                <div class="project-col">
                    <h3>Backend</h3>
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
                </div>
            </div>
        </div>
    </div>
    <div class="project-header">
        <h2 class="project-title">Equivalences – FEDE</h2>
        <a class="project-link" href="https://equivalences.fede.education" target="_blank">
            https://intervenants.fede.education
        </a>
        <div class="project-tags">
            <span class="tag">React</span>
            <span class="tag">JavaScript</span>
            <span class="tag">Node.js</span>
            <span class="tag">AWS S3</span>
            <span class="tag">Api</span>
            <span class="tag">Stripe</span>
        </div>
        <div class="holo-divider"></div>
    </div>
    <div class="project-content">
        <div class="project-image">
            <img src="form-step1.png" alt="Formulaire intervenants – Étape 1">
        </div>
        <div class="project-story">
            <h3>Présentation du projet</h3>
            <p>
                Ce projet permet aux écoles partenaires de soumettre des demandes d’équivalences
                afin d’inscrire un étudiant directement à un certain niveau, à condition qu’il
                fournisse les justificatifs nécessaires (diplôme équivalent, expérience
                professionnelle, certifications, etc.). Le système applique un ensemble de règles
                métier structurées pour garantir une décision cohérente, fiable et standardisée.
            </p>
            <p>
                L’interface est développée en <strong>React</strong> avec une logique orientée
                composant : formulaires dynamiques, validation en temps réel, gestion des états,
                upload des fichiers, messages d’erreur contextualisés et sélection de la langue.
                L’ensemble du parcours est entièrement multilingue grâce à une couche
                <strong>i18n</strong> (FR/EN) qui gère la traduction des labels, des messages
                métier et des retours d’erreur.
            </p>
            <p>
                Le frontend communique avec une API interne en <strong>Node.js</strong> qui
                contient le moteur d’équivalences, la gestion des règles métier, les contrôles
                d’intégrité, la création des sessions Stripe, le traitement du webhook et
                l’envoi automatique des emails. Les pièces justificatives sont stockées dans
                <strong>AWS S3</strong> et toutes les opérations critiques sont monitorées via
                <strong>CloudWatch</strong>.
            </p>
            <p>
                Le workflow complet : sélection du pays et du niveau → remplissage du formulaire
                → upload des pièces justificatives → validation → création de la session Stripe
                → paiement → webhook Stripe → génération du résultat → envoi automatique des
                emails (école + FEDE) avec les pièces jointes stockées dans S3.
            </p>
        </div>
        <div class="d-column">
            <div class="project-columns">

                <div class="project-col">
                    <h3>Frontend</h3>
                    <ul>
                        <li>React</li>
                        <li>React Hooks & State Management</li>
                        <li>Formulaires dynamiques</li>
                        <li>Validation en temps réel</li>
                        <li>Upload de fichiers</li>
                        <li>i18n (FR/EN) – JSON versionnés</li>
                        <li>Gestion des erreurs contextualisées</li>
                        <li>Appels API sécurisés</li>
                    </ul>
                </div>
                <div class="project-col">
                    <h3>Infra & Cloud</h3>
                    <ul>
                        <li>AWS Lambda (serverless)</li>
                        <li>AWS S3 (stockage des pièces + règles + i18n)</li>
                        <li>AWS CloudWatch (logs & monitoring)</li>
                        <li>CI/CD léger</li>
                        <li>Gestion des environnements</li>
                        <li>Sécurisation des accès</li>
                    </ul>
                </div>
                <div class="project-col">
                    <h3>Backend</h3>
                    <ul>
                        <li>Node.js</li>
                        <li>API interne custom</li>
                        <li>Moteur d’équivalences (règles métier)</li>
                        <li>Gestion des exceptions</li>
                        <li>Stripe (session + webhook)</li>
                        <li>Envoi automatique d’emails</li>
                        <li>Validation des données</li>
                        <li>i18n backend (messages métier traduits)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section id="skills" class="section">
    <div class="header-content">
        <h1 class="header-title">Compétences</h1>
        <div class="holo-divider small"></div>
    </div>
    <div class="skills-grid">
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
    </div>
    <div class="header-content">
        <h1 class="header-title">Montée en compétences IA</h1>
        <div class="holo-divider small"></div>
    </div>
    <!-- Bloc 1 : Concepts actuels -->
    <div class="learning-block">
        <h3 class="learning-block-title">Concepts de mon réseau neuronal</h3>
        <div class="concepts-grid">
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
        </div>
        <span style="color: white; margin: 0.5rem; font-size: smaller; font-style: italic">* Le réseau neuronal est dispo dans la section compétences et sur mon Github</span>
    </div>
    <!-- Bloc 2 : Étape suivante -->
    <div class="learning-block">
        <h3 class="learning-block-title">Étape suivante de mon apprentissage</h3>
        <div class="roadmap-steps">
            <div class="roadmap-step">
                <span class="step-tag">Étape 1</span>
                <h4>Premier MLP complet</h4>
                <p>Construire un réseau fully connected avec plusieurs couches denses et
                    ReLU entre chaque couche.</p> </div>
            <div class="roadmap-step">
                <span class="step-tag">Étape 2</span>
                <h4>Pipeline d’entraînement</h4>
                <p>Mettre en place une boucle d’entraînement complète : forward, perte, backpropagation, optimisation.</p>
            </div>
            <div class="roadmap-step">
                <span class="step-tag">Étape 3</span>
                <h4>Projet concret</h4>
                <p>Entraîner ce MLP sur un dataset simple (ex : classification MNIST ou binaire) et analyser les résultats.</p>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="section">
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
    </form>
</section>
</body>
<script>
    document.querySelectorAll('.sidebar nav a').forEach(link => {
        link.addEventListener('click', e => {
            const targetId = link.dataset.target;
            console.log(targetId);
            if (!targetId) return;
            e.preventDefault();
            const section = document.getElementById(targetId);
            if (!section) return;

            document.querySelectorAll('.section').forEach(sec => {
                sec.classList.remove('active');
            });

            section.classList.add('active');
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const section = document.querySelector("#projects");
        const headers = section.querySelectorAll(".project-header");

        // 1. Regrouper chaque projet en un bloc complet
        const projectBlocks = [];

        headers.forEach((header, index) => {
            const block = document.createElement("div");
            block.classList.add("project-block");

            // 1. Chercher le contenu associé AVANT de déplacer le header
            let content = header.nextElementSibling;
            while (content && !content.classList.contains("project-content") && !content.classList.contains("project-header")) {
                content = content.nextElementSibling;
            }

            // 2. Maintenant on peut déplacer les éléments
            block.appendChild(header);

            if (content && content.classList.contains("project-content")) {
                block.appendChild(content);
            }

            projectBlocks.push(block);
        });

        // 2. Réinjecter les blocs dans la section
        section.innerHTML = "";
        projectBlocks.forEach(block => section.appendChild(block));

        // 3. Scroll naturel - Le script de défilement forcé est supprimé pour permettre la lecture
        // On garde juste une gestion simple de l'index si besoin, mais sans e.preventDefault() sur le wheel
        let currentIndex = 0;

        // Réinitialiser le scroll quand on clique sur le lien "Projets" dans la sidebar
        document.querySelectorAll('.sidebar nav a[data-target="projects"]').forEach(link => {
            link.addEventListener('click', () => {
                currentIndex = 0;
                setTimeout(() => {
                    section.scrollTop = 0;
                }, 100);
            });
        });
    });
</script>

</html>
