<?php

namespace App\Http\Controllers\Ressources;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\matiere;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matieres = matiere::all();
        return view('matiere.index',compact('matieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matieres = matiere::all();
        return view('matiere.create',compact('matieres'));
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
            'nomMatiere' => 'required',
            'sousCoefficient' => 'required',
        ]);
    
        Matiere::create($request->all());
     
        return redirect()->route('matiere.index')
                        ->with('success','Matiere created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Matiere $matiere)
    {
        return view('matiere.show',compact('matiere'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matiere = matiere::findOrFail($id);
        return view('matiere.edit',compact('matiere'));
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
            'nomMatiere' => 'required',
            'sousCoefficient' => 'required',
        ]);
    
        matiere::find($id)->update($request->all());
    
        return redirect()->route('matiere.index')
                        ->with('success','Matiere updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mat = matiere::findOrFail($id);
        $mat->delete();
    
        return redirect()->route('matiere.index')
                        ->with('success','Matiere deleted successfully');
    }
}
