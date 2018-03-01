<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use TCG\Voyager\Facades\Voyager;
use Auth;
use App\Zone;
class GeneralController extends Controller
{
    public function login(){

    	  return Voyager::view('voyager::login');
    }

    public function zones(){
        
    	return view('vendor.voyager.zones');
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
