<?php
/**
 * Created by PhpStorm.
 * User: zof
 * Date: 2019/5/28
 * Time: 15:32
 */

namespace app\design\kernel\Factory;


class ProductB extends Product
{
    public function getVersion()
    {
        echo "I'm ProductB<br/>";
    }
}