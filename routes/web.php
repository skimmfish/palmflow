<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\NotificationModel;
use App\User;
use App\Profile;
use App\Articles;
use App\Transactions;

//declaring $dashboardNotification as a global variable usable

global $dashboardNotification;

$user = new User;
view()->share('user',$user);

Route::get('/', function () {    return view('index'); })->name('index');

//blog route
Route::get('blog','ArticleController@index')->name('blog.index');

Route::get('blog/categories/{cat}',function($cat){

	return DB::table('articles')->where(['pub_status'=>1,'category'=>$cat])->get(); 
	
})->name('blog.cat');

//showing a single post
Route::get('blog/{id}','ArticleController@show')->name('blog.show');

//Authentication and authorization interfaces route
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');


Route::get('logout',function(){ Auth::logout(); return redirect()->route('login')->with('message','You have been successfully logged out!');	})->name('logout');

//Route::post('register/store',['as'=>'/signup', 'uses'=>'UserController@store']);
Route::post('register/store','Auth\RegisterController@store')->name('register.store');

//for privacy policy
Route::get('privacy-policy', function(){
	return view('privacy-policy');
})->name('privacy-policy');

//About us page
Route::get('about-us', function(){
	return view('about-us')->with('title','About OliveFlowFX');
})->name('about-us');

//Terms and conditions
Route::get('terms-and-conditions', function(){
	return view('terms-and-conditions');
})->name('terms-and-conditions');


//contact-us page
Route::get('contact-us',function(){
	return view('contact-us')->with('title','Contact Us');
})->name('contact-us');

//this processes contact us info
Route::post('contact/store', 'ContactController@store')->name('contact_models.store');


//the admin before attaching the auth middleware to make it authorizable route that must always be authenticated 
Route::get('admin', function(){
	return view('admin.index');
})->name('admin.index');


Route::get('faqs', function(){
	return view('faqs')->with('title','Our FAQs');
})->name('faqs');

Route::get('vision-and-mission', function(){
	return view('vision-and-mission')->with('title','Vision and Mission');
})->name('vision-and-mission');

Route::get('partners',function(){
	return view('partners');
})->name('partners');

Route::get('road-map', function(){
	return view('road-map')->with('title','Strategic Road Map');
})->name('road-map');


Route::get('terms-of-use', function(){
	return view('terms-of-use')->with('title','Terms of Use');
})->name('terms-of-use');



Route::get('investor-relations', function(){
	return view('investor-relations')->with('title','Investor Relations');
})->name('investor-relations');


Route::get('subscriptions', function(){
	return view('subscriptions')->with('title','Vocher Subscriptions');
})->name('subscriptions');


Route::get('nfts', function(){
	return view('nfts')->with('title','NFTs');
})->name('nfts');


//help-topics page
Route::get('help_topics', function(){
	return view('help');
})->name('help');


//author's post
Route::get('blog/authors', 'ArticleController@authorsPost')->name('blog.authors.posts');



/**** 
==============================
route for all non-admin authenticated routes accessible by super admins as well
================================
*/




//add new wallet
Route::get('dashboard/new-wallet', 'WalletController@create')->middleware(['auth','verified'])->name('admin.dashboard.new-wallet');

//==========saving new wallet==============
Route::post('dashboard/savewallet', 'WalletController@store')->middleware(['auth','verified'])->name('wallet_models.store');

//===========this pulls up the confirmation modal ===========
Route::get('dashboard/modwallet/{id}', function($id){
	return view('admin.dashboard.walletmodifier')->with(['id'=>$id]);
})->middleware(['auth','verified'])->name('admin.dashboard.walletmodifier');

//This route actually modifies the wallet
Route::get('dashboard/modifywalletdefault/{id}', function($id){
	
$walletController = new App\Http\Controllers\WalletController;
$walletController->editStatus($id);
return redirect()->route('admin.dashboard.my_wallets')->with(['message'=>'Wallet status modified successfully']);

})->middleware(['auth','verified'])->name('admin.dashboard.modwalletdefault');


//Grouped routes
//=============My wallets route=================
Route::get('dashboard/my_wallets', 'WalletController@myWallets')->middleware(['auth','verified'])->name('admin.dashboard.my_wallets');

//for viewing trading history to be fetched via a third-party vendor
Route::get('view-trading-history/{id}','\App\Http\Controllers\MT4DashboardController@view_trading_history')->name('admin.dashboard.view_history');


//for creating new mt4 account binding
Route::post('dashboard/new-mt4setup','\App\Http\Controllers\MT4DashboardController@store')->middleware(['auth','verified'])->name('admin.dashboard.mt4setup.store');

//dashboard/user/profile
Route::get('dashboard/user/profile', function(){

	//instantiating a new user
	$user = new User;

	$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get();
	
	//sharing the dashboardNotification object with all views
	view()->share(['dashboardNotification'=>$dashboardNotification,'user'=>$user]);

	$userProfile = Profile::where('user_id',Auth::user()->id)->get();
	
	$user = new User;
	$wallet = new \App\Http\Controllers\WalletController;
	return view('admin.dashboard.user')->with(['title'=>'My Profile', 'user'=>$user, 'profile'=>$userProfile,'wallet'=>$wallet,'profile_id'=>1]);
		
	})->middleware(['auth','verified'])->name('admin.dashboard.user');
	
//this route is for viewing transaction details across the blockchain
Route::get('view-transaction/{id}',function($id){

	$coinremitterTransactionLog = null;
	$singleTransaction = DB::table('transactions')->where(['id'=>$id])->get();
	//$coinremitterTransactionLog = \App\Http\Controllers\TransactionController::get_transaction($id);
	//this adds the coinremitter transaction log to the array of variables to be transferred to the frontend
	return view('admin.dashboard.view-transaction',['singleTransaction'=>$singleTransaction,'coinremitterModel'=>$coinremitterTransactionLog]);
	})->middleware(['auth','verified'])->name('admin.dashboard.view-transaction');




/*
*This routes are for floor users and the super-admin
*/
Route::middleware(['auth','verified'])->prefix('dashboard')->group(function(){

//sharing the dashboardNotification object with all views
$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>auth()->id()])->get(); 
view()->share('dashboardNotification',$dashboardNotification);


Route::get('/', function(User $user){ 
return view('admin.dashboard.index')->with(['title'=>'Dashboard - OliveFlowFX Project','user'=>$user]); 
})->name('admin.dashboard.index');
	

//for fund-wallet route
Route::get('/fund_wallet', function(User $user){
//$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get();

//get the active processor getNewWallet
$processor = \App\CryptoAPIManager::get_value('processing_api');
$instantWalletHandler = NULL;
//calling the coinremitter API to get the wallet to pay into
if($processor=='coinremitter'){
$instantWalletHandler = \App\Http\Controllers\TransactionController::getNewWallet();
}
$txfees = \App\Http\Controllers\GasFeeController::getTotalTxFees(auth()->id());
$defaultCurrency = \App\CryptoAPIManager::get_value('funding_currency');
return view('admin.dashboard.fund_wallet')->with(['processingAPI'=>$processor,'defaultCurrency'=>$defaultCurrency,
'totalTxFees'=>$txfees['totalFees'],'stakedValue'=>$txfees['stakedValue'],'title'=>'Fund My Wallet - OliveFlowFX Project','instantWallet'=>$instantWalletHandler]);

})->name('admin.dashboard.fund_wallet');

//for vouchers route
Route::get('/my-vouchers', function(User $user){
	
	return view('admin.dashboard.my_voucher')->with(['title'=>'Vouchers - PalmFlow Project']);
	
})->name('admin.dashboard.my_voucher');


//for processing transactions storage
Route::post('transactions/store', 'TransactionController@store')->name('transactions.store');

//route to notification the user dashboard
Route::get('notifications', function(){
	
	return view('admin.dashboard.notifications')->with('title','Notifications');
	
})->name('admin.dashboard.notifications');


//route to all user transactions (personal transactions ) page for a single logged in user
Route::get('transaction','TransactionController@paginateRecords')->name('admin.dashboard.transactions');

//this route updates wallet
Route::get('editwallet/{id}', 'WalletController@edit')->name('admin.dashboard.editwallet');

//wallet update route
Route::put('modifywalletcreds/{id}', 'WalletController@update')->name('wallet_models.update');

//this updates users' profile information
Route::put('users/update/{id}/{user_id}', 'ProfileController@update')->name('users.update');

//all stakings
Route::get('stakings', 'StakingsController@index')->name('admin.dashboard.stakings');

//all withdrawals
Route::get('withdrawals', 'StakingsController@withdrawals')->name('admin.dashboard.withdrawals');

//this filters withdrawals by date
Route::get('filterbyperiod','StakingsController@filterbydate')->name('filterbyperiod');

//this is for staking_snapshot
Route::get('stakings_snapshot/{id}','StakingsController@show')->name('admin.dashboard.staking_snapshot');

//this is for staking_snapshot
Route::get('withdraw-notifier',function(){
return view('admin.dashboard.withdraw-notifier');
})->name('admin.dashboard.withdraw-notifier');


//mailable mails testing route
Route::get('mailable/{id}',function($id){
	
	$newUser = \App\User::find($id);
	
	//the $newUser object passes the user object into the mailable class to retrieve some of the user's data into the mailable class before sending.
	return new App\Mail\EmailVerification($newUser);

});

//for withdraing rebates via crypto
Route::get('withdrawall/{id}', function($id){

$stakeE = new \App\Http\Controllers\StakingsController;
$returnedResponse = $stakeE->withdrawAll($id);
return redirect()->route('admin.dashboard.stakings')->with(['message'=>'Your request has been received, kindly wait while we process your order','returned'=>$returnedResponse]);
})->name('admin.dashboard.withdrawall');


//to stake cryptos via fiat deposits
Route::get('stake-crypto-fiat',function(){

return view('admin.dashboard.stake-crypto-fiat')->with('title','Stake Cryptos via Voucher Center');

})->name('admin.dashboard.stake-crypto-fiat');

Route::get('withdraw-rebate',function(){

return view('admin.dashboard.withdraw-rebate')->with('title','Withdraw rebates via Voucher Center');

})->name('admin.dashboard.withdraw-rebate');


});
/****End of common routes for both super admins and floor users */



/**===============================================
All the routes below for users who has is-admin authorization and email_verified priviledge
=============================================
***/

//update user's avatar
Route::put('upload-avatar/{id}','\App\Http\Controllers\ProfileController@uploadAvatar')->middleware(['auth','verified'])->name('update_picture');


//grouped route definitions
Route::middleware(['auth','verified'])->prefix('dashboard/admin')->namespace('admin')->group(function(){

	
	//view()->share('user',new \App\User);
	//view()->share('dashboardNotification',$dashboardNotification);

	//resetting the read_status of notification to true for all messages belonging to the logged in user
	Route::get('notification_mark_all_read', function(){
	$getAllRecords = NotificationModel::where(['pub_status'=>1,'read_status'=>0,'receiver_id'=>Auth::user()->id])->get();
	foreach($getAllRecords as $x){ $notificationX = DB::update("UPDATE notification_models SET read_status=? WHERE id=? AND receiver_id=?", [1,$x['id'],Auth::user()->id]); 
	} return redirect()->route('login')->with('message','All notifications set to read'); 
	})->middleware(['auth','verified'])->name('notification_mark_all_read');


	Route::get('notification_mark_as_read/{id}/{status}', function($id,$status){
	$notificationX = DB::update("UPDATE notification_models SET read_status=? WHERE id=?", [$status,$id]); 
	//		return redirect()->route('admin.dashboard.core-admin.notifications');
	return redirect()->back();
	})->middleware(['auth'])->name('notification_mark_single_as_read');
	

	//making payment notification to the admins to verify
Route::get('payment-complete/{pay_id}','\App\Http\Controllers\TransactionController@completepay')->name('set_payment_completed');
	
//registering pay_id and creating a wallet QR code for clients to use
Route::get('pay_wallet/{pay_id}',function($pay_id){

$amount=0;
$destination_wallet=NULL;
 $pay_id;
$wallet = \App\Transactions::where('transaction_id',$pay_id)->get();

foreach($wallet as $bx){
	$destination_wallet = $bx->destination_wallet_id;
	$amount=$bx->trx_amount;
}

return view('admin.dashboard.pay_wallet')->with(['title'=>'Send Payment with NowPayments Wallet',
'wallet'=>$destination_wallet,'amount'=>$amount,'pay_id'=>$pay_id]);

})->name('admin.dashboard.pay_wallet');


	Route::get('mt4-setup',function(){
		$user = new User;
		$brokers = array(
			1=>'Exness',
			2=>'Octafx',
			3=>'LiteFinance',
			4=>'Hotforex',
			5=>'Tickmill',
			6=>'Fxopen',
			7=>'fxtm',
			8=>'VantageFx',
			9=>'Instatrader',
			10=>'FTMO'
		);

		$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>auth()->id()])->get();

$mt4Accounts = \App\Mt4Dashboard::where(['user_id'=>auth()->id()])->orderBy('created_at','DESC')->get();

return view('admin.dashboard.mt4setup',['id'=>1,'brokers'=>$brokers,'title'=>'MT4 Account Setup',
'mt4_accounts'=>$mt4Accounts, 'dashboardNotification'=>$dashboardNotification]);	
})->name('admin.dashboard.mt4setup');

	//for deactivating trading on any account, this should send feedback to the admin team to stop trading
	Route::put('deactivate-trading','\App\Http\Controllers\GasFeeController@stop_trading')->name('admin.dashboard.stoptr');

	Route::get('mt4acc_modal/{id}',function($id){
		return view('admin.dashboard.deletemt4modal')->with(['title'=>'Delete MT4 Account','id'=>$id]);
	})->name('load_delete_modal');

	//for softdeleting an mt4 account model
	Route::delete('delete_acc/{id}','\App\Http\Controllers\MT4DashboardController@delete')->name('admin.dashboard.deleteacc');



	//for fetching all the broker_s server list
	Route::get('server_list',function(){

	\App\Http\Controllers\MT4DashboardController::fetchServerLists(htmlspecialchars($_GET['broker_name']));

	})->name('admin.dashboard.get_server_list');

	//for fetching the modal where you add funds to your stake pool
	Route::get('stakev2/{uid}',function($uid){

		$walletFunds = \App\Http\Controllers\GasFeeController::getTotalTxFees($uid);
		return view('admin.dashboard.stakeforprofit')->with(['uid'=>$uid,'total'=>$walletFunds['totalFees'],
		'alreadyStaked'=>$walletFunds['stakedValue']]);

	})->name('admin.dashboard.stakevalue');

	//for adding to the stakes
	Route::put('add_stakes/{uid}','\App\Http\Controllers\GasFeeController@update')->name('admin.dashboard.addextrastake');


	Route::get('get-acc-snapshot/{id}',function($id){
	$d = \App\MT4Dashboard::where('id',$id)->get();
		return view('admin.dashboard.view_account_snapshot',['id'=>$id,'account_details'=>$d]);

	})->name('admin.dashboard.view_account_snapshot');

//this is for fetching transactions records based on start date and end date
Route::get('get-all-records',function(){

	$startDate = htmlspecialchars($_GET['startDate']);
	$endDate = htmlspecialchars($_GET['endDate']);
	$user_id = htmlspecialchars($_GET['user_id']);
	$type = explode("_",$user_id)[1];

	//the controller search function via the DB facade
	$filter = \App\Http\Controllers\TransactionController::find_records($startDate,$endDate,$user_id);
	//foreach($filter as $r){print_r($r);}
	//dislaying the result via a static function from the controller
	\App\Http\Controllers\TransactionController::show_record($filter,$startDate,$endDate,$type);
	

})->name('admin.dashboard.get_transaction_record');


//this fetches via ajax action data based on selected time frame - last 7 days, last week, last month

Route::get('get_transaction_record_by_period',function(){

	echo $periodSelected = $_GET['p'];
	echo $user_id = $_GET['uid']; 

	$periodFilter = \App\Http\Controllers\TransactionController::fetchByPeriod($periodSelected,$user_id);
	//displaying responses
	//\App\Http\Controllers\TransactionController::show_record($periodFilter,NULL,NULL);

})->name('admin.dashboard.get_transaction_record_by_period');
});




//grouping all routes under the dashboard/admin namespace for super-admin users
Route::middleware(['auth','admin'])->prefix('dashboard/superadmin')->namespace('admin')->group(function(){

$unreadMessageCounter = sizeof(\App\NotificationModel::where(['read_status'=>0,'receiver_id'=>14])->get());

view()->share('unreadMessageCounter',$unreadMessageCounter);


//for filtering records by transaction ID
Route::get('getrecord-by-txid',function(){
$txID = htmlspecialchars($_GET['transactionID']);

$records = \App\Http\Controllers\TransactionController::findTxRecord($txID);

})->name('admin.dashboard.getrecord');

/*this route activates transactions for users, for now until we can automate the process via IPN notifications and 
*cron jobs
*/

Route::get('activate-user-transact/{id}/{amt}/{uid}/{txid}','\App\Http\Controllers\TransactionController@activateTxn')->name('admin.dashboard.core-admin.activatetxn');

//delete notifications for super admins
Route::delete('delete_notification/{id}','\App\Http\Controllers\Notifications@delete')->name('delete_notification');

//for fetching all notifications meant for the super admins
	Route::get('notification-board','\App\Http\Controllers\Notifications@notifyboard')->name('admin.dashboard.core-admin.notifications');

//for pushing general broadcast for all users
Route::post('send-general-broadcast','\App\Http\Controllers\Notifications@broad_to_all')->name('send_broadcast');

	//this is for super admins to view notifications and respond to them
Route::get('view-notification/{id}','\App\Http\Controllers\Notifications@show')->name('admin.dashboard.core-admin.view-single');

//for logs
Route::get('logs',function(){
	$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get();
	$user = new User;
	
	return view('admin.dashboard.core-admin.logs',['id'=>1,'title'=>'System Log','dashboardNotification'=>$dashboardNotification]);
})->name('admin.dashboard.core-admin.logs');


//for withdrawal records from users
Route::get('all-withdrawal-records',function(){
	$dashboardNotification = \App\NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get();
	$user = new \App\User;

	//fetching all transactions
	$withdrawals = \App\Withdrawals::paginate(20);

	//store the amount withdrawable here
	$amountWithdrawable = 0;
	$staked_amount=0;
	$stakingID = null;
	$stakings = \App\Stakings::where('user_id',auth()->id())->orderBy('created_at','DESC')->paginate(10);
	$currency = \App\CryptoAPIManager::get_value('funding_currency');
	//calculating total withdrawable earnings in a seperate instance
	$withdrawableEarnings = \App\Stakings::select('id','staked_amount','balance_withdrawable')->where(['user_id'=>auth()->id()])->get();
	foreach($withdrawableEarnings as $x){
	$amountWithdrawable += $x->staked_amount *($x->balance_withdrawable/100);
	$stakingID = array($x->id);
	}

	return view('admin.dashboard.core-admin.withdrawalrecord')->with(['currency'=>$currency,'withdrawals'=>$withdrawals,'id'=>1,'title'=>'All Withdrawals by Users','dashboardNotification'=>$dashboardNotification]);

})->name('admin.dashboard.core-admin.withdrawalrecord');


//for mt4 subscribers list
Route::get('mt4-subscribers','\App\Http\Controllers\MT4DashboardController@index')->name('admin.dashboard.core-admin.traders');

//for fetching all archived/trashed accounts
Route::get('archived-accounts','\App\Http\Controllers\MT4DashboardController@gettrashed')->name('admin.dashboard.core-admin.showtrashedacct');

//assets and investment data capture
Route::get('assets/store','AssetManagerController@store')->name('assetmanager.store');

//update route
Route::get('assets/update/{id}','AssetManagerController@store')->name('assetmanager.update');

//viewing a user's profile
Route::get('viewuser/{id}', '\App\Http\Controllers\ProfileController@show')->middleware(['admin','auth'])->name('viewuser');

//settings endpoint
Route::get('settings-and-config',function(){
$user = new User;
$Assets = \App\DailyReportModel::all();
$cryptoConfig = \App\CryptoAPIManager::where('autoload',1)->get();
$reportModel = \App\Http\Controllers\DailyReportController::getReports('last_updated',\Carbon\Carbon::today());
	
$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get();
return view('admin.dashboard.core-admin.settings',['assets'=>$Assets,'reports'=>$reportModel['report'],
	'title'=>'Settings and Configurations','dashboardNotification'=>$dashboardNotification,'Assets'=>$Assets,'config'=>$cryptoConfig]);

})->name('admin.dashboard.core-admin.settings');

//for updating site configurations, more to be added later
Route::put('update-settings','\App\Http\Controllers\CryptoAPIController@updateMany')->name('update_settings');


//updating daily assets and profit on wallet reserve stakings...
Route::put('asset-update/{id}','\App\Http\Controllers\DailyReportController@update')->name('update_asset_settings');

//creating new daily assets and profit on wallet reserve stakings record...
Route::post('new-asset-report/','\App\Http\Controllers\DailyReportController@store')->name('create_asset_settings');

//route to all user transactions (personal transactions ) page for a single logged in user
Route::get('alltransactions','\App\Http\Controllers\TransactionController@index')->name('admin.dashboard.core-admin.alltransactions');

Route::delete('delete-settings/{id}','App\Http\Controllers\CryptoAPIController@deleteSettings')->name('delete_setting_field');

//this route goes to the main super-admin's dashboard
Route::get('/', function(){
	
	$user = new User;

	//exploding yesterday's date using the white-space delimeter
	$yesterday = explode(" ",\Carbon\Carbon::yesterday())[0];
	$noDateReportModel = \App\DailyReportModel::all();
	$reportModel = \App\Http\Controllers\DailyReportController::getReports('last_updated',\Carbon\Carbon::today());
	$reportModelYesterday = \App\Http\Controllers\DailyReportController::getReports('last_updated',$yesterday);
	$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get();
	$activeUsers = DB::select('SELECT username,id,is_admin FROM users WHERE active=?',[true]);

	//$todayRoI = \App\DailyReportModel::where('last_updated',$)->get();
return view('admin.dashboard.core-admin.index')->with(['active_user'=>$activeUsers,
'title'=>'Admin Dashboard','dashboardNotification'=>$dashboardNotification,'user'=>$user,'chart_data'=>$noDateReportModel,
'reports'=>$reportModel['report'],'fullReport'=>$noDateReportModel,'total_startup_asset'=>$reportModel['total_startup_asset'],'yesterdayReports'=>$reportModelYesterday['report']]);
	
})->name('admin.dashboard.core-admin.index');

//route to maintenance page
Route::get('maintenance', function(){

return view('admin.dashboard.core-admin.maintenance')->with('title','Maintenance Mode Manager');

})->name('admin.dashboard.core-admin.maintenance');


Route::get('new-email-broadcast','\App\Http\Controllers\Notifications@newbroadcast')->name('admin.dashboard.core-admin.general_broadcast');

//this confirms if the admin  user wants to restore a user back to the fold
Route::get('confirmrestore/{id}/{profile_id}',function($id,$profile_id){
return view('admin.dashboard.core-admin.confirmrestore',['id'=>$id,'profile_id'=>$profile_id]);
})->name('admin.dashboard.core-admin.confirmrestore');

//route to all users page
Route::get('users/{type}',function($type){
	
	$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get();
	if($type=='all'){
	return view('admin.dashboard.core-admin.allusers')->with(['title'=>'All Users','type'=>'all','users'=>User::paginate(5),'id'=>1,'profiles'=>Profile::paginate(5), 'dashboardNotification'=>$dashboardNotification]);

}else if($type=='deleted'){

//$deletedUsers = User::withTrashed()->where('id',4)->get();
$deletedUsers = Profile::onlyTrashed()->get();
return view('admin.dashboard.core-admin.allusers')->with(['title'=>'Deleted Users', 'type'=>'deleted','users'=>User::onlyTrashed()->get(),'id'=>1,'deletedprofiles'=>$deletedUsers,'dashboardNotification'=>$dashboardNotification]);}})->name('admin.dashboard.core-admin.allusers');

//creating new user - only a super admin function
Route::get('create-new-user',function(){
return view('admin.dashboard.core-admin.create-user')->with('title','New User');
})->name('admin.dashboard.core-admin.create-user');

//deleting a user
Route::delete('deleteuser/{id}', 'UserController@destroy')->name('admin.dashboard.core-admin.deleteuser');

//restore a user
Route::get('user-restore/{id}/{profile_id}', function($id,$profile_id){
$user = User::onlyTrashed()->where('id',$id);
$profile = Profile::onlyTrashed()->where('id',$profile_id);

$user->restore();

//do same for profile
//if($profile->trashed()){
$profile->restore();
//}
//flashing the session manager
//flash::message("User restored!");
return redirect()->route('admin.dashboard.core-admin.allusers',['type'=>'all'])->with('message','User(s) restored successfully');
})->name('admin.dashboard.core-admin.user-restore');

//updating picture avatar
Route::put('update_picture/{id}', 'ProfileController@update_avatar')->name('admin.dashboard.update_picture');

//Route::get()->name('admin.dashboard.core-admin.deleted');

//route to all user transactions (personal transactions ) page for a single logged in user

Route::get('viewuser/{id}', '\App\Http\Controllers\ProfileController@show')->name('viewuser');
//end of the grouping
});


/**this routes here defines testing routes for the arbitrage features and merger */
Route::get('arb',function(){

$jsonResponse = \App\Http\Controllers\StakingsController::getArbitrage();
print_r($jsonResponse);
//return view('arbitragetester')->with(['title'=>'Arbitrage Tester']);
})->name('arbitragetester');



//to create a new wallet
Route::post('nowpayment_api/{amount}','\App\Http\Controllers\TransactionController@createPayment')->name('create_wallet');

	//getwallet test
	Route::get('getwallet',function(){
		$response = \App\Http\Controllers\TransactionController::getNewWallet();
	
	$res = json_encode($response);
	
	echo $response['data']['qr_code'];
	echo $response['data']['address'];
	
	})->name('getwallet');
	

	//this is a helper route to get my api_key, its an authenticated route so can't be accessed by non-admin users
	Route::get('getparam',function(){
	
		echo $param = \App\CryptoAPIManager::get_value('coinremitter_api_key');
		
	})->name('getparam');

	
	//this route is for validating a wallet
	Route::get('validatewallet/{wallet}',function($wallet){
		$tx = new \App\Http\Controllers\TransactionController;
		$msg = $tx->validateWallet($wallet);
		//print_r($msg);
		echo $msg;
	})->name('validatewallet');
	
	/*
	*===================================================
	*This routes is for traders to work with, see their daily statistics, all these will come on board after they have been thoroughly tested to be efficient
	*====================================================
	*/

Route::middleware(['auth','traders'])->prefix('dashboard/traders/')->namespace('tradehub')->group(function(){




	});
/* End of routes definition*/