1. avant de créer une migration, on config la data base avec la commande
   suivante # php artisan migrate
2. après on crée -> Modèles, migrations et contrôleurs  avec la commande ** php
   artisan make:model -mrc Chirp
3. elle va crée  3 fichiers
    app/Models/Chirp.php- Le modèle Éloquent.
    database/migrations/<timestamp>_create_chirps_table.php- La migration de base de données qui créera votre table de base de données.
    app/Http/Controller/ChirpController.php- Le contrôleur HTTP qui prendra les requêtes entrantes et renverra les réponses.
# Routage

4. nous avons 
    L' index itinéraire affichera notre formulaire et une liste de Chirps.
    L' storeitinéraire sera utilisé pour sauvegarder de nouveaux Chirps.
Nous allons également placer ces routes derrière deux middleware :

    Le authmiddleware garantit que seuls les utilisateurs connectés peuvent accéder à l'itinéraire.
    Le verifiedmiddleware sera utilisé si vous décidez d'activer la vérification des e-mails .