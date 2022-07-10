<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Notifications extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($id)
    {
    
        $singleNotification = \App\NotificationModel::find($id);
 
        return view('admin.dashboard.core-admin.view-note')->with(
            ['singleNotification'=>$singleNotification,
            'allNotificationCount'=>\App\NotificationModel::where('notification_type','system_wide'),
            'title'=>$singleNotification->subject]);    

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

    /*
    *@param <NULL>
    *@return View <$notifications>
    */
    public function notifyboard(){
        $dashboardNotification = \App\NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>auth()->id()])->get();

        $notifications = \App\NotificationModel::paginate(20);
        return view('admin.dashboard.core-admin.notifications')->with(['notifications'=>$notifications,'title'=>'Notifications and Incoming E-mails',
        'dashboardNotification'=>$dashboardNotification]);    
    }

}
