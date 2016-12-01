<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Exercise extends Model
{
    public function getLikerNum(){
        $liker = $this->liker;
        if($liker == ""){
            return 0;
        }
        $list = explode('-',$liker);
        return count($list);
    }

}
class BlurExercise{
    public $day;
    public $month;
    public $title;
    public $author;
    public $likerNum;
    public $description;
    public $id;
    public $user_id;
    public $editable;

    public function __construct($exercise){
        $this->title = $exercise->title;
        $this->description = $exercise->description;
        $this->id = $exercise->id;
        $this->day = date("d",strtotime($exercise->startTime));
        $this->author = User::getName($exercise->user_id);
        $this->likerNum = $exercise->getLikerNum();
        $this->month = date("M",strtotime($exercise->startTime));
        $this->user_id = $exercise->user_id;
        if($exercise->user_id == Auth::user()->id){
            $this->editable = true;
        }else{
            $this->editable = false;
        }
    }
}
