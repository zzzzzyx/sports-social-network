<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    protected $fillable = array('user_id', 'exercise_hour', 'continuous_exercise_day', 'overall_exercise_day', 'calories', 'grade');

    public function getLapNum(){
        return ceil($this->calories/303*10)/10;
    }
}
