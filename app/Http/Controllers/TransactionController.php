<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transactions;
use App\NotificationModel;
use Illuminate\Support\Str;

//use Illuminate\Contracts\Validation\Validator;


class TransactionController extends Controller
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
		
		$validate = Validator::make($request->all(),$rules,$messages)->validate();
		*/
		
		//$request->validate([$rules]);

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
	public static function paginateRecords($uid){

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
}
