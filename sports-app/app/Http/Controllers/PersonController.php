<?php

namespace App\Http\Controllers;

use App\Statistic;
use Illuminate\Http\Request;
use App\User;
use App\Exercise;
use App\Friendship;
use App\BlurExercise;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class PersonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index (){
        return redirect('/person/'.Auth::user()->id.'/0');
    }

    public function get(Request $request,$id,$page){
        $statistic = Statistic::where('user_id','=',$id)->first();
        $personId = $id;
        $name = User::getName($id);
        $signature = User::where('id','=',$id)->get()->first()->signature;
        $exerciseList = Exercise::where('user_id','=',$id)->get()->sortByDesc('startTime');
        $friendship_id = Friendship::findFriendShipId($id, Auth::user()->id);
        if($id == Auth::user()->id){
            $friendship_id = -9000;
        }
        if(count($exerciseList)>0){
            $pos = $page * 4;
            foreach ($exerciseList as $exercise) {
                $blur = new BlurExercise($exercise);
                $blurList[] = $blur;
            }
            switch (count($blurList) - $pos) {
                default:
                case 4:
                    $blurQuartetList[3] = $blurList[$pos + 3];
                case 3:
                    $blurQuartetList[2] = $blurList[$pos + 2];
                case 2:
                    $blurQuartetList[1] = $blurList[$pos + 1];
                case 1:
                    $blurQuartetList[0] = $blurList[$pos + 0];
            }
            array_reverse($blurQuartetList);
            $numPerPage = 4;
            $listNum = ceil(count($blurList) / $numPerPage);
            $noExercise = false;
        }else{
            $noExercise = true;
        }
        return view('person', compact('statistic','blurQuartetList', 'pos','noExercise', 'numPerPage', 'listNum'
            ,'signature' ,'name', 'personId','friendship_id'));
    }
    public function delete(Request $request,$id,$page){
        $friendship_id = Friendship::findFriendShipId($id, Auth::user()->id);
        Friendship::destroy($friendship_id);
        return redirect('/person/'.$id.'/'.$page);
    }
    public function add(Request $request,$id,$page){
        $user_id = Auth::user()->id;
        $friendship = new Friendship();
        if($id < $user_id){
            $friendship->user_id_low = $id;
            $friendship->user_id_high = $user_id;
        }else{
            $friendship->user_id_low = $user_id;
            $friendship->user_id_high = $id;
        }
        $friendship->save();
        return redirect('/person/'.$id.'/'.$page);
    }
}
