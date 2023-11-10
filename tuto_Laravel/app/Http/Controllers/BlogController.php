<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogFilterRequest;
use App\Http\Requests\FormPostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Validator;

class BlogController extends Controller
{
    //là où on placera toutes nos fonctions
    // public function index(BlogFilterRequest $request) { //j'ai besoin que notre req correspond à blogfilter request
    public function index() { //j'ai besoin que notre req correspond à blogfilter request
        //au lieu d'avoir plusieurs routes, on peut juste mettre toutes ces routes dans les classes BlogController
        // return \App\Models\Post::paginate(25);
        
        //la validation des données avec la classe Validator, lire la doc pour plus d'infos
        // Validator::make([
        //     'title' => ''
        //     //les donnes d e l'user
        // ],[
        //     'title' => 'required|min:8'
        //     //la règle de validation, min 8 caractères
        // ]);
        //ou on peut créer un fichier à part pour mettre en place toutes ces règles avec la cmd -> php artisan make:request NonRegles->app/Http/Controllers/
        //#relation
        // on crée les categories
        // Category::create([
        //     'name' => 'Category 1'
        // ]);
        //associer un article à une categorie
        $post = Post::find(2);
        $category = $post->category->name;//take le nom du cat associé
        //#relation
        
        //#authentification -> création d'User
        User::create([
            'name' => 'John',
            'email' => 'john@doe.fr',
            'password' => Hash ::make('0000'), //on a haché le mot de passe
        ]);



        //add fillable pour permet d'add à partir d'un tableau
        return view('blog.index',[
            'posts' => Post::paginate(1) //on envoie la var post qui contient la liste des articles
        ]); //on appelle le view qui est le dossier blog sources rooutes/web

    }

    public function show(string $slug, Post $post){ //une fonction pour show article
    // public function show(string $slug, string $id){ //une fonction pour show article
         //pour trouver un article correspond à id ou avec l'objet Post dans le model
        //  $post = \App\Models\Post::findOrFail($id); //selectionne l'article dont l'id est passé dans l'url
        //  return $post; //on returne les articles
        
         return view('blog.show', [
            'post' => $post,
         ]);
    }
    //la fonction create pour le formulaire
    public function create(){
        $post =  new Post(); // pour avoir un new form dans edit et create
        return view('blog.create', [
            'post' => $post
        ]);
    }

    //la fonction store pour la méthode post
    public function store(FormPostRequest $request){
        $post = Post::create($request->validated()); //on utilise toutes les infos validées
        // $post = Post::create([ on remplace tout ca part up
        //     'title' => $request->input('title'),
        //     'content' => $request->input('content'), //prendre la valeur de input avec le name content prpour content
        //     'slug' => \Str::slug($request->input('title')), //il génére un slug
        // ]);
        //redirection vers la route blog.show et avec deux param, slug et id
       //(redirec vers l'article créer )
        // return redirect()->route('blog.show',  ['slug' => $post->slug, 'post' => $post->id]);
        return redirect()->route('blog.show',  ['slug' => $post->slug, 'post' => $post->id])->with('success',"l'article est enregistrer avec succès");
        //on crée un message de notif avec la clé success
    }

    //fonction update pour modifier
    public function edit(Post $post){
        return view('blog.edit',[
            'post' => $post //on retourne l'article
        ]);
    }
    
    public function update(Post $post, FormPostRequest $request){
        $post->update($request->validated());
        return redirect()->route('blog.show',  ['slug' => $post->slug, 'post' => $post->id])->with('success',"l'article est modifié avec succès");

    }

}
