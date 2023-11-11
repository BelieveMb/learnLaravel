<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
   
    public function index()
    {
        return view("users.home");
    }

    
    public function create()
    {
        return view("users.signUp");
    }

    public function login(){
        return view("users.login");
    }
    public function listUsers(){
        return view("users.listUsers");
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
