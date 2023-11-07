<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function acceuil () {
        return view('auth.login');
    }

    public function formulaire () {
        return view('formulaire_etudiant');
    }

    public function liste () {
        return view('liste_etudiant');
    }

    public function dash () {
        return view('accueil');
    }

    public function register () {
        return view('auth.register');
    }
}
