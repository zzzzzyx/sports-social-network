<?php

namespace App;

use App\StatisticAbstract;

class StatisticCommon extends StatisticAbstract
{
    protected $gradeToString = array('初出茅庐', '大有所为', '一代宗师');
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