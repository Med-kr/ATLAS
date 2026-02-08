# 78 messages de commit (FR)

1. feat(auth): ajouter l'authentification par token JWT — Implémente l'authentification API via JWT pour sécuriser les endpoints.
2. feat(ui): ajouter tableau de bord utilisateur responsive — Nouveau layout responsive pour le tableau de bord.
3. refacto(auth): extraire la logique d'authentification dans un service — Sépare la logique pour faciliter les tests et la réutilisation.
4. fix(routes): corriger route de connexion cassée — Répare le chemin mal défini qui causait une 404.
5. docs(readme): mettre à jour instructions d'installation — Ajoute étapes d'installation et démarrage locales.
6. test(auth): ajouter tests unitaires pour le middleware auth — Couverture pour les cas d'accès non autorisé et autorisé.
7. chore(deps): mettre à jour dépendances composer et npm — Bump de paquets pour sécurité et compatibilité.
8. style(css): ajuster styles globaux tailwind pour cohérence — Harmonise les marges et tailles de base.
9. perf(db): ajouter index sur la colonne user_id de links — Améliore les performances des requêtes utilisateur.
10. feat(links): CRUD complet pour les liens avec validation — Ajoute création, lecture, mise à jour et suppression côté serveur.
11. refacto(links): refactoriser LinkController en actions plus petites — Simplifie la logique par méthode.
12. fix(migrations): corriger nom de colonne dans migration links — Evite erreurs lors du rollback/migrate.
13. docs(api): documenter endpoints principaux dans routes/api.php — Ajoute descriptions et exemples de payload.
14. test(links): ajouter tests fonctionnels pour création de lien — Vérifie validation et persist.
15. feat(tags): ajout de gestion des tags et relation many-to-many — Permet d'associer tags aux liens.
16. refacto(models): nettoyer relations Eloquent dans User et Link — Clarifie les relations et évite requêtes N+1.
17. fix(view): corriger affichage des erreurs de formulaire — Affiche correctement les messages d'erreur côté UI.
18. chore(build): ajouter script npm build:prod — Automatise la compilation pour production.
19. ci(github-actions): ajouter workflow CI pour phpunit et lint — Exécute tests et lint à chaque PR.
20. docs(contributing): ajouter guide de contribution et convention de commit — Explique format des commits et PR.
21. feat(categories): CRUD pour catégories avec slug unique — Permet organiser les liens par catégorie.
22. refacto(routes): regrouper routes API sous api.php et middleware — Clarifie séparation web/api.
23. fix(auth): empêcher création de comptes avec email duplicate — Valide unicité côté serveur.
24. test(categories): tests unitaires pour modèle Category — Vérifie règles de slug et relations.
25. style(components): uniformiser composants Blade (cards, badges) — Améliore cohérence visuelle.
26. perf(assets): activer minification et fingerprinting des assets — Réduit taille et cache busting.
27. feat(profile): page de profil utilisateur éditable — Permet utilisateur de modifier ses infos.
28. refacto(services): introduire UserService pour logique métier — Centralise opérations utilisateur.
29. fix(css): corriger problème d'overflow sur mobile — Empêche défilement horizontal indésirable.
30. docs(security): ajouter recommandations pour config .env en prod — Guide d'hardening minimal.
31. test(profile): tests E2E pour modification de profil — Vérifie flux complet de mise à jour.
32. chore(cleanup): supprimer fichiers et dépendances inutilisés — Réduit l'empreinte du repo.
33. feat(import): importer liens via CSV — Ajoute endpoint et UI d'import CSV.
34. refacto(import): extraire parsing CSV dans une classe dédiée — Sépare responsabilités et facilite tests.
35. fix(import): gérer correctement les encodages UTF-8 lors de l'import — Evite caractères corrompus.
36. perf(db-query): optimiser requêtes de listing de liens avec eager loading — Diminue nombre de requêtes.
37. docs(csv): documenter format CSV supporté — Précise colonnes requises et exemples.
38. test(import): ajouter tests pour parsing et création en masse — Assure robustesse de la fonctionnalité.
39. feat(search): moteur de recherche basique sur titre et description — Permet filtrer les liens.
40. refacto(search): extraire la logique de filtrage dans SearchBuilder — Simplifie extension future.
41. fix(search): corriger tri incorrect des résultats — Répare ordre et pertinence.
42. style(nav): améliorer navigation et responsivité du menu — Meilleure ergonomie mobile.
43. chore(localization): ajouter support i18n pour français/anglais — Prépare l'app pour multi-langue.
44. docs(i18n): ajouter guide pour traduire nouvelles chaînes — Explique fichiers et conventions.
45. test(i18n): tests pour chargement des traductions — Vérifie fallback et sélection de langue.
46. perf(cache): mettre en cache les pages publiques les plus demandées — Réduit latence serveur.
47. feat(seo): ajouter meta tags dynamiques pour pages liens — Améliore indexation par moteurs.
48. refacto(views): convertir partials en components Blade réutilisables — Réduit duplication de code.
49. fix(seeders): corriger données factices pour tests — Assure cohérence des tests.
50. chore(db): ajouter seeder pour données de démonstration — Facilite tests manuels et démo.
51. docs(architecture): schéma architecture et flux des données — Aide nouveaux contributeurs.
52. feat(upload): permettre upload d'images pour liens — Stocke miniatures et affiche dans UI.
53. refacto(storage): encapsuler interactions S3/locale dans un adapter — Facilite switch stockage.
54. fix(upload): validation des types MIME et taille — Sécurise l'upload.
55. test(upload): tests pour upload et suppression d'images — Vérifie intégrité du stockage.
56. style(forms): améliorer apparence et feedback des formulaires — Meilleure UX pour la saisie.
57. perf(images): générer miniatures à la volée pour économie de bande passante — Accélère affichage.
58. feat(notifications): notifications in-app pour activité sur liens — Alerte utilisateur des interactions.
59. refacto(notifications): implémenter pattern observer pour événements — Clarifie propagation d'événements.
60. fix(notifications): corriger envoi de notif en double — Empêche doublons gênants.
61. docs(notifications): documenter pipeline d'événements — Explique hooks et listeners.
62. test(notifications): tests unitaires pour listeners d'événements — Assure comportement attendu.
63. chore(logs): centraliser configuration de logging — Facilite debug et monitoring.
64. feat(api-rate): limiter requêtes API pour éviter abus — Ajoute throttling par IP/token.
65. refacto(middleware): rendre middleware plus testable et configurables — Injection de dépendances.
66. fix(csrf): renforcer protection CSRF sur formulaires sensibles — Bloque requêtes intersites.
67. perf(queue): déporter tâches longues dans queue background — Améliore réactivité UI.
68. docs(queue): ajouter instructions pour config queue worker — Explique démarrage et supervision.
69. test(queue): tests d'intégration pour jobs asynchrones — Vérifie exécution et reprise d'erreur.
70. feat(export): exporter listes en CSV/JSON — Permet sauvegarde et partage des données.
71. refacto(export): factoriser formatters CSV/JSON — Facilite ajout de nouveaux formats.
72. fix(export): gérer caractères spéciaux dans export CSV — Évite corruption de fichiers.
73. style(auth-ui): améliorer écrans de login et register — Clarifie étapes d'inscription.
74. chore(security-deps): appliquer patches de sécurité urgents — Réduit surface d'attaque.
75. docs(ops): checklist déploiement production — Étapes pour déployer en sécurité.
76. feat(analytics): ajouter événements analytics pour actions clé — Permet analyser usage.
77. perf(db-maintenance): script de nettoyage et archival des anciennes données — Réduit taille DB.
78. refacto(config): centraliser variables de config et defaults — Simplifie overrides par env.

*Notes:* Ces messages sont destinés à être utilisés comme commits atomiques et explicites. Vous pouvez les adapter au scope ou à la convention de commit exacte de votre projet.
