<?php

namespace App\Http\Controllers\Ressources;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\offre;
use App\Models\offreType;
use App\Models\offreLocation;
use PDF;
use Auth;
use Carbon\Carbon;
class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offres = offre::all();
        return view('offre.index',compact('offres'));
    }

    public function createPDF($id) {
        //retreive all records from db
        $offre = offre::where('id','=',$id)->first();
        //$pdf = PDF::loadView('offre.pdf-offre', compact('offre'));
        //return $pdf->download('offre.pdf');

        return view('offre.pdf-offre', compact('offre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $offres = offre::all();
        $offreType = offreType::all();
        $offreLocation = offreLocation::all();
        return view('offre.create',compact('offres','offreType','offreLocation'));
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
            'titre'         => 'required',
            'description'   => 'required',
            'resumer'       => 'required',
            'telephone'     => 'required',
            'societer'      => 'required',
            'offreType_id'  => 'required',
            'offreLocation_id'=> 'required',
            
        ]);
    
    
        //offre::create($request->all());
        $offre = offre::create([
            'titre'         => $request->input('titre'),
            'description'   => $request->input('description'),
            'resumer'       => $request->input('resumer'),
            'telephone'     => $request->input('telephone'),
            'societer'      => $request->input('societer'),
            'offreType_id'  =>$request->input('offreType_id'),
            'posted_by' => Auth::User()->id,
            'created_at'    => Carbon::parse()->format('Y-m-d'),
            'updated_at'    => Carbon::parse()->format('Y-m-d'),
            'offreLocation_id' => $request->input('offreLocation_id'),

            ]);
        $offre->save();
               
        return redirect()->route('offre.index')
                        ->with('success','offre created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offre = offre::findOrFail($id);
        $offreType = offreType::all();
        $offreLocation = offreLocation::all();
        return view('offre.show',compact('offre','offreType','offreLocation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offre = offre::findOrFail($id);
        $offreType = offreType::all();
        $offreLocation = offreLocation::all();
        return view('offre.edit',compact('offre','offreType','offreLocation'));
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
            'titre'         => 'required',
            'description'   => 'required',
            'resumer'       => 'required',
            'telephone'     => 'required',
            'societer'      => 'required',
            'offreType_id'  => 'required',
            'offreLocation_id'=> 'required',
            
        ]);
    
        offre::find($id)->update($request->all());
    
        return redirect()->route('offre.index')
                        ->with('success','offre updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mat = offre::findOrFail($id);
        $mat->delete();
    
        return redirect()->route('offre.index')
                         -> with('success','offre deleted successfully');
    }
        
}
