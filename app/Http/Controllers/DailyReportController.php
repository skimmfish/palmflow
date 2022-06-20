<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DailyReportController extends Controller
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


public static function getReports($date_i,$date_ii){

$responseBody = array();
$total_start_asset = \App\CryptoAPIManager::get_value('total_startup_asset_as_at_today');


$report = \App\DailyReportModel::select('total_daily_roi','stakers_split','directors_split','charity_split')->where(["last_updated"=>$date_i])->get();
return $responseBody = array('total_startup_asset'=>$total_start_asset, 'report'=>$report);
}

/*
*Static function to exhume details from an array in a foreach loop
*@return any<dailyreportsobject>
*
*/
public static function iterateLoop($arrayObj, $f){
$value = null;
foreach($arrayObj as $e){
$value = $e[$f];
}
return $value;
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
