<?php

namespace App;

use App\Statistic;

abstract class StatisticAbstract
{
    protected $calories;
    protected $grade;
    function __construct($statistic)
    {
        $this->calories = $statistic->calories;
        $this->grade = $statistic->grade;
    }

    abstract public function  getLapNum();

    abstract public function getGrade();

}