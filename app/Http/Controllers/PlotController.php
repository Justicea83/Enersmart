<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlotController extends Controller
{
        public function sendNotification(Request $request){
        $id = $_GET['work'];
        dd($id);
     // return view('vendor.voyager.test',['id'=>$id]);
    }
}
