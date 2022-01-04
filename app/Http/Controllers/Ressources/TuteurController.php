<?php

namespace App\Http\Controllers\Ressources;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tuteur;
use App\Models\User;
class TuteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tuteurs = Tuteur::all();
        
        return view('tuteur.index',compact('tuteurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tuteurs = Tuteur::all();
        $eleves = User::where('role_id','=',4)->get();
        $tuteurs = User::where('role_id','=',3)->get();
        return view('tuteur.create',compact('tuteurs','eleves','tuteurs'));
    }

    public function createTuteur(){
        
        $tuteurs = Tuteur::all();
        $eleves = User::where('role_id','=',4)->get();
        $tuteurs = User::where('role_id','=',3)->get();
        return view('tuteur.createTuteur',compact('tuteurs','eleves','tuteurs'));
    }

    public function storeCreateTuteur(Request $request){
        $request->validate([
            'name'      => 'required',
            'fristname' => 'required',
            'email'     => 'required|email',
            'password'  => 'required',
        ]);

        $tuteur = User::create([
            'name'          => $request->input('name'),
            'fristname'     => $request->input('fristname'),
            'email'         => $request->input('email'),
            'password'      => Hash::make($request->input('password')),
            'role_id'       => 3,
            'option_id'     => 3,
            'created_at'    => Carbon::parse()->format('Y-m-d'),
            'updated_at'    => Carbon::parse()->format('Y-m-d'),
        ]);
        $tuteur->save();
        return redirect()->route('tuteur.index')
                        ->with('success','Tuteur created successfully.');
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
            'eleve' => 'required',
            'tuteur' => 'required',
        ]);
    
        Tuteur::create($request->all());
     
        return redirect()->route('tuteur.index')
                        ->with('success','Tuteur relationships created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tuteur $tuteurs)
    {
        return view('tuteur.show',compact('tuteurs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tuteursModels = Tuteur::findOrFail($id);
        $eleves = User::where('role_id','=',4)->get();
        $tuteurs = User::where('role_id','=',3)->get();
        return view('tuteur.edit',compact('tuteursModels','eleves','tuteurs'));
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
            'eleve' => 'required',
            'tuteur' => 'required',
        ]);
    
        Tuteur::find($id)->update($request->all());
        
        return redirect()->route('tuteur.index')
                        ->with('success','Tuteur updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mat = Tuteur::findOrFail($id);
        $mat->delete();
    
        return redirect()->route('tuteur.index')
                        ->with('success','Tuteur deleted successfully');
    }
}
