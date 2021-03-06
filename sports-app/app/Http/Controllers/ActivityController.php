<?php

namespace App\Http\Controllers;

use App\BlurUser;
use App\Statistic;
use Illuminate\Http\Request;
use App\Activity;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class ActivityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index (Request $request,$id){
        $statistic = Statistic::getInstance(Auth::user());
        $userGrade = $statistic->grade;
        $activityList = Activity::orderBy('created_at', 'desc')->get();
        foreach ($activityList as $activity){
            if(!$activity->isEnded())
                $newAcList[] = $activity;
        }
        $pos = $id*3;
        switch(count($newAcList) - $pos){
            default:
            case 3:$activityTrioList[2] = $newAcList[$pos + 2];
            case 2:$activityTrioList[1] = $newAcList[$pos + 1];
            case 1:$activityTrioList[0] = $newAcList[$pos + 0];
        }
        $numPerPage = 3;
        $listNum = ceil(count($newAcList)/$numPerPage);
        return view('activity',compact('activityTrioList','pos','numPerPage','listNum','userGrade'));
    }
    public function addActivity (){
        return view('activityAdd');
    }

    public function addActivityPost (Request $request){
        $user = new Activity;
        $user->title = $request->title;
        $user->startTime = $request->startTime;
        $user->endTime = $request->endTime;
        $user->hasAttended = 1;
        $user->watchTime = 0;
        $user->maxAttend = $request->maxAttend;
        $user->description  = $request->description;
        $user->status  = "unstarted" ;
        $user->users_id  = Auth::user()->id ;
        $user->participants = Auth::user()->id;
        $user->save();
        $returnUrl = $request->input('returnUrl');
        return view('success',compact('returnUrl'));
    }

    public function get (Request $request,$id){
        $activity = Activity::where('id', '=', $id)->get()[0];
        $launcherName = User::where('id', '=', $activity->users_id)->get()[0]->name;

        $idList = explode("-",$activity->participants);
        $blurUserList = User::getBlurList($idList);
        $presentUserId = Auth::user()->id;
        $isParticipant = in_array($presentUserId,$idList);

        $userGrade = Statistic::getInstance(Auth::user())->grade;
        return view('singleActivity',compact('activity','launcherName','blurUserList','presentUserId','isParticipant','userGrade'));
    }
    public function attend (Request $request,$id){
        $activity = Activity::where('id', '=', $id)->get()[0];
        $user = Auth::user();
        $activity->participants = $activity->participants."-".$user->id;
        $activity->hasAttended += 1;
        $activity->save();
        $returnUrl = $request->input('returnUrl');
        return view('success',compact('returnUrl'));
    }

    public function leave (Request $request,$id){
        $activity = Activity::where('id', '=', $id)->get()[0];
        $user = Auth::user();
        $pId = explode("-",$activity->participants);
        $pos = array_search($user->id,$pId);
        array_splice($pId,$pos,1);
        $activity->participants = implode("-",$pId);
        $activity->hasAttended -= 1;
        $activity->save();
        $returnUrl = $request->input('returnUrl');
        return view('success',compact('returnUrl'));
    }
    public function delete (Request $request,$id){
        $activity = Activity::where('id', '=', $id)->get()[0];
        $activity->delete();
        $returnUrl = $request->input('returnUrl');
        return view('success',compact('returnUrl'));
    }
}
