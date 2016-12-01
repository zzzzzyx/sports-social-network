<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friendship extends Model
{
    public static function getFriends($userId){
        $left = Friendship::where('user_id_low', '=', $userId)->get();
        $right = Friendship::where('user_id_high', '=', $userId)->get();

        foreach($left as $low){
            $result[] = $low->user_id_high;
        }

        foreach($right as $low){
            $result[] = $low->user_id_low;
        }

        return $result;
    }

    public static function findFriendShipId($user_id_1, $user_id_2){
        $small = $user_id_1;
        $big = $user_id_2;
        if($user_id_2 < $user_id_1){
            $small = $user_id_2;
            $big = $user_id_1;
        }
        $friendship = Friendship::where(['user_id_low'=>$small,'user_id_high'=>$big])->first();
        if($friendship == null){
            return null;
        }
        else
            return $friendship->id;
    }
}
