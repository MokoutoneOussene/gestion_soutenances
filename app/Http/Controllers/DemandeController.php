<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listes = Demande::all();
        return view('pages.demande.list', compact('listes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pages.demande.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Demande::create([
            'users_id' => $request->users_id,
            'statut' => $request->statut,
            'theme' => $request->theme,
            'document' => $request->document->store('doc_demande', 'public'),
            'date_demande' => $request->date_demande,
            'session' => $request->session,
        ]);

        return redirect()->route('form_demande')->with('status', 'Votre demande a été envoyé avec succès, veuillez attendre la validation !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $finds = Demande::find($id);
        return view('pages.demande.detail');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function accept()
    {
        $listes = Demande::where('statut', '=', 'acceptée')->get();
        return view('pages.demande.demande_approuve', compact('listes'));
    }

    public function refuse()
    {
        $listes = Demande::where('statut', '=', 'refusée')->get();
        return view('pages.demande.demande_refuse', compact('listes'));
    }

    public function inpute()
    {
        $listes = Demande::where('statut', '=', 'inputée')->get();
        return view('pages.demande.demande_input', compact('listes'));
    }

    public function en_cours()
    {
        $listes = Demande::where('statut', '=', 'en cours')->get();
        return view('pages.demande.demande_encours', compact('listes'));
    }

    public function accept_demande(Request $request, $id)
    {
        $accept = Demande::find($id);
        $accept->update($request->only(['statut']));
        return redirect()->route('demande_acceptees');
    }

    public function input_demande(Request $request, $id)
    {
        $input = Demande::find($id);
        $input->update($request->only(['statut']));
        return redirect()->route('demande_inputees');
    }

    public function refuse_demande(Request $request, $id)
    {
        $refuse = Demande::find($id);
        $refuse->update($request->only(['statut']));
        return redirect()->route('demande_refusees');
    }
}
