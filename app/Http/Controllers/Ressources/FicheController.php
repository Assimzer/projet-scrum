<?php

namespace App\Http\Controllers\Ressources;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\fiche;
use PDF;

class FicheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fiches = fiche::all();
        return view('fiche.index', compact('fiches'));
    }

    public function createEntretienPDF($id) {
        //retreive all records from db
        $fiche = fiche::where('id','=', $id)->first();
        $pdf = PDF::loadView('fiche.entretien', compact('fiche'));
        return $pdf->download('fiche.pdf');

        // return view('fiche.entretien', compact('fiche'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fiches = fiche::all();
        return view('fiche.create', compact('fiches'));
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
            'title' => 'required',
            'description' => 'required',
            'nomCandidat' => 'required',
            'prenomCandidat' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);

        Fiche::create($request->all());

        return redirect()->route('fiche.index')
                        ->with('success', 'Fiche created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Fiche $fiche)
    {
        return view('fiche.show', compact('fiche'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fiche = fiche::findOrFail($id);
        return view('fiche.edit', compact('fiche'));
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
            'title' => 'required',
            'description' => 'required',
            'nomCandidat' => 'required',
            'prenomCandidat' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
    
        fiche::find($id)->update($request->all());
    
        return redirect()->route('fiche.index')
                        ->with('success','Fiche updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fic = fiche::findOrFail($id);
        $fic->delete();

        return redirect()->route('fiche.index')
                        ->with('success', 'Fiche deleted successfully');
    }
}
