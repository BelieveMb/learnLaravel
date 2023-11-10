<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //on place toutes les méthodes here

    public function login(){
        return view('auth.login');//on return une view
    }

    public function doLogin(LoginRequest $request){
        //le param permet de faire la vérif du formu avant validation
        $credentials = $request->validated(); //recevoir un tableau avec les données du formulaire validé
        //Auth::attempt($credentials); //on essaye de se connecter avec les
        //données du formulaire
        if(Auth::attempt($credentials)){//on verifie si on a bien essayé de se connecter
            $request->session()->regenerate();//on regenere le token de session
            return redirect()->route('blog.index');//on redirige vers la page d'accueil
        }

        return to_route('auth.login')->withErrors('Invalid credentials')->onlyInput('email');//on retourne un message d'erreur
        //ce code permet de rediriger vers la page de login avec un message d'erreur
    }

    public function logout(){//pour se déconnecter
        Auth::logout();
        return to_route('auth.login');
    }
}
