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
$Assets = \App\AssetManager::all();

return redirect()->route('admin.dashboard.core-admin.settings')->with(['message'=>'Records updated successfully!','Assets'=>$Assets]);
}


/*
*This function updates the daily snapshot of records on a daily basis
*@param Request object
*@param int $id
*@return Response
*/
public function update(Request $request, $id){


}


}
