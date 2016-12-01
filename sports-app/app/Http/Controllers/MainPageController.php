<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Statistic;
use App\Exercise;
use App\Http\Requests;

class MainPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index (){
        $user = Auth::user();
        $exerciseList = Exercise::where('user_id','=',$user->id)->get()->sortBy('startTime');
        $statistic = Statistic::where('user_id','=',$user->id)->first();
        return view('index',compact('statistic','exerciseList'));
    }
}
