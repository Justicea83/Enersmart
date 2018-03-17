<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use TCG\Voyager\Facades\Voyager;
use Auth;
use App\Zone;
use App\Region;
use App\District;
use App\Block;
use Session;
use App\Round;
use App\Plot;
use App\Role;
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
    public function region(){
      if(isset($_GET['blockId'])){
        $id = $_GET['blockId'];
      }else{
        $id = 6;
      }
      $blocks = Block::where('district_id',$id)->get();
      echo $blocks;
    }

    public function round(){
      if(isset($_GET['roundId'])){
        $id = $_GET['roundId'];
      }else{
        $id = 3;
      }
      $round = Round::where('block_id',$id)->get();
      echo $round;
    }
    public function plot(){
      if(isset($_GET['plot'])){
        $id = $_GET['plot'];
      }else{
        $id = 'nothing';
      }
      
      return [$id];
    }

    public function notifications(){
    	
    	return view('vendor.voyager.notifications');
    }
    //return districts
    public function survey(){
        $zones = District::all();

        return view('vendor.voyager.survey',['zones'=>$zones]);
    }
    
    //return rounds
    public function zoneBlockDetails($id){
        $details = Block::where('district_id',$id)->get();
        return view('vendor.voyager.zonedetails',['details'=>$details]);
    }
    //return rounds
    public function zoneRoundDetails($id){
      $details = Round::where('block_id',$id)->get();
       return view('vendor.voyager.rounds',['details'=>$details]);
    }
    //return plots
    public function zonePlotDetails($id){
      $details = Plot::where('round_id',$id)->get();
      return view('vendor.voyager.plots',['details'=>$details]);
    }
    public function zonePlotDetailsOfPlot($id){
      $details = Plot::where('id',$id)->first();
      //populating table
      $round = Plot::find($id);

      $roundId = $round->round->id;
      $block = Round::find($roundId);

      $blockId = $block->block->id;
      $district = Block::find($blockId);

      $districtId = $district->district->id;
      $region = District::find($districtId);

      //returning sub supervisor
      $subSupervisor = User::where('role_id',6)->get();
      $subId = Role::where('id',6)->first();
      return view('vendor.voyager.plotdetails',['details'=>$details,'round'=>$round,'block'=>$block,'district'=>$district,'region'=>$region,'subs'=>$subSupervisor,'subId'=>$subId]);
    }


}
