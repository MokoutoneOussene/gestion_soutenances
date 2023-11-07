<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jury;
use Illuminate\Http\Request;

class JuryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listes = Jury::all();
        return view('pages.jury.list', compact('listes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.jury.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Jury::create($request->all());
        return redirect()-> route('gestion_jury.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $find = Jury::find($id);
        return view('pages.jury.edit', compact('find'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $find = Jury::find($id);
        $find->update($request->all());
        return redirect()->route('gestion_jury.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jury = Jury::find($id);
        $jury->delete();

        return redirect()->route('gestion_jury.index');
    }
}
