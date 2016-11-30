<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User;
use App\Friendship;
use App\Dialog;

class FriendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index (){
        $user = Auth::user();
        $friendIdList = FriendShip::getFriends($user->id);
        return redirect('/friend/chatwith/'.$friendIdList[0]);
    }
    public function chatwith (Request $request,$id){
        $user = Auth::user();
        $friendIdList = FriendShip::getFriends($user->id);

        $pCount = 0;
        foreach ($friendIdList as $one){
            $pName[$pCount] = User::where('id', '=', $one)->get()[0]->name;
            $pPic[$pCount] = User::where('id', '=', $one)->get()[0]->image;
            $pCount++;
        }
        $chatFriendName = User::where('id', '=', $id)->get()[0]->name;

        $friendship_id = Friendship::findFriendShipId($id, $user->id);
        $dialogList = Dialog::where('friendship_id','=',$friendship_id)->get();

        return view('friend',compact('friendIdList','pName','pCount','chatFriendName','id','dialogList'));
    }
    public function postChat (Request $request,$id){
        $user = Auth::user();

        $friendship_id = Friendship::findFriendShipId($id, $user->id) ;
        $d = new Dialog;
        $d->chat_at = date("Y-m-d H:i:s",time());
        $d->sender_id = $user->id;
        $d->content = $request->context;
        $d->friendship_id = $friendship_id;
        $d->save();

        return redirect('/friend/chatwith/'.$id);
    }
}
