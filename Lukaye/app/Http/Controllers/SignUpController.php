<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\etudiant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class SignUpController extends Controller
{
   
    public function index()
    {
        // return view("users.home");
        // $users = DB::select('select * from users where active = ?', [1]);
        // $cars = DB::select('select * from voiture ');
        // return view('users.listUsers', ['users' => $cars]);
        // 'properties' =>  Property::orderBy('created_at', 'desc')->paginate(1)
        
        // $voitures = DB::select('SELECT * FROM voiture');
        return view('users.home');

    }

    
    public function create()
    {
        return view("users.signUp");
    }

    public function login(){
        return view("users.login");
    }
    public function listUsers(){
        // $clients = client::paginate(6);
        return view("users.listUsers", client::paginate(6));
        // return view("users.listUsers", ['client' => $clients]);
        //ce code signifie que je récupère toutes les données de la table client et je les passe dans la vue listUsers
    }
    public function connexion(){
        return view("users.connexion");
    }




  
    public function store(Request $request)
    {
        //
    }


    
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy($id)
    {
        //
    }
}
