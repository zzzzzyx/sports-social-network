<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    protected $fillable = array('user_id', 'exercise_hour', 'continuous_exercise_day', 'overall_exercise_day', 'calories', 'grade');

    protected $gradeToString = array('管理员','初出茅庐', '大有所为', '一代宗师');
    protected $gradeHourTable = array(20,150);
    protected $abstractStatistic;

    protected function renewStatistic(){
        if($this->grade == 0){
            $this->abstractStatistic = new StatisticAdmin($this);
        }
        else{
            $this->abstractStatistic = new StatisticCommon($this);
        }
    }

    public function getLapNum(){
        $this->renewStatistic();
        return $this->abstractStatistic->getLapNum();
    }

    public function getGrade(){
        $this->renewStatistic();
        return $this->abstractStatistic->getGrade();
    }

    public static function getInstance($user){
        return Statistic::where('user_id','=',$user->id)->first();
    }
    public static function renew($exercise,$user){
        $statistic = Statistic::getInstance($user);
        $statistic->exercise_minute += $exercise->exerciseTime;
        $statistic->calories += $exercise->calories;
        if($statistic->grade != 0) {
            if ($statistic->exercise_minute > 60 * 150) {
                $statistic->grade = 3;
            }elseif ( $statistic->exercise_minute > 60 * 20 ){
                $statistic->grade = 2;
            }else{
                $statistic->grade = 1;
            }
        }
    }
}
