<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\offre;
use App\Models\User;
use App\Models\Tuteur;
use Auth;
class ProfessionnelController extends Controller
{
    public function GetDashboardProfessionnel(){
        $allApprentis = Tuteur::where('tuteur','=',Auth::User()->id)->get();
        return view('Professionnel.dashboard',compact('allApprentis'));
    }

    public function GetOffrePostedBy(){
        $allApprentis = Tuteur::where('tuteur','=',Auth::User()->id)->get();
        $offres = offre::where('posted_by', '=', Auth::User()->id)->get();
        return view('Professionnel.offre',compact('offres','allApprentis'));
    }

    public function GetNotification(){
        //$notifications = offre::all()->where('posted_by', '=', Auth::User()->id);
        return view('Professionnel.offre');
    }

    public function GetApprentisInformation($apprentisID){
        $apprentis = User::where('id', '=', $apprentisID)->first();
        return view('Professionnel.offre',compact('users'));
    }
    
    
}
