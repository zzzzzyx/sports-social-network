<?php

namespace App\Http\Controllers;

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
        $activityList = Activity::all();
        $pos = $id*3;
        switch(count($activityList) - $pos){
            default:
            case 3:$activityTrioList[2] = $activityList[$pos + 2];
            case 2:$activityTrioList[1] = $activityList[$pos + 1];
            case 1:$activityTrioList[0] = $activityList[$pos + 0];
        }
        $listNum = ceil(count($activityList)/3);
        return view('activity',compact('activityTrioList','pos','listNum'));
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
        return view('success');
    }

    public function get (Request $request,$id){
        $activity = Activity::where('id', '=', $id)->get()[0];
        $launcherName = User::where('id', '=', $activity->users_id)->get()[0]->name;

        $pId = explode("-",$activity->participants);
        $pCount = 0;
        foreach ($pId as $one){
            $pName[$pCount] = User::where('id', '=', $one)->get()[0]->name;
            $pPic[$pCount] = User::where('id', '=', $one)->get()[0]->image;
            $pCount++;
        }
        $user = Auth::user();
        $presentUserId = $user->id;

        return view('singleActivity',compact('activity','launcherName','pId','pName','pCount','presentUserId'));
    }
    public function attend (Request $request,$id){
        $activity = Activity::where('id', '=', $id)->get()[0];
        $user = Auth::user();
        $activity->participants = $activity->participants."-".$user->id;
        $activity->hasAttended += 1;
        $activity->save();
        return view('success');
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
        return view('success');
    }
    public function delete (Request $request,$id){
        $activity = Activity::where('id', '=', $id)->get()[0];
        $activity->delete();
        return view('success');
    }
}
