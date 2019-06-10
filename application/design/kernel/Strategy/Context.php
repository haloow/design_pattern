<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/10 0010
 * Time: 23:55
 */

namespace app\design\kernel\Strategy;


use think\Exception;

class Context
{
    private $strategy;

    public function __construct($type)
    {
        switch ($type) {
            case 'A': $this->strategy = new StrategyA(); break;
            case 'B': $this->strategy = new StrategyB(); break;
            case 'C': $this->strategy = new StrategyC(); break;
            default: throw new Exception('not valid type');
        }
    }

    public function execStrategy()
    {
        return $this->strategy->algorithm();
    }
}