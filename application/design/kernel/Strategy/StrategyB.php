<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/10 0010
 * Time: 23:48
 */

namespace app\design\kernel\Strategy;


class StrategyB extends BaseStrategy
{
    public  function algorithm()
    {
        return __CLASS__.':'.__METHOD__;
    }
}