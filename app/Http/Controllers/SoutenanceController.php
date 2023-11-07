<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Demande;
use App\Models\Jury;
use App\Models\Salle;
use App\Models\Soutenance;
use Illuminate\Http\Request;

class SoutenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listes = Soutenance::all();
        return view('pages.soutenance.list', compact('listes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jury = Jury::all();
        $salles = Salle::all();
        $demandes = Demande::where('statut', '=', 'acceptée')->get();
        return view('pages.soutenance.form', compact('jury', 'salles', 'demandes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Soutenance::create($request->all());
        return redirect()->route('gestion_soutenance.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $find = Soutenance::find($id);
        return view('pages.soutenance.detail', compact('find'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $find = Soutenance::find($id);
        return view('pages.soutenance.edit', compact('find'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $edit = Soutenance::find($id);
        $edit->update($request->only(['note', 'appreciation', 'statut']));
        return redirect()->route('gestion_soutenance.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $supp = Soutenance::find($id);
        $supp->delete();
        return redirect()->route('gestion_soutenance.index');
    }
}
