<?php
/**
 * Created by PhpStorm.
 * User: zhoule
 * Date: 2019/9/25 0025
 * Time: 15:11
 */

namespace app\design\kernel\State;


class EveningState extends State
{
    public function writeProgram(Work $w)
    {
        if ($w->isFinish()){
            $w->setCurrent(new RestState());
            $w->writeProgram();
        }else{
            if ($w->getHour() < 21){
                return "加班，疲累的很,".$w->getHour()."点了";
            }else{
                $w->setCurrent(new SleepingState());
                return $w->writeProgram();
            }
        }
    }
}