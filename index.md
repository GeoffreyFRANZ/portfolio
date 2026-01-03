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
  <div class="project-content" style="display: flex;">
    <div class="project-image">
      <img src="form-step1.png" alt="Formulaire intervenants – Étape 1">
      <div class="project-story">
        <h3>Présentation du projet</h3>
      </div>

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
    <div class="project-content" style="display: flex;">

      <div class="project-image">
        <div class="project-story">
          <h3>Présentation du projet</h3>
        </div>

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
      <div class="project-content" style="display: flex;">
        <div class="project-image">
          <img src="form-step1.png" alt="Formulaire intervenants – Étape 1">
          <div class="project-story">
            <h3>Présentation du projet</h3>
          </div>
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
  </div>
</section>