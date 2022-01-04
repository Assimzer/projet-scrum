<?php

namespace App\Http\Controllers\Ressources;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bulletin;
use App\Models\Composer;
use Auth;
use DB;
class BulletinController extends Controller
{

    public function __construct()
    {
        //permet utiliser toute les autres fonction uniquement si on est admin
        //si pas admin on peut apeller index et show
        #$this->middleware('RoleMiddleware')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$bulletins = bulletin::all()->where('user_id', '=', Auth::User()->id);
        //$bulletinsLast = bulletin::latest()->where('user_id', '=', Auth::User()->id)->first();
        //return view('bulletin',compact('bulletins','bulletinsLast'));
        $bulletins = bulletin::all();
        return view('bulletins.index',compact('bulletins'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bulletins = bulletin::all();
        return view('bulletin.create',compact('bulletins'));
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
            'nombulletin' => 'required',
            'sousCoefficient' => 'required',
        ]);
    
        bulletin::create($request->all());
     
        return redirect()->route('bulletin.index')
                        ->with('success','bulletin created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(bulletin $bulletin)
    {
        return view('bulletin.show',compact('bulletin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bulletin = bulletin::findOrFail($id);
        return view('bulletin.edit',compact('bulletin'));
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
            'nombulletin' => 'required',
            'sousCoefficient' => 'required',
        ]);
    
        bulletin::find($id)->update($request->all());
    
        return redirect()->route('bulletin.index')
                        ->with('success','bulletin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mat = bulletin::findOrFail($id);
        $mat->delete();
    
        return redirect()->route('bulletin.index')
                        ->with('success','bulletin deleted successfully');
    }
}
