<?php

namespace App\Http\Controllers\Ressources;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = Notification::all();
        return view('notification.index',compact('notifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notifications = Notification::all();
        return view('notifications.create',compact('notifications'));
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
            'nomNotification' => 'required',
            'sousCoefficient' => 'required',
        ]);
    
        Notification::create($request->all());
     
        return redirect()->route('notifications.index')
                        ->with('success','Notification created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Notification $notifications)
    {
        return view('notifications.show',compact('notifications'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notifications = Notification::findOrFail($id);
        return view('notifications.edit',compact('notifications'));
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
            'nomNotification' => 'required',
            'sousCoefficient' => 'required',
        ]);
    
        Notification::find($id)->update($request->all());
    
        return redirect()->route('notifications.index')
                        ->with('success','Notification updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mat = Notification::findOrFail($id);
        $mat->delete();
    
        return redirect()->route('notifications.index')
                        ->with('success','Notification deleted successfully');
    }
}
