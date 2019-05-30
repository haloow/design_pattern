<?php
/**
 * Created by PhpStorm.
 * User: zof
 * Date: 2019/5/22
 * Time: 9:45
 */

namespace app\design\kernel\Proxys;


use think\Exception;

class Boy implements IPursuer
{
    private $girl;

    public function setGirl(Girl $girl)
    {
        $this->girl = $girl;
    }

    public function giveDolls()
    {
        $this->checkGirl();
        printf($this->girl->Name() . " give you dolls<br/>");
    }

    public function giveFlowers()
    {
        $this->checkGirl();
        printf($this->girl->Name() . " give you flowers<br/>");
    }

    public function giveMoney()
    {
        $this->checkGirl();
        printf($this->girl->Name() . " give you money<br/>");
    }

    private function checkGirl()
    {
        if (!$this->girl) {
            throw new Exception("where is the girl?");
        }
    }
}