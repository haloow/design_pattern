<?php
/**
 * Created by PhpStorm.
 * User: zhoule
 * Date: 2019/9/25 0025
 * Time: 15:10
 */

namespace app\design\kernel\State;


class ForenoonState extends State
{
    public function writeProgram(Work $w)
    {
        if ($w->getHour() < 12){
            return "当前时间:".$w->getHour()."点, 上午工作，精神百倍";
        }else{
            $w->setCurrent(new NoonState());
            return $w->writeProgram();
        }
    }
}