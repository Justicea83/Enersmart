<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlotController extends Controller
{
    public function sendNotification(){
    	if(isset($_GET['sendId'])){
        $id = $_GET['sendId'];
        dd($id);
      }

    }
}
