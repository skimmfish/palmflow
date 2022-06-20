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

//resetting the read_status of notification to true for all messages belonging to the logged in user
Route::get('notification_mark_all_read', function(){
$getAllRecords = NotificationModel::where(['pub_status'=>1,'read_status'=>0,'receiver_id'=>Auth::user()->id])->get();
foreach($getAllRecords as $x){ $notificationX = DB::update("UPDATE notification_models SET read_status=? WHERE id=? AND receiver_id=?", [1,$x['id'],Auth::user()->id]); 
} return redirect()->route('login')->with('message','All notifications set to read');	
})->middleware(['auth','verified'])->name('notification_mark_all_read');


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

//=============My wallets route=================
Route::get('dashboard/my_wallets', 'WalletController@myWallets')->middleware(['auth','verified'])->name('admin.dashboard.my_wallets');

//for creating new mt4 account binding
Route::post('dashboard/new-mt4setup','\App\Http\Controllers\MT4DashboardController@store')->middleware(['auth','verified'])->name('admin.dashboard.mt4setup.store');


//dashboard/user/profile
Route::get('dashboard/user/profile', function(){
	$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get();
	
	$userProfile = Profile::where('user_id',Auth::user()->id)->get();
	
	$user = new User;
	$wallet = new \App\Http\Controllers\WalletController;
	return view('admin.dashboard.user')->with(['title'=>'My Profile','dashboardNotification'=>$dashboardNotification, 'user'=>$user, 'profile'=>$userProfile,'wallet'=>$wallet,'profile_id'=>1]);
		
	})->middleware(['auth','verified'])->name('admin.dashboard.user');
	







/*
*This routes are for floor users and the super-admin
*/
Route::middleware(['auth','verified'])->prefix('dashboard')->group(function(){

Route::get('/', function(User $user){ 
$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get(); 
return view('admin.dashboard.index')->with(['title'=>'Dashboard - OliveFlowFX Project','dashboardNotification'=>$dashboardNotification,'user'=>$user]); 
})->name('admin.dashboard.index');

//this route is for viewing transaction details across the blockchain
Route::get('view-transaction/{id}',function($id){

	$coinremitterTransactionLog = null;
	$singleTransaction = DB::table('transactions')->where(['id'=>$id])->get();
	//$coinremitterTransactionLog = \App\Http\Controllers\TransactionController::get_transaction($id);

	//this adds the coinremitter transaction log to the array of variables to be transferred to the frontend
	return view('admin.dashboard.view-transaction',['singleTransaction'=>$singleTransaction,'coinremitterModel'=>$coinremitterTransactionLog]);
	})->name('admin.dashboard.view-transaction');
	

//for fund-wallet route
Route::get('/fund_wallet', function(User $user){
$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get();

//calling the coinremitter API to get the wallet to pay into
$instantWalletHandler = \App\Http\Controllers\TransactionController::getNewWallet();
$txfees = \App\Http\Controllers\GasFeeController::getTotalTxFees(auth()->id());

return view('admin.dashboard.fund_wallet')->with([
	'dashboardNotification'=>$dashboardNotification,'totalTxFees'=>$txfees['totalFees'],'stakedValue'=>$txfees['stakedValue'],'title'=>'Fund My Wallet - OliveFlowFX Project','instantWallet'=>$instantWalletHandler]);

})->name('admin.dashboard.fund_wallet');

//for vouchers route
Route::get('/my-vouchers', function(User $user){

	$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get();
		
	return view('admin.dashboard.my_voucher')->with(['dashboardNotification'=>$dashboardNotification,'title'=>'Vouchers - PalmFlow Project']);
	
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
Route::middleware(['auth','verified'])->prefix('dashboard/admin')->namespace('admin')->group(function(){

	Route::get('mt4-setup',function(){
		$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get();
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


		$mt4Accounts = \App\Mt4Dashboard::where(['user_id'=>auth()->id()])->orderBy('created_at','DESC')->get();

	return view('admin.dashboard.mt4setup',['id'=>1,'brokers'=>$brokers,'title'=>'MT4 Account Setup','dashboardNotification'=>$dashboardNotification,
'mt4_accounts'=>$mt4Accounts]);
	})->name('admin.dashboard.mt4setup');


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
	Route::put('add_stakes','\App\Http\Controllers\GasFeeController@update')->name('admin.dashboard.addextrastake');


});

//grouping all routes under the dashboard/admin namespace for super-admin users
Route::middleware(['auth','admin'])->prefix('dashboard/admin')->namespace('admin')->group(function(){

//for logs
Route::get('logs',function(){
	$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get();
	$user = new User;
	
	return view('admin.dashboard.core-admin.logs',['id'=>1,'title'=>'System Log','dashboardNotification'=>$dashboardNotification]);
})->name('admin.dashboard.core-admin.logs');

//for logs

//assets and investment data capture
Route::get('assets/store','AssetManagerController@store')->name('assetmanager.store');

//update route
Route::get('assets/update/{id}','AssetManagerController@store')->name('assetmanager.update');

//viewing a user's profile
Route::get('viewuser/{id}', '\App\Http\Controllers\ProfileController@show')->middleware(['admin','auth','verified'])->name('viewuser');

//settings endpoint
Route::get('settings-and-config',function(){
$user = new User;
$Assets = \App\AssetManager::all();
$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get();
return view('admin.dashboard.core-admin.settings',['title'=>'Settings and Configurations','dashboardNotification'=>$dashboardNotification,'Assets'=>$Assets]);

})->name('admin.dashboard.core-admin.settings');

//route to all user transactions (personal transactions ) page for a single logged in user
Route::get('alltransactions','\App\Http\Controllers\TransactionController@index')->name('admin.dashboard.core-admin.alltransactions');

//this route goes to the main super-admin's dashboard
Route::get('/', function(){
	
	$user = new User;
	$reportModel = \App\Http\Controllers\DailyReportController::getReports(\Carbon\Carbon::today(), null);
	$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get();
	
return view('admin.dashboard.core-admin.index')->with(['title'=>'Dashboard','dashboardNotification'=>$dashboardNotification,'user'=>$user,
'reports'=>$reportModel['report'],'total_startup_asset'=>$reportModel['total_startup_asset']]);
	
})->name('admin.dashboard.core-admin.index');

//route to maintenance page
Route::get('maintenance', function(){

return view('admin.dashboard.core-admin.maintenance')->with('title','Maintenance Mode Manager');

})->name('admin.dashboard.core-admin.maintenance');


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

Route::get('viewuser/{id}', 'ProfileController@show')->name('viewuser');
//end of the grouping
});


/**this routes here defines testing routes for the arbitrage features and merger */
Route::get('arb',function(){

$jsonResponse = \App\Http\Controllers\StakingsController::getArbitrage();
print_r($jsonResponse);
//return view('arbitragetester')->with(['title'=>'Arbitrage Tester']);
})->name('arbitragetester');

	//getwallet test
	Route::get('getwallet',function(){
		$response = \App\Http\Controllers\TransactionController::getNewWallet();
	
	$res = json_encode($response);
	
	echo $response['data']['qr_code'];
	echo $response['data']['address'];
	
	})->name('getwallet');
	
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