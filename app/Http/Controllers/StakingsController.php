<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NotificationModel;
use DB;

//for sending emails
use Illuminate\Support\Facades\Mail;

class StakingsController extends Controller
{
	
	 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
    public function index(){

//store the amount withdrawable here
		$amountWithdrawable = 0;
		$staked_amount=0;
		
		$note = new NotificationModel;
		$stakings = \App\Stakings::where('user_id',auth()->id())->paginate(10);
		
		//calculating total withdrawable earnings in a seperate instance
		$withdrawableEarnings = \App\Stakings::select('id','staked_amount','balance_withdrawable')->where(['user_id'=>auth()->id()])->get();
		foreach($withdrawableEarnings as $x){
		$amountWithdrawable += $x->staked_amount *($x->balance_withdrawable/100);
		$stakingID = array($x->id);
		}
		
		
		return view('admin.dashboard.stakings')->with(['title'=>'User Stakings','id'=>1,'stakings'=>$stakings,'dashboardNotification'=>$note->getNotifications(),
		'amtWithdrawable'=>$amountWithdrawable,'stakedTotal'=>$staked_amount,'stakeIDs'=>$stakingID]);
		
	}
	
	  /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function show($id){
		//the Stakings model fetches based on the primary key after fetching by the user id from the index() method above

		$stake = DB::table('stakings')->WHERE(['id'=>$id])->get();

		return view('admin.dashboard.staking_snapshot')->with(['stakeModel'=>$stake]);
		
	}
	
	/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function edit($id){
		
		
	}
	
	    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function destroy($id){
		
		
	}
	
	 /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function update($id){
		
		
		
	}

/*
*@param $id - user_id who is withdrawing from the website
*@param $stakeids - a simple arrow containing all the stake ids 
*/
public function withdrawAll($id,$type='all'){
	
	
	
}

}
