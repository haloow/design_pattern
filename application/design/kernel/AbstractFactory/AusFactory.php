<?php
/**
 * Created by PhpStorm.
 * User: zhoule
 * Date: 2019/9/24 0024
 * Time: 17:34
 */

namespace app\design\kernel\AbstractFactory;


class AusFactory extends AbstractFactory
{
    public function makeMouse(): Mouse
    {
        return new AusMouse();
    }

    public function makeKeyBoard(): KeyBoard
    {
        return new AusKeyBoard();
    }

    public function makeMic() : Mic
    {
        return new AusMic();
    }
}