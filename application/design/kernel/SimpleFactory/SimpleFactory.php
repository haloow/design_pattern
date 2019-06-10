<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/10 0010
 * Time: 23:14
 */
namespace app\design\kernel\SimpleFactory;

use think\Exception;

class SimpleFactory
{
    public static function createOperation($operator)
    {
        switch ($operator){
            case '+': return new OperationAdd();
            case '-': return new OperationSub();
            case '*': return new OperationMul();
            case '/': return new OperationDiv();
            default: throw new Exception('not valid operator:'.$operator);
        }
    }
}