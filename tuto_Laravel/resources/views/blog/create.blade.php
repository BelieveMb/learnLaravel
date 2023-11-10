<!-- on creer une vue pour le formulaire -->
@extends ('base')

@section('title', 'créer un article')

@section('content')
    @include('blog.form')

    <!--  on le remplace par un form par défaut
        <form action="" method="post" class="flex flex-col justify-center gap-2 text-blue-600 mx-24 py-12 ">
        @csrf
        !-- pour générer un token lors de la soumission du formulaire  --

        <div>
            <input type="text" name="title" value="article du démo">
            <input type="text" name="title" value="{{old('title', 'titre de démo')}}">
            afficher l'ancienne valeur ou tu mets la valeur par défaut
            @error('title')
                {{$message}}
            @enderror
            pour afficher un message en cas d'erreur
        </div>
        
        <div class="text-red-200">
            <textarea name="content">{{old('title', 'COntenu de démo')}} </textarea>
            @error('content')
                    {{$message}}
            @enderror
        </div>
        <button type="submit" class="bg-white p-2 text-blue-600">ENregistrer</button>
    </form> -->
@endsection