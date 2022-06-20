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
public function update(Request $request, $id){
$gasFeeObj = \App\GasFee::find($id);
$newStakedValue = $request->staked_value;
$userID = $request->user_id;

$response = DB::update("UPDATE gas_fees SET amount=amount-?, staked_value=staked_value+? WHERE id=?",[$newStakedValue,$newStakedValue,$id]);

$faker = \Faker\Factory::create();
$txHash = \App\Http\Controllers\TransactionController->hashRandom(10);
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
    trx_complete_status,
    transaction_type,
    staking_liquidation_status,
    explorer_url
) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)",
[NULL,$faker->numerify('####-##-####-##-###'),$txHash,$newStakedValue,'internal','outward',0,
$userID,'Wallet reserve staking',1,'outinflow',0,NULL]);

$msg = "Staking registration completed successfully!";
flash($msg)->succes();

//redirecting to the transactions page
return redirect()->route('admin.dashboard.transactions',['id'=>$userID])->with('message',$msg);
}



}
