<?php

use App\Http\Controllers\laravelCrud;
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
| contains the "w=eb" middleware group. Now create something great!
|
*/

Route::get('crud', [laravelCrud::class, 'index']);
Route::post('add', [laravelCrud::class, 'add']);

Route::get('/', function () {
    return view('welcome');
});
 
//chat
Route::get('/chat', 'ChatController@index')->middleware('auth');
Route::post('/send-message', 'ChatController@sendMessage')->middleware('auth');

Route::prefix('lukaye')->name('lukaye.')->controller(SignUpController::class)->group(function(){
    Route::get('/home', 'index')->name('index');
    
    Route::get('/signUp', 'create')->name('signUpName');
    //la route de l'inscription

    Route::get('/login', 'login')->name('loginName');
    //la route de la connexion

    Route::get('/listUsers', 'listUsers')->name('listUsersName');
    //la route de la liste des inscrits

    Route::get('/connexion', 'connexion')->name('connexionName');
    //la route de la connexion or inscription
});
