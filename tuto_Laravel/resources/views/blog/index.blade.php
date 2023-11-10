@extends('base') 
<!-- le rendre disponible à la racine -->
@section('title','titre du blog')

@section('content')
<!-- le contenu de la section content -->
    <h2>Mon blog</h2>
    <!-- {{"Je suis du  texte"}} -->
    <!-- pour la boucle, condition, lire la docu sur le blade template -->

    <!-- pour recuperer e=les infos depuis la bdd avec la boucle-->
    @foreach($posts as $post)
        <article>
            <h2> {{ $post->title }} </h2>
            <p> {{ $post->content }} </p>
            <p>
            </p>
        </article>
        <!-- pour voir un article en particulier -->
    @endforeach

    <!-- pour générer une pagination -->
    {{ $posts->links()}}
    <!-- ce condition  affichera le lien pour la pagination -->
@endsection
<!-- after on l'ajoute dans la route -->
