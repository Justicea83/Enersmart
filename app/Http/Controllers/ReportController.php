<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use Auth;
class ReportController extends Controller
{
    public function reports(){
    	return view('vendor.voyager.report');
    }
    //submitting the form data into the database
    public function submitReport(Request $request){
    	$this->validate($request,[
    		'customer_name'=>'required',
    		'meter_number'=>'required',
    		'geo_code'=>'required',
    		'new_geo_code'=>'required',
    		'nearby_code'=>'required',
    		'tarrif'=>'required',
    		'remarks'=>'required'
    	]);
    	$report = new Report;
    	$report->user_id = Auth::user()->id;
    	$report->customer_name = $request['customer_name'];
    	$report->meter_no = $request['meter_number'];
    	$report->geo_code = $request['geo_code'];
    	$report->new_geo_code = $request['new_geo_code'];
    	$report->nearby_code = $request['nearby_code'];
    	$report->tarrif = $request['tarrif'];
    	$report->remarks= $request['remarks'];
    	$report->save();
    	return redirect()->back();
    }
    public function dailyReport(){
    	//
    	$report = Report::where('user_id',Auth::user()->id)->get();
    	return view('vendor.voyager.dailyreport',['reports'=>$report]);
    }
}
