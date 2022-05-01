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

//resetting the read_status of notification to true for all messages belonging to the logged in user
Route::get('notification_mark_all_read', function(){	
$getAllRecords = NotificationModel::where(['pub_status'=>1,'read_status'=>0,'receiver_id'=>Auth::user()->id])->get();
foreach($getAllRecords as $x){ $notificationX = DB::update("UPDATE notification_models SET read_status=? WHERE id=? AND receiver_id=?", [1,$x['id'],Auth::user()->id]); 
} return redirect()->route('login')->with('message','All notifications set to read');	
})->middleware('auth')->name('notification_mark_all_read');


//for privacy policy
Route::get('privacy-policy', function(){
	return view('privacy-policy');
})->name('privacy-policy');

//About us page
Route::get('about-us', function(){
	return view('about-us')->with('title','About PlamFlow');
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
route for all non-admin authenticated routes
================================
*/

	
//viewing a user's profile
Route::get('dashboard/viewuser/{id}', 'ProfileController@show')->middleware(['admin','auth','verified'])->name('viewuser');

//add new wallet
Route::get('dashboard/new-wallet', 'WalletController@create')->middleware(['auth','verified'])->name('admin.dashboard.new-wallet');

//route to all user transactions (personal transactions ) page for a single logged in user
Route::get('dashboard/alltransactions','TransactionController@index')->middleware(['auth','admin','verified'])->name('admin.dashboard.core-admin.alltransactions');


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


/**
**==========This routes are for other non-admin users==============
**/

Route::middleware(['auth','verified'])->prefix('dashboard')->group(function(){

Route::get('/', function(User $user){ 

$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get(); 

return view('admin.dashboard.index')->with(['title'=>'Dashboard - BalmFlow Project','dashboardNotification'=>$dashboardNotification,'user'=>$user]); 

})->name('admin.dashboard.index');


//for fund-wallet route
Route::get('/fund_wallet', function(User $user){

	$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get();
		
	return view('admin.dashboard.fund_wallet')->with(['dashboardNotification'=>$dashboardNotification,'title'=>'Fund My Wallet - PalmFlow Project']);
	
})->name('admin.dashboard.fund_wallet');

//for fund-wallet route
Route::get('/my-vouchers', function(User $user){

	$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get();
		
	return view('admin.dashboard.my_voucher')->with(['dashboardNotification'=>$dashboardNotification,'title'=>'Vouchers - PalmFlow Project']);
	
})->name('admin.dashboard.my_voucher');


//for processing transactions storage
Route::post('transactions/store', 'TransactionController@store')->name('transactions.store');

//dashboard/user/profile
Route::get('user/profile', function(){
$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get();

$userProfile = Profile::where('user_id',Auth::user()->id)->get();

$user = new User;
$wallet = new \App\Http\Controllers\WalletController;
return view('admin.dashboard.user')->with(['title'=>'My Profile','dashboardNotification'=>$dashboardNotification, 'user'=>$user, 'profile'=>$userProfile,'wallet'=>$wallet,'profile_id'=>1]);
	
})->name('admin.dashboard.user');


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
Route::put('users/update/{id}', 'ProfileController@update')->name('users.update');

//all stakings
Route::get('stakings', 'StakingsController@index')->name('admin.dashboard.stakings');

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
/**===============================================
All the routes below for users who has is-admin and email_verified priviledge
=============================================
***/

//grouping all routes under the dashboard namespace
Route::middleware(['auth','admin','verified'])->prefix('dashboard')->namespace('admin')->group(function(){

Route::get('/', function(){
	
	$user = new User;
	$reportModel = \App\Http\Controllers\DailyReportController::getReports();
	$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get();
	
	return view('admin.dashboard.core-admin.index')->with(['title'=>'Dashboard','dashboardNotification'=>$dashboardNotification,'user'=>$user,'reports'=>$reportModel]);
	
})->name('admin.dashboard.core-admin.index');

//route to maintenance page
Route::get('maintenance', function(){
	
	return view('admin.dashboard.core-admin.maintenance')->with('title','Maintenance Mode Manager');
	
})->name('admin.dashboard.core-admin.maintenance');


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
Route::delete('/deleteuser/{id}', 'UserController@destroy')->name('admin.dashboard.core-admin.deleteuser');

//restore a user
Route::get('user-restore/{id}/{profile_id}', function($id,$profile_id){
$user = User::find($id);
$profile = Profile::find($profile_id);
if($user->trashed()){
$user->restore();
}

//do same for profile
if($profile->trashed()){
$profile->restore();
}


})->name('admin.dashboard.core-admin.user-restore');

//Route::get()->name('admin.dashboard.core-admin.deleted');

//route to all user transactions (personal transactions ) page for a single logged in user
//Route::get('alltransactions','TransactionController@allTransactions')->name('admin.dashboard.core-admin.alltransactions');

//Route::get('viewuser/{id}', 'ProfileController@show')->name('viewuser');

//end of the grouping
});


/**this routes here defines testing routes for the arbitrage features and merger */
Route::get('arb',function(){

$jsonResponse = \App\Http\Controllers\StakingsController::getArbitrage();
print_r($jsonResponse);
return view('arbitragetester')->with(['title'=>'Arbitrage Tester']);
})->name('arbitragetester');

/* End of routes definition*/