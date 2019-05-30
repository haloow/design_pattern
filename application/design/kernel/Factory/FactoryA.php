<?php
/**
 * Created by PhpStorm.
 * User: zof
 * Date: 2019/5/28
 * Time: 15:33
 */

namespace app\design\kernel\Factory;

class FactoryA implements IFactory
{
    public function createFactory()
    {
        return new ProductA();
    }
}