<?php
/**
 * Created by PhpStorm.
 * User: zhoule
 * Date: 2019/9/25 0025
 * Time: 15:12
 */

namespace app\design\kernel\State;


class SleepingState extends State
{
    public function writeProgram(Work $w)
    {
        return $w->getHour()."点了，睡着了";
    }
}