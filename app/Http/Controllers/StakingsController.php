<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NotificationModel;
use DB;
use Illuminate\Http\Client;

//for sending emails
use Illuminate\Support\Facades\Mail;

class StakingsController extends Controller
{
	
	 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public $note;
private $funding_currency;

public function __construction(){
$this->note = new NotificationModel;

}

    public function index(){

//store the amount withdrawable here
		$amountWithdrawable = 0;
		$staked_amount=0;
		$stakingID = null;
		$stakings = \App\Stakings::where('user_id',auth()->id())->paginate(10);
		$this->currency = \App\CryptoAPIManager::get_value('funding_currency');
		//calculating total withdrawable earnings in a seperate instance
		$withdrawableEarnings = \App\Stakings::select('id','staked_amount','balance_withdrawable')->where(['user_id'=>auth()->id()])->get();
		foreach($withdrawableEarnings as $x){
		$amountWithdrawable += $x->staked_amount *($x->balance_withdrawable/100);
		$stakingID = array($x->id);
		}
		
		$this->note = new NotificationModel;

		return view('admin.dashboard.stakings')->with(['title'=>'User Stakings','id'=>1,'stakings'=>$stakings,'dashboardNotification'=>$this->note->getNotifications(),
		'amtWithdrawable'=>$amountWithdrawable,'stakedTotal'=>$staked_amount,'stakeIDs'=>$stakingID,'minimumWithdrawal'=>6,'currency'=>$this->currency]);
		
	}
	

	/*
	*withdrawals function for displaying withdrawal history of all stakers and stake-holders
	*
	*
	*/
public function withdrawals(){
$withdrawals = \App\Withdrawals::where(['user_id'=>auth()->id()])->paginate(30);
$note = new NotificationModel;
//fetching the funding currency and withdrawal currency
$this->funding_currency = \App\CryptoAPIManager::get_value('funding_currency');

return view('admin.dashboard.withdrawals')->with(['title'=>'User Withdrawals','id'=>1,'withdrawals'=>$withdrawals,'currency'=>$this->funding_currency,'dashboardNotification'=>$note->getNotifications()]);
}

/*
*@param Datetime $date
*@param int $user_id
*@return Response object holding withdrawals for the time selected
*/
public function filterbydate($date, $user_id){

echo $date;

}

	  /**
     * Display the specified resource.
     *@param  int  $id
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
public function withdrawAll($id){

$res = \App\Stakings::where('user_id',$id)->get();
$accumulativeBalanceWithdrawable = 0;


foreach($res as $x){
//print_r($x);
$accumulativeBalanceWithdrawable += $x['staked_amount'] * ($x['balance_withdrawable']/100);
$response = DB::table('stakings')->where(['user_id'=>$id, 'trx_id'=>$x['trx_id']])->update(['percent_withdrawn_sofar'=>($x['percent_withdrawn_sofar']+$x['balance_withdrawable']), 
'balance_withdrawable'=>0]);
}

//sending the same value to the crypto payment endpoint
$resv = $this->withdrawToWallet($id, $accumulativeBalanceWithdrawable);
return $resv;
}

/*
*@param - user_id, and $amount
*@return Wallet object 
*/

public function withdrawToWallet($uid,$amount){
//fetch the user's wallet first before continuining
$walletToUse = null;
$wallet = \App\WalletModel::where(['user_id'=>$uid, 'use_for_withdrawal'=>1])->get();
foreach($wallet as $r){
$walletToUse = $r['wallet_id'];
}
//returning the wallet to use
return $walletToUse;
}

public static function getArbitrage(){


$curl = curl_init();
curl_setopt_array($curl, [
	CURLOPT_URL => "https://crypto-arbitrage.p.rapidapi.com/crypto-arb?pair=BTC%2FUSD&consider_fees=True&selected_exchanges=exmo%20cex%20bitstamp%20hitbtc",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: crypto-arbitrage.p.rapidapi.com",
		"X-RapidAPI-Key: d9ddb80eddmshbf40b6f49014c0cp118c49jsne8852cfc7825"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
return $response;
}
}

}
