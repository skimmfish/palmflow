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
		'amtWithdrawable'=>$amountWithdrawable,'stakedTotal'=>$staked_amount,'stakeIDs'=>$stakingID,'minimumWithdrawal'=>6]);
		
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
*/
public function withdrawToWallet($uid,$amount){
//fetch the user's wallet first before continuining

}

public static function getArbitrage(){


$curl = curl_init();
curl_setopt_array($curl, [
	CURLOPT_URL => "https://crypto-arbitrage.p.rapidapi.com/crypto-arb?pair=XRP%2FUSD&consider_fees=True&selected_exchanges=exmo%20cex%20bitstamp%20hitbtc",
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


/*
$request = new Request;
$request->setUrl('https://crypto-arbitrage.p.rapidapi.com/crypto-arb');
$request->setMethod(HTTP_METH_GET);

$request->setQueryData([
	'pair' => 'BTC/USD',
	'consider_fees' => 'False',
	'selected_exchanges' => 'exmo cex bitstamp hitbtc'
]);

$request->setHeaders([
	'X-RapidAPI-Host' => 'crypto-arbitrage.p.rapidapi.com',
	'X-RapidAPI-Key' => 'd9ddb80eddmshbf40b6f49014c0cp118c49jsne8852cfc7825'
]);

try {
	$response = $request->send();

	echo $response->getBody();
} catch (HttpException $ex) {
	echo $ex;
}*/


}

}
