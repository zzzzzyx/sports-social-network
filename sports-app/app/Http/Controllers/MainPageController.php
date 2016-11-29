<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class MainPageController extends Controller
{
    //
    public function index (){
        $user = Auth::user();
        $exerciseHour = $user->name;
        $continuousExer = 25;
        $overallExer = 31;
        $kilometers = 273.4;
        $grade = '「小试牛刀」';
        return view('index',compact('exerciseHour','continuousExer','overallExer','kilometers','grade'));

    }
}
