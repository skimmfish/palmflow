<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetManagerController extends Controller
{



/*
*This function saves the daily snapshot of records on a daily basis
*@param Request object
*@return Response
*/
public function store(Request $request){

$assets = new Asset();

$assets->fx = $request->currencies_asset;
$assets->metafutures = $request->meta_futures_asset;
$assets->arbitrage = $request->arbitrage_asset;
$assets->overall_asset_growth_fact = 0;
$assets->target_asset_value = 10000000;
$assets->target_estimated_period_days = 182;

$assets->save();

flash('Assets saved successfully!')->success();

//retrieving all the assets in the config table
$Assets = \App\AssetManager::all();
return redirect()->route('admin.dashboard.core-admin.settings')->with(['message'=>'Records saved successfully!','Assets'=>$Assets]);
}


/*
*This function updates the daily snapshot of records on a daily basis
*@param Request object
*@param int $id
*@return Response
*/
public function update(Request $request, $id){
$asset = \App\AssetManager::find($id);

$totalAssetValue = 0;
foreach($asset as $r){
    $totalAssetValue = $r['fx'] + $r['metafutures'] + $r['arbitrage'];
}

$asset->fx = $request->currencies_asset;
$asset->metafutures = $request->meta_futures_asset;
$asset->arbitrage = $request->arbitrage_asset;
$asset->overall_asset_growth_fact = 0;
$asset->target_asset_value = 10000000 - $totalAssetValue;
$asset->target_estimated_period_days = $asset->target_estimated_period_days-1;



}


}
