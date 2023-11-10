@extends('base') 
<!-- le rendre disponible à la racine -->

<!-- cette page est utilisée pour afficher un article en particulier -->
@section('title', $post->title)

@section('content')
<!-- le contenu de la section content -->

    <!-- pour recuperer e=les infos depuis la bdd avec la boucle-->
        <article>
            <h2> {{ $post->title }} </h2>
            <p> {{ $post->content }} </p>
         
        </article>
        <!-- pour voir un article en particulier -->

@endsection
<!-- after on l'ajoute dans la route -->