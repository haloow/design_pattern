<?php
/**
 * Created by PhpStorm.
 * User: zof
 * Date: 2019/5/28
 * Time: 15:34
 */

namespace Factory;


class FactoryB implements IFactory
{
    public function createFactory()
    {
        return new ProductB();
    }
}