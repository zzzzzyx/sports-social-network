<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ExerciseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index (){
        //$user = Auth::user();
        $exerciseHour = 16;
        $continuousExer = 25;
        $overallExer = 31;
        $kilometers = 273.4;
        $grade = '「小试牛刀」';
//        return view('index',compact('exerciseHour','continuousExer','overallExer','kilometers','grade'));
        return view('exercise');
    }
}
