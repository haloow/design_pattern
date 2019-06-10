<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/10 0010
 * Time: 23:17
 */

namespace app\design\kernel\SimpleFactory;


abstract class BaseOperation
{
    private $numA;
    private $numB;

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public abstract function getResult();
}