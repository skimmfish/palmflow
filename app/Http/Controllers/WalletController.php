<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WalletModel;
use DB;

class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('admin.dashboard.new-wallet')->with('title','New Wallet');	
    }

//this function pulls up all the wallets belonging to this user
public function myWallets(){

//setting the id of the user
$id= auth()->id();

$wallets =  WalletModel::where('user_id',$id)->paginate(5);	
	return view('admin.dashboard.my_wallets')->with(['title'=>'My Wallets','wallets'=>$wallets,'id'=>1,'dashboardNotification'=>array()]);	
}

//looking up a wallet
	public function walletLookup($id){
	
		return count(WalletModel::where('user_id',$id)->get());
		
	}
	
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
			
			$rules = [
			'wallet_id'=> 'required | min:10 | max: 30',
			'wallet_identifier'=> 'required | max:72'
			];
			
			$request->validate($rules);
			
			$wallet = new WalletModel;
			$wallet->wallet_id = $request->wallet_id;
			$wallet->wallet_identifier = $request->wallet_identifier;
			//$wallet->use_for_withdrawal = $request->use_for_withdrawal;
			$wallet->user_id = $request->user_id;
			
			$wallet->save();
			
			//flashing the succes info
			$message = 'Wallet Added successfully';
			flash($message)->success();
		
			return redirect()->route('admin.dashboard.user')->with('message',$message);

		}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }


/**This function modifies the withdrawal type status for the wallet**/

	public static function editStatus($id){
						
		//retrieving the wallet to modify here
			$walletInfo = WalletModel::find($id);
			
			
			//get all wallets for this person so we can loop through them
			$allWallets = WalletModel::all();
			
			//reset their use_for_withdrawal field to 0 first of all
			foreach($allWallets as $a){
				
				DB::update('UPDATE wallet_models SET use_for_withdrawal=0 WHERE id=?',[$a->id]);
				
			}
			
				//fields for managing the withdrawals
				$walletInfo->use_for_withdrawal = 1;
				$walletInfo->updated_at = date('d-m-Y, h:i:s A', time());
			
				DB::update("UPDATE wallet_models SET use_for_withdrawal=? WHERE id=?",[1,$id]);
				
				//WalletModel::update("UPDATE wallet_models SET use_for_withdrawal=0 WHERE id=?",[$id]);
				
				$walletInfo->save();
				flash("Wallet status modified successfully")->success();
				
				return redirect()->route('admin.dashboard.my_wallets')->with(['message'=>'Wallet status modified successfully']);
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
	
				
		//retrieving the wallet to modify here
			$walletInfo = WalletModel::find($id);
			
			
			//get all wallets for this person so we can loop through them
			$allWallets = WalletModel::all();
			
			//reset their use_for_withdrawal field to 0 first of all
			foreach($allWallets as $a){
				
				DB::table('wallet_models')->update('UPDATE wallet_models SET use_for_withdrawal=? WHERE id=?',[0,$a->id]);
				
			}
			
				//fields for managing the withdrawals
				$walletInfo->use_for_withdrawal = 1;
				$walletInfo->updated_at = date('d-m-Y, h:i:s A', time());
			
				WalletModel::update("UPDATE wallet_models SET use_for_withdrawal=? WHERE id=? AND wallet_id=?",[1,$id,$request->wallet_id]);
				
				//WalletModel::update("UPDATE wallet_models SET use_for_withdrawal=0 WHERE id=?",[$id]);
				
				$walletInfo->save();
				flash::message("Wallet status modified successfully")->success();
				
				return redirect()->route('admin.dashboard.my_wallets')->with('message','Wallet status modified successfully');

	
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
}
