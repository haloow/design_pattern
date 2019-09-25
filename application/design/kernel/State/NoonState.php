<?php
/**
 * Created by PhpStorm.
 * User: zhoule
 * Date: 2019/9/25 0025
 * Time: 15:10
 */

namespace app\design\kernel\State;


class NoonState extends State
{
    public function writeProgram(Work $w)
    {
        if ($w->getHour() < 13){
            return "当前时间:".$w->getHour()."点 饿了，午饭；犯困，午休";
        }else{
            $w->setCurrent(new AfternoonState());
            return $w->writeProgram();
        }
    }
}