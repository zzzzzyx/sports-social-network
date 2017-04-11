<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function isEnded(){
        $datetime1 = date_create(date("Y-m-d"));
        $datetime2 = date_create(substr($this->endTime,0,10));
        $interval = date_diff($datetime1, $datetime2);
        if($interval->invert == 0){return false;}
        else{return true;}
    }
}
