<?php
/**
 * Created by PhpStorm.
 * User: zof
 * Date: 2019/5/28
 * Time: 15:30
 */

namespace app\design\kernel\Factory;


class ProductA extends Product
{
    public function getVersion()
    {
        echo "I'm ProductA<br/>";
    }
}