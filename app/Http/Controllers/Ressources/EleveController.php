<?php

namespace App\Http\Controllers\Ressources;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\option;
use App\Models\roles;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Users = User::where('role_id','=','4')->get();
        return view('eleve.index',compact('Users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Users = User::all();
        $options = option::all();
        $roles = roles::all();
        return view('eleve.create',compact('Users','options','roles'));
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
            'name' => 'required',
            'fristname' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'option_id' => 'required',
            'role_id' => 'required',
        ]);
    
        $eleve = User::create([
            'name' => $request->input('name'),
            'fristname' => $request->input('fristname'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role_id'          => $request->input('role_id'),
            'option_id' => $request->input('option_id'),
            'created_at' => Carbon::parse()->format('Y-m-d'),
            'updated_at' => Carbon::parse()->format('Y-m-d'),
        ]);
        $eleve->save();
        return redirect()->route('eleve.index')
                        ->with('success','User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $User)
    {
        return view('eleve.show',compact('User'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $User = User::findOrFail($id);
        return view('eleve.edit',compact('User'));
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
            'nomUser' => 'required',
            'sousCoefficient' => 'required',
        ]);
    
        User::find($id)->update($request->all());
    
        return redirect()->route('eleve.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mat = User::findOrFail($id);
        $mat->delete();
    
        return redirect()->route('eleve.index')
                        ->with('success','User deleted successfully');
    }
}
