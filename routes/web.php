<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\JuryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\SoutenanceController;
use App\Http\Controllers\UserController;
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

Route::get('/', [PageController::class, 'acceuil'])->name('accueil');

Route::post('authtification', [AuthController::class, 'login'])->name('login');

Route::get('deconnexion', [AuthController::class, 'logout'])->name('logout');

Route::post('enregistrement', [AuthController::class, 'store'])->name('add_users');

Route::get('register_users', [PageController::class, 'register'])->name('register');

Route::get('dashboard', [PageController::class, 'dash'])->name('dashboard');

Route::post('ajouter_demandes', [DemandeController::class, 'store'])->name('add_demande');

Route::get('formulaire_demande', [DemandeController::class, 'create'])->name('form_demande');

Route::get('liste_demande', [DemandeController::class, 'index'])->name('liste_demande');

Route::get('liste_demande_acceptees', [DemandeController::class, 'accept'])->name('demande_acceptees');

Route::get('liste_demande_refusees', [DemandeController::class, 'refuse'])->name('demande_refusees');

Route::get('liste_demande_inputees', [DemandeController::class, 'inpute'])->name('demande_inputees');

Route::get('liste_demande_encours', [DemandeController::class, 'en_cours'])->name('demande_encours');

Route::post('accepter_demande/{id}', [DemandeController::class, 'accept_demande']);

Route::post('inputer_demande/{id}', [DemandeController::class, 'input_demande']);

Route::post('refuser_demande/{id}', [DemandeController::class, 'refuse_demande']);

Route::resource('gestion_utilisateur', UserController::class);
Route::get('supprimer_user/{id}', [UserController::class, 'destroy']);

Route::resource('gestion_jury', JuryController::class);
Route::get('supprimer_jury/{id}', [JuryController::class, 'destroy']);

Route::resource('gestion_salle', SalleController::class);
Route::get('supprimer_salle/{id}', [SalleController::class, 'destroy']);

Route::resource('gestion_soutenance', SoutenanceController::class);
Route::get('supprimer_soutenance/{id}', [SoutenanceController::class, 'destroy']);
Route::get('gestion_evaluation/{id}', [SoutenanceController::class, 'form_evaluer'])->name('form_evaluation');
