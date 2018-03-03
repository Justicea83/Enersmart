<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zone;
use App\User;
use App\Notifications\ZoneNotification;
use Notification;
use App\Plot;
use App\Round;
class ZoneController extends Controller
{
    public function submitZone(Request $request){
    	$this->validate($request,[
    		'region-name'=>'required',
    		'district-name'=>'required',
            'block-name'=>'required',
            'round-name'=>'required',
    		'plot-code'=>'required',
    	]);

    	$zone = new Plot;
    	$plot = $request['plot-code'];
        $name = $request['round-name'];
        $zone->name = $plot;
        $round_id = Round::where('name',$name)->first();
        $zone->round_id = $round_id->id;
    	$zone->save();

        $users = User::where('role_id', 1)->get();
        Notification::send($users , new ZoneNotification);
    	return redirect('/user');


    }
}
