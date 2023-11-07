<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login (Request $request) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'active' => '1'])) {
            if (Auth::user()){
                return redirect()->route('dashboard');
            }
             else {
                return redirect()->route('accueil')->with('status', 'email ou mot de passe incorrect !');
            }
        }

        return redirect()->route('accueil')->with('status', 'email ou mot de passe incorrect !');
    }

    public function logout () {
        Auth::logout();
        return redirect()->route('accueil');
    }

    public function store (Request $request) {
        User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'genre' => $request->genre,
            'telephone' => $request->telephone,
            'date_naiss' => $request->date_naiss,
            'roles_id' => $request->roles_id,
            'active' => $request->active,
            'photo' => $request->photo->store('user_profil', 'public'),
        ]);

        return redirect()->route('register')->with('status', 'Votre compte est en cours de traitement, veuillez rester a l\'ecoute !');
    }
}
