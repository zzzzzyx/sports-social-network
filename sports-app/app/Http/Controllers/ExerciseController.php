<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exercise;
use App\User;
use App\Statistic;
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
        $exerciseList = Exercise::where('id','>',0)->get()->sortByDesc('startTime');
        $pos = $id*4;
        foreach ($exerciseList as $exercise){
            $blur = new BlurExercise($exercise,Auth::user());
            $blurList[] = $blur;
        }
        switch(count($blurList) - $pos){
            default:
            case 4:$blurQuartetList[3] = $blurList[$pos + 3];
            case 3:$blurQuartetList[2] = $blurList[$pos + 2];
            case 2:$blurQuartetList[1] = $blurList[$pos + 1];
            case 1:$blurQuartetList[0] = $blurList[$pos + 0];
        }
        $statistic = Statistic::getInstance(Auth::user());
        $userGrade = $statistic->grade;
        array_reverse($blurQuartetList);
        $numPerPage = 4;
        $listNum = ceil(count($blurList)/$numPerPage);
        return view('exercise',compact('blurQuartetList','pos','numPerPage','listNum','userGrade'));
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
        Statistic::renew($exercise,Auth::user());

        $returnUrl = $request->input('returnUrl');
        return view('success',compact('returnUrl'));
    }
//    public function addPost_api (Request $request){
//        $exercise = new Exercise;
//        $exercise->title = $request->title;
//        $exercise->startTime = $request->startTime;
//        $exercise->exerciseTime = $request->exerciseTime;
//        $exercise->spot = $request->spot;
//        $exercise->label  = substr($request->label,1);
//        $exercise->description  = $request->description;
//        $exercise->calories  = $request->calories;
//        $exercise->user_id  = $request->id ;
//        $exercise->save();
//        Statistic::renew($exercise,Auth::user());
//
//        $returnUrl = $request->input('returnUrl');
//        return view('success',compact('returnUrl'));
//    }

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
        $exercise->addLiker(Auth::user());
        $exercise->save();
        return redirect($request->input('returnUrl'));
    }
    public function delete (Request $request,$id){
        $exercise = Exercise::where('id', '=', $id)->get()[0];
        $exercise->delete();

        $returnUrl = $request->input('returnUrl');
        return view('success',compact('returnUrl'));
    }

}


