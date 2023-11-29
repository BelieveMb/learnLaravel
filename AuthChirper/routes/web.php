<?php

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('chirps', ChirpController::class)
    ->only(['index','store' ]) //ca signifie que seuls les méthodes index et store sont disponibles pour l'itinéraire chirps.
    ->middleware(['auth', 'verified']); // Le middleware auth sera utilisé si vous décidez d'activer la vérification des e-mails .
require __DIR__.'/auth.php'; // Cette ligne est nécessaire pour que l'authentification soit activée.
// Le verified middleware sera utilisé si vous décidez d'activer la vérification des e-mails .

// auth middleware garantit que seuls les utilisateurs connectés peuvent accéder à l'itinéraire.
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
