<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GasFeeController extends Controller
{


    /*
    *@param Integer <$uid>
    *@return Integer <$totalTxFees>
    */
    public static function getTotalTxFees($uid){

        $totalTxFees = 0;$total=0;$stakedValue=0;

        $fees = \App\GasFee::where(['user_id'=>$uid])->get();
        foreach($fees as $x){
            $total = $x['amount'];
            $stakedValue = $x['staked_value'];
        }

        $totalTxFees = array('totalFees'=>$total,'stakedValue'=>$stakedValue);

        return $totalTxFees;

}

/*
*@param Illuminate\Http\Request <$request>
*@param Integer <$id>
*/
public function update(Request $request, $uid){
$gasFeeObj = \App\GasFee::where('user_id',$uid)->get();
$newStakedValue = $request->staked_value;
$staked_value=0;
//$amount = $gasFeeObj->amount;

foreach($gasFeeObj as $g){
$newStakedValueAmount = $g['amount']-$newStakedValue;
$staked_value = $g['staked_value']+$newStakedValue;
}

$userID = $request->user_id;

$response = DB::update("UPDATE gas_fees SET amount=?, staked_value=? WHERE user_id=?",[$newStakedValueAmount,$staked_value,$uid]);

$faker = \Faker\Factory::create();
$txHash = \App\Http\Controllers\TransactionController::hashRandom(10);
//creating a new transactions record in the transactions table
DB::insert("INSERT into transactions (
    id,
    transaction_id,
    transaction_hash,
    trx_amount,
    originating_wallet_id,
    destination_wallet_id,
    block_no_of_confirmations,
    user_id,
    comments,
    trxn_complete_status,
    transaction_type,
    staking_liquidation_status,
    explorer_url,
    created_at,updated_at
) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",
[NULL,$faker->numerify('####-##-####-##-###'),$txHash,$newStakedValue,'internal','outward',0,
$userID,'Wallet reserve staking',1,'outinflow',0,"https://balmflow.com/hashexplorer/view_status/".$txHash,date('Y-m-d h:i:s',time()), 
date('d-m-y h:i:s',time())
]);


$faker = \Faker\Factory::create();
		
//auto-generate transaction id for this request
$trx_id = $faker->numerify('####-##-####-##-###');
		
//insert a line into the staking dashboard and notify the admins of new staking
$rStake = DB::insert("INSERT into stakings (
    id,
    trx_id,
    user_id,
    staked_amount,
    total_percent_returns,
    percent_withdrawn_sofar,
    balance_to_withdraw,
    closure_date,
    created_at,
    updated_at,
    balance_withdrawable) VALUES (?,?,?,?,?,?,?,?,?,?,?)",[
        NULL,$trx_id,$uid,$newStakedValue,0,0,0,NULL,date('Y-m-d h:i:s',time()),date('Y-m-d h:i:s',time()),0]);

$msg = "Transactions successful!";
flash($msg)->success();

//redirecting to the transactions page
return redirect()->route('admin.dashboard.transactions',['id'=>$userID])->with('message',$msg);
}



/*
*@param Integer <$id>
*@return NULL
*/
public function delete($id){
$account = \App\GasFee::find($id);
$account->softDelete();
}

}
