<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainPageController extends Controller
{
    //
    public function index (){
        $exerciseHour = 49.2;
        $continuousExer = 25;
        $overallExer = 31;
        $kilometers = 273.4;
        $grade = '「小试牛刀」';
        return view('index',compact('exerciseHour','continuousExer','overallExer','kilometers','grade'));
    }
}
