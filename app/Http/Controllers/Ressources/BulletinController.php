<?php

namespace App\Http\Controllers\Ressources;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bulletin;
use App\Models\Composer;
use App\Models\matiere;
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

        //SELECT * FROM `composer` INNER JOIN matiere INNER JOIN bulletin INNER JOIN users WHERE matiere.id = `matiere_id` AND `bulletin_id`=2 AND users.id=2;
        $bulletins = bulletin::all()->where('user_id', '=', Auth::User()->id);
        $bulletinsLast = bulletin::latest()->where('user_id', '=', Auth::User()->id)->first();
        //dd($bulletins[0]->matieres[0]->matiereToNotes);
        //virer possede type
        //pivot table de gauche _ tablede droite dans ordre aplha
        //dd($test->matieres);
        return view('bulletin',compact('bulletins','bulletinsLast'));
    }
    
    public function IndexAdmin()
    {
        $bulletinsAll = bulletin::all();
        return view('bulletins.index',compact('bulletinsAll'));

        //return view('bulletin',compact('bulletins','bulletinCount'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bulletins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        $bulletins = bulletin::where('bulletin_index','=',$uuid)->get();
        //$appreciation = bulletin::where('bulletin_index','=',$uuid)->get()->pivot->appreciation;
        //dd($appreciation[0]);
        return view('bulletins.showbulletin',compact('bulletins'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
