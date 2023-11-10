## Pour un nouveau projet Laravel
1. composer create-project laravel/laravel nom_projet
2. on crée le model et la migration(table) avec php artisan make:model ModelName   -m
3. adaptez la table dans le fichier de migration
4. configurer le model sur le fichier env
5. valider la migration avec php artisan migrate


6. configurez les routes dans le fichier web.php et un controller lié à la route -r=pour regénérer les méthodes
   liées à la ressources
->php artisan make:controller Admin\\PropertyController -r
7. on crée un request pour le formu (ses règles) 
-> php artisan make:request Admin\\PropertyFormRequest 
8. la création de vue
