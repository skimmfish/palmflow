<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MT4DashboardController extends Controller
{


    /*function index()
    *@param NULL
    *@param View <'admin.dashboard.core-admin.traders'>
    *
    */
    public function index(){
        $all = \App\MT4Dashboard::where('pub_status',true)->orderBy('created_at','DESC')->paginate(20);
        $dashboardNotification = \App\NotificationModel::where(['pub_status'=>1, 'read_status'=>0, 'receiver_id'=>auth()->id()])->get();
        $user = new \App\User;
    
        return view('admin.dashboard.core-admin.traders')->with(['id'=>1,'allsubs'=>$all,'title'=>'MT4 Subscribers', 'dashboardNotification' => $dashboardNotification,]);
    }

    /*function pulls information based on the fetched $id without passing the mt4_server, account number and password via the url parameters*/
    /*@param Integer<$id>
    *@return <Array>
    */
    public function view_trading_history($id){

        $account = \App\Mt4Dashboard::where('id',$id)->get();
        $account_number=null; $trading_password = null; $mt4_server=null;
        foreach($account as $x){
            $account_number = $x['account_number'];
            $trading_password = $x['_password'];
            $mt4_server = $x['mt4_server'];
        }

        $apiResponse = $this->fetchHistoryLoader($account_number,$trading_password,$mt4_server);
        
    }


    /*
    *@param String <$no> //for mt4 account number
    *@param String <$ps> //for the password
    *@param String <$server> //for mt4 server on the broker's end
    */

    public function fetchHistoryLoader($no,$ps,$server){

    }


    /*
    *@param Illuminate\Http\Request <$request>
    *
    */
    
    public function store(Request $request){

        $mt4dashboard = new \App\MT4Dashboard;
        $mt4dashboard->account_name = $request->account_name;
        $mt4dashboard->account_number = $request->account_number;
        $mt4dashboard->broker_name = $request->broker_name;
        $mt4dashboard->mt4_server = $request->mt4_server;
        $mt4dashboard->user_id = $request->user_id;
        $mt4dashboard->leverage = $request->leverage;
        $mt4dashboard->_password=$request->_password;
        $mt4dashboard->investor_password = $request->investor_password;
        $mt4dashboard->pub_status=1;

        $rules = [

            'account_name'=>'required | min:5 | max:60',
            'account_number'=> 'required | min:7 | max:12 | unique',
            'leverage' => 'required | min:3',
            'broker_name' => 'required | min:4',
            'mt4_server'=> 'required | min:4',
            '_password'=> 'required | min:20 | max:30',
            'investor_password'=> 'required | min:5',
        ];

//        $validationReport = $request->validate($rules);
        
        //all things been equal and fine
        $mt4dashboard->save($request->all());
        $msg = 'MT4 account binding added successfully, kindly check your email for further instruction';
        flash($msg)->success();

        return redirect()->back()->with('message',$msg);

    }


/*
*@param String <$brokers_name>
*@return Null <>
*/
public static function fetchServerLists($broker_name){

$brokers_servers_list = array();

if($broker_name=='exness'){
$servers_list = array('Exness-Real4','Exness-Real5','Exness-Real6','Exness-Real7','Exness-Real8','Exness-Real9',
'Exness-Real10');

echo "<label>Server Name</label>
<select name='mt4_server' class='form-control input-md'>
        <option value=''>Select an option</option>";

        foreach($servers_list as $t){
            echo "<option value='".$t."'>$t</option>";
        }
echo "</select>";

//echo $list;
}

}


/*
*@param Integer <$id>
*@return NULL
*/
public function delete($id){
    $account = \App\MT4Dashboard::find($id);
    $account->delete();

    flash('MT4 Account delete successfully')->success();
    return redirect()->route('admin.dashboard.mt4setup');
    }

}
