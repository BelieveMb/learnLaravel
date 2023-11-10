<?php

use App\Http\Controllers\SignUpController;
use app\Livewire\Counter;
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
Route::get('/', function () {
    return view('welcome');
});
 
// Route::get('/counter', function(){
//     return view('livewire.counter');
// });

Route::prefix('lukaye')->name('lukaye.')->controller(SignUpController::class)->group(function(){
    Route::get('/home', 'index')->name('index');
    
    Route::get('/signUp', 'create')->name('signUpName');
    //la route de l'inscription

    Route::get('/login', function (){
        return view('/users/login');
    });
    //la route de la connexion
    Route::get('/listUsers', function (){
        return view('/users/listUsers');
    });
    //la route de la liste des inscrits
});
