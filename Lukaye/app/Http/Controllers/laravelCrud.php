<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laravelCrud extends Controller
{
    //
    function index(){
        return view('crud.index');
    }
    function add(Request $request){
        //on crée cette fonction pour le form add $request pour faire une dmde
        $request->validate([ //on valide les champs du form
            'name' =>'required',
            'favoriteColor' =>'required',
            'email' =>'required|email|unique:crud',
        ]);
        return $request->input();
    }
}
