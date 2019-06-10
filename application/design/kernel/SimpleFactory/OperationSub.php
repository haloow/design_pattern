<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/10 0010
 * Time: 23:23
 */

namespace app\design\kernel\SimpleFactory;


class OperationSub extends BaseOperation
{
    public  function getResult()
    {
        return $this->numA - $this->numB;
    }
}