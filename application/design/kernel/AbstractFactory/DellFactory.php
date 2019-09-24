<?php
/**
 * Created by PhpStorm.
 * User: zhoule
 * Date: 2019/9/24 0024
 * Time: 17:03
 */

namespace app\design\kernel\AbstractFactory;


class DellFactory extends AbstractFactory
{
    public function makeMouse() : Mouse
    {
        return new DellMouse();
    }

    public function makeKeyBoard() : KeyBoard
    {
        return new DellKeyBoard();
    }

    public function makeMic(): Mic
    {
        return new DellMic();
    }
}