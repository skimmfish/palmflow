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

        $notifications = \App\NotificationModel::where('read_status',0)->paginate(20);
        return view('admin.dashboard.core-admin.notifications')->with(['notifications'=>$notifications,'title'=>'Notifications and Incoming E-mails',
        'dashboardNotification'=>$dashboardNotification]);    
    }


/*
*@param NULL
@return Boolean <$status>
*
*/
public function newbroadcast(){
	return view('admin.dashboard.core-admin.newbroadcast')->with(['title'=>'New General Broadcast']);
}

/*
*@param NULL
*This function sends a broadcast to all users in the system
*/

public function broad_to_all(Request $request){
$notifications = new \App\NotificationModel;
$notifications->subject = $request->subject;
$notifications->message = $request->message;
$notifications->reply_email = 'no-reply@balmflow.com';
$notifications->note = $request->message;
$notifications->sender_id = 14;
$notifications->receiver_id = $request->recipient;
$notifications->notification_type = 'system_wide';
$recipient = $request->recipient;

//saving a copy in the database
$notifications->save();
//sending a copy of the email

if($recipient=='all'){
    foreach((\App\User::where("active",1)->get()) as $r){
        Mail::to($r->email)->send(new \App\Mail\GeneralBroadcast($notifications->subject,$notifications->message));
    }	
}else{

    Mail::to($recipient)->send(new \App\Mail\GeneralBroadcast($notifications->subject,$notifications->message));
    
}

}

//end of class
}