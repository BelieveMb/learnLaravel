<?php

use App\Http\Controllers\Admin\PropertyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Events\Message;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// Route::post('send-message', function (Request $request) {
Route::post('send-message', function (Request $request) {
    event(new Message($request->username, $request->message));
    return ['success' => true];
});
Route::prefix('admin')->name('admin.')->group(function(){
    //prefix permet de mettre un prefix sur toutes les routes, name : le nom de
    //la routes
    // Route::resource('proprety', PropertyController::class);
    //ressource pour générer auto, les routes ->php artisan route:list
    Route::resource('property', PropertyController::class)->except(['show']);
    //except, les méthodes à supprimer
    // Cette route crée plusieurs routes pour le contrôleur PropertyController en utilisant la méthode resource() de Laravel. Cette méthode crée automatiquement des routes pour les actions courantes de CRUD (Create, Read, Update, Delete) associées à un contrôleur.

});