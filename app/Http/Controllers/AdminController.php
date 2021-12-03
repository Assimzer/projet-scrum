<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\matiere;
class AdminController extends Controller
{
    public function GetDashboardAdmin(){
        return view('admin.admin');
    }
    public function ShowAllMatieres(){
        $matieres = matiere::all();
        return view('matiere.index', compact('matieres'));
    }
}
