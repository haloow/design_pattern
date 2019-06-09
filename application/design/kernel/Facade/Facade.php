<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/10 0010
 * Time: 0:17
 */
namespace app\design\kernel\Facade;

class Facade
{
    private $one;
    private $two;

    public function __construct()
    {
        $this->one = new SystemOne();
        $this->two = new SystemTwo();
    }

    public function methodOne()
    {
        $this->one->method();
        $this->two->method();
    }
}