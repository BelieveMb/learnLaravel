## Start

1. Install Laravel
2. Install Larvel Breeze
    Laravel Breeze , une implémentation minimale et simple de toutes les
    fonctionnalités d'authentification de Laravel, y compris la connexion,
    l'enregistrement, la réinitialisation du mot de passe, la vérification des
    e-mails et la confirmation du mot de passe.
3. php artisan breeze:install blade
    Breeze installera et configurera vos dépendances frontales pour vous, il
    nous suffit donc de démarrer le serveur de développement Vite pour
    recompiler automatiquement notre CSS et actualiser le navigateur lorsque
    nous apportons des modifications à nos modèles Blade : npm run dev
4. Modèles, migrations et contrôleurs
    Pour permettre aux utilisateurs de publier des Chirps, nous devrons créer
    des modèles, des migrations et des contrôleurs.
     ->php artisan make:model -mrc Chirp Vous pouvez voir toutes les options disponibles en exécutant la php artisan make:model --helpcommande.
5. Routage
Nous devrons également créer des URL pour notre contrôleur. Nous pouvons le faire en ajoutant des "routes", qui sont gérées dans le routesrépertoire de votre projet