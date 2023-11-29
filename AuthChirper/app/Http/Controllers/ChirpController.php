<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        //return view('chrips.index'); //ca signifie que la vue se trouve dans
        //le dossier resources/views/chirp/index.blade.php
        return view('chirps.index');
    }

    public function create()
    {
        //
    }

    // Mettons à jour la store méthode sur notre ChirpControllerclasse pour valider les données et créer un nouveau Chirp :
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]); //ça signifie que la méthode validate() de la classe Request va valider les données et les passer à la méthode create() de la classe User.

        $request->user()->chirps()->create($validated); //ça signifie que la méthode create() de la classe User va créer un nouveau Chirp et lui passer les données validées.
        
        return redirect(route('chirps.index')); //ça signifie que la méthode redirect() de la classe RedirectResponse va rediriger l'utilisateur vers la route chirps.index.
    }

    public function show(Chirp $chirp)
    {
        //
    }

    public function edit(Chirp $chirp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chirp  $chirp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chirp $chirp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chirp  $chirp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chirp $chirp)
    {
        //
    }
}
