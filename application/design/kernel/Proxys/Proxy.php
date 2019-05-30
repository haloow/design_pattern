<?php
/**
 * Created by PhpStorm.
 * User: zof
 * Date: 2019/5/22
 * Time: 10:01
 */

namespace app\design\kernel\Proxys;


class Proxy implements IPursuer
{
    private $boy;

    public function __construct(Boy $boy)
    {
        $this->boy = $boy;
    }

    public function giveMoney()
    {
        $this->boy->giveMoney();
    }

    public function giveFlowers()
    {
        $this->boy->giveFlowers();
    }

    public function giveDolls()
    {
        $this->boy->giveDolls();
    }
}