<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use TCG\Voyager\Facades\Voyager;
use Auth;
use App\Zone;
use App\Region;
use App\District;
use Session;
class GeneralController extends Controller
{
    public function login(){

    	  return Voyager::view('voyager::login');
    }

    public function zones(){
       if(isset($_Session['id'])){
        $id = $_Session['id'];
       }else{
        $id = 1;
       }
        $regions = Region::all();
        $districts = District::where('region_id',$id)->get();
    	return view('vendor.voyager.zones',['regions'=>$regions,'districts'=>$districts]);
    }
    public function live(){
        if(isset($_GET['id'])){
        $id = $_GET['id'];
       }else{
        $id = 1;
       }
       $districts = District::where('region_id',$id)->get();
       echo $districts;
       
    }

    public function notifications(){
    	
    	return view('vendor.voyager.notifications');
    }
    public function survey(){
        $zones = Zone::all();

        return view('vendor.voyager.survey',['zones'=>$zones]);
    }

    public function zoneDetails($id){
        $details = Zone::where('id',$id)->first();
        return view('vendor.voyager.zonedetails',['details'=>$details]);
    }
}
