<form action="" method="post" class="flex flex-col justify-center gap-2 text-blue-600 mx-24 py-12 ">
        @csrf
        <!-- pour générer un token lors de la soumission du formulaire  -->

        <div>
            <!-- <input type="text" name="title" value="article du démo"> -->
            <input type="text" name="title" value="{{old('title', $post->title)}}">
            <!-- afficher l'ancienne valeur ou tu mets la valeur depuis la bdd -->
            @error('title')
                {{$message}}
            @enderror
            <!-- pour afficher un message en cas d'erreur -->
        </div>
        <div>
            <!-- <input type="text" name="title" value="article du démo"> -->
            <input type="text" name="slug" value="{{old('slug', $post->slug)}}">
            <!-- afficher l'ancienne valeur ou tu mets la valeur depuis la bdd -->
            @error('slug')
                {{$message}}
            @enderror
            <!-- pour afficher un message en cas d'erreur -->
        </div>
        
        <div class="text-red-200">
            <textarea name="content">{{old('content', $post->content)}} </textarea>
            @error('content')
                    {{$message}}
            @enderror
        </div>
        <button type="submit" class="bg-white p-2 text-blue-600">
            ENregistrer
            @if($post->id)
                Modifier
            @else
                Créer
            @endif
            <!-- pour vérifier si il veut modifier ou créer un article²  -->
        </button>
    </form>