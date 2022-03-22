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

//declaring $dashboardNotification as a global variable usable

global $dashboardNotification;


Route::get('index', function () {    return view('index'); })->name('index');

//blog route
Route::get('blog','Articles@index')->name('blog.index');

//Authentication and authorization interfaces route
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('logout',function(){ Auth::logout(); return redirect()->route('login')->withMessage('message','You have been successfully logged out!');	})->name('logout');

//Route::post('register/store',['as'=>'/signup', 'uses'=>'UserController@store']);
Route::post('register/store','Auth\RegisterController@store')->name('register.store');

//resetting the read_status of notification to true for all messages belonging to the logged in user
Route::get('notification_mark_all_read', function(){	
$getAllRecords = NotificationModel::where(['pub_status'=>1,'read_status'=>0,'receiver_id'=>Auth::user()->id])->get();
foreach($getAllRecords as $x){ $notificationX = DB::update("UPDATE notification_models SET read_status=? WHERE id=? AND receiver_id=?", [1,$x['id'],Auth::user()->id]); } return redirect()->route('admin.dashboard')->withMessage('All notifications set to read');	
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
	return view('contact-us');
})->name('contact-us');

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



//grouping all routes under the dashboard namespace
Route::middleware('auth')->prefix('dashboard')->group(function(){


Route::put('users/update', 'UserController@update')->name('users.update');

Route::get('home', function(User $user){
	
	$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get();
	
	return view('admin.dashboard.index')->with(['title'=>'Dashboard','dashboardNotification'=>$dashboardNotification,'user'=>$user]);
	
})->name('admin.dashboard.index');


//dashboard/user/profile
Route::get('user/profile', function(){
$dashboardNotification = NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>Auth::user()->id])->get();
//$userPk = User::find(Auth::user()->id)

$userProfile = Profile::where('user_id',Auth::user()->id)->get();

$user = new User;
return view('admin.dashboard.user')->with(['title'=>'My Profile','dashboardNotification'=>$dashboardNotification, 'user'=>$user, 'profile'=>$userProfile]);
	
})->name('admin.dashboard.user');


//route to notification the user dashboard
Route::get('notifications', function(){
	
	return view('admin.dashboard.notifications')->with('title','Notifications');
	
})->name('admin.dashboard.notifications');

//route to maintenance page
Route::get('maintenance', function(){
	
	return view('admin.dashboard.maintenance')->with('title','Maintenance Mode Manager');
	
})->name('admin.dashboard.maintenance');


//route to all users page
Route::get('allusers',function(){return view('admin.dashboard.allusers')->with('All Users');
})->name('admin.dashboard.allusers');




//end of the grouping
});

/* End of routes definition*/