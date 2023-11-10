config/databases ->pour voir la la config de la bdd
les pages et dossiers utilisés;
database/migrations/2014_10_12_000000_create_users_table.php pour créer la table
users; //les migrations nous permet de se passer de requête sql et 

routes/web.php pour les routes;
env pour les variables d'environnement; et pour mettre
en place la base de données à utiliser

ORM tuto
--------
 Dans notre cas on va utiliser la base de données la plus simple à configurer :
 SQLite (Laravel supporte MySQL, MariaDB, PostgreSQL et SQL Server). Pour mettre
 en place SQLite, on va modifier le fichier d'environnement (le fichier .env) et
 au niveau de la partie DB_CONNECTION, on va mettre "sqlite" et on va retirer
 les autres informations.

Migration
Ce système de migration permet d'interagir avec la création des tables avec une API PHP plutôt que de devoir écrire du SQL.
Dans notre cas, on souhaite pouvoir interagir avec notre base de données pour
créer un système d'articles. Il nous faudra commencer par créer la table et les
différents champs nécessaire et on n'aura pas nécessairement besoin d'utiliser
du SQL. On pourra utiliser le système de migration de Laravel, avec cette
commande :
php artisan make:migration CreatePostTable
###### 
Cela va créer un fichier de migration dans le dossier database/migration qui va
permettre de rajouter des informations dans notre base de données. Le fichier de
migration va contenir deux méthodes, une méthode up qui permet d'expliquer
comment générer les table et les champs et une méthode down qui permettra de
revenir en arrière.

### pour demarrer la migration, on utilise la commande suivante:
php artisan migrate

### les Models
Pour être capable de créer, lire et modifier des enregistrements. 
php artisan make:model Post -> Post =  le nom du model
Le nom du modèle correspondra au nom de la table au singulier. Cette commande va
créer un fichier app/Models/Post.php
**

### Créer un article
Dans la pafe routes/web.php, on va créer une route qui va permettre de créer un article.
$post = new Post();
$post->title = 'Mon titre';
$post->slug = 'mon-titre';
$post->content = 'Mon contenu'; //
$post->save(); //Pour le sauvegarder dans la base de données grâce à la méthode save()
#pour créer une bdd sqlite, on utilise la commande suivante: 
php artisan make:migration create_users_table --create=users

### Récupérer des articles
on va pouvoir utiliser ce modèle Post pour récupérer des informations.
$posts = Post::all(); ou
$posts = Post::all(['title', 'id']); //spécifier le champs à utiliser
$post = Post::find(3); // pour récupérer un id 

## COntrollers tuto
php artisan make:controller //pour créer un controllers à
trouver->App/Http/controllers --C'est à l'intérieur de cette classe que l'on va
définir nos méthodes
Pour utiliser ces classes : 
Route::get('/blog', [BlogController::class, 'index']);

## Views tuto
Le moteur de template(view) qui va nous permettre de générer plus simplement des vues HTML.
Les vues blade seront créées dans des fichier-> resources/views/ avec
l'extension .blade.php.
    {{Je suis du  texte}} -> pour écrire du texte

## Validateur Tuto*
Laravel nous offre une classe Validator qui va nous permettre de gérer cette
opérationde valider les infos avant de le save

## Model binding
Le modèle binding dans Laravel qui permet de pre-récupérer les entités provenant de la base de données dans les actions de nos routes.

## Laravel Debug bar*
est une barre qui vous permettra d'inspecter différentes choses sur le
framework. Vous pourrez notamment voir quelle partie de code a pris le plus de
temps, les erreurs, les différentes vues incluses par votre système, les
informations concernant la route, les requêtes SQL, les modèles, 
composer require barryvdh/laravel-debugbar --dev -> pour installer

## Laravel ide helper
Du même auteur, Laravel IDE Helper permettra de générer des fichiers pour avoir une meilleur complétion au niveau de votre éditeur. L'installation se fait aussi au travers de composer.

composer require --dev barryvdh/laravel-ide-helper

Vous pourrez ensuite utiliser de nouvelles commandes artisan pour générer les fichiers d'aide.

php artisan clear-compiled
php artisan ide-helper:generate
php artisan ide-helper:models -M
php artisan ide-helper:meta

###  Le Formulaire tuto à revoir
la partie formulaire de Laravel et on va voir comment faire en sorte de pouvoir
soumettre des informations pour créer ou modifier un article

## Les relations n-n, 1-n
nous allons revenir un peu sur les modèles et on va parler des relations et comment les représenter avec l'ORM Eloquent. Pour reprendre l'exemple d'un blog sur lequel on a des article on va s'imaginer mettre en place un système de catégorie (relation 1-n) et des tags (relation n-n).
## 1. on créer une nouvelle migration 
->php artisan make:model Categories -m  //en gros on a crée une table
à revoir---


## Pour l'authentification 
il y'a une authentification par défaut dans App/Model/user.php
on créer un new user dans le Blogcontroller