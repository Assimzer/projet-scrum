<?php

namespace App\Http\Controllers\Ressources;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Periode;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Periodes = Periode::all();
        return view('periode.index',compact('Periodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Periodes = Periode::all();
        return view('periode.create',compact('Periodes'));
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
            'dateDebut' => 'required',
            'dateFin' => 'required',
        ]);
    
        Periode::create($request->all());
     
        return redirect()->route('periode.index')
                        ->with('success','Periode created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Periode $Periode)
    {
        return view('periode.show',compact('Periode'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Periode = Periode::findOrFail($id);
        return view('periode.edit',compact('Periode'));
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
            'dateDebut' => 'required',
            'dateFin' => 'required',
        ]);
    
        Periode::find($id)->update($request->all());
    
        return redirect()->route('periode.index')
                        ->with('success','Periode updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mat = Periode::findOrFail($id);
        $mat->delete();
    
        return redirect()->route('periode.index')
                        ->with('success','Periode deleted successfully');
    }
}
