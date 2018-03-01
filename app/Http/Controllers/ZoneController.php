<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zone;
use App\User;
use App\Notifications\ZoneNotification;
use Notification;
class ZoneController extends Controller
{
    public function submitZone(Request $request){
    	$this->validate($request,[
    		'region-name'=>'required|max:20|min:3|Alpha',
    		'region-number'=>'required|Numeric',
    		'district-name'=>'required|max:20|min:3|Alpha',
    		'district-number'=>'required|Numeric',
    		'block-number'=>'required|Numeric',
    		'round-number'=>'required|Numeric',
    		'plot-number'=>'required|Numeric',
    	]);

    	$zone = new Zone;
    	$region = $request['region-number'];
    	$district = $request['district-number'];
    	$block = $request['block-number'];
    	$round = $request['round-number'];
    	$plot = $request['plot-number'];
    	$zone_plot = $region.'-'.$district.'-'.$block.'-'.$round.'-'.$plot;
    	//
    	$zone->region_name = $request['region-name'];
    	$zone->region_number = $region;
    	$zone->district_name = $request['district-name']; //
    	$zone->district_number = $district;
    	$zone->block_number =  $block;
    	$zone->round_number =  $round;
    	$zone->plot_number = $plot;
    	$zone->plot = $zone_plot;

    	$zone->save();

        $users = User::where('role_id', 1)->get();
        Notification::send($users , new ZoneNotification);
    	return redirect('/user');


    }
}
