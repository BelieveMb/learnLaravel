<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PropertyFormRequest;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    
    public function index()
    {
        return view('admin.properties.index', [
            'properties' =>  Property::orderBy('created_at', 'desc')->paginate(1)
        ]);
    }


    public function create()
    {
        //on peut fixer des valeurs par défauts
        $property =  new Property();
        $property->fill([
            'surface' => 68,
            'rooms' => 3,
            'Bedrooms' => 3,
            'floor' => 0,
            'city' => 'Kinshasa',
            'postal_code' => 155,
            'sold' => false,
        ]);
        //on utilise un même view pour l'édition et création
        return view('admin.properties.form', [
            'property' => new Property()
        ]);
        
    }

   
    public function store(PropertyFormRequest $request)
    {
        //Pour la sauvegarde
        $property = Property::create($request->validated()); //on exec la query avec les infos validées
        return to_route('admin.property.index')->with('success','le bien a été crée avec succès');
    }

   

    public function edit(Property $property)
    {//on prendre Property en param pour faire la requete et on récupére le bien
        //pour l'édition
        return view('admin.properties.form', [
            'property' => $property
            ]); //on renvoie la vue avec le bien, vu dans admin.properties.form il y'a déjà une vue pour ça
        
    }

  
    public function update(PropertyFormRequest $request, Property $property)
    { //ces parametres sont obligatoire pour faire la requête et ca signifie que on aura un bien en param et PropertyFormRequest est un request qui va valider les infos envoyées par le formulaire
    
        $property->update($request->validated()); //on exec la query avec les infos validées
        return to_route('admin.property.index')->with('success','le bien a été modifié avec succès'); //on renvoie à la route admin.property.index avec un message de succès

    }

    public function destroy(Property $property)
    {
        //
        $property->delete(); //on exec la query avec les infos validées et on supprime le bien
        return to_route('admin.property.index')->with('success','le bien a été supprimé avec succès');
    }
}
