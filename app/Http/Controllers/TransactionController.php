<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transactions;
use App\NotificationModel;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\AssetManager;
use App\CryptoAPIManager;
use Coinremitter\Coinremitter;


//use Illuminate\Contracts\Validation\Validator;


class TransactionController extends Controller
{

    //initializing key variables
    private $apiKey;
    private $apiPassword;
    private $withdrawalWallet;
    private $balmflowUsdterc20ReceivingWallet;
    private $balmflowBtcReceivingWallet;
    private $balmflowBnbReceivingWallet;
    private $curl;
    private $params;
    public $btc_wallet;

	 public function __construction(){
 //default funding currency
 $walletCurrency = CryptoAPIManager::get_value('funding_currency');
 $this->btc_wallet = new Coinremitter($walletCurrency);    

     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transactions::paginate(40);
		$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>1])->get();
		return view('admin.dashboard.core-admin.alltransactions')->with(['transactions'=>$transactions,'id'=>1,'dashboardNotification'=>$dashboardNotification,'title'=>'All Transactions Record']);
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
        
		$transaction = new Transactions;

		//creating the rules and custom messages
		$rules = [];
		$message = [];
		
		
		$rules =[
            'originating_wallet_id'=>'required | min: 34 | max:34',
			'transaction_hash' => 'required',
			'trx_amount' => 'required'
		];
		
		/*
		$messages = [
		'message'=>'You cannot leave this box empty',
		'required'=>'This field is required',
		'originating_wallet_id.required'=>'A 34-char length string wallet ID of TRC20 type is required'
		];
		
		*/
		
		$request->validate($rules);

		$faker = \Faker\Factory::create();
		
		//auto-generate transaction id for this request
		$transaction->transaction_id = $faker->numerify('####-##-####-##-###');
		$transaction->transaction_hash = $this->hashRandom(10);
		$transaction->trx_amount = $request->trx_amount;
		$transaction->originating_wallet_id = $request->originating_wallet_id;
		$transaction->transaction_type='inflow';
		$transaction->destination_wallet_id = $request->destination_wallet_id;
		$transaction->user_id = $request->user_id;
		
		$transaction->save();
		$message = 'Transaction registered successfully, kindly wait for confirmation!';
		
		//flashing the succes info
		flash($message)->success();
		
		return redirect()->route('admin.dashboard.fund_wallet')->with('message',$message);
		
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

	
	
	/*
	*This function fetches all the transaction records for the specified user with the $uid parameter passed, the recorsd sare paginated at 20 records per table
	*
	*/
	public static function paginateRecords(){

	//fetching the currently logged in user
	$uid = auth()->id();
	$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>$uid])->get();

	$transactions = Transactions::select('transaction_id','transaction_hash','trx_amount','created_at','trxn_complete_status','originating_wallet_id','transaction_type')->where('user_id', $uid)->paginate(20);	
	
	return view('admin.dashboard.transactions')->with(['Transactions'=>$transactions,'id'=>1,'title'=>'Transactions History', 'dashboardNotification'=>$dashboardNotification,'active'=>'active']);
	
	}



	public function autoGenerate($numChar){
			
			return Str::random($numChar);
			
		}
		
		public function hashRandom($str){
			
			return bcrypt($str);
			
		}
		
	public static function showTransactions($id){
	
		return $transactions = Transactions::where(['user_id'=>$id])->orderBy('created_at','ASC')->take(6)->get();
		//return view('admin.dashboard.fund_wallet')->with('Transactions',$transactions);
		
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
    *Extra function needed to conduct wallet-to-wallet transactions via the coinremitter API
    */
    public function fundWallet(){

    }
    

/*This function creates a new wallet for customers to fund their wallet
*@param none
*@return String $WalletID
*/
    public static function getNewWallet(){
        //walletCurrency

        $newWallet = null;

try{        //default funding currency
        $walletCurrency = \App\CryptoAPIManager::get_value('funding_currency');
        $btc_wallet = new Coinremitter($walletCurrency);
        $userid = auth()->id();
        $date = date('Y-m-d, h:i:s A',time());
        $username = \App\User::get_profile_data($userid,'username');
        //saving to log
        $log = "funding currency: ".$walletCurrency.", new wallet generated by user with username $username on $date";
        \Log::info($log);

        //fetch the new address
        $newWallet = $btc_wallet->get_new_address();

}catch(Exception $e){
//printing error message
\Log::info($e->getMessage());

    return;
}

return $newWallet;
}


    /*get_transaction() fetches the transaction details from coinremitter
    *@param int $id - transaction id
    *@return Array transaction-details
    */
    public function get_transaction($id){
        
        $param = ['id'=>$id];
        return $transaction = $this->btc_wallet->get_transaction($param);
    }

    /*
*ValidateWallet function
*@param String $walletID
@return Json response
*/
    public function validateWallet($walletID){
        $walletCurrency = CryptoAPIManager::get_value('funding_currency');
        $btc_wallet = new Coinremitter($walletCurrency);

        $param = [
            'address'=>$walletID
        ];
        
      return $validate = $btc_wallet->validate_address($param)['data']['valid'];
    }
    
    /*Withdrawing to wallet based on the funding currency
    *withdraw to wallet
    *@param string wallet_id
    *@param string withdrawal currency
    *param Request
    */
    public function withdrawToWallet($walletID, $witdrawalCurrency,$amount){
       //validating the wallet 
       $walletState = $this->validateWallet($walletID);
        $withdrawResponse = null;
       if($walletState){
        $param = [
            'to_address'=>$walletID,
            'amount'=>$amount
        ];

        $withdrawResponse = $btc_wallet->withdraw($param);

        //we log the transaction information in the transactions table for more preview
if($withdrawResponse['flag']){
		$faker = \Faker\Factory::create();		
        $transaction = new Transaction;

		//auto-generate transaction id for this request
		$transaction->transaction_id = $faker->numerify("####-##-####");
		$transaction->transaction_hash = $withdrawResponse['data']['txid'];
		$transaction->trx_amount = $amount;
		$transaction->originating_wallet_id = null;
		$transaction->transaction_type='outflow';
		$transaction->destination_wallet_id = $walletID;
		$transaction->user_id = auth()->id();
		$transaction->block_no_of_confirmations = 3;
        $transaction->explorer_url = $withdrawResponse['data']['explorer_url'];
		$transaction->save();
		$message = 'Transaction was successfully, kindly wait for confirmation!';
		//flashing the succes info
		flash($message)->success();
    }
		return redirect()->route('admin.dashboard.fund_wallet')->with('message',$message);
    }else{
        return 'Your wallet is invalid, or amount below withdrawable value';
    }
return $withdrawResponse;
}
}
