<?php

namespace App;

use App\StatisticAbstract;

class StatisticCommon extends StatisticAbstract
{
    protected $gradeToString = array('初出茅庐', '小有所成', '长驱深入','健身无涯');
    function __construct($attributes)
    {
        parent::__construct($attributes);
    }

    public function  getLapNum(){
        return ceil($this->calories/303*10)/10;
    }

    public function getGrade(){
        return $this->gradeToString[$this->grade - 1];
    }
}