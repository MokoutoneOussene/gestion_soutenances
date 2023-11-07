<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Demande;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listes = User::all();
        return view('pages.utilisateur.list', compact('listes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('pages.utilisateur.form', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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

        return redirect()->route('gestion_utilisateur.create')->with('status', 'Votre compte est en cours de traitement, veuillez rester a l\'ecoute !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $listes = Demande::where('users_id', '=', $id)->get();
        $find = User::find($id);
        return view('pages.utilisateur.detail', compact('find', 'listes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $find = User::find($id);
        $roles = Role::all();
        return view('pages.utilisateur.edit', compact('find', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->update($request->except(['photo', 'password']));

        return redirect()->route('gestion_utilisateur.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('gestion_utilisateur.index');
    }
}
