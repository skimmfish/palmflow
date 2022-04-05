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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('logout',function(){ Auth::logout(); return redirect()->route('login')->with('message','You have been successfully logged out!');	})->name('logout');

//Route::post('register/store',['as'=>'/signup', 'uses'=>'UserController@store']);
Route::post('register/store','Auth\RegisterController@store')->name('register.store');

//resetting the read_status of notification to true for all messages belonging to the logged in user
Route::get('notification_mark_all_read', function(){	
$getAllRecords = NotificationModel::where(['pub_status'=>1,'read_status'=>0,'receiver_id'=>Auth::user()->id])->get();
foreach($getAllRecords as $x){ $notificationX = DB::update("UPDATE notification_models SET read_status=? WHERE id=? AND receiver_id=?", [1,$x['id'],Auth::user()->id]); } return redirect()->route('admin.dashboard.index')->withMessage('All notifications set to read');	
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



/**** route for all users

****

*/



Route::middleware('auth')->prefix('dashboard')->group(function(){

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
//$userPk = User::find(Auth::user()->id)

$userProfile = Profile::where('user_id',Auth::user()->id)->get();

$user = new User;
$wallet = new \App\Http\Controllers\WalletController;
return view('admin.dashboard.user')->with(['title'=>'My Profile','dashboardNotification'=>$dashboardNotification, 'user'=>$user, 'profile'=>$userProfile,'wallet'=>$wallet]);
	
})->name('admin.dashboard.user');


//route to notification the user dashboard
Route::get('notifications', function(){
	
	return view('admin.dashboard.notifications')->with('title','Notifications');
	
})->name('admin.dashboard.notifications');


//route to all user transactions page for a single logged in user
Route::get('transactions/{uid}','TransactionController@paginateRecords')->name('admin.dashboard.transactions');

});

/**All the routes below for users who has is-admin priviledge***/

//grouping all routes under the dashboard namespace
Route::middleware('admin')->prefix('dashboard')->namespace('admin')->group(function(){


Route::put('users/update', 'UserController@update')->name('users.update');

Route::get('/', function(User $user){
	
	$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get();
	
	return view('admin.dashboard.core-admin.index')->with(['title'=>'Dashboard','dashboardNotification'=>$dashboardNotification,'user'=>$user]);
	
})->name('admin.dashboard.core-admin.index');

//route to maintenance page
Route::get('maintenance', function(){
	
	return view('admin.dashboard.core-admin.maintenance')->with('title','Maintenance Mode Manager');
	
})->name('admin.dashboard.core-admin.maintenance');


//route to all users page
Route::get('allusers',function(Profile $profile){
	$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get();
	
	return view('admin.dashboard.core-admin.allusers')->with(['title'=>'All Users','users'=>User::paginate(5),'id'=>1,'profile'=>$profile, 'dashboardNotification'=>$dashboardNotification]);

})->name('admin.dashboard.core-admin.allusers');


//viewing a user's profile
Route::get('viewuser/{id}',function(){
	
	return view('admin.dashboard.core-admin.viewuser')->with(['title'=>'View User']);

})->name('admin.dashboard.core-admin.viewuser');

//deleting a user
Route::delete('/deleteuser/{id}', 'UserController@destroy')->name('admin.dashboard.core-admin.deleteuser');

/*Route::delete('/deleteuser/{id}', function($id, Profile $profile){

	User::findOrFail($id)->delete();
	
	$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get();
	
	//return view('admin.dashboard.core-admin.allusers')->with(['title'=>'All Users','message'=>'User deleted successfully!','id'=>1,'profile'=>$profile,'dashboardNotification'=>$dashboardNotification,'users'=>User::paginate(3)]);
	return redirect()->route('allusers')->with(['title'=>'All Users','message'=>'User deleted successfully!','id'=>1,'profile'=>$profile,'dashboardNotification'=>$dashboardNotification,'users'=>User::paginate(3)]);
	
})->name('admin.dashboard.core-admin.deleteuser');
*/





//end of the grouping
});

/* End of routes definition*/