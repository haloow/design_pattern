<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/10 0010
 * Time: 23:26
 */

namespace app\design\kernel\SimpleFactory;


class OperationDiv extends BaseOperation
{
    public  function getResult()
    {
        return $this->numA / $this->numB;
    }
}