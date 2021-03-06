<?php
/**
 * Created by PhpStorm.
 * User: zhoule
 * Date: 2019/9/24 0024
 * Time: 17:02
 */

namespace app\design\kernel\AbstractFactory;


abstract class AbstractFactory
{
    abstract public function makeMouse():Mouse;
    abstract public function makeKeyBoard():KeyBoard;
    abstract public function makeMic():Mic;
}