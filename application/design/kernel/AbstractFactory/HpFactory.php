<?php
/**
 * Created by PhpStorm.
 * User: zhoule
 * Date: 2019/9/24 0024
 * Time: 17:03
 */

namespace app\design\kernel\AbstractFactory;


class HpFactory extends AbstractFactory
{
    public function makeMouse() : Mouse
    {
        return new HpMouse();
    }

    public function makeKeyBoard() : KeyBoard
    {
        return new HpKeyBoard();
    }

    public function makeMic() : Mic
    {
        return new HpMic();
    }
}