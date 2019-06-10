<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/10 0010
 * Time: 23:22
 */

namespace app\design\kernel\SimpleFactory;


class OperationAdd extends BaseOperation
{
    public function getResult()
    {
        return $this->numA + $this->numB;
    }
}