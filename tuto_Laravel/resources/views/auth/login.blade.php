@extends('base')

@section('content')
    <h1>Se connecter</h1>
    <div class=" ">
        <div class="py-2 px-5 flex justify-center items-center text-white">
            <form action="{{ route('auth.login')}}" method="post">
                @csrf

                <div class="flex flex-col gap-5 ">
                    <!-- <input type="text" name="title" value="article du démo"> -->
                    <label for="email">email</label>
                    <input type="email" name="email" value="{{old('email')}}" class="text-blue-400 border-2 border-blue-400 rounded-md">
                    <!-- afficher l'ancienne valeur ou tu mets la valeur depuis la bdd -->
                    @error('email')
                        {{$message}}
                    @enderror
                    <!-- pour afficher un message en cas d'erreur -->
                </div>

                <div class="flex flex-col gap-5">
                    <!-- <input type="text" name="title" value="article du démo"> -->
                    <label for="password">password</label>
                    <input type="password" name="password" class="text-blue-400 border-2 border-blue-400 rounded-md">
                    <!-- afficher l'ancienne valeur ou tu mets la valeur depuis la bdd -->
                    @error('password')
                        {{$message}}
                    @enderror
                    <!-- pour afficher un message en cas d'erreur -->
                </div>

                <div class="text-center">
                    <button class="bg-red-500 p-2 my-4">Connexion</button>
                </div>
            </form>
        </div>
    </div>
@endsection