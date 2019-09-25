<?php
/**
 * Created by PhpStorm.
 * User: zhoule
 * Date: 2019/9/25 0025
 * Time: 15:11
 */

namespace app\design\kernel\State;


class AfternoonState extends State
{
    public function writeProgram(Work $w)
    {
        if ($w->getHour() < 17){
            return "当前时间:".$w->getHour()."点，下午状态不错，继续努力";
        }else{
            $w->setCurrent(new EveningState());
            return $w->writeProgram();
        }
    }
}