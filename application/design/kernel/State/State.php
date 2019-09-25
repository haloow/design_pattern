<?php
/**
 * Created by PhpStorm.
 * User: zhoule
 * Date: 2019/9/25 0025
 * Time: 15:08
 */
namespace app\design\kernel\State;

abstract class State
{
    abstract public function writeProgram(Work $w);
}