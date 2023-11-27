<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Models\Post;
use Illuminate\Http\Request; //importation de la classe Request de laravel pour recuperer les parametres de la requete
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//je crées une route test
Route::get('/test', function(){
    return 'King';
});
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::delete('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('/login', [AuthController::class, 'doLogin']); //une route pour gérer le formulaire
//un middleware middleware(auth)->lire doc et modifier authentificate.php pou
//la redirection 
//les routes sont definie dans le fichier web.php de la maniere suivante

// Route::prefix('/blog')->name('blog.')->group(function () {
Route::prefix('/blog')->name('blog.')->controller(BlogController::class)->group(function () { //on peut dire qu'on use le controller
    // Route::get('/', function(Request $request){
        // //on créer un groupe pour les routes de meme nature
        // $post = new \App\Models\Post();
        // $post->title = "Mon second article";
        // $post->slug = "mon-second-article";
        // $post->content = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, quidem. Quisquam, quod.";
        // $post->save();
        // //on ajoute les infos et après on save dans la base de donnees
        // return "Article ajouté ".$post;

        // return \App\Models\Post::all();
        //pour afficher tous les articles dans la page welcome
        // return \App\Models\Post::all();
        // $posts = \App\Models\Post::all(['id', 'title']); //afficher slm id et title de la table posts
        // $posts = \App\Models\Post::find(1); //on recupere l'article avec l'id 1
        // dd($posts); //pour afficher les infos de l'article avec l'id 1 et on stop la requete
        // dd($posts[0]->title); //pour afficher le titre du premier article 
        // dd($posts->first()); //une collection c'est comme un tab qui a des méthodes 
        // $posts = \App\Models\Post::findOrFail(); 

        // $posts = \App\Models\Post::paginate(2, ['id','title']);  //param afficher id et title
        //:paginate(2). ?page=2, pour afficher un article dans une page 
        // $posts = \App\Models\Post::where('id', '>', 0)->get(); //voir la documentation

        // pour modifier le titre
        // $posts->title = 'nouveau titre modifier';
        // $posts->save();

        //On peut aussi utiliser la méthode create pour add new info dans la
        //table, avant on doit add la fonction fillable dans app/models/post
        // $post =  \App\Models\Post::create([ //voir la docu
        //     'title' => 'Titre tab',
        //     'slug' => 'new slug tab',
        //     'content' => 'new content of tab',
        // ]);
        
        // return \App\Models\Post::paginate(25); // ?page=2, pour afficher un article dans une page 
        

    // })->name('index');
    
    // on met tout ce code dans une fonction du controllers pour avoir ça 
    Route::get('/', 'index')->name('index');
    // donc lorsque nous avons le /, il a appellé cette fonction qui est dans la class bc


    // pareil pour lui
    // Route::get('/{slug}-{id}', 'show')->where([//where permet de definir des regles de validation pour les parametres de l'url
    Route::get('/{slug}-{post}', 'show')->where([//where permet de definir des regles de validation pour les parametres de l'url
                'id' => '[0-9]+', //
                'slug' => '[a-z0-9\-]*', //on limite les valeurs de l'url a des lettres minuscules et des chiffres
    ])->name('show'); 

    // Route::get('/{slug}-{id}', [\App\Http\Controllers\Controller\BlogController::class, 'show'])->where([//where permet de definir des regles de validation pour les parametres de l'url
    //         'id' => '[0-9]+', 
    //         'slug' => '[a-z0-9\-]*', //on limite les valeurs de l'url a des lettres minuscules et des chiffres
    // ])->name('show'); //on donne un nom à la route pour pouvoir l'utiliser plus tard    

    //Route::get('/{slug}-{id}', function (string $slug, string $id, Request $request) {
        //pour trouver un article correspond à id
    //     $post = \App\Models\Post::findOrFail($id); //selectionne l'article dont l'id est passé dans l'url
    //     return $post;
    // })->where([//where permet de definir des regles de validation pour les parametres de l'url
    //         'id' => '[0-9]+', //
    //         'slug' => '[a-z0-9\-]*', //on limite les valeurs de l'url a des lettres minuscules et des chiffres
    //         ])->name('show'); //on donne un nom à la route pour pouvoir //         l'utiliser plus tard    
    
    // pour le formulaire, on crée une nouvelle route
    Route::get('/new', 'create')->name('create'); //'create'= la methode, name = le nom de la route
    Route::post('/new', 'store'); //pour répondre aussi à la méthode post

    //les routes pour modifier les articcles
    Route::get('/{post}/edit', 'edit')->name('edit'); //'create'= la methode, name = le nom de la route
    Route::post('/{post}/edit', 'update'); //pour répondre aussi à la méthode post avec la fct update

});


//ce code permet de definir une route avec une methode get pour afficher la page welcome
// Route::get('/blog',function(Request $request){ //dans url si on ajoute /blog, on affiche ce resultat
//     //l'objet request permet de recuperer les parametres de la requete, pas
//     //besoin d'utiliser post ou get pour recuperer les parametres de la requete
    
//     return [
//         // "tout" => $request->all(),//on recupere le parametre url de la requete et on le stocke dans la variable nom
//         // "nom" => $request->input('name'), //on recupere le parametre name de la requete et on le stocke dans la variable nom
//         // "nom" => $request->input('name', 'John DOe'), //idem ligne précedente et on le remplace par 'John DOe' si il n'existe pas
//         "link" => \route('blog.show', ['slug'=> 'mon-article-', 'id'=>1]), //générer automatiquement un lien avec les parametres de l'url
//         //ce code permet de retourner un lien avec des parametres, on peut ajouter des parametres dans le lien
//     ];
//     // return "BOnjour"; //on retourne une chaine de caractere
// })->name('blog.index'); //on donne un nom à la route pour pouvoir l'utiliser plus tard

//on a besoin de créer une route qui ressemble à ca
//https://mon-application.com/blog/monprojet=1

// //{slug} c'est un parametre qui sera remplacer par le contenu de l'url
// Route::get('/blog/{slug}/{id}', function (string $slug, int $id) {
//     // return 'Bonjour Blog';
//     return [ //on retourne un tableau avec les valeurs de l'url
//         "id" => $id,
//         "slug" => $slug,
//     ];
// })->where([//where permet de definir des regles de validation pour les parametres de l'url
//     'id' => '[0-9]+', //
//     'slug' => '[a-z0-9\-]*', //on limite les valeurs de l'url a des lettres minuscules et des chiffres
// ])->name('blog.show'); //on donne un nom à la route pour pouvoir l'utiliser plus tard

// //si il y'a des routes qui ont les memes prefix (param), il faut le regrouper
// Route::prefix('admin')->name('admin')->group(function () {
//     Route::get('/users', function () {
//         return 'Liste des utilisateurs';
//     })->name('.users');
//     Route::get('/users/create', function () {
//         return '<h1>Formulaire d\'inscription</h1>';
//     })->name('.users.create');

// });
