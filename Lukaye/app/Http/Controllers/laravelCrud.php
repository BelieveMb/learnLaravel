<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class laravelCrud extends Controller
{
    //
    function index(){
        $crud = crud::all();
        return view('crud.index', ['crud'=>$crud]);
    }
    function add(Request $request){
        //on crée cette fonction pour le form add $request pour faire une dmde
        $request->validate([ //on valide les champs du form
            'name' =>'required',
            'favoriteColor' =>'required',
            'email' =>'required|email|unique:crud',
        ]);

        //la query for insert into
        $query = DB::table('crud')->insert([
            'name'=>$request->input('name'),
            'favoriteColor'=>$request->input('favoriteColor'),
            'email'=>$request->input('email'),
        ]);

        if($query){
            return back()->with('success', 'Data as ok');
        }else{
            return back()->with('fait', 'error');
        }
    }
}
