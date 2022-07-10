<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CryptoAPIController extends Controller
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
        //
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
    
    }

    /*
    *@param \Illuminate\Http\Request $reqest
    *@return \Illuminate\Http\Response
    */
    public function updateMany(Request $request){
       
    $keyOptions = \App\CryptoAPIManager::where('autoload',1)->get();
    
    $rowCount = sizeof($keyOptions);

    for($i=0;$i<=$rowCount;$i++){
        //locating the actual settings to update
        $cryptoSettings = \App\CryptoAPIManager::find($i);
            //get the value entered or pre-filled on that index on the frontend config form
           $valueFilled = $request->$i;
  
           //use the DB facade to update the necessary column using the index
           DB::UPDATE('UPDATE crypto_a_p_i_managers SET key_value=? WHERE id=?',[$valueFilled, $i]);
            //$cryptoSettings->save();
    }

    //sending notification to the flash storage
    flash('Settings saved successfully')->success();
    return redirect()->route('admin.dashboard.core-admin.settings')->with('message','Settings saved successfully');


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
