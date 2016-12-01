<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exercise;
use App\User;
use App\BlurExercise;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class ExerciseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index (Request $request,$id){
        $exerciseList = Exercise::all()->sortByDesc('startTime');
        $pos = $id*4;
        foreach ($exerciseList as $exercise){
            $blur = new BlurExercise($exercise);
            $blurList[] = $blur;
        }
        switch(count($blurList) - $pos){
            default:
            case 4:$blurQuartetList[3] = $blurList[$pos + 3];
            case 3:$blurQuartetList[2] = $blurList[$pos + 2];
            case 2:$blurQuartetList[1] = $blurList[$pos + 1];
            case 1:$blurQuartetList[0] = $blurList[$pos + 0];
        }
        array_reverse($blurQuartetList);
        $numPerPage = 4;
        $listNum = ceil(count($blurList)/$numPerPage);
        return view('exercise',compact('blurQuartetList','pos','numPerPage','listNum'));
    }
    public function add (){
        return view('exerciseAdd');
    }

    public function addPost (Request $request){
        $exercise = new Exercise;
        $exercise->title = $request->title;
        $exercise->startTime = $request->startTime;
        $exercise->exerciseTime = $request->exerciseTime;
        $exercise->spot = $request->spot;
        $exercise->label  = substr($request->label,1);
        $exercise->description  = $request->description;
        $exercise->calories  = $request->calories;
        $exercise->user_id  = Auth::user()->id ;
        $exercise->save();
        return view('success');
    }

    public function getSingle(Request $request,$id){
        $exercise = Exercise::where('id', '=', $id)->first();
        $launcherId = $exercise->user_id;
        $launcherName = User::getName($exercise->user_id);

        if($exercise->liker != ""){
            $likerList = explode("-",$exercise->liker);
            $blurUserList = User::getBlurList($likerList);
        }else{
            $blurUserList = null;
        }

        return view('singleExercise',compact('exercise','launcherName','launcherId','blurUserList'));
    }

    public function like (Request $request,$id){
        $exercise = Exercise::where('id', '=', $id)->first();
        $user = Auth::user();
        $likerList = explode("-",$exercise->liker);
        if($exercise->liker == ""){
            $exercise->liker = $user->id;
        }else{
            if(!in_array($user->id,$likerList)){//not exist
                $likerList[] = $user->id;
            }else{// exist
                $pos = array_search($user->id,$likerList);
                unset($likerList[$pos]);
            }
            $exercise->liker = implode("-",$likerList);
        }
        $exercise->save();
        return redirect('/exercise/single/'.$id);
    }
    public function delete (Request $request,$id){
        $exercise = Exercise::where('id', '=', $id)->get()[0];
        $exercise->delete();
        return view('success');
    }

}


