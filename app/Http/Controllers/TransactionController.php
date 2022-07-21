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
use Illuminate\Support\Facades\Http;

use DB;

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
 $coinProcessor = CryptoAPIManager::get_value('processing_api');
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
        $transactions = Transactions::orderBy('id','desc')->paginate(40);
		$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>auth()->id()])->get();
		return view('admin.dashboard.core-admin.alltransactions')->with(['transactions'=>$transactions,'id'=>1,'user'=>new \App\User,'title'=>'All Transactions Record']);
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
		$transaction->txn_date = date("Y-m-d");
        $transaction->txn_last_updated=date("Y-m-d");

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

	$transactions = Transactions::select('transaction_id','transaction_hash','trx_amount','created_at','trxn_complete_status','originating_wallet_id','transaction_type','comments')->where(['user_id'=>$uid])->orderBy('id','DESC')->paginate(20);	
	
	return view('admin.dashboard.transactions')->with(['Transactions'=>$transactions,'id'=>1,'title'=>'Transactions History','active'=>'active','user'=>new \App\User,]);
	
	}



	public function autoGenerate($numChar){
			
			return Str::random($numChar);
			
		}
		
		public static function hashRandom($str){
			
			return bcrypt($str);
			
		}
		
	public static function showTransactions($id){
	
		return $transactions = Transactions::where(['user_id'=>$id])->orderBy('created_at','DESC')->take(6)->get();
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


/*
*@param NULL
*@return Response <$response>
*/

public static function createPayment($amount){
/*
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.nowpayments.io/v1/payment",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
        "x-api-key: ".\App\CryptoAPIManager::get_value('nowapi_key'),
        "Content-Type:application/json"
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
  */  

return   $response = Http::withHeaders([
    
        "x-api-key" => \App\CryptoAPIManager::get_value('nowapi_key'),
        "Content-Type" =>"application/json"
       
        ])->post('https://api.nowpayments.io/v1/payment', [
            'price_amount' => $amount,
            'price_currency'=> 'USD',
            'pay_currency' => 'USDTTRC20',
            'ipn_callback_url' => 'https://nowpayments.io',
            'order_id' => 'OLFX-1200',
            'order_description' => 'Wallet Reserve Funding'
    ]);


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
		$transaction_id = $faker->numerify("####-##-####");
		$transaction->transaction_id = $transaction_id;
		
        $transaction->transaction_hash = $withdrawResponse['data']['txid'];
		$transaction->trx_amount = $amount;
		$transaction->originating_wallet_id = null;
		$transaction->transaction_type='withdrawal';
		$transaction->destination_wallet_id = $walletID;
		$transaction->user_id = auth()->id();
		$transaction->block_no_of_confirmations = 3;
        $transaction->explorer_url = $withdrawResponse['data']['explorer_url'];
		$transaction->save();
		$message = 'Transaction was successfully, kindly wait for confirmation!';
		
        
        
        //creating a line in the withdrawals table
        $withdrawals = \App\Withdrawals;
        $withdrawals->user_id = auth()->id();
        $withdrawals->transaction_id = $transaction_id;
        $withdrawals->confirmations = 2;
        $withdrawals->receiving_wallet_id = $walletID;
        $withdrawals->status=1;
        $withdrawals->save();
    
        
        //flashing the succes info
		flash($message)->success();





    }
		return redirect()->route('admin.dashboard.fund_wallet')->with('message',$message);
    }else{
        return 'Your wallet is invalid, or amount below withdrawable value';
    }
return $withdrawResponse;
}


/*
*@param Date <$s> for startDate
*@param Date <$e> for endDate
*/
public static function find_records($s,$e,$u){

$response=array();

$filterType = explode("_",$u)[1];
$id = explode("_",$u)[0];


if($id=='NULL'){
$response = DB::select("SELECT * FROM $filterType WHERE txn_date BETWEEN ? AND ? ORDER BY created_at DESC",[$s,$e]);
}else{
$response = DB::select("SELECT * FROM $filterType WHERE user_id=? AND txn_date BETWEEN ? AND ? ORDER BY created_at DESC",[$id,$s,$e]);    
}

return $response;
}


/*
*@param DateTime Range <$p>
*@param User <$uid>
*@return Response <$data>
*/
public static function fetchByPeriod($p, $uid){
$data = null;
$date = date("Y-m-d");

//getting days counter for each selections
$counter = 0;
if($p=='last_7'){
    $counter=7;
}else if($p=='last_30'){
    $counter=30;
}else if($p=='last_90_days'){
    $counter=90;
}


if($uid=='NULL'){

//for admin filtering purposes
if($p=='today'){
$data = DB::select("SELECT *FROM transactions WHERE txn_date=? AND",[$date]);
}else{
    $data = DB::select("SELECT *FROM transactions WHERE txn_date>current_date - interval ? day ",[$counter]);
}

}else{

//for logged users transactions
if($p=='today'){
//fetching today's date
$data = DB::select("SELECT *FROM transactions WHERE txn_date=? AND user_id=?",[$date,$uid]);

}else{
$data = DB::select("SELECT *FROM transactions WHERE txn_date>current_date - interval ? day AND user_id=?",[$counter,$uid])->orderBy('created_at');
}

}//closing the else{} block

return $data;
}


/*
*@param Response <$response>
*/
public static function show_record($res,$s,$e,$type){
$walletCurrency = \App\CryptoAPIManager::get_value('funding_currency');

    $id=1;
if(count($res)<=0){
    echo "<b style='font-size:13.5px;'>No record found!</b>";
}else{

echo '<div><small class="text-md">Search result of transactions between <b>'.$s.'</b> and <b>'.$e.'</b></small></div>';

if($type=='transactions'){

echo '
<table class="table table-responsive table-bordered table_rws">
<thead>
<tr><th>S/n</th><th>Transaction ID</th><th>Amount (USDT)</th><th>Check Transaction</th><th>Origin/Receiving Wallet</th><th>Transaction <br/> Type</th><th>Comments</th>
<th>Date</th><th>Txn Status</th></tr></thead><tbody>';

foreach($res as $trx){
   echo '<tr>
   <td>'. $id++ .'</td>
   <td>'.$trx->transaction_id.'</td>
   <td>'.$trx->trx_amount.'</td>
   <td><span class="text-black"><a href="'.$trx->explorer_url.'" target="_blank">Explore Transaction</a></span></td>
   <td><span class="text-warning">'.\Illuminate\Support\Str::limit($trx->originating_wallet_id,20).'</span></td>
   <td><span class="text-info">'.ucfirst($trx->transaction_type).'</span></td>
   <td>'. $trx->comments .'</td>
   <td><span class="text-info">'. date('d F Y, H:i:s a', strtotime($trx->created_at)).'</span></td>
   <td>'; 
   if($trx->trxn_complete_status) 
       echo '<span class="text-success"><u>Completed</u></span>';
   else 
     echo '<i class="text-danger">Incomplete</i><Br/>
       <a href="#" data-attr="'.'http://localhost:8000/dashboard/view-transaction/'.$trx->id.'" data-toggle="modal" id="smallButton" data-target="#transactionmodal" class="text-warning"><u>Query Txn</u></a>';
     echo '</td>

   </tr>';

}

echo '</tbody><tfoot><th>S/n</th><th>Transaction ID</th>
<th>Amount (USDT)</th><th>Txn Hash</th>
<th>Origin/Receiving Wallet</th><th>Transaction Type</th>
<th>Comments</th><th>Date</th>
<th>Txn Status</th></tfoot>
</table>';

}else if($type=='stakings'){

echo '<table class="table table-responsive table-bordered table_rws">
    <thead>
    <tr><th>S/N</th>
    <th>Transaction ID</th>
    <th>Amount ('.$walletCurrency.')</th>
    <th>Total Gains on Staking</th>
    <th>Total Withdrawn</th>
    <th>Balance to Withdraw</th>
    <th>Date Created <hr/> Last Updated</th>
    <th>Probable Closure Date</th>
    <th>Actions</th>
    </tr>
    </thead>
     
    <tbody>';
  
   
   foreach($res as $s){
   echo 
   '<tr>
    <td>'. $id++ .'</td>
    <td>'. $s->trx_id .'</td>
    <td>'. $s->staked_amount .'</td>
    <td>'. $s->total_percent_returns .'%</td>
    <td>'.$s->percent_withdrawn_sofar .'%</td>
    <td>'. 200 - $s->total_percent_returns.'%</td>
    <td><span class="text-info">'. date('d F Y, H:i:s a', strtotime($s->created_at)).' </span> <hr/>
    <span class="text-success">'. date('d F Y, H:i:s a', strtotime($s->updated_at)).' </span>
    </td>
    <td>'. date('d F Y, H:i:s a', strtotime($s->closure_date)) .'</td>
    <td> <a href="#" data-attr="" data-toggle="modal" id="walletButton" data-target="#walletModal" class="text-success text-xs"><u>Load Snapshot</u></a>	  
    </td>';
   }
    
   echo '</tr>  </tbody>  <tfoot>  <tr>
    <th>S/N</th>
    <th>Transaction ID</th>
    <th>Amount ('.$walletCurrency.')</th>
    <th>Total Gains</th>
    <th>Total Withdrawn</th>
    <th>Balance to Withdraw</th>
    <th>Date Created <hr/> Last Updated</th>
    <th>Probable Closure Date</th>
    <th>Actions</th>
  </tr>
  </tfoot>
    </table>';
    //   {!! $stakings->links('vendor.pagination.bootstrap-4') !!}
            }
        }
    }
}
