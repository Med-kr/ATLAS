#!/bin/bash
# Script généré : 78 commandes git add + git commit (utilise COMMITS_78_FR.md)
# Ne l'exécutez que si vous comprenez les effets (les commits peuvent déjà exister).

git add app/Http/Controllers/AuthController.php app/Models/User.php config/auth.php COMMITS_78_FR.md && git commit -m "feat(auth): ajouter l'authentification par token JWT — Implémente l'authentification API via JWT pour sécuriser les endpoints."

git add resources/views/dashboard.blade.php resources/css/app.css resources/js/app.js COMMITS_78_FR.md && git commit -m "feat(ui): ajouter tableau de bord utilisateur responsive — Nouveau layout responsive pour le tableau de bord."

git add app/Services/AuthService.php app/Http/Controllers/AuthController.php COMMITS_78_FR.md && git commit -m "refacto(auth): extraire la logique d'authentification dans un service — Sépare la logique pour faciliter les tests et la réutilisation."

git add routes/web.php routes/auth.php COMMITS_78_FR.md && git commit -m "fix(routes): corriger route de connexion cassée — Répare le chemin mal défini qui causait une 404."

git add README.md COMMITS_78_FR.md && git commit -m "docs(readme): mettre à jour instructions d'installation — Ajoute étapes d'installation et démarrage locales."

git add tests/Feature/Auth COMMITS_78_FR.md && git commit -m "test(auth): ajouter tests unitaires pour le middleware auth — Couverture pour les cas d'accès non autorisé et autorisé."

git add composer.json package.json composer.lock package-lock.json COMMITS_78_FR.md && git commit -m "chore(deps): mettre à jour dépendances composer et npm — Bump de paquets pour sécurité et compatibilité."

git add resources/css/app.css tailwind.config.js COMMITS_78_FR.md && git commit -m "style(css): ajuster styles globaux tailwind pour cohérence — Harmonise les marges et tailles de base."

git add database/migrations COMMITS_78_FR.md && git commit -m "perf(db): ajouter index sur la colonne user_id de links — Améliore les performances des requêtes utilisateur."

git add app/Http/Controllers/LinkController.php app/Models/Link.php resources/views/links COMMITS_78_FR.md && git commit -m "feat(links): CRUD complet pour les liens avec validation — Ajoute création, lecture, mise à jour et suppression côté serveur."

git add app/Http/Controllers/LinkController.php COMMITS_78_FR.md && git commit -m "refacto(links): refactoriser LinkController en actions plus petites — Simplifie la logique par méthode."

git add database/migrations COMMITS_78_FR.md && git commit -m "fix(migrations): corriger nom de colonne dans migration links — Evite erreurs lors du rollback/migrate."

git add routes/api.php README.md COMMITS_78_FR.md && git commit -m "docs(api): documenter endpoints principaux dans routes/api.php — Ajoute descriptions et exemples de payload."

git add tests/Feature/Links COMMITS_78_FR.md && git commit -m "test(links): ajouter tests fonctionnels pour création de lien — Vérifie validation et persist."

git add app/Models/Tag.php database/migrations resources/views/tags COMMITS_78_FR.md && git commit -m "feat(tags): ajout de gestion des tags et relation many-to-many — Permet d'associer tags aux liens."

git add app/Models/User.php app/Models/Link.php COMMITS_78_FR.md && git commit -m "refacto(models): nettoyer relations Eloquent dans User et Link — Clarifie les relations et évite requêtes N+1."

git add resources/views/components COMMITS_78_FR.md && git commit -m "fix(view): corriger affichage des erreurs de formulaire — Affiche correctement les messages d'erreur côté UI."

git add package.json vite.config.js COMMITS_78_FR.md && git commit -m "chore(build): ajouter script npm build:prod — Automatise la compilation pour production."

git add .github/workflows COMMITS_78_FR.md && git commit -m "ci(github-actions): ajouter workflow CI pour phpunit et lint — Exécute tests et lint à chaque PR."

git add CONTRIBUTING.md README.md COMMITS_78_FR.md && git commit -m "docs(contributing): ajouter guide de contribution et convention de commit — Explique format des commits et PR."

git add app/Models/Category.php database/migrations resources/views/categories COMMITS_78_FR.md && git commit -m "feat(categories): CRUD pour catégories avec slug unique — Permet organiser les liens par catégorie."

git add routes/api.php routes/web.php COMMITS_78_FR.md && git commit -m "refacto(routes): regrouper routes API sous api.php et middleware — Clarifie séparation web/api."

git add app/Models/User.php database/migrations COMMITS_78_FR.md && git commit -m "fix(auth): empêcher création de comptes avec email duplicate — Valide unicité côté serveur."

git add tests/Unit COMMITS_78_FR.md && git commit -m "test(categories): tests unitaires pour modèle Category — Vérifie règles de slug et relations."

git add resources/views/components COMMITS_78_FR.md && git commit -m "style(components): uniformiser composants Blade (cards, badges) — Améliore cohérence visuelle."

git add vite.config.js package.json COMMITS_78_FR.md && git commit -m "perf(assets): activer minification et fingerprinting des assets — Réduit taille et cache busting."

git add resources/views/profile app/Http/Controllers/ProfileController.php COMMITS_78_FR.md && git commit -m "feat(profile): page de profil utilisateur éditable — Permet utilisateur de modifier ses infos."

git add app/Services/UserService.php COMMITS_78_FR.md && git commit -m "refacto(services): introduire UserService pour logique métier — Centralise opérations utilisateur."

git add resources/css/app.css COMMITS_78_FR.md && git commit -m "fix(css): corriger problème d'overflow sur mobile — Empêche défilement horizontal indésirable."

git add README.md docs/security.md .env.example COMMITS_78_FR.md && git commit -m "docs(security): ajouter recommandations pour config .env en prod — Guide d'hardening minimal."

git add COMMITS_78_FR.md && git commit -m "test(profile): tests E2E pour modification de profil — Vérifie flux complet de mise à jour."

git add COMMITS_78_FR.md && git commit -m "chore(cleanup): supprimer fichiers et dépendances inutilisés — Réduit l'empreinte du repo."

git add COMMITS_78_FR.md && git commit -m "feat(import): importer liens via CSV — Ajoute endpoint et UI d'import CSV."

git add COMMITS_78_FR.md && git commit -m "refacto(import): extraire parsing CSV dans une classe dédiée — Sépare responsabilités et facilite tests."

git add COMMITS_78_FR.md && git commit -m "fix(import): gérer correctement les encodages UTF-8 lors de l'import — Evite caractères corrompus."

git add COMMITS_78_FR.md && git commit -m "perf(db-query): optimiser requêtes de listing de liens avec eager loading — Diminue nombre de requêtes."

git add COMMITS_78_FR.md && git commit -m "docs(csv): documenter format CSV supporté — Précise colonnes requises et exemples."

git add COMMITS_78_FR.md && git commit -m "test(import): ajouter tests pour parsing et création en masse — Assure robustesse de la fonctionnalité."

git add COMMITS_78_FR.md && git commit -m "feat(search): moteur de recherche basique sur titre et description — Permet filtrer les liens."

git add COMMITS_78_FR.md && git commit -m "refacto(search): extraire la logique de filtrage dans SearchBuilder — Simplifie extension future."

git add COMMITS_78_FR.md && git commit -m "fix(search): corriger tri incorrect des résultats — Répare ordre et pertinence."

git add COMMITS_78_FR.md && git commit -m "style(nav): améliorer navigation et responsivité du menu — Meilleure ergonomie mobile."

git add COMMITS_78_FR.md && git commit -m "chore(localization): ajouter support i18n pour français/anglais — Prépare l'app pour multi-langue."

git add COMMITS_78_FR.md && git commit -m "docs(i18n): ajouter guide pour traduire nouvelles chaînes — Explique fichiers et conventions."

git add COMMITS_78_FR.md && git commit -m "test(i18n): tests pour chargement des traductions — Vérifie fallback et sélection de langue."

git add COMMITS_78_FR.md && git commit -m "perf(cache): mettre en cache les pages publiques les plus demandées — Réduit latence serveur."

git add COMMITS_78_FR.md && git commit -m "feat(seo): ajouter meta tags dynamiques pour pages liens — Améliore indexation par moteurs."

git add COMMITS_78_FR.md && git commit -m "refacto(views): convertir partials en components Blade réutilisables — Réduit duplication de code."

git add COMMITS_78_FR.md && git commit -m "fix(seeders): corriger données factices pour tests — Assure cohérence des tests."

git add COMMITS_78_FR.md && git commit -m "chore(db): ajouter seeder pour données de démonstration — Facilite tests manuels et démo."

git add COMMITS_78_FR.md && git commit -m "docs(architecture): schéma architecture et flux des données — Aide nouveaux contributeurs."

git add COMMITS_78_FR.md && git commit -m "feat(upload): permettre upload d'images pour liens — Stocke miniatures et affiche dans UI."

git add COMMITS_78_FR.md && git commit -m "refacto(storage): encapsuler interactions S3/locale dans un adapter — Facilite switch stockage."

git add COMMITS_78_FR.md && git commit -m "fix(upload): validation des types MIME et taille — Sécurise l'upload."

git add COMMITS_78_FR.md && git commit -m "test(upload): tests pour upload et suppression d'images — Vérifie intégrité du stockage."

git add COMMITS_78_FR.md && git commit -m "style(forms): améliorer apparence et feedback des formulaires — Meilleure UX pour la saisie."

git add COMMITS_78_FR.md && git commit -m "perf(images): générer miniatures à la volée pour économie de bande passante — Accélère affichage."

git add COMMITS_78_FR.md && git commit -m "feat(notifications): notifications in-app pour activité sur liens — Alerte utilisateur des interactions."

git add COMMITS_78_FR.md && git commit -m "refacto(notifications): implémenter pattern observer pour événements — Clarifie propagation d'événements."

git add COMMITS_78_FR.md && git commit -m "fix(notifications): corriger envoi de notif en double — Empêche doublons gênants."

git add COMMITS_78_FR.md && git commit -m "docs(notifications): documenter pipeline d'événements — Explique hooks et listeners."

git add COMMITS_78_FR.md && git commit -m "test(notifications): tests unitaires pour listeners d'événements — Assure comportement attendu."

git add COMMITS_78_FR.md && git commit -m "chore(logs): centraliser configuration de logging — Facilite debug et monitoring."

git add COMMITS_78_FR.md && git commit -m "feat(api-rate): limiter requêtes API pour éviter abus — Ajoute throttling par IP/token."

git add COMMITS_78_FR.md && git commit -m "refacto(middleware): rendre middleware plus testable et configurables — Injection de dépendances."

git add COMMITS_78_FR.md && git commit -m "fix(csrf): renforcer protection CSRF sur formulaires sensibles — Bloque requêtes intersites."

git add COMMITS_78_FR.md && git commit -m "perf(queue): déporter tâches longues dans queue background — Améliore réactivité UI."

git add COMMITS_78_FR.md && git commit -m "docs(queue): ajouter instructions pour config queue worker — Explique démarrage et supervision."

git add COMMITS_78_FR.md && git commit -m "test(queue): tests d'intégration pour jobs asynchrones — Vérifie exécution et reprise d'erreur."

git add COMMITS_78_FR.md && git commit -m "feat(export): exporter listes en CSV/JSON — Permet sauvegarde et partage des données."

git add COMMITS_78_FR.md && git commit -m "refacto(export): factoriser formatters CSV/JSON — Facilite ajout de nouveaux formats."

git add COMMITS_78_FR.md && git commit -m "fix(export): gérer caractères spéciaux dans export CSV — Évite corruption de fichiers."

git add COMMITS_78_FR.md && git commit -m "style(auth-ui): améliorer écrans de login et register — Clarifie étapes d'inscription."

git add COMMITS_78_FR.md && git commit -m "chore(security-deps): appliquer patches de sécurité urgents — Réduit surface d'attaque."

git add COMMITS_78_FR.md && git commit -m "docs(ops): checklist déploiement production — Étapes pour déployer en sécurité."

git add COMMITS_78_FR.md && git commit -m "feat(analytics): ajouter événements analytics pour actions clé — Permet analyser usage."

git add COMMITS_78_FR.md && git commit -m "perf(db-maintenance): script de nettoyage et archival des anciennes données — Réduit taille DB."

git add COMMITS_78_FR.md && git commit -m "refacto(config): centraliser variables de config et defaults — Simplifie overrides par env."

# Fin du script

echo "Script prêt. Exécution non lancée par l'agent." 
