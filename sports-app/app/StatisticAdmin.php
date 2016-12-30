<?php

namespace App;

use App\StatisticAbstract;

class StatisticAdmin extends StatisticAbstract
{
    function __construct($attributes)
    {
        parent::__construct($attributes);
    }

    public function  getLapNum(){
        return -1;
    }

    public function getGrade(){
        return '管理员';
    }
}