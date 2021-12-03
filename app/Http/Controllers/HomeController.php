<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
Use \Carbon\Carbon;
use App\Models\User;
use App\Models\offre;
use App\Models\Option;
use App\Models\bulletin;
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
        $bulletins = bulletin::all()->where('user_id', '=', Auth::User()->id);
        return view('home',compact('bulletins'));
        
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
        return view('profils');
    }
    
}
