<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MT4DashboardController extends Controller
{

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


        $rules = [

            'account_name'=>'required | min:5| max:60',
            'account_number'=> 'required | min:7 | max:12',
            'leverage'=>'required',
            'broker_name'=>'required',
            'mt4_server'=>'required',
            '_password'=>'required'
        ];

        $validationReport = $request->validate($rules);
        
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
'Exness-Real10'
);

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

}
