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


public static function getReports($fieldColumn,$fieldColumnValue){

$responseBody = array();

$total_start_asset = \App\CryptoAPIManager::get_value('total_startup_asset_as_at_today');

$report = \App\DailyReportModel::select('id','total_daily_roi','futures_roi','overnight_dd','fx_roi','highest_daily_dd','stakers_split','directors_split','charity_split')->where([$fieldColumn => $fieldColumnValue])->get();

return $responseBody = array('total_startup_asset'=>$total_start_asset, 'report'=>$report);
}


/*
*Static function to exhume details from an array in a foreach loop
*@return any<dailyreportsobject>
*
*/
public static function iterateLoop($arrayObj, $f){
$value = null;
$iteratedValue = 0;
$response = array();

foreach($arrayObj as $e){

$value = $e[$f];

$iteratedValue +=$e[$f];

}
return $response= array(['val'=>$value,'iter'=>$iteratedValue]);
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
    $report = new Report;
    $report->futures_roi = $request->futures_roi;
    $report->fx_roi = $request->fx_roi;
    $report->highest_daily_dd = $request->highest_daily_dd;
    $report->overnight_dd = $request->overnight_dd;

    $totalROI = doubleval($report->futures_roi+$report->fx_roi);
    
    $report->total_daily_roi = $totalROI;
    $report->stakers_split = doubleval((32.5/100)*$totalROI);
    $report->directors_split = doubleval((25/100)*$totalROI);
    $report->charity_split = doubleval((22.5/100)*$totalROI);
    $report->traders_split = doubleval((15/100)*$totalROI);


    $rules = [
        'futures_roi'=>'required | min:1',
        'fx_roi'=>'required | min:1',
        'overnight_dd'=>'required | min:0 | max:99',
        'highest_daily_dd'=>'required | min:0 | max:99'
    ];

    //passing the fields to the validator before saving to the database table
    $validation = $request->validate($rules);


    $report->save($request->all());
        $msg = "Report saved successfully. You may still update it before the end of today!";
    flash($msg)->success();

    return redirect()->route("admin.dashboard.core-admin.index")->with('message',$msg);
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
    $prevReport = \App\DailyReportModel::find($id);
    $prevReport->futures_roi = $request->futures_roi;
    $prevReport->fx_roi = $request->fx_roi;
    $prevReport->highest_daily_dd = $request->highest_daily_dd;
    $prevReport->overnight_dd = $request->overnight_dd;

    $totalROI = doubleval($request->futures_roi + $request->fx_roi);
    
    $prevReport->total_daily_roi = $totalROI;
    $prevReport->stakers_split = doubleval((32.5/100)*$totalROI);
    $prevReport->directors_split = doubleval((25/100)*$totalROI);
    $prevReport->charity_split = doubleval((22.5/100)*$totalROI);
    $prevReport->traders_split = doubleval((15/100)*$totalROI);

    $prevReport->save();
    $msg = "RoI Records updated succesfully!";
    
    flash($msg)->success();
    
    return redirect()->route("admin.dashboard.core-admin.settings")->with('message',$msg);

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
