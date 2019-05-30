<?php
/**
 * Created by PhpStorm.
 * User: zof
 * Date: 2019/5/22
 * Time: 9:46
 */

namespace app\design\kernel\Proxys;


class Girl
{
    private $name = "";
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function Name()
    {
        return $this->name;
    }
}