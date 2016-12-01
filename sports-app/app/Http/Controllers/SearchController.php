<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class SearchController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function search (Request $request){

        $user = User::where('name','=',$request->context)->get()->first();
        if($user != null){
            return redirect('/person/'.$user->id.'/0');
        }
        else{
            return view('searchFailure');
        }
    }
}
