<?php

namespace App\Http\Controllers;

use DB;

use App\Models\User;
Use \Carbon\Carbon;
use App\Models\offre;
use App\Models\Option;
use App\Models\Periode;
use App\Models\bulletin;
use App\Models\offreType;
use Illuminate\Http\Request;
use App\Models\offreLocation;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $bulletins = bulletin::where('user_id', '=', Auth::User()->id)->get();
        return view('home',compact('bulletins'));
        
    }

    public function ShowBulletinByUUID($uuid){
        $bulletins = bulletin::where('user_id', '=', Auth::User()->id)->get();
        $bulletin2 = bulletin::where('bulletin_index','=',$uuid)->first();
        
        return view('bulletins.showbulletin',compact('bulletins','bulletin2'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->flush();
        return  redirect('/login');
    }

    public function settings(){
        return view('settings');
    }

    public function OffrePage(){
        $offreASI = offre::all();
        $bulletins = bulletin::all()->where('user_id', '=', Auth::User()->id);
        return view('offre',compact('offreASI','bulletins'));
    }

    public function ProfilePage(){
        $bulletins = bulletin::where('user_id', '=', Auth::User()->id)->get();
        return view('profils',compact('bulletins'));
    }

    public function ShowOffre($offre_uuid){
        $offreASI = offre::all();
        $bulletins = bulletin::all()->where('user_id', '=', Auth::User()->id);

        $offre = offre::where('offre_uuid','=',$offre_uuid)->first();
        $offreType = offreType::all();
        $offreLocation = offreLocation::all();
        return view('offre.show',compact('offreASI','bulletins','offre','offreType','offreLocation'));
    }

    /*
    code de offre blade php ne pas enlever c'est pour mon souvenire 
    
    <div id="{{$offre->id}}" class="panel-collapse collapse">
        <div class="panel-body">
            <p>{{$offre->resumer}}</p>
            <span class="badge badge-pill badge-warning">{{$offre->offreType->type}}</span>
            <div class="row">
            @foreach($offre->offreSkills as $skill)
                    &nbsp;&nbsp;<span class="badge badge-pill badge-primary p-2">{{$skill->skill}}</span>    
            @endforeach
            </div><br><hr>
            
            <span class="badge badge-pill badge-warning">{{ auth()->user()->option->optionNom }}</span>
            <button type="button" class="btn btn-primary">Postuler</button>
            <a href="{{route('createPDF',['id' => $offre->id])}}">GETPDF</a>
        </div>
    </div>
    */
    
}
