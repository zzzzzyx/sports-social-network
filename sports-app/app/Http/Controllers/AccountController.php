<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Redirect;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index (){
        $user = Auth::user();
        $name = $user->name;
        $phone = $user->phone;
        $qq = $user->qq;
        $signature = $user->signature;
//        return view('index',compact('exerciseHour','continuousExer','overallExer','kilometers','grade'));
        return view('account',compact('name','phone','qq','signature'));
    }
    public function editAccount (Request $request){
        $user = Auth::user();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->qq = $request->qq;
        $user->signature = $request->signature;
        $user->save();
        $returnUrl = $request->input('returnUrl');
        return view('success',compact('returnUrl'));
    }
}
