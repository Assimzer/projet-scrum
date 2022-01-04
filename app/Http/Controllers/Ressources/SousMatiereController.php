<?php

namespace App\Http\Controllers\Ressources;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SousMatiere;
use App\Models\matiere;
class SousMatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sousMatieres = SousMatiere::all();
        return view('sousMatiere.index',compact('sousMatieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matieres = matiere::all();
        $sousMatieres = SousMatiere::all();
        return view('sousMatiere.create',compact('sousMatieres','matieres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'matiere_groupe' => 'required',
            'matiere_associer' => 'required',
        ]);
    
        SousMatiere::create($request->all());
     
        return redirect()->route('sousMatiere.index')
                        ->with('success','SousMatiere created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SousMatiere $sousMatiere)
    {
        return view('sousMatiere.show',compact('sousMatiere'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sousMatiere = SousMatiere::findOrFail($id);
        return view('sousMatiere.edit',compact('sousMatiere'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nomSousMatiere' => 'required',
            'sousCoefficient' => 'required',
        ]);
    
        SousMatiere::find($id)->update($request->all());
    
        return redirect()->route('sousMatiere.index')
                        ->with('success','SousMatiere updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mat = SousMatiere::findOrFail($id);
        $mat->delete();
    
        return redirect()->route('sousMatiere.index')
                        ->with('success','SousMatiere deleted successfully');
    }
}
