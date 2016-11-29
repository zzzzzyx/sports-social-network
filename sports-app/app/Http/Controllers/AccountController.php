<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
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
        $email = $user->email;
        $phone = $user->phone;
        $qq = $user->qq;
        $signature = $user->signature;
//        return view('index',compact('exerciseHour','continuousExer','overallExer','kilometers','grade'));
        return view('account',compact('name','email','phone','qq','signature'));
    }
    public function editAccount (Request $request){
        return view('success');
    }
}
